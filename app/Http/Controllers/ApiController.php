<?php

namespace App\Http\Controllers;

use App\BniEnc;
use App\Models\data_user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public $client_id;
    public $secret_key;
    public $url;

    public function __construct()
    {
        $this->client_id = env('BNI_CLIENT_ID');
        $this->secret_key = env('BNI_SECRET_KEY');
        $this->url = env('BNI_URL_API');
    }

    public function create($idUjian, $auth)
    {
        $data_asli = [];
        $trx_ammount = 0;
        $description = '';

        switch ($idUjian) {
            case '1':
                $trx_ammount = 250000;
                $description = 'Pembayaran English Entrance Exam';
                break;
            case '2':
                $trx_ammount = 200000;
                $description = 'Pembayaran English Exit Exam';
                break;
            case '3':
                $trx_ammount = 300000;
                $description = 'Pembayaran TOEFL';
                break;
            default:
                session()->flash('error', 'Jenis ujian tidak valid.');
                return;
        }

        $registration_code = '';
        if ($auth === 'user') {
            $data_user = data_user::where('no_Peserta', Auth::guard('user')->user()->no_Peserta)->first();
            if (!$data_user) {
                session()->flash('error', 'Data user tidak ditemukan.');
                return;
            }

            $eightDigits = substr($data_user->va, -8);
            $registration_code = "UNAI" . $eightDigits;

            $data_asli = [
                'client_id' => $this->client_id,
                'trx_id' => $registration_code,
                'trx_amount' => $trx_ammount,
                'billing_type' => 'c',
                'datetime_expired' => date('c', time() + 1200 * 3600),
                'virtual_account' => $data_user->va,
                'customer_name' => $data_user->nama,
                'customer_email' => Auth::guard('user')->user()->email,
                'customer_phone' => $data_user->num_telp,
                'description' => $description,
                'type' => 'createBilling'
            ];
        } elseif ($auth === 'mhs') {
            $id_user = DB::connection('pmb')->table('registration_form')->where('nim', trim(session('atribut')->nim))->select('id_user')->first();
            if (!$id_user) {
                session()->flash('error', 'ID user tidak ditemukan.');
                return;
            }

            $data = DB::connection('pmb')->table('users')->where('id', $id_user->id_user)->first();
            if (!$data) {
                session()->flash('error', 'Data user tidak ditemukan.');
                return;
            }

            $data_asli = [
                'client_id' => $this->client_id,
                'trx_id' => $data->registration_code,
                'trx_amount' => $trx_ammount,
                'billing_type' => 'c',
                'datetime_expired' => date('c', time() + 1200 * 3600),
                'virtual_account' => $data->virtual_account,
                'customer_name' => $data->name,
                'customer_email' => $data->email,
                'customer_phone' => $data->phone_number,
                'description' => $description,
                'type' => 'createBilling'
            ];
        }

        if (empty($data_asli)) {
            session()->flash('error', 'Gagal membuat data asli.');
            return;
        }

        try {
            $response_json = $this->getResponse_json($data_asli, $this->client_id, $this->secret_key, $this->url);
            if ($response_json['status'] !== '000') {
                \Log::error('Error in create billing: ', $response_json);
            } else {
                $data_response = BniEnc::decrypt($response_json['data'], $this->client_id, $this->secret_key);
                $key = $data_response['trx_id'];
                $this->inquiry($key);
            }
        } catch (\Exception $e) {
            \Log::error('Exception in create billing: ' . $e->getMessage());
            session()->flash('error', 'Terjadi kesalahan saat memproses permintaan.');
        }
    }

    public function inquiry($trx_id)
    {
        $data_asli = array(
            'client_id' => $this->client_id,
            'trx_id' => $trx_id,
            'type' => 'inquirybilling'
        );

        $response_json = $this->getResponse_json($data_asli, $this->client_id, $this->secret_key, $this->url);

        if ($response_json['status'] !== '000') {
            \Log::error('Error in inquiry billing: ', $response_json);
        } else {
            $data_response = BniEnc::decrypt($response_json['data'], $this->client_id, $this->secret_key);
        }
    }

    public function getResponse_json(array $data_asli, string $client_id, string $secret_key, string $url)
    {
        $hashed_string = BniEnc::encrypt($data_asli, $client_id, $secret_key);
        $data = array(
            'client_id' => $client_id,
            'data' => $hashed_string,
        );

        return $this->get_content($url, json_encode($data));
    }

    public function get_content($url, $post = '')
    {
        $header = [
            'Content-Type: application/json',
            "Accept-Encoding: gzip, deflate",
            "Cache-Control: max-age=0",
            "Connection: keep-alive",
            "Accept-Language: en-US,en;q=0.8,id;q=0.6"
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_VERBOSE, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_ENCODING, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36");

        if ($post) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }

        $rs = curl_exec($ch);

        if (empty($rs)) {
            \Log::error('Curl error: ' . curl_error($ch));
            curl_close($ch);
            return false;
        }

        curl_close($ch);
        return json_decode($rs, true);
    }
}

<?php
namespace App\Http\Controllers;

use App\BniEnc;
use App\Models\data_user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    public $client_id;
    public $secret_key;
    public $url;

    public function create($idUjian, $auth)
    {
        $this->client_id = env('BNI_CLIENT_ID');
        $this->secret_key = env('BNI_SECRET_KEY');
        $this->url = env('BNI_URL_API');
        $data_asli = [];

        // Tentukan nilai transaksi berdasarkan jenis ujian
        switch ($idUjian) {
            case '1':
                $trx_ammount = 5000;
                $description = 'Pembayaran English Entrance Exam';
                break;
            case '2':
                $trx_ammount = 2000;
                $description = 'Pembayaran English Exit Exam';
                break;
            case '3':
                $trx_ammount = 3000;
                $description = 'Pembayaran TOEFL';
                break;
            default:
                return response()->json(['error' => 'Jenis ujian tidak valid.'], 400);
        }

        if ($auth === 'user') {
            $data_user = data_user::where('no_Peserta', Auth::guard('user')->user()->no_Peserta)->first();
            if (!$data_user) {
                return response()->json(['error' => 'Data user tidak ditemukan.'], 404);
            }
            $data_asli = [
                'type' => 'createbilling',
                'client_id' => $this->client_id,
                'trx_id' => mt_rand(),
                'datetime_expired' => date('c', time() + 3600),
                'trx_amount' => $trx_ammount,
                'billing_type' => 'c',
                'customer_name' => $data_user->nama,
                'customer_email' => Auth::guard('user')->user()->email,
                'customer_phone' => $data_user->num_telp,
                'virtual_account' => $data_user->va,
                'description' => $description
            ];
        } elseif ($auth === 'mhs') {
            $id_user = DB::connection('pmb')->table('registration_form')->where('nim', trim(session('atribut')->nim))->value('id_user');
            if (!$id_user) {
                return response()->json(['error' => 'ID user tidak ditemukan.'], 404);
            }

            $data = DB::connection('pmb')->table('users')->find($id_user);
            if (!$data) {
                return response()->json(['error' => 'Data user tidak ditemukan.'], 404);
            }
            $data_asli = [
                'type' => 'createbilling',
                'client_id' => $this->client_id,
                'trx_id' => mt_rand(),
                'datetime_expired' => date('c', time() + 3600),
                'trx_amount' => $trx_ammount,
                'billing_type' => 'c',
                'customer_name' => $data->name,
                'customer_email' => $data->email,
                'customer_phone' => $data->phone_number,
                'virtual_account' => $data->virtual_account,
                'description' => $description.'_test software',
            ];
        }

        try {
            $response_json = $this->getResponse_json($data_asli);
            if ($response_json['status'] != '000') {
                return $response_json['status'];
            } else {
                $data_response = BniEnc::decrypt($response_json['data'], $this->client_id, $this->secret_key);
                $this->inquiry($data_response['trx_id']);
                return $response_json['status'];
            }
        } catch (\Exception $e) {
            Log::error('Exception in create billing: ' . $e->getMessage());
            return response()->json(['error' => 'Terjadi kesalahan saat memproses permintaan.'], 500);
        }
    }

    public function inquiry($trx_id)
    {
        $data_asli = [
            'client_id' => $this->client_id,
            'trx_id' => $trx_id,
            'type' => 'inquirybilling'
        ];
        $response_json = $this->getResponse_json($data_asli);
        if ($response_json['status'] !== '000') {
            return $response_json['status'];
        } else {
            $data_response = BniEnc::decrypt($response_json['data'], $this->client_id, $this->secret_key);
            DB::connection('api')->table('bni_inquiry')->insert([
                'client_id' => $data_response['client_id'],
                'trx_id' => $data_response['trx_id'],
                'virtual_account' => $data_response['virtual_account'],
                'trx_amount' => $data_response['trx_amount'],
                'customer_name' => $data_response['customer_name'],
                'customer_phone' => $data_response['customer_phone'],
                'customer_email' => $data_response['customer_email'],
                'datetime_created' => $data_response['datetime_created'],
                'datetime_expired' => $data_response['datetime_expired'],
                'datetime_payment' => $data_response['datetime_payment'],
                'datetime_last_updated' => $data_response['datetime_last_updated'],
                'payment_ntb' => $data_response['payment_ntb'],
                'payment_amount' => $data_response['payment_amount'],
                'va_status' => $data_response['va_status'],
                'description' => $data_response['description'],
                'billing_type' => $data_response['billing_type'],
                'datetime_created_iso8601' => $data_response['datetime_created_iso8601'],
                'datetime_expired_iso8601' => $data_response['datetime_expired_iso8601'],
                'datetime_payment_iso8601' => $data_response['datetime_payment_iso8601'],
                'datetime_last_update_iso8601' => $data_response['datetime_last_updated_iso8601']
            ]);
            return $response_json['status'];
        }
    }

    public function getResponse_json(array $data_asli)
    {
        $hashed_string = BniEnc::encrypt($data_asli, $this->client_id, $this->secret_key);
        $data = ['client_id' => $this->client_id, 'data' => $hashed_string];

        $ch = curl_init($this->url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept-Encoding: gzip, deflate',
            ],
        ]);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            Log::error('cURL error: ' . curl_error($ch));
            curl_close($ch);
            return false;
        }

        curl_close($ch);
        dd(json_decode($response, true));
//        return json_decode($response, true);
    }
}

<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\data_user;
use App\Models\Moodle;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    /**
     * Mark the user's email address as verified.
     */
    public function verify($token): RedirectResponse
    {
        // Temukan pengguna berdasarkan token
        $user = User::where('email_verification_token', $token)->first();

        if ($user) {
            if ($user->hasVerifiedEmail()) {
                return redirect()->route('dashboard')->with('status', 'Email already verified.');
            }
            $user->markEmailAsVerified();
            $user->email_verification_token = null; // Hapus token setelah verifikasi
            $user->save();
            if($user->is_admin=='1'){
                $data = data_user::where('no_Peserta',$user->no_Peserta)->first();
                $namaArray = explode(" ", $data->nama);
                // Mengambil nama depan (elemen pertama array)
                $namaDepan = $namaArray[0];
                //update data_user dikolom va
                //tahun sekarang
                $tahun = date('Y');
                $unik =substr($user->no_Peserta, -4);
                $data->va = '98819490'.$tahun.'9'.$unik;
                $data->save();

                // Mengambil nama belakang (elemen terakhir array)
                $namaBelakang = $namaArray[count($namaArray) - 1];
                Moodle::create([
                    'confirmed'=>'1',
                    'mnethostid'=>'3',
                    'username'=>$user->no_Peserta,
                    'password'=>$user->pin,
                    'firstname'=>$namaDepan,
                    'lastname'=>$namaBelakang,
                    'email'=>$user->email,
                    'city'=>$data->city ? $data->city:"Jakarta",
                    'country' =>'ID'
                ]);
            }
            return redirect()->route('login')->with('message', 'Email verified successfully.');
        }
        return redirect()->route('login')->with('message', 'Invalid verification link.');
    }
}

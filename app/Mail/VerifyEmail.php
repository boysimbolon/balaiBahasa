<?php
namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $no_Peserta;
    public $password;
    public $token;

    public function __construct($no_Peserta, $password, $token)
    {
        $this->no_Peserta = $no_Peserta;
        $this->token = $token;
        $this->password = $password;
    }

    public function build()
    {
        return $this->markdown('emails.verify-email')
            ->with([
                'no_Peserta' => $this->no_Peserta,
                'password' => $this->password,
                'verificationUrl' => route('verification.verify', ['token' => $this->token]),
            ]);
    }

}

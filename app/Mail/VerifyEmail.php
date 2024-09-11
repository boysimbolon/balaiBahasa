<?php
namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('livewire.auth.verify-email') // Pastikan path view ini benar
        ->with([
            'user' => $this->user,
            'url' => route('verification.verify', [
                'id' => $this->user->id,
                'hash' => sha1($this->user->getEmailForVerification()), // Menggunakan hash dari email
            ]),
        ]);
    }
}

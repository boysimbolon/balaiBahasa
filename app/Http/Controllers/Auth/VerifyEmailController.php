<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
            return redirect()->route('dashboard')->with('message', 'Email verified successfully.');
        }
        return redirect()->route('login')->with('message', 'Invalid verification link.');
    }
}

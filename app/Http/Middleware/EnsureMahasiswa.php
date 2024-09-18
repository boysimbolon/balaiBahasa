<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureMahasiswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Menggunakan guard 'mahasiswa'
        if (Auth::guard('mahasiswa')) {
            return $next($request);
        }

        return redirect()->route('login')->with('message', 'Akses hanya untuk Mahasiswa.');
    }
}

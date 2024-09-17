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
        if (Auth::check() && Auth::user() instanceof \App\Models\Mahasiswa) {
            return $next($request);
        }

//        return redirect('/'); // Arahkan ke halaman lain jika bukan mahasiswa
    }
}

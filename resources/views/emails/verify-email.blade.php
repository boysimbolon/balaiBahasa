@component('mail::message')
    # Verifikasi Akun Anda

    Terima kasih telah mendaftar! Berikut adalah informasi akun Anda:

    - **No Peserta**: #{{ $no_Peserta }}
    - **Password**: #{{ $password }}

    Klik tombol di bawah ini untuk memverifikasi email Anda dan mengaktifkan akun.

    @component('mail::button', ['url' => $verificationUrl])
        Verifikasi Email
    @endcomponent
    Atau Klik link ini untuk aktivasi

    #{{$verificationUrl}}
    Terima kasih,
    {{ config('app.name') }}
@endcomponent

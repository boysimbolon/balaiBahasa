@component('mail::message')
    # Verifikasi Email

    Terima kasih telah mendaftar di **{{ config('app.name') }}**! Berikut adalah informasi akun Anda:

    @component('mail::panel')
        - **No Peserta**: {{ $no_Peserta }}
        - **Password**: {{ $password }}
    @endcomponent

    Silakan klik tombol di bawah ini untuk memverifikasi email Anda dan mengaktifkan akun Anda:

    @component('mail::button', ['url' => $verificationUrl])
        Verifikasi Email
    @endcomponent

    Atau Anda juga dapat mengklik tautan berikut untuk melakukan aktivasi:

    [{{ $verificationUrl }}]({{ $verificationUrl }})

    Terima kasih telah bergabung dengan kami!

    Salam hangat,
    **{{ config('app.name') }}**
@endcomponent

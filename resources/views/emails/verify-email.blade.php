@component('mail::message')
    <div style="text-align: center; font-family: Arial, sans-serif; color: #333;">
        <h1 style="color: #4CAF50;">Verifikasi Email</h1>
        <p>Terima kasih telah mendaftar di <strong>{{ config('app.name') }}</strong>! Berikut adalah informasi akun Anda:</p>

        <div style="background-color: #f9f9f9; padding: 20px; border-radius: 5px; margin: 20px 0;">
            <p><strong>No Peserta:</strong> {{ $no_Peserta }}</p>
            <p><strong>Password:</strong> {{ $password }}</p>
        </div>

        <p>Silakan klik tombol di bawah ini untuk memverifikasi email Anda dan mengaktifkan akun Anda:</p>

        @component('mail::button', ['url' => $verificationUrl, 'color' => 'success'])
            Verifikasi Email
        @endcomponent

        <p>Atau Anda juga dapat mengklik tautan berikut untuk melakukan aktivasi:</p>
        <p><a href="{{ $verificationUrl }}" style="color: #4CAF50;">{{ $verificationUrl }}</a></p>

        <p>Terima kasih telah bergabung dengan kami!</p>
        <p>Salam hangat,<br><strong>{{ config('app.name') }}</strong></p>
    </div>
@endcomponent

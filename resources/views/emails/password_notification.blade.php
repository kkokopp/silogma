@component('mail::message')
    # Account Created

    Akun anda telah berhasil dibuat.

    Password anda adalah : **{{ $password }}**

    Silahkan login dengan menggunakan email yang anda daftarkan dan password tersebut.

    @component('mail::button', ['url' => url('/login')])
        Login
    @endcomponent

    Terimakasih!
@endcomponent

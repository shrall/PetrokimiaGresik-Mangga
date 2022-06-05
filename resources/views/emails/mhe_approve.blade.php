@component('mail::message')
Selamat pendaftaran anda telah terverifikasi!

Kode Unik: {{$ucode}}
@component('mail::button', ['url' => 'https://mhe2022.petrokimiagresik.com/visitor/login'])
Login MHE
@endcomponent

Terima kasih telah mendaftar pada acara Mangga Hybrid Expo 2022!
@endcomponent

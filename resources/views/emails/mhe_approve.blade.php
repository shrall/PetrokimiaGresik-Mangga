@component('mail::message')
Selamat pendaftaran anda telah terverifikasi!

Kode Unik: {{$ucode}}<br>
@if ($is_online == 0)
Business Coaching<br>
Tanggal : 2 Juli 2022<br>
Tempat : SOR TRI DHARMA PETROKIMIA GRESIK<br>
Jl. Achmad Yani -Gresik,61119<br>

<b>Tunjukkan bukti pendaftaran email ini di tempat acara.</b>
@else
@component('mail::button', ['url' => 'https://mhe2022.petrokimiagresik.com/visitor/login'])
Login MHE
@endcomponent
@endif

Terima kasih telah mendaftar pada acara Mangga Hybrid Expo 2022!
@endcomponent

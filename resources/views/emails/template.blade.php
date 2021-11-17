@component('mail::message')
Selamat ya, tinggal satu langkah lagi kamu bisa mendaftarkan akun di website kami!
Data registrasimu telah berhasil kami terima. Verifikasi emailmu dengan klik tombol di bawah ini:
@component('mail::button', ['url' => $url ?? '#'])
Verifikasi
@endcomponent

atau juga dapat menyalin link berikut untuk memverifikasi email,<br>
<a style="color:blue;" href="{{$url ?? 'http://mangga.test'}}">{{$url ?? 'http://mangga.test'}}</a>
@endcomponent

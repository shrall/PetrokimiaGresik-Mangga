<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="bg-light-200 font-pn w-screen h-screen flex flex-col items-center justify-center gap-y-2">
        <div class="text-5xl text-center font-lb text-mangga-green-400 mb-12">Terima kasih telah mendaftar di Mangga!
        </div>
        <img src="{{ asset('assets/svg/verifikasi-email.svg') }}" alt="" srcset="">
        <div class="text-3xl">Cek email yang baru saja didaftarkan untuk menyelesaikan proses verifikasi.</div>
        <div class="flex items-center justify-center gap-x-4 mt-4">
            <a href="#" class="mangga-button-transparent-orange cursor-pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="fa fa-fw fa-chevron-left"></span>
                Logout
            </a>
            <a href="#" class="mangga-button-green cursor-pointer" onclick="event.preventDefault(); document.getElementById('resend-form').submit();">
                Kirim Ulang
            </a>
        </div>
        <form id="resend-form" action="{{ route('verification.resend') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>

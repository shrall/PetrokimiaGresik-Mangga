<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Mangga Petrokimia Gresik">
    <meta name="description" content="Mangga Petrokimia Gresik">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/ms-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="asset('favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="google-site-verification" content="9A7AopC-vYhUTF8T44Y3ffwY2cLGlnnR16KZvKrv4Ps" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css?v=') . time() }}" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    @yield('head')
</head>

<body>
    @yield('modals')
    <div class="bg-light-200 font-pn">
        <div class="grid grid-cols-12">
            <div class="col-span-2 bg-mangga-green-500 text-white relative">
                <div class="flex flex-col gap-y-4 w-2/12 min-h-screen p-4 fixed">
                    <div class="flex items-center">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/svg/mangga-logo-white.svg') }}" class="w-9/10 mx-auto"></a>
                    </div>
                    <hr>
                    <div class="flex items-center gap-x-2">
                        <img src="{{ asset('assets/img/stock.jpg') }}" class="rounded-full w-12 h-12">
                        <a href="#">
                            <div class="text-xl">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                            </div>
                        </a>
                    </div>
                    <hr>
                    <div class="flex items-center gap-x-2 hover:text-gray-100 cursor-pointer">
                        <span class="fa fa-fw fa-home text-3xl"></span>
                        <a href="{{ route('admin.dashboard') }}">
                            <div class="text-xl">Beranda</div>
                        </a>
                    </div>
                    <div class="flex items-center gap-x-2 hover:text-gray-100 cursor-pointer">
                        <span class="fa fa-fw fa-briefcase text-3xl"></span>
                        <a href="{{ route('admin.program') }}">
                            <div class="text-xl">Program Mangga</div>
                        </a>
                    </div>
                    <div class="flex items-center gap-x-2 hover:text-gray-100 cursor-pointer">
                        <span class="fa fa-fw fa-users text-3xl"></span>
                        <a href="{{ route('admin.user.index') }}">
                            <div class="text-xl">User</div>
                        </a>
                    </div>
                    <div class="flex items-center gap-x-2 hover:text-gray-100 cursor-pointer">
                        <span class="fa fa-fw fa-photo-video text-3xl"></span>
                        <a href="{{ route('admin.media.index') }}">
                            <div class="text-xl">Media</div>
                        </a>
                    </div>
                    <div class="flex items-center gap-x-2 hover:text-gray-100 cursor-pointer">
                        <span class="fa fa-fw fa-ticket text-3xl"></span>
                        <a href="{{ route('admin.mhe_event.index') }}">
                            <div class="text-xl">MHE</div>
                        </a>
                    </div>
                    <div class="flex items-center gap-x-2 hover:text-gray-100 cursor-pointer">
                        <span class="fa fa-fw fa-paste text-3xl"></span>
                        <a href="{{ route('admin.evaluation.index') }}">
                            <div class="text-xl">Evaluasi</div>
                        </a>
                    </div>
                    <div class="flex items-center gap-x-2 hover:text-gray-100 cursor-pointer mt-auto" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <span class="fa fa-fw fa-sign-out-alt text-3xl"></span>
                        <a href="#">
                            <div class="text-xl">Logout</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-10 min-h-screen p-4">
                @yield('content')
            </div>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    @yield('scripts')
</body>

</html>

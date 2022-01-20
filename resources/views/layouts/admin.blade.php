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
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    @yield('head')
</head>

<body>
    @yield('modals')
    <div class="bg-light-200 font-os">
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
                    <div class="flex items-center gap-x-2 hover:text-gray-100 cursor-pointer mt-auto" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <span class="fa fa-fw fa-sign-out-alt text-3xl"></span>
                        <a href="#">
                            <div class="text-xl">Logout</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-10 p-4">
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

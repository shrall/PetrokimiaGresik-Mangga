<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('head')
</head>

<body>
    @yield('modals')
    @auth
        @if (Auth::user()->referral_code == 'mamud')
            @include('inc.muda_navbar')
        @else
            @include('inc.navbar')
        @endif
    @endauth
    @guest
        @include('inc.navbar')
    @endguest
    <div class="bg-light-200 font-pn">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    @yield('scripts')
    <script>
        var sidebarOpened = false;

        function toggleSidebar() {
            sidebarOpened = !sidebarOpened;
            if (sidebarOpened) {
                $('#sidebar-toggle-button').removeClass('fa-chevron-left').addClass('fa-chevron-right');
                $('#sidebar').removeClass('translate-x-0').addClass('-translate-x-full');
            } else {
                $('#sidebar-toggle-button').removeClass('fa-chevron-right').addClass('fa-chevron-left');
                $('#sidebar').removeClass('-translate-x-full').addClass('translate-x-0');
            }
        }
    </script>
</body>

</html>

{{-- desktop --}}
<div class="items-center gap-x-4 font-pn px-8 py-4 bg-light-200 text-lg hidden xl:flex" id="navbar-desktop">
    <a href="{{ route('home') }}" class="mr-auto">
        <img src="{{ asset('assets/svg/mangga-logo-mini.svg') }}" width="30px">
    </a>
    @if (Route::current()->getName() == 'home' || Route::current()->getName() == 'profil.tentang' || Route::current()->getName() == 'profil.mangga_makmur' || Route::current()->getName() == 'profil.mangga_gadung' || Route::current()->getName() == 'profil.mangga_golek' || Route::current()->getName() == 'profil.mangga_muda' || Route::current()->getName() == 'profil.mangga_madu' || Route::current()->getName() == 'profil.landasan' || Route::current()->getName() == 'profil.sebaran' || Route::current()->getName() == 'profil.alur')
        <div class="flex items-center justify-center gap-x-2 dropdown">
            <a href="{{ route('home') }}" class="nav-active">Profil</a>
            <div class="dropdown-menu absolute hidden top-12 w-128 h-12"></div>
            <div class="dropdown-menu absolute hidden text-white top-24 right-0 w-screen bg-mangga-green-300"
                style="z-index: 99999;">
                <div class="grid grid-cols-2 px-24 py-12">
                    <div class="flex flex-col gap-y-8 text-2xl">
                        <a href="{{ route('profil.tentang') }}" class="hover:text-gray-200">Tentang Mangga</a>
                        <a href="{{ route('profil.landasan') }}" class="hover:text-gray-200">Landasan Mangga</a>
                        <a href="{{ route('profil.sebaran') }}" class="hover:text-gray-200">Sebaran Mangga</a>
                        <a href="{{ route('profil.alur') }}" class="hover:text-gray-200">Alur dan Prosedur</a>
                    </div>
                    <div class="flex flex-col gap-y-4 text-xl">
                        <div class="text-2xl py-2 border-b-2 border-light-200">Program Mangga</div>
                        <a href="{{ route('profil.mangga') }}" class="hover:text-gray-200">Mangga</a>
                        <a href="{{ route('profil.mangga_gadung') }}" class="hover:text-gray-200">Mangga Gadung</a>
                        <a href="{{ route('profil.mangga_muda') }}" class="hover:text-gray-200">Mangga Muda</a>
                        <a href="{{ route('profil.mangga_makmur') }}" class="hover:text-gray-200">Mangga Makmur</a>
                        <a href="{{ route('profil.mangga_madu') }}" class="hover:text-gray-200">Mangga Madu</a>
                        <a href="{{ route('profil.mangga_golek') }}" class="hover:text-gray-200">Mangga Golek</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="flex items-center justify-center gap-x-2 dropdown">
            <a href="{{ route('home') }}"
                class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Profil</a>
            <div class="dropdown-menu absolute hidden top-12 w-128 h-12"></div>
            <div class="dropdown-menu absolute hidden text-white top-24 right-0 w-screen bg-mangga-green-300"
                style="z-index: 99999;">
                <div class="grid grid-cols-2 px-24 py-12">
                    <div class="flex flex-col gap-y-8 text-2xl">
                        <a href="{{ route('profil.tentang') }}" class="hover:text-gray-200">Tentang Mangga</a>
                        <a href="{{ route('profil.landasan') }}" class="hover:text-gray-200">Landasan Mangga</a>
                        <a href="{{ route('profil.sebaran') }}" class="hover:text-gray-200">Sebaran Mangga</a>
                        <a href="{{ route('profil.alur') }}" class="hover:text-gray-200">Alur dan Prosedur</a>
                    </div>
                    <div class="flex flex-col gap-y-4 text-xl">
                        <div class="text-2xl py-2 border-b-2 border-light-200">Program Mangga</div>
                        <a href="{{ route('profil.mangga') }}" class="hover:text-gray-200">Mangga</a>
                        <a href="{{ route('profil.mangga_gadung') }}" class="hover:text-gray-200">Mangga Gadung</a>
                        <a href="{{ route('profil.mangga_muda') }}" class="hover:text-gray-200">Mangga Muda</a>
                        <a href="{{ route('profil.mangga_makmur') }}" class="hover:text-gray-200">Mangga Makmur</a>
                        <a href="{{ route('profil.mangga_madu') }}" class="hover:text-gray-200">Mangga Madu</a>
                        <a href="{{ route('profil.mangga_golek') }}" class="hover:text-gray-200">Mangga Golek</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (Route::current()->getName() == 'media')
        <a href="{{ route('media.index') }}" class="nav-active">Media</a>
    @else
        <a href="{{ route('media.index') }}"
            class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Media</a>
    @endif
    @if (Route::current()->getName() == 'faq')
        <a href="{{ route('faq') }}" class="nav-active">FAQ</a>
    @else
        <a href="{{ route('faq') }}"
            class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">FAQ</a>
    @endif
    @if (Route::current()->getName() == 'toko_mangga')
        <a href="{{ route('toko_mangga') }}" class="nav-active">Toko Mangga</a>
    @else
        <a href="{{ route('toko_mangga') }}"
            class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Toko
            Mangga</a>
    @endif
    @guest
        <a href="{{ route('login') }}" class="mangga-button-green-outline">Masuk</a>
        <a href="{{ route('register') }}" class="mangga-button-orange">Daftar</a>
    @endguest
    @auth
        <div class="flex items-center justify-center gap-x-2 dropdown relative">
            <a href="{{route('user.index')}}">
                <div class="text-xl">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>
            </a>
            <img class="rounded-full w-12 h-12" id="preview-image" @if (Auth::user()->picture) src="{{asset('uploads/user/' . Auth::user()->picture)}}" @else src="{{asset('assets/img/stock.jpg')}}" @endif>
            <span class="fa fa-fw fa-chevron-down"></span>
            <ul class="dropdown-menu absolute hidden text-black top-12 pt-2 right-0" style="z-index: 1000;">
                <li class="flex items-center justify-center">
                    <a onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                        class="rounded-t bg-white hover:bg-gray-100 py-2 px-4 whitespace-no-wrap cursor-pointer flex items-center justify-center gap-x-2">
                        <span class="fa fa-fw fa-power-off"></span>Log out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    @endauth
</div>
{{-- mobile --}}
<div class="font-pn px-8 py-4 bg-light-200 text-lg block xl:hidden" id="navbar-mobile">
    <div class="flex items-center gap-x-4 font-pn text-lg mb-4">
        <img src="{{ asset('assets/svg/mangga-logo-mini.svg') }}" width="40px" class="mr-auto">
        <span class="fa fa-fw fa-bars text-3xl" onclick="toggleNavbarMobile();"></span>
    </div>
    <div class="hidden flex-col gap-y-8 font-medium" id="navbar-menu-mobile">
        <a href="{{ route('home') }}" class="text-lg text-gray-600 cursor-pointer">Profil</a>
        <a href="{{ route('profil.tentang') }}" class="text-lg text-gray-600 cursor-pointer pl-2">Tentang Mangga</a>
        <a href="{{ route('profil.landasan') }}" class="text-lg text-gray-600 cursor-pointer pl-2">Landasan
            Mangga</a>
        <a href="{{ route('profil.sebaran') }}" class="text-lg text-gray-600 cursor-pointer pl-2">Sebaran Mangga</a>
        <a href="{{ route('profil.alur') }}" class="text-lg text-gray-600 cursor-pointer pl-2">Alur dan Prosedur</a>
        <hr>
        <a href="#" class="text-lg text-gray-600 cursor-pointer">Program Mangga</a>
        <a href="{{ route('profil.mangga') }}" class="text-lg text-gray-600 cursor-pointer pl-2">Mangga</a>
        <a href="{{ route('profil.mangga_gadung') }}" class="text-lg text-gray-600 cursor-pointer pl-2">Mangga
            Gadung</a>
        <a href="{{ route('profil.mangga_muda') }}" class="text-lg text-gray-600 cursor-pointer pl-2">Mangga Muda</a>
        <a href="{{ route('profil.mangga_makmur') }}" class="text-lg text-gray-600 cursor-pointer pl-2">Mangga
            Makmur</a>
        <a href="{{ route('profil.mangga_madu') }}" class="text-lg text-gray-600 cursor-pointer pl-2">Mangga Madu</a>
        <a href="{{ route('profil.mangga_golek') }}" class="text-lg text-gray-600 cursor-pointer pl-2">Mangga
            Golek</a>
        <hr>
        <a href="{{ route('media.index') }}" class="text-lg text-gray-600 cursor-pointer">Media</a>
        <a href="{{ route('faq') }}" class="text-lg text-gray-600 cursor-pointer">FAQ</a>
        <a href="{{ route('toko_mangga') }}" class="text-lg text-gray-600 cursor-pointer">Toko Mangga</a>
        <a href="{{ route('login') }}"
            class="text-lg text-mangga-green-400 border-b border-gray-600 cursor-pointer">Masuk</a>
        <a href="{{ route('register') }}"
            class="text-lg text-mangga-green-400 border-b border-gray-600 cursor-pointer">Daftar</a>
    </div>
</div>

<script>
    function toggleNavbarMobile() {
        if ($('.fa-bars').length > 0) {
            $('.fa-bars').addClass('fa-times').removeClass('fa-bars');
            $('#navbar-menu-mobile').addClass('flex').removeClass('hidden');
            $('#navbar-mobile').addClass('bg-white').removeClass('bg-light-200');
        } else if ($('.fa-times').length > 0) {
            $('.fa-times').addClass('fa-bars').removeClass('fa-times');
            $('#navbar-menu-mobile').addClass('hidden').removeClass('flex');
            $('#navbar-mobile').addClass('bg-light-200').removeClass('bg-white');
        }
    }
</script>

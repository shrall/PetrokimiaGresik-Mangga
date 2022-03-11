{{-- desktop --}}
<div class="items-center gap-x-4 font-pn px-8 py-4 bg-light-200 text-lg hidden xl:grid grid-cols-12" id="navbar-desktop">
    <a href="{{ route('profil.mangga_madu') }}" class="col-span-3">
        <img src="{{ asset('assets/svg/mangga-logo-mini.svg') }}" width="30px">
    </a>
    <div class="flex items-center justify-center gap-x-8 col-span-6">
        @if (Route::current()->getName() != 'profil.mangga_madu')
            <a href="{{ route('profil.mangga_madu') }}#"
                class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400"><img
                    src="{{ asset('assets/svg/mmbc-madu.svg') }}" class="h-12"></a>
        @else
            {{-- <a href="#beranda"
                class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Beranda</a>
            <a href="#tentang"
                class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Tentang</a>
            <a href="#timeline"
                class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Timeline</a> --}}
        @endif
    </div>
    @guest
        <div class="flex items-center justify-end gap-x-2 col-span-3">
            <a href="{{ route('mangga_madu.login') }}" class="mangga-button-green-outline">Masuk</a>
            <a href="{{ route('mangga_madu.register') }}" class="mangga-button-orange">Daftar</a>
        </div>
    @endguest
    @auth
        <div class="flex items-center justify-end gap-x-2 dropdown relative col-span-3">
            <a href="{{ route('user.index') }}">
                <div class="text-xl">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>
            </a>
            <img src="{{ asset('assets/img/asset-toko_mangga-1.png') }}" class="rounded-full w-12 h-12">
            <span class="fa fa-fw fa-chevron-down"></span>
            <ul class="dropdown-menu absolute hidden text-black top-12 pt-2 right-0" style="z-index: 1000;">
                <li class="flex items-center justify-center">
                    <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
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
        <a href="{{ route('profil.mangga_madu') }}" class="mr-auto">
            <img src="{{ asset('assets/svg/mangga-logo-mini.svg') }}" width="40px">
        </a>
        <span class="fa fa-fw fa-bars text-3xl" onclick="toggleNavbarMobile();"></span>
    </div>
    <div class="hidden flex-col gap-y-8 font-medium" id="navbar-menu-mobile">
        <a href="{{ route('mangga_madu.login') }}"
            class="text-lg text-mangga-green-400 border-b border-gray-600 cursor-pointer">Masuk</a>
        <a href="{{ route('mangga_madu.register') }}"
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

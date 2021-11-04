{{-- desktop --}}
<div class="items-center gap-x-4 font-os px-8 py-4 bg-light-200 text-lg hidden xl:flex" id="navbar-desktop">
    <img src="{{ asset('assets/svg/mangga-logo-mini.svg') }}" width="30px" class="mr-auto">
    @if (Route::current()->getName() == 'home')
        <a href="{{ route('home') }}" class="nav-active">Beranda</a>
    @else
        <a href="{{ route('home') }}"
            class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Beranda</a>
    @endif
    @if (Route::current()->getName() == 'info')
        <a href="{{ route('info') }}" class="nav-active">Info</a>
    @else
        <a href="{{ route('info') }}"
            class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Info</a>
    @endif
    @if (Route::current()->getName() == 'prosedur')
        <a href="{{ route('prosedur') }}" class="nav-active">Prosedur</a>
    @else
        <a href="{{ route('prosedur') }}"
            class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Prosedur</a>
    @endif
    @if (Route::current()->getName() == 'media')
        <a href="{{ route('media') }}" class="nav-active">Media</a>
    @else
        <a href="{{ route('media') }}"
            class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Media</a>
    @endif
    @if (Route::current()->getName() == 'toko_mangga')
        <a href="{{ route('toko_mangga') }}" class="nav-active">Toko Mangga</a>
    @else
        <a href="{{ route('toko_mangga') }}"
            class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Toko
            Mangga</a>
    @endif
    <a href="#" class="mangga-button-green-outline">Masuk</a>
    <a href="#" class="mangga-button-orange">Daftar</a>
</div>
{{-- mobile --}}
<div class="font-os px-8 py-4 bg-light-200 text-lg block xl:hidden" id="navbar-mobile">
    <div class="flex items-center gap-x-4 font-os text-lg mb-4">
        <img src="{{ asset('assets/svg/mangga-logo-mini.svg') }}" width="40px" class="mr-auto">
        <span class="fa fa-fw fa-bars text-3xl" onclick="toggleNavbarMobile();"></span>
    </div>
    <div class="hidden flex-col gap-y-8 font-medium" id="navbar-menu-mobile">
        <a href="{{ route('home') }}" class="text-lg text-gray-600 cursor-pointer">Beranda</a>
        <a href="{{ route('info') }}" class="text-lg text-gray-600 cursor-pointer">Info</a>
        <a href="{{ route('prosedur') }}" class="text-lg text-gray-600 cursor-pointer">Prosedur</a>
        <a href="{{ route('media') }}" class="text-lg text-gray-600 cursor-pointer">Media</a>
        <a href="{{ route('toko_mangga') }}" class="text-lg text-gray-600 cursor-pointer">Toko Mangga</a>
        <a href="#" class="text-lg text-mangga-green-400 border-b border-gray-600 cursor-pointer">Masuk</a>
        <a href="#" class="text-lg text-mangga-green-400 border-b border-gray-600 cursor-pointer">Daftar</a>
    </div>
</div>

<script>
    function toggleNavbarMobile() {
        if ($('.fa-bars').length > 0) {
            $('.fa-bars').addClass('fa-times').removeClass('fa-bars');
            $('#navbar-menu-mobile').addClass('flex').removeClass('hidden');
            $('#navbar-mobile').addClass('bg-white').removeClass('bg-light-200');
        }else if($('.fa-times').length > 0){
            $('.fa-times').addClass('fa-bars').removeClass('fa-times');
            $('#navbar-menu-mobile').addClass('hidden').removeClass('flex');
            $('#navbar-mobile').addClass('bg-light-200').removeClass('bg-white');
        }
    }
</script>
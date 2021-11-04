<div class="flex items-center gap-x-4 font-os px-8 py-4 bg-light-200 text-lg">
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
            class="text-gray-500 hover:text-black border-b-2 border-light-200 hover:border-mangga-green-400">Toko Mangga</a>
    @endif
    <a href="#" class="mangga-button-green-outline">Masuk</a>
    <a href="#" class="mangga-button-orange">Daftar</a>
</div>

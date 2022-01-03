<div class="col-span-3 2xl:col-span-2 border-r border-gray-400">
    <div class="flex items-center justify-between px-8 py-2 text-2xl font-bold">Mangga</div>
    <div class="flex flex-col gap-y-2 p-8 text-xl">
        <a href="{{ route('profil.tentang') }}" class="cursor-pointer @if (Route::current()->getName() == 'profil.tentang') bg-mangga-green-400 text-white @else hover:bg-mangga-green-400 hover:text-white @endif  rounded-lg p-3">
            Tentang Mangga</a>
        <div class="p-3 flex flex-col gap-y-1">
            <div>Program Mangga</div>
            <a href="{{ route('profil.mangga') }}"
                class="cursor-pointer @if (Route::current()->getName() == 'profil.mangga') bg-mangga-green-400 text-white @else hover:bg-mangga-green-400 hover:text-white @endif  rounded-lg px-3 text-lg">
                Mangga</a>
            <a href="{{ route('profil.mangga_gadung') }}"
                class="cursor-pointer @if (Route::current()->getName() == 'profil.mangga_gadung') bg-mangga-green-400 text-white @else hover:bg-mangga-green-400 hover:text-white @endif  rounded-lg px-3 text-lg">
                Mangga Gadung</a>
            <a href="{{ route('profil.mangga_muda') }}"
                class="cursor-pointer @if (Route::current()->getName() == 'profil.mangga_muda') bg-mangga-green-400 text-white @else hover:bg-mangga-green-400 hover:text-white @endif  rounded-lg px-3 text-lg">
                Mangga Muda</a>
            <a href="{{ route('profil.mangga_makmur') }}"
                class="cursor-pointer @if (Route::current()->getName() == 'profil.mangga_makmur') bg-mangga-green-400 text-white @else hover:bg-mangga-green-400 hover:text-white @endif  rounded-lg px-3 text-lg">
                Mangga Makmur</a>
            <a href="{{ route('profil.mangga_madu') }}"
                class="cursor-pointer @if (Route::current()->getName() == 'profil.mangga_madu') bg-mangga-green-400 text-white @else hover:bg-mangga-green-400 hover:text-white @endif  rounded-lg px-3 text-lg">
                Mangga Madu</a>
            <a href="{{ route('profil.mangga_golek') }}"
                class="cursor-pointer @if (Route::current()->getName() == 'profil.mangga_golek') bg-mangga-green-400 text-white @else hover:bg-mangga-green-400 hover:text-white @endif  rounded-lg px-3 text-lg">
                Mangga Golek</a>
        </div>
        <a href="{{ route('profil.landasan') }}" class="cursor-pointer @if (Route::current()->getName() == 'profil.landasan') bg-mangga-green-400 text-white @else hover:bg-mangga-green-400 hover:text-white @endif  rounded-lg p-3">
            Landasan Mangga</a>
        <a href="{{ route('profil.sebaran') }}" class="cursor-pointer @if (Route::current()->getName() == 'profil.sebaran') bg-mangga-green-400 text-white @else hover:bg-mangga-green-400 hover:text-white @endif  rounded-lg p-3">
            Sebaran Mangga</a>
        <a href="{{ route('profil.alur') }}" class="cursor-pointer @if (Route::current()->getName() == 'profil.alur') bg-mangga-green-400 text-white @else hover:bg-mangga-green-400 hover:text-white @endif  rounded-lg p-3">
            Alur dan Sebaran</a>
    </div>
</div>

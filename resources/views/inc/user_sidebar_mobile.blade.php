<div class="flex flex-col gap-y-6 p-8 text-xl fixed col-span-12 w-vw-80 md:w-vw-40 h-screen bg-light-200 transform -translate-x-full transition duration-200 ease-in-out rounded-xl shadow-xl z-50 xl:hidden"
    id="sidebar">
    <div class="fixed bg-mangga-green-300 rounded-r-full w-12 h-12 -right-12 flex items-center justify-center"
        onclick="toggleSidebar();">
        <span class="fa fa-fw fa-chevron-right text-white text-xl" id="sidebar-toggle-button"></span>
    </div>
    @if (Route::current()->getName() == 'user.index' || Route::current()->getName() == 'user.change_password' || Route::current()->getName() == 'user.update_profile' || Route::current()->getName() == 'user.edit')
        <a href="{{ route('user.index') }}" class="bg-mangga-green-300 text-white rounded-lg p-3">
            <span class="fa fa-fw fa-user mr-2"></span>Profil
        </a>
    @else
        <a href="{{ route('user.index') }}" class="hover:bg-mangga-green-300 hover:text-white rounded-lg p-3">
            <span class="fa fa-fw fa-user mr-2"></span>Profil
        </a>
    @endif
    @if (Route::current()->getName() == 'user.create_ajuan' || Route::current()->getName() == 'user.status_ajuan')
        <a href="{{ route('user.create_ajuan') }}" class="bg-mangga-green-300 text-white rounded-lg p-3">
            <span class="fa fa-fw fa-clipboard-list mr-2"></span>Ajuan Saya
        </a>
    @else
        <a href="{{ route('user.create_ajuan') }}" class="hover:bg-mangga-green-300 hover:text-white rounded-lg p-3">
            <span class="fa fa-fw fa-clipboard-list mr-2"></span>Ajuan Saya
        </a>
    @endif
    @if (Route::current()->getName() == 'user.riwayat_angsuran')
        <a href="{{ route('user.riwayat_angsuran') }}" class="bg-mangga-green-300 text-white rounded-lg p-3">
            <span class="fa fa-fw fa-history mr-2"></span>Riwayat Angsuran
        </a>
    @else
        <a href="{{ route('user.riwayat_angsuran') }}"
            class="hover:bg-mangga-green-300 hover:text-white rounded-lg p-3">
            <span class="fa fa-fw fa-history mr-2"></span>Riwayat Angsuran
        </a>
    @endif
    @if (Route::current()->getName() == 'user.belanja' || Route::current()->getName() == 'user.belanja_list' || Route::current()->getName() == 'user.belanja_checkout')
        <a href="{{ route('user.belanja') }}" class="bg-mangga-green-300 text-white rounded-lg p-3">
            <span class="fa fa-fw fa-shopping-cart mr-2"></span>Belanja
        </a>
    @else
        <a href="{{ route('user.belanja') }}" class="hover:bg-mangga-green-300 hover:text-white rounded-lg p-3">
            <span class="fa fa-fw fa-shopping-cart mr-2"></span>Belanja
        </a>
    @endif
</div>

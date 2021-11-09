<div class="flex flex-col h-vh-90 gap-y-6 px-8 text-xl">
    @if (Route::current()->getName() == 'user.index')
        <a href="{{ route('user.index') }}" class="bg-mangga-green-300 text-white rounded-lg p-3">
            <span class="fa fa-fw fa-user mr-2"></span>Profil
        </a>
    @else
        <a href="{{ route('user.index') }}" class="hover:bg-mangga-green-300 hover:text-white rounded-lg p-3">
            <span class="fa fa-fw fa-user mr-2"></span>Profil
        </a>
    @endif
    @if (Route::current()->getName() == 'user.ajuan')
        <a href="#" class="bg-mangga-green-300 text-white rounded-lg p-3">
            <span class="fa fa-fw fa-clipboard-list mr-2"></span>Ajuan Saya
        </a>
    @else
        <a href="#" class="hover:bg-mangga-green-300 hover:text-white rounded-lg p-3">
            <span class="fa fa-fw fa-clipboard-list mr-2"></span>Ajuan Saya
        </a>
    @endif
    @if (Route::current()->getName() == 'user.riwayat_angsuran')
        <a href="#" class="bg-mangga-green-300 text-white rounded-lg p-3">
            <span class="fa fa-fw fa-history mr-2"></span>Riwayat Angsuran
        </a>
    @else
        <a href="#" class="hover:bg-mangga-green-300 hover:text-white rounded-lg p-3">
            <span class="fa fa-fw fa-history mr-2"></span>Riwayat Angsuran
        </a>
    @endif
    @if (Route::current()->getName() == 'user.belanja')
        <a href="#" class="bg-mangga-green-300 text-white rounded-lg p-3">
            <span class="fa fa-fw fa-history mr-2"></span>Belanja
        </a>
    @else
        <a href="#" class="hover:bg-mangga-green-300 hover:text-white rounded-lg p-3">
            <span class="fa fa-fw fa-history mr-2"></span>Belanja
        </a>
    @endif
</div>

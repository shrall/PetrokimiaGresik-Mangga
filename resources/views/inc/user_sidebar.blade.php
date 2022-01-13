<div class="flex flex-col h-vh-80 gap-y-6 px-8 text-xl">
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
        @if (count(Auth::user()->businesses) > 0)
            <a href="{{ route('user.status_ajuan') }}" class="bg-mangga-green-300 text-white rounded-lg p-3">
                <span class="fa fa-fw fa-clipboard-list mr-2"></span>Ajuan Saya
            </a>
        @else
            <a href="{{ route('user.create_ajuan') }}" class="bg-mangga-green-300 text-white rounded-lg p-3">
                <span class="fa fa-fw fa-clipboard-list mr-2"></span>Ajuan Saya
            </a>
        @endif
    @else
        @if (count(Auth::user()->businesses) > 0)
            <a href="{{ route('user.status_ajuan') }}"
                class="hover:bg-mangga-green-300 hover:text-white rounded-lg p-3">
                <span class="fa fa-fw fa-clipboard-list mr-2"></span>Ajuan Saya
            </a>
        @else
            <a href="{{ route('user.create_ajuan') }}"
                class="hover:bg-mangga-green-300 hover:text-white rounded-lg p-3">
                <span class="fa fa-fw fa-clipboard-list mr-2"></span>Ajuan Saya
            </a>
        @endif
    @endif
    @if (Auth::user()->referral_code != 'mamud')
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
    @endif
</div>

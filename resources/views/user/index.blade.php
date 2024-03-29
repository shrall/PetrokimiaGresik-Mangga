@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:pl-0 xl:min-h-vh-90">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 xl:col-span-4">
            <div class="card flex flex-col px-6 py-8">
                <div class="text-2xl font-bold">Informasi Akun</div>
                <div class="text-md text-gray-600 mb-4">Informasi akun berupa Nama Lengkap, Email, Nomor Handphone dan Ganti
                    Password</div>
                <label class="text-gray-400">Nama</label>
                <div class="form-input mb-8">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>
                <label class="text-gray-400">E-Mail</label>
                <div name="email" class="form-input mb-8">{{ Auth::user()->email }}</div>
                <label class="text-gray-400">Nomor Handphone</label>
                <div class="form-input mb-8">{{ Auth::user()->handphone }}
                </div>
                <a href="{{ route('user.change_password') }}" class="mangga-button-green w-full text-center mb-4">Ganti
                    Password</a>
            </div>
        </div>
        @if (Auth::user()->referral_code != 'mamud' && Auth::user()->referral_code != 'mamad')
            <div class="col-span-12 xl:col-span-5">
                <div class="card flex flex-col px-6 py-8">
                    <div class="flex items-center justify-between">
                        <div class="text-2xl font-bold">Informasi Akun</div>
                        <a href="{{ route('user.edit', Auth::id()) }}"
                            class="flex items-center justify-center mangga-button-green text-center mb-4">
                            <span class="fa fa-fw fa-edit mr-2"></span>
                            Ubah Profile
                        </a>
                    </div>
                    <div class="text-md text-gray-600 mb-4">Informasi mengenai individu yang mencakup NO KTP, NO KK, Jenis
                        Kelamin, Agama,
                        Tempat Lahir. Anda juga bisa mengubah informasi personal Anda dengan menekan
                        tombol “Ubah Profile”</div>
                    <label class="text-gray-400">No. KTP</label>
                    <div class="form-input mb-8">{{ Auth::user()->ktp_code ?? '-' }}</div>
                    <label class="text-gray-400">No. KK</label>
                    <div class="form-input mb-8">{{ Auth::user()->kk_code ?? '-' }}</div>
                    <label class="text-gray-400">Jenis Kelamin</label>
                    <div class="form-input mb-8">{{ Auth::user()->gender == 'm' ? 'Laki-laki' : 'Perempuan' }}</div>
                    <label class="text-gray-400">Tempat dan Tanggal Lahir</label>
                    <div class="form-input mb-8">{{ Auth::user()->city->name }},
                        {{ Auth::user()->birth_date }}
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

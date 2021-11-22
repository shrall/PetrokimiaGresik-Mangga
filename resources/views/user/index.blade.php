@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:px-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 xl:col-span-4">
            <div class="card flex flex-col px-6 py-8">
                <div class="text-2xl font-bold">Informasi Akun</div>
                <div class="text-md text-gray-600 mb-4">Informasi akun berupa Nama Lengkap, Email, Nomor Handphone dan Ganti
                    Password</div>
                <label class="text-gray-400">Nama</label>
                <div class="form-input mb-8">Achmad Yoga Prasetya</div>
                <label class="text-gray-400">E-Mail</label>
                <div name="email" class="form-input mb-8">achmadygao@gmail.com</div>
                <label class="text-gray-400">Nomor Handphone</label>
                <div class="form-input mb-8">08123456789
                </div>
                <a href="{{ route('user.change_password') }}" class="mangga-button-green w-full text-center mb-4">Ganti
                    Password</a>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-5">
            <div class="card flex flex-col px-6 py-8">
                <div class="flex items-center justify-between">
                    <div class="text-2xl font-bold">Informasi Akun</div>
                    <a href="{{ route('user.edit', 1) }}"
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
                <div class="form-input mb-8">123812847192837105</div>
                <label class="text-gray-400">No. KK</label>
                <div class="form-input mb-8">2348720352398472938</div>
                <label class="text-gray-400">Jenis Kelamin</label>
                <div class="form-input mb-8">Laki-laki</div>
                <label class="text-gray-400">Agama</label>
                <div class="form-input mb-8">Kristen</div>
                <label class="text-gray-400">Tempat dan Tanggal Lahir</label>
                <div class="form-input mb-8">Gresik, 07-04-1998
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:pl-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 xl:col-span-4">
            <div class="card flex flex-col px-6 py-8">
                <div class="text-2xl font-bold">Informasi Akun</div>
                <div class="text-md text-gray-600 mb-4">Informasi akun berupa Nama Lengkap, Email, Nomor Handphone dan Ganti
                    Password</div>
                <label class="text-gray-400">Nama</label>
                <input name="name" type="text" class="form-input bg-white mb-4"
                    value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}" disabled>
                <label class="text-gray-400">E-Mail</label>
                <input name="email" type="email" class="form-input bg-white mb-4" value="{{ Auth::user()->email }}" disabled>
                <label class="text-gray-400">Nomor Handphone</label>
                <input name="phone" type="number" class="form-input bg-white mb-4" value="{{ Auth::user()->handphone }}"
                    disabled>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-5">
            @if (session('Message'))
                <div class="rounded-lg bg-mangga-orange-300 p-4 mb-4">
                    <span class="fa fa-fw fa-info-circle ml-2"></span>
                    {{ session('Message') }}
                </div>
            @endif
            <form action="{{ route('user.update_password') }}" method="post">
                @csrf
                <div class="card flex flex-col px-6 py-8">
                    <div class="text-2xl font-bold">Ganti Password</div>
                    <div class="text-md text-gray-600 mb-4">Pengguna dapat merubah password lama menjadi password baru
                        disini
                    </div>
                    <label class="text-gray-400">Password Lama</label>
                    <div class="relative flex items-center mb-4">
                        <input name="current_password" type="password" class="form-input" id="password-old">
                        <span id="password-eye-old" onclick="togglePassword('old');"
                            class="span fa fa-fw fa-eye text-xl absolute inset-y-0 right-4 cursor-pointer hover:text-gray-500"></span>
                    </div>
                    <label class="text-gray-400">Password Baru</label>
                    <div class="relative flex items-center mb-4">
                        <input name="new_password" type="password" class="form-input" id="password-new">
                        <span id="password-eye-new" onclick="togglePassword('new');"
                            class="span fa fa-fw fa-eye text-xl absolute inset-y-0 right-4 cursor-pointer hover:text-gray-500"></span>
                    </div>
                    <label class="text-gray-400">Konfirmasi Password Baru</label>
                    <div class="relative flex items-center mb-4">
                        <input name="new_password_confirmation" type="password" class="form-input"
                            id="password-new-confirmation">
                        <span id="password-eye-new-confirmation" onclick="togglePassword('new-confirmation');"
                            class="span fa fa-fw fa-eye text-xl absolute inset-y-0 right-4 cursor-pointer hover:text-gray-500"></span>
                    </div>
                    <div class="flex items-center justify-center gap-x-2">
                        <a href="{{ route('user.index') }}" class="mangga-button-gray w-full">Kembali</a>
                        <button type="submit" class="mangga-button-green w-full">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function togglePassword(type) {
            if ($("#password-" + type).attr('type') == 'password') {
                $("#password-" + type).attr('type', 'text');
                $("#password-eye-" + type).removeClass('fa-eye');
                $("#password-eye-" + type).addClass('fa-eye-slash');
            } else {
                $("#password-" + type).attr('type', 'password');
                $("#password-eye-" + type).removeClass('fa-eye-slash');
                $("#password-eye-" + type).addClass('fa-eye');
            }
        }
    </script>
@endsection

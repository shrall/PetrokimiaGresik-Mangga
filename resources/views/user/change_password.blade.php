@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 gap-x-8 pt-4">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-4">
            <div class="card flex flex-col px-6 py-8">
                <div class="text-2xl font-bold">Informasi Akun</div>
                <div class="text-md text-gray-600 mb-4">Informasi akun berupa Nama Lengkap, Email, Nomor Handphone dan Ganti
                    Password</div>
                <label class="text-gray-400">Nama</label>
                <input name="name" type="text" class="form-input bg-white mb-8" value="Achmad Yoga Prasetya" disabled>
                <label class="text-gray-400">E-Mail</label>
                <input name="email" type="email" class="form-input bg-white mb-8" value="achmadygao@gmail.com" disabled>
                <label class="text-gray-400">Nomor Handphone</label>
                <input name="phone" type="number" class="form-input bg-white mb-8" value="08123456789" disabled>
            </div>
        </div>
        <div class="col-span-5">
            <form action="{{ route('user.update_password') }}" method="post">
                @csrf
                <div class="card flex flex-col px-6 py-8">
                    <div class="text-2xl font-bold">Ganti Password</div>
                    <div class="text-md text-gray-600 mb-4">Pengguna dapat merubah password lama menjadi password baru
                        disini
                    </div>
                    <label class="text-gray-400">Password Lama</label>
                    <div class="relative flex items-center mb-8">
                        <input name="current_password" type="password" class="form-input" id="password-old">
                        <span id="password-eye-old" onclick="togglePassword('old');"
                            class="span fa fa-fw fa-eye text-xl absolute inset-y-0 right-4 cursor-pointer hover:text-gray-500"></span>
                    </div>
                    <label class="text-gray-400">Password Baru</label>
                    <div class="relative flex items-center mb-8">
                        <input name="new_password" type="password" class="form-input" id="password-new">
                        <span id="password-eye-new" onclick="togglePassword('new');"
                            class="span fa fa-fw fa-eye text-xl absolute inset-y-0 right-4 cursor-pointer hover:text-gray-500"></span>
                    </div>
                    <label class="text-gray-400">Konfirmasi Password Baru</label>
                    <div class="relative flex items-center mb-8">
                        <input name="new_password_confirmation" type="password" class="form-input"
                            id="password-new-confirmation">
                        <span id="password-eye-new-confirmation" onclick="togglePassword('new-confirmation');"
                            class="span fa fa-fw fa-eye text-xl absolute inset-y-0 right-4 cursor-pointer hover:text-gray-500"></span>
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="{{route('user.user.index')}}" class="mangga-button-gray">Kembali</a>
                        <button type="submit" class="mangga-button-green">Simpan</button>
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

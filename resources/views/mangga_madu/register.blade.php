@extends('layouts.madu')

@section('content')
    <div class="w-full h-full bg-sign-up bg-cover flex flex-col xl:grid xl:grid-cols-2 xl:items-center xl:justify-center">
        <div class="col-span-1 flex flex-col items-start justify-center bg-gray-100 h-full px-12 py-4">
            <div class="text-xl md:text-5xl font-lb text-mangga-green-300 mb-4">Daftar Sekarang.</div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="rounded-lg bg-red-500 w-full p-4 mb-4 text-white">
                        <span class="fa fa-fw fa-info-circle ml-2"></span>
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" class="form-pengajuan-input mb-8" placeholder="Nama Lengkap">
                <input type="email" name="email" class="form-pengajuan-input mb-8" placeholder="E-Mail">
                <input type="number" name="handphone" class="form-pengajuan-input mb-8" placeholder="Nomor WA">
                <input type="number" name="nik" class="form-pengajuan-input mb-8" placeholder="NIK Karyawan(Suami)">
                <select name="department" class="form-pengajuan-input mb-8" id="department">
                    @foreach ($departments as $department)
                        <option value={{ $department->id }}>{{ $department->name }}</option>
                    @endforeach
                </select>
                <input type="password" name="password" class="form-pengajuan-input mb-12" placeholder="Password">
                <input type="password" name="password_confirmation" class="form-pengajuan-input mb-12"
                    placeholder="Konfirmasi Password">
                <input type="hidden" name="referral_code" value="mamad">
                <button type="submit" class="mangga-button-green w-full mb-4">Daftar</button>
            </form>
            <div class="text-md md:text-lg self-center">Sudah memiliki akun? <a href="{{ route('mangga_madu.login') }}"
                    class="text-mangga-green-400">Masuk di sini</a></div>
        </div>
        <div class="col-span-1 w-full h-full bg-right bg-cover bg-register-muda">
        </div>
    </div>
@endsection

@section('scripts')
@endsection

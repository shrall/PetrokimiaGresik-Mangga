@extends('layouts.app')

@section('content')
    <div class="w-screen h-screen bg-sign-up bg-cover flex flex-col xl:grid xl:grid-cols-2 gap-x-4 xl:items-center xl:justify-center">
        <div class="my-12 xl:col-span-1 self-start xl:mt-24 xl:mb-0 px-16">
            <div class="text-4xl xl:text-6xl text-mangga-green-600 font-af">SELAMAT DATANG.</div>
            <div class="text-lg xl:text-2xl text-gray-600 font-os">Silahkan lengkapi daftar diri untuk mendaftar ke Mangga.</div>
        </div>
        <div
            class="col-span-1 mx-auto flex flex-col items-start justify-center bg-white rounded-lg w-vw-80 px-8 md:w-vw-60 h-vh-70 md:px-12 xl:w-vw-40 xl:h-vh-90 xl:px-16 py-8 shadow-xl">
            <div class="text-xl md:text-3xl font-af text-mangga-green-600 mb-4">PENDANAAN UMK (PUMK)</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="email" name="email"
                    class="border-b border-gray-400 w-full text-lg md:text-2xl focus:outline-none mb-8" placeholder="E-Mail">
                <input type="text" name=""
                    class="border-b border-gray-400 w-full text-lg md:text-2xl focus:outline-none mb-8"
                    placeholder="Nama Lengkap">
                <input type="number" name=""
                    class="border-b border-gray-400 w-full text-lg md:text-2xl focus:outline-none mb-8"
                    placeholder="Nomor HP">
                <select name="" class="border-b border-gray-400 w-full text-lg md:text-2xl focus:outline-none mb-8">
                    <option value="">Provinsi</option>
                    <option value="">a</option>
                    <option value="">a</option>
                </select>
                <select name="" class="border-b border-gray-400 w-full text-lg md:text-2xl focus:outline-none mb-8">
                    <option value="">Kabupaten/Kota</option>
                    <option value="">a</option>
                    <option value="">a</option>
                </select>
                <select name="" class="border-b border-gray-400 w-full text-lg md:text-2xl focus:outline-none mb-8">
                    <option value="">Kecamatan</option>
                    <option value="">a</option>
                    <option value="">a</option>
                </select>
                <input type="password" name="password"
                    class="border-b border-gray-400 w-full text-lg md:text-2xl focus:outline-none mb-12"
                    placeholder="Password">
                <input type="password" name="password_confirmation"
                    class="border-b border-gray-400 w-full text-lg md:text-2xl focus:outline-none mb-12"
                    placeholder="Konfirmasi Password">
                <button type="submit" class="bg-mangga-green-400 text-white w-full rounded-lg py-2 mb-4">Daftar</button>
            </form>
            <div class="text-md md:text-lg self-center">Sudah memiliki akun? <a href="{{ route('login') }}"
                    class="text-mangga-green-400">Masuk di sini</a></div>
        </div>
    </div>
@endsection

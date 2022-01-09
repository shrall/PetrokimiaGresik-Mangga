@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        @include('landing_page.inc.profil_sidebar')
        <div class="col-span-10 md:col-span-7 2xl:col-span-8 flex flex-col gap-y-4 py-4 px-8">
            <div class="text-6xl font-af text-mangga-green-400 mb-4">Program Mangga Gadung</div>
            <img src="{{ asset('assets/img/mangga-gadung.png') }}" class="w-128 mx-auto">
            <div class="text-lg mb-4"><span class="font-bold">Mangga Gadung (Mitra Kebanggaan - Pedagang Unggul)</span>
                adalah program yang
                dikhususkan bagi pedagang pupuk untuk mendorong penjualan pupuk non subsidi melalui penyaluran
                PUMK. Program ini akan bekerjasama dengan SPDP dan Departemen Customer Centric Model.
            </div>
            <div class="text-lg mb-4">Penjual pupuk non subsidi harus didorong agar petani tidak bergantung pada alokasi
                pupuk subsidi
                pemerintah yang semakin hari semakin menurun.</div>
            <div class="text-3xl">Bentuk Pembinaan :</div>
            <ul class="list-disc text-lg ml-5 font-bold">
                <li>Literasi Keuangan</li>
                <li>Pembinaan Promosi</li>
                <li>Edukasi produk pupuk non subsidi</li>
            </ul>
            <div class="text-4xl text-center font-af text-mangga-green-400">Tertarik? Daftar Sekarang.</div>
            <a href="{{ route('register') }}"
                class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-80 2xl:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                Mangga Makmur</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

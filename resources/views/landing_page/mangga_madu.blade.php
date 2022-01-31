@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        @include('landing_page.inc.profil_sidebar')
        <div class="col-span-10 md:col-span-7 2xl:col-span-8 flex flex-col gap-y-4 py-4 px-8">
            <div class="text-6xl font-lb text-mangga-green-400 mb-4">Program Mangga Madu</div>
            <img src="{{ asset('assets/img/mangga-madu.png') }}" class="w-128 mx-auto">
            <div class="border border-gray-400 px-12 py-8 bg-white mb-4">
                <div class="text-lg font-bold mb-2">Mangga Madu (Mama Dikasih Usaha) : </div>
                <div class="text-lg">Program pendanaan yang ditujukan bagi para istri karyawan PT Petrokimia Gresik
                    yang sedang
                    merintis usaha dan memerlukan pinjaman modal untuk mengembangkan usahanya tersebut.</div>
            </div>
            <div class="text-lg">Kategori :</div>
            <ul class="list-disc text-lg ml-5 mb-4">
                <li>Fashion</li>
                <li>Food & Beverages</li>
                <li>Services</li>
                <li>Others</li>
            </ul>
            <div class="text-6xl font-lb text-mangga-green-400 text-center mb-4">Persyaratan Mangga Madu</div>
            <ol class="list-decimal text-lg ml-5 mb-4">
                <li>Peserta berstatus sebagai istri karyawan PT Petrokimia Gresik atau anggota PIKP</li>
                <li>Maksimal peserta adalah istri karyawan grade dengan sisa masa kerja maksimal tahun</li>
                <li>Peserta berupa perseorangan</li>
                <li>Bisnis yang diajukan dalam proposal telah berjalan lebih dari 6 bulan</li>
                <li>Apabila peserta terbukti melanggar ketentuan poin poin diatas maka akan didiskualifikasi dan akan
                    digantikan oleh deretan proposal dibawahnya</li>
            </ol>
            <div class="text-4xl text-center font-lb text-mangga-green-400">Tertarik? Daftar Sekarang.</div>
            <a href="{{ route('register') }}"
                class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-80 2xl:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                Mangga Madu</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

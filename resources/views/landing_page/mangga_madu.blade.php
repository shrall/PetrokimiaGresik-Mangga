@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        @include('landing_page.inc.profil_sidebar')
        <div class="col-span-10 md:col-span-7 2xl:col-span-8 flex flex-col gap-y-4 py-4 px-8">
            <img src="{{ asset('assets/svg/mmbc-madu.svg') }}" class="w-148 mx-auto">
            <div class="border border-gray-400 px-12 py-8 bg-white mb-4">
                <div class="text-lg font-bold mb-2">Mangga Madu (Mama Dikasih Usaha) : </div>
                <div class="text-lg">Program pendanaan yang ditujukan bagi para istri karyawan PT Petrokimia Gresik
                    yang sedang merintis usaha dan memerlukan pinjaman modal untuk mengembangkan usahanya tersebut.</div>
            </div>
            <div class="text-lg">Kategori :</div>
            <div class="grid grid-cols-2">
                <ul class="list-disc text-lg ml-5 mb-4">
                    <li>Fashion</li>
                    <li>Food & Beverages</li>
                    <li>Services</li>
                </ul>
                <ul class="list-disc text-lg ml-5 mb-4">
                    <li>Industri Kreatif (Kerajinan Tangan, Percetakan, dsb)</li>
                    <li>Perdagangan</li>
                    <li>Others</li>
                </ul>
            </div>
            <div class="text-6xl font-lb text-mangga-green-400 text-center mb-4">Persyaratan Mangga Madu</div>
            <ol class="list-decimal text-lg ml-5 mb-4">
                <li>Peserta berstatus sebagai istri karyawan PT Petrokimia Gresik atau anggota PIKP</li>
                <li>Maksimal peserta adalah istri karyawan grade dengan sisa masa kerja maksimal tahun</li>
                <li>Peserta berupa perseorangan</li>
                <li>Bisnis yang diajukan dalam proposal telah berjalan lebih dari 6 bulan</li>
                <li>Apabila peserta terbukti melanggar ketentuan poin poin diatas maka akan didiskualifikasi dan akan
                    digantikan oleh deretan proposal dibawahnya</li>
            </ol>
            <div class="grid grid-cols-12 gap-x-2 gap-y-2 mb-4">
                <div class="border border-gray-400 p-4 bg-white flex flex-col gap-2 items-center col-span-12 xl:col-span-5">
                    <div>Mangga Madu Terbaik I</div>
                    <div class="font-os text-mangga-orange-300 font-extrabold text-2xl">Rp. 5.000.000</div>
                    <div>Mangga Madu Terbaik II</div>
                    <div class="font-os text-gray-600 font-extrabold text-2xl">Rp. 3.000.000</div>
                    <div>Mangga Madu Terbaik III</div>
                    <div class="font-os text-mangga-orange-500 font-extrabold text-2xl">Rp. 2.000.000</div>
                </div>
                <div class="border border-gray-400 p-4 bg-white flex flex-col gap-2 items-center col-span-12 xl:col-span-7">
                    <div>Besaran PUMK yang diterima masing-masing klasifikasi Mangga Madu :</div>
                    <ul class="list-disc text-lg ml-5 mb-4">
                        <li>5 Mangga Madu Gold (Max 100 juta)</li>
                        <li>5 Mangga Madu Silver (Max 75 juta)</li>
                        <li>5 Mangga Madu Brown (Max 50 juta)</li>
                    </ul>
                    <ul class="list-disc text-lg ml-5 mb-4">
                        <li>Nilai pokok pinjaman</li>
                        <li>JAP (3,27 % dari total PUMK yang diterima)</li>
                        <li>Jangka waktu 2 tahun</li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-end font-bold font-lb text-4xl text-mangga-green-400">Proses Seleksi Mangga Madu</div>
            <hr class="border border-mangga-green-400 mb-8">
            <div class="flex items-center justify-center gap-4 mb-4">
                <div
                    class="rounded-full bg-mangga-green-300 text-white text-center w-32 h-32 flex items-center justify-center">
                    Submit Video</div>
                <span class="fa fa-fw fa-arrow-right text-2xl"></span>
                <div
                    class="rounded-full bg-mangga-green-300 text-white text-center w-32 h-32 flex items-center justify-center">
                    Verifikasi
                    Tim Kemitraan
                </div>
                <span class="fa fa-fw fa-arrow-right text-2xl"></span>
                <div
                    class="rounded-full bg-mangga-green-300 text-white text-center w-32 h-32 flex items-center justify-center">
                    Proses
                    Seleksi
                </div>
            </div>
            <div class="text-4xl text-center font-lb text-mangga-green-400">Tertarik? Daftar Sekarang.</div>
            <a href="{{ route('mangga_madu.register') }}"
                class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-80 2xl:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                Mangga Madu</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

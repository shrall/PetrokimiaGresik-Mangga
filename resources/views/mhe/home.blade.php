@extends('layouts.mhe')

@section('content')
    <div class="flex flex-col xl:flex-row bg-transparent mb-36 bg-mhe">
        <div class="flex flex-col justify-center gap-y-2 px-8 xl:pl-24 xl:pr-0">
            <img src="{{asset('assets/img/mhe-logo.png')}}" alt="" srcset="">
            <div class="pl-4 text-2xl text-mangga-green-500">29 Juni - 2 Juli 2022</div>
            <div class="pl-4">MHE (Manga Hybrid Expo) 2022 adalah ajang pameran yang dilaksanakan secara
                offline dan online bagi Mitra Kebanggaan Petrokimia Gresik yang terpilih untuk
                menunjukkan produk-produk unggulan mereka. MHE 2022 adalah rangkaian acara
                HUT ke 50 PT Petrokimia Gresik.</div>
            <a href="{{ route('mhe.register') }}" class="ml-4 mangga-button-green text-4xl mr-auto">Daftar Sekarang</a>
        </div>
        <img src="{{ asset('assets/svg/mhe-home.svg') }}" class="xl:ml-auto z-20 invisible">
        <div class="absolute left-0 rounded-r-full pl-24 p-4 hidden xl:flex gap-4 bg-white items-center">
            <img src="{{asset('assets/img/bumn-logo.svg.png')}}" class="h-6">
            <img src="{{asset('assets/img/pupuk-indonesia-logo.png')}}" class="h-8">
            <img src="{{asset('assets/img/pg-logo-true.png')}}" class="h-8">
            <img src="{{asset('assets/img/50th.png')}}" class="h-8">
            <img src="{{asset('assets/img/mangga-logo-true.png')}}" class="h-12">
        </div>
    </div>
    <div class="flex flex-col items-center gap-y-8">
        <div class="flex flex-col items-center gap-y-2 px-4 xl:px-0">
            <div class="font-lb text-5xl text-mangga-green-500">Tahap Pendaftaran</div>
            <div>Berikut adalah alur pendaftaran Mangga Hybrid Expo</div>
            <div>Harga Tiket: Rp. 5.000</div>
        </div>
        <div
            class="border border-gray-400 bg-white mb-4 grid grid-cols-12 items-center mx-4 xl:mx-0 px-2 py-8 gap-x-2 gap-y-8 xl:w-1/2">
            <div class="col-span-2 flex justify-center">
                <img src="{{ asset('assets/svg/mhe-1.svg') }}" class="w-16 h-16 rounded-full bg-gray-200 p-2">
            </div>
            <div class="col-span-10">Daftarkan diri Anda di Website Mangga Hybrid Expo dengan mengklik tombol "Daftar".
            </div>
            <div class="col-span-2 flex justify-center">
                <img src="{{ asset('assets/svg/mhe-2.svg') }}" class="w-16 h-16 rounded-full bg-gray-200 p-2">
            </div>
            <div class="col-span-10">Transfer ke nomor rekening yang dituju dan masukkan kode referensi Anda di kolom
                berita acara.</div>
            <div class="col-span-2 flex justify-center">
                <img src="{{ asset('assets/svg/mhe-3.svg') }}" class="w-16 h-16 rounded-full bg-gray-200 p-2">
            </div>
            <div class="col-span-10">Isi data diri Anda serta unggah bukti transfer untuk mendaftarkan diri.</div>
            <div class="col-span-2 flex justify-center">
                <img src="{{ asset('assets/svg/mhe-4.svg') }}" class="w-16 h-16 rounded-full bg-gray-200 p-2">
            </div>
            <div class="col-span-10">Tunggu sekitar 2x24 jam untuk mendapatkan email konfirmasi pendaftaran Anda.</div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection

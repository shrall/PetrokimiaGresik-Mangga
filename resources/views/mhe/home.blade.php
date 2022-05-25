@extends('layouts.mhe')

@section('content')
    <div class="flex bg-transparent mb-36">
        <div class="flex flex-col justify-center gap-y-4 pl-24">
            <div class="font-lb text-5xl text-mangga-green-500">Mangga Hybrid Expo</div>
            <div class="">Lorem ipsum is simply dummy text of tthe printing and typesetting industry. Lorem
                ipsum has been the industry's standard dummy text eversince the 1500s.</div>
            <a href="{{ route('mhe.register') }}" class="mangga-button-green text-xl mr-auto">Daftar</a>
        </div>
        <img src="{{ asset('assets/svg/mhe-home.svg') }}" class="ml-auto z-20">
        <div class="bg-mangga-yellow-400 w-screen h-36 absolute bottom-0 z-10 "></div>
    </div>
    <div class="flex flex-col items-center gap-y-8">
        <div class="flex flex-col items-center gap-y-2">
            <div class="font-lb text-5xl text-mangga-green-500">Tahap Pendaftaran</div>
            <div>Berikut adalah alur pendaftaran Mangga Hybrid Expo</div>
        </div>
        <div class="border border-gray-400 bg-white mb-4 grid grid-cols-12 items-center px-2 py-8 gap-x-2 gap-y-8 w-1/2">
            <div class="col-span-2 flex justify-center">
                <img src="{{asset('assets/svg/mhe-1.svg')}}" class="w-16 h-16 rounded-full bg-gray-200 p-2">
            </div>
            <div class="col-span-10">Daftarkan diri Anda di Website Mangga Hybrid Expo dengan mengklik tombol "Daftar".</div>
            <div class="col-span-2 flex justify-center">
                <img src="{{asset('assets/svg/mhe-2.svg')}}" class="w-16 h-16 rounded-full bg-gray-200 p-2">
            </div>
            <div class="col-span-10">Transfer ke nomor rekening yang dituju dan masukkan kode referensi Anda di kolom berita acara.</div>
            <div class="col-span-2 flex justify-center">
                <img src="{{asset('assets/svg/mhe-3.svg')}}" class="w-16 h-16 rounded-full bg-gray-200 p-2">
            </div>
            <div class="col-span-10">Isi data diri Anda serta unggah bukti transfer untuk mendaftarkan diri.</div>
            <div class="col-span-2 flex justify-center">
                <img src="{{asset('assets/svg/mhe-4.svg')}}" class="w-16 h-16 rounded-full bg-gray-200 p-2">
            </div>
            <div class="col-span-10">Tunggu sekitar 2x24 jam untuk mendapatkan email konfirmasi pendaftaran Anda.</div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection

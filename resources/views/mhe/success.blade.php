@extends('layouts.mhe')

@section('content')
    <div class="py-12">
        <div class="text-5xl text-center font-lb text-mangga-green-400 mb-12">Selamat Anda Telah Berhasil Mendaftar!
        </div>
        <img src="{{ asset('assets/svg/mhe-ok.svg') }}" class="mx-auto mb-4 xl:mb-0">
        <div class="text-3xl text-center">
            Silahkan menunggu email dalam 2x24 jam.<br>Tim kami akan melakukan verifikasi
            terlebih dahulu.
        </div>
        <div class="flex items-center justify-center gap-x-4 mt-4">
            <a href="{{ route('mhe.home') }}" class="mangga-button-orange cursor-pointer">
                Kembali
            </a>
        </div>
    </div>
@endsection

@section('scripts')
@endsection

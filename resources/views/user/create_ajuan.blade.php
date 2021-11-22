@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:px-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 xl:col-span-9">
            <div class="flex flex-col card items-center justify-center gap-y-4 px-8 py-6">
                <div class="text-2xl font-bold mb-8">Buat Pengajuan</div>
                <div class="grid grid-cols-4 items-center justify-center gap-8">
                    <a href="{{ route('user.status_ajuan') }}"
                        class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                        <img src="{{ asset('assets/svg/perdagangan.svg') }}" class="w-40 h-36">
                        <div class="text-lg">Perdagangan</div>
                    </a>
                    <a href="{{ route('user.status_ajuan') }}"
                        class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                        <img src="{{ asset('assets/svg/peternakan.svg') }}" class="w-40 h-36">
                        <div class="text-lg">Peternakan</div>
                    </a>
                    <a href="{{ route('user.status_ajuan') }}"
                        class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                        <img src="{{ asset('assets/svg/pertanian.svg') }}" class="w-40 h-36">
                        <div class="text-lg">Pertanian</div>
                    </a>
                    <a href="{{ route('user.status_ajuan') }}"
                        class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                        <img src="{{ asset('assets/svg/jasa.svg') }}" class="w-40 h-36">
                        <div class="text-lg">Industri</div>
                    </a>
                </div>
                <div class="grid grid-cols-3 items-center justify-center gap-8">
                    <a href="{{ route('user.status_ajuan') }}"
                        class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                        <img src="{{ asset('assets/svg/jasa.svg') }}" class="w-40 h-36">
                        <div class="text-lg">Jasa</div>
                    </a>
                    <a href="{{ route('user.status_ajuan') }}"
                        class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                        <img src="{{ asset('assets/svg/perkebunan.svg') }}" class="w-40 h-36">
                        <div class="text-lg">Perkebunan</div>
                    </a>
                    <a href="{{ route('user.status_ajuan') }}"
                        class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                        <img src="{{ asset('assets/svg/perikanan.svg') }}" class="w-40 h-36">
                        <div class="text-lg">Perikanan</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

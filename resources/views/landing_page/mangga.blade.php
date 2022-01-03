@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        @include('landing_page.inc.profil_sidebar')
        <div class="col-span-7 2xl:col-span-8 flex flex-col items-center justify-center gap-y-4 py-4 px-8">
            <div class="text-6xl font-af text-mangga-green-400 mb-8">Program Mangga</div>
            <div class="grid grid-cols-4 items-center justify-center gap-8">
                <a href="#"
                    class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                    <img src="{{ asset('assets/svg/perdagangan.svg') }}" class="w-40 h-36">
                    <div class="text-lg">Perdagangan</div>
                </a>
                <a href="#"
                    class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                    <img src="{{ asset('assets/svg/peternakan.svg') }}" class="w-40 h-36">
                    <div class="text-lg">Peternakan</div>
                </a>
                <a href="#"
                    class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                    <img src="{{ asset('assets/svg/pertanian.svg') }}" class="w-40 h-36">
                    <div class="text-lg">Pertanian</div>
                </a>
                <a href="#"
                    class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                    <img src="{{ asset('assets/svg/jasa.svg') }}" class="w-40 h-36">
                    <div class="text-lg">Industri</div>
                </a>
            </div>
            <div class="grid grid-cols-3 items-center justify-center gap-8 mb-8">
                <a href="#"
                    class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                    <img src="{{ asset('assets/svg/jasa.svg') }}" class="w-40 h-36">
                    <div class="text-lg">Jasa</div>
                </a>
                <a href="#"
                    class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                    <img src="{{ asset('assets/svg/perkebunan.svg') }}" class="w-40 h-36">
                    <div class="text-lg">Perkebunan</div>
                </a>
                <a href="#"
                    class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                    <img src="{{ asset('assets/svg/perikanan.svg') }}" class="w-40 h-36">
                    <div class="text-lg">Perikanan</div>
                </a>
            </div>
            <div class="text-4xl text-center font-af text-mangga-green-400">Tertarik? Daftar Sekarang.</div>
            <a href="{{ route('register') }}"
                class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                Mangga</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        @include('landing_page.inc.profil_sidebar')
        <div class="col-span-10 md:col-span-7 2xl:col-span-8 flex flex-col gap-y-4 py-4 px-8">
            <div class="text-6xl font-af text-mangga-green-400 mb-4">Tentang Mangga</div>
            <div class="border border-gray-400 px-12 py-8 bg-white mb-4">
                <div class="text-3xl font-bold mb-2 text-mangga-green-300">PUMK :</div>
                <div class="text-lg">Program Pendanaan Usaha Mikro Kecil yang bertujuan untuk meningkatkan
                    Kemampuan dan
                    mengembangkan usaha mikro kecil agar menjadi tangguh serta mandiri dengan strategi
                    Pendampingan dan pembinaan.</div>
            </div>
            <div class="text-lg">Dalam strategi tersebut, CSR Petrokimia Gresik menciptakan inovasi program yang
                dibranding dengan sebutan,</div>
            <div class="text-4xl font-af text-center mb-4">
                <span class="text-mangga-green-400">Mangga</span> -
                <span class="text-mangga-yellow-400">Mitra Kebanggaan</span>
            </div>
            <div class="grid grid-cols-12 items-center md:gap-x-8 gap-y-2 md:py-8 font-os">
                <div class="col-span-12 md:col-span-3">
                    <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}" class="w-64">
                </div>
                <div class="col-span-12 md:col-span-9">
                    Program Kemitraan yang bertujuan untuk terbinanya mitra dengan sistematis dan terkonsep melalui
                    pendanaan, Pelatihan dan pendampingan.
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

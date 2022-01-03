@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        @include('landing_page.inc.profil_sidebar')
        <div class="col-span-7 2xl:col-span-8 flex flex-col gap-y-4 py-4 px-8">
            <div class="text-6xl font-af text-mangga-green-400 mb-4">Program Mangga Makmur</div>
            <img src="{{ asset('assets/img/mangga-makmur.png') }}" class="w-128 mx-auto">
            <div class="text-lg"><span class="font-bold">Mangga Makmur (Majukan Usaha Rakyat)</span> merupakan
                program pertanian terpadu yang
                diinisiasi oleh Pupuk Indonesia dan PUMK merupakan bagian kecil dari integrasi program tersebut.
            </div>
            <div class="flex flex-col gap-y-8 mb-4">
                <div class="flex items-center border-2 border-mangga-orange-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-af px-32 py-12 bg-mangga-orange-400 text-white text-5xl">
                        1
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-os p-12">
                        Calon Mitra Baru Sektor Pertanian/ Perkebunan
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-green-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-af px-32 py-12 bg-mangga-green-400 text-white text-5xl">
                        2
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-os p-12">
                        Offstaker Merekomendasikan Petani / Perkebun
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-orange-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-af px-32 py-12 bg-mangga-orange-400 text-white text-5xl">
                        3
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-os p-12">
                        Petani/ Pekebun mengajukan Proposal Pendanaan UMK
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-green-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-af px-32 py-12 bg-mangga-green-400 text-white text-5xl">
                        4
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-os p-12">
                        Survey dan Evaluasi
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-orange-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-af px-32 py-12 bg-mangga-orange-400 text-white text-5xl">
                        5
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-os p-12">
                        Pencairan Dana Pinjaman PUMK
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-green-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-af px-32 py-12 bg-mangga-green-400 text-white text-5xl">
                        6
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-os p-12">
                        50% dana pinjaman akan digunakan untuk penebusan pupuk non subsidi dan 50% selanjutnya untuk biaya garap
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-orange-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-af px-32 py-12 bg-mangga-orange-400 text-white text-5xl">
                        7
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-os p-12">
                        Dep. Agrosolution melakukan pendampingan hingga panen
                    </div>
                </div>
            </div>
            <div class="text-4xl text-center font-af text-mangga-green-400">Tertarik? Daftar Sekarang.</div>
            <a href="{{ route('register') }}" class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar Mangga Makmur</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

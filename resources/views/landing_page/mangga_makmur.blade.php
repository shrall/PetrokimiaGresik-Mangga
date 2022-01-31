@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        @include('landing_page.inc.profil_sidebar')
        <div class="col-span-10 md:col-span-7 2xl:col-span-8 flex flex-col gap-y-4 py-4 px-8">
            <div class="text-6xl font-lb text-mangga-green-400 mb-4">Program Mangga Makmur</div>
            <img src="{{ asset('assets/img/mangga-makmur.png') }}" class="w-128 mx-auto">
            <div class="text-lg"><span class="font-bold">Mangga Makmur (Majukan Usaha Rakyat)</span> merupakan
                program pertanian terpadu yang
                diinisiasi oleh Pupuk Indonesia dan PUMK merupakan bagian kecil dari integrasi program tersebut.
            </div>
            <div class="flex-col gap-y-8 mb-4 hidden md:flex">
                <div class="flex items-center border-2 border-mangga-orange-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-lb px-16 2xl:px-32 py-12 bg-mangga-orange-400 text-white text-5xl">
                        1
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-pn p-6 2xl:p-12">
                        Calon Mitra Baru Sektor Pertanian/ Perkebunan
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-green-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-lb px-16 2xl:px-32 py-12 bg-mangga-green-400 text-white text-5xl">
                        2
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-pn p-6 2xl:p-12">
                        Offstaker Merekomendasikan Petani / Perkebun
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-orange-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-lb px-16 2xl:px-32 py-12 bg-mangga-orange-400 text-white text-5xl">
                        3
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-pn p-6 2xl:p-12">
                        Petani/ Pekebun mengajukan Proposal Pendanaan UMK
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-green-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-lb px-16 2xl:px-32 py-12 bg-mangga-green-400 text-white text-5xl">
                        4
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-pn p-6 2xl:p-12">
                        Survey dan Evaluasi
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-orange-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-lb px-16 2xl:px-32 py-12 bg-mangga-orange-400 text-white text-5xl">
                        5
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-pn p-6 2xl:p-12">
                        Pencairan Dana Pinjaman PUMK
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-green-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-lb px-16 2xl:px-32 py-12 bg-mangga-green-400 text-white text-5xl">
                        6
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-pn p-6 2xl:p-12">
                        50% dana pinjaman akan digunakan untuk penebusan pupuk non subsidi dan 50% selanjutnya untuk biaya
                        garap
                    </div>
                </div>
                <div class="flex items-center border-2 border-mangga-orange-400">
                    <div
                        class="col-span-2 flex items-center justify-center font-lb px-16 2xl:px-32 py-12 bg-mangga-orange-400 text-white text-5xl">
                        7
                    </div>
                    <div class="col-span-10 flex items-center justify-center font-pn p-6 2xl:p-12">
                        Dep. Agrosolution melakukan pendampingan hingga panen
                    </div>
                </div>
            </div>
            <div class="grid md:hidden grid-cols-1 items-center gap-4 pb-12">
                <div class="flex flex-col text-white text-xl">
                    <div class="flex items-center justify-center py-4 font-lb bg-mangga-orange-300">1</div>
                    <div class="flex items-center justify-center py-8 border border-mangga-orange-300  font-pn  text-black px-4 text-center">
                        Calon Mitra Baru Sektor Pertanian/ Perkebunan</div>
                </div>
                <div class="flex flex-col text-white text-xl">
                    <div class="flex items-center justify-center py-4 font-lb bg-mangga-green-300">2</div>
                    <div class="flex items-center justify-center py-8 border border-mangga-green-300  font-pn text-black px-4 text-center">
                        Offstaker Merekomendasikan Petani / Perkebun</div>
                </div>
                <div class="flex flex-col text-white text-xl">
                    <div class="flex items-center justify-center py-4 font-lb bg-mangga-orange-300">3</div>
                    <div class="flex items-center justify-center py-8 border border-mangga-orange-300  font-pn  text-black px-4 text-center">
                        Petani/ Pekebun mengajukan Proposal Pendanaan UMK</div>
                </div>
                <div class="flex flex-col text-white text-xl">
                    <div class="flex items-center justify-center py-4 font-lb bg-mangga-green-300 text-center">4</div>
                    <div class="flex items-center justify-center py-8 border border-mangga-green-300  font-pn text-black px-4 text-center">
                        Survey dan Evaluasi</div>
                </div>
                <div class="flex flex-col text-white text-xl">
                    <div class="flex items-center justify-center py-4 font-lb bg-mangga-orange-300">5</div>
                    <div class="flex items-center justify-center py-8 border border-mangga-orange-300  font-pn  text-black px-4 text-center">
                        Pencairan Dana Pinjaman PUMK</div>
                </div>
                <div class="flex flex-col text-white text-xl">
                    <div class="flex items-center justify-center py-4 font-lb bg-mangga-green-300 text-center">6</div>
                    <div class="flex items-center justify-center py-8 border border-mangga-green-300  font-pn text-black px-4 text-center">
                        50% dana pinjaman akan digunakan untuk penebusan pupuk non subsidi dan 50% selanjutnya untuk biaya
                        garap</div>
                </div>
                <div class="flex flex-col text-white text-xl">
                    <div class="flex items-center justify-center py-4 font-lb bg-mangga-orange-300">7</div>
                    <div class="flex items-center justify-center py-8 border border-mangga-orange-300  font-pn  text-black px-4 text-center">
                        Dep. Agrosolution melakukan pendampingan hingga panen</div>
                </div>
            </div>
            <div class="text-4xl text-center font-lb text-mangga-green-400">Tertarik? Daftar Sekarang.</div>
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

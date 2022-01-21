@extends('layouts.muda')

@section('content')
    <div class="grid grid-cols-12 h-vh-70 xl:h-screen pb-32 md:pb-48 font-pn" id="beranda">
        <div class="hidden md:block col-span-2"></div>
        <div class="hidden md:block col-span-10 bg-mangga-muda-1 bg-cover bg-bottom relative">
            <img src="{{ asset('assets/svg/mangga-muda.svg') }}" class="absolute w-148 -top-12 -left-60 2xl:-left-72">
        </div>
        <div class="block md:hidden col-span-12 bg-mangga-muda-1 bg-cover bg-bottom">
            <img src="{{ asset('assets/svg/mangga-muda.svg') }}" class="w-full mt-24">
        </div>
    </div>
    <div class="grid grid-cols-12 h-screen md:h-vh-60 xl:h-screen font-pn ">
        <div class="hidden md:block col-span-1 xl:col-span-2"></div>
        <div class="col-span-12 md:col-span-4 relative mx-16 md:mx-0">
            <img src="{{ asset('assets/img/landing-mangga-muda-2.png') }}" class="w-full absolute md:-left-8 -top-16 md:-top-32"
                id="tentang">
        </div>
        <div class="col-span-12 md:col-span-6 flex flex-col gap-y-4 px-12 pt-64 bg-mangga-green-300">
            <div class="font-lb text-6xl text-white">Program Mangga Muda</div>
            <div class="text-xl text-white">Program Mangga Muda dibagi menjadi 2 kategori yaitu Mangga Muda Agrosociopreneur
                dan Creativesociopreneur.</div>
            <a href="{{ route('mangga_muda.register') }}"
                class="font-lb text-4xl text-mangga-yellow-400 hover:text-mangga-yellow-300 text-right">Daftar Sekarang
                <span class="fa fa-fw fa-chevron-right"></span></a>
        </div>
    </div>
    <div class="grid grid-cols-12 h-full md:h-vh-70 xl:h-screen bg-mangga-muda-3 bg-no-repeat bg-cover relative font-pn">
        <div
            class="col-span-12 md:col-span-6 bg-white px-12 md:pl-16 md:pr-24 py-8 flex flex-col text-xl md:absolute md:-top-16 mt-16 md:mt-0">
            <img src="{{ asset('assets/svg/mangga-muda-agrosociopreneur.svg') }}" class="w-full md:w-148">
            <div class="font-bold md:pl-24">Kategori :</div>
            <div class="md:pl-24"><span class="font-bold">On farm</span> (lahan pertanian atau terkait dengan
                budidaya).<br>
                Ex : Petani (budidaya padi, sayuran, tanaman hias,
                dsb.), Pekebun (kelapa sawit, teh, tebu, dsb.),
                Peternak , Nelayan.
            </div>
            <div class="md:pl-24"><span class="font-bold">Off farm</span> (produk non-budidaya atau hasil pasca
                panennya).<br>
                Ex : Pedagang sayuran, Pengepul hasil tani, dsb.
            </div>
        </div>
        <div
            class="col-span-12 md:col-span-6 xl:col-span-7 bg-white px-12 md:pl-16 md:pr-24 py-8 flex flex-col justify-end text-xl md:absolute md:-bottom-128 md:right-0 my-16 md:mt-0">
            <img src="{{ asset('assets/svg/mangga-muda-creativesocipreneur.svg') }}" class="w-148">
            <div class="font-bold pl-24">Kategori :</div>
            <ul class="list-disc text-lg ml-5 mb-4 pl-24">
                <li>Content Creator</li>
                <li>Fashion</li>
                <li>Food & Beverages</li>
                <li>Furniture</li>
                <li>Home Appliances</li>
                <li>Otomotive</li>
                <li>Others</li>
            </ul>
        </div>
    </div>
    <div class="hidden md:grid grid-cols-12 h-vh-50 xl:h-vh-70 bg-mangga-green-300"></div>
    <div class="flex flex-col h-full px-12 xl:px-24 py-8 font-pn" id="timeline">
        <div class="text-6xl font-lb text-mangga-green-500 font-bold">Timeline</div>
        <div class="mb-4">Lomba Mangga Muda akan dilaksanan dengan jadwal berikut:</div>
        <div class="hidden md:flex flex-col gap-y-4">
            <div class="text-4xl font-pn font-bold">Januari</div>
            <div class="grid grid-cols-4 items-start gap-x-4">
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') < date('Y-m-d', strtotime('02/01/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">28</span>
                        <span class="text-lg">Jan</span>
                    </div>
                    <span class="text-lg text-center">Persiapan Web dan WA aktif</span>
                </div>
            </div>
            <div class="text-4xl font-pn font-bold">Februari</div>
            <div class="grid grid-cols-4 items-start gap-x-4">
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('02/01/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('02/04/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">01</span>
                        <span class="text-lg">Feb</span>
                    </div>
                    <span class="text-lg text-center">Surat ke PIKPG dan Sosialisasi dimulai</span>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('02/04/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('02/07/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">04</span>
                        <span class="text-lg">Feb</span>
                    </div>
                    <span class="text-lg text-center">Persiapan Booklet dan Poster</span>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('02/07/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('03/01/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">07</span>
                        <span class="text-lg">Feb</span>
                    </div>
                    <span class="text-lg text-center">Peluncuran Poster & Booklet Pendaftaran & Video Submission
                        dibuka</span>
                </div>
            </div>
            <div class="text-4xl font-pn font-bold">Maret</div>
            <div class="grid grid-cols-4 items-start gap-x-4">
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('03/01/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('03/20/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">01</span>
                        <span class="text-lg">Mar</span>
                    </div>
                    <span class="text-lg text-center">Seleksi Internal dimulai</span>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('03/20/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('03/28/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">20</span>
                        <span class="text-lg">Mar</span>
                    </div>
                    <span class="text-lg text-center">Sosialisasi berakhir</span>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('03/28/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('03/30/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">28</span>
                        <span class="text-lg">Mar</span>
                    </div>
                    <span class="text-lg text-center">Survey dimulai</span>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('03/30/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('04/01/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">30</span>
                        <span class="text-lg">Mar</span>
                    </div>
                    <span class="text-lg text-center">Pendaftaran & Video Submission ditutup</span>
                </div>
            </div>
            <div class="text-4xl font-pn font-bold">April</div>
            <div class="grid grid-cols-4 items-start gap-x-4">
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('04/01/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('04/08/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">01</span>
                        <span class="text-lg">APR</span>
                    </div>
                    <span class="text-lg text-center">Seleksi Internal selesai</span>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('04/08/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('04/10/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">08</span>
                        <span class="text-lg">APR</span>
                    </div>
                    <span class="text-lg text-center">Survey selesai</span>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('04/10/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('04/11/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">10</span>
                        <span class="text-lg">APR</span>
                    </div>
                    <span class="text-lg text-center">Penentuan Pemenang Day 1</span>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('04/11/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('06/19/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">11</span>
                        <span class="text-lg">APR</span>
                    </div>
                    <span class="text-lg text-center">Penentuan Pemenang Day 2</span>
                </div>
            </div>
            <div class="text-4xl font-pn font-bold">Juni</div>
            <div class="grid grid-cols-4 items-start gap-x-4">
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('06/19/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('06/20/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">19</span>
                        <span class="text-lg">Jun</span>
                    </div>
                    <span class="text-lg text-center">Penjurian Eksternal</span>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('06/20/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('06/24/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">20</span>
                        <span class="text-lg">Jun</span>
                    </div>
                    <span class="text-lg text-center">Penjurian Eksternal dan Persiapan Expo</span>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('06/24/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('07/28/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">24</span>
                        <span class="text-lg">Jun</span>
                    </div>
                    <span class="text-lg text-center">Persiapan selesai dan Expo dibuka</span>
                </div>
            </div>
            <div class="text-4xl font-pn font-bold">Juli</div>
            <div class="grid grid-cols-4 items-start gap-x-4">
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if (date('Y-m-d') >= date('Y-m-d', strtotime('07/28/2022'))) @endif bg-gray-300 flex flex-col items-center justify-center w-24 h-24">
                        <span class="text-4xl font-lb">28</span>
                        <span class="text-lg">Jul</span>
                    </div>
                    <span class="text-lg text-center">Expo berakhir dan Awarding</span>
                </div>
            </div>
        </div>
        <flex class="flex-col md:hidden flex gap-y-4">
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') < date('Y-m-d', strtotime('02/01/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">28</span>
                    <span class="text-lg">Jan</span>
                </div>
                <span class="text-lg text-center col-span-3">Persiapan Web dan WA aktif</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('02/01/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('02/04/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">01</span>
                    <span class="text-lg">Feb</span>
                </div>
                <span class="text-lg text-center col-span-3">Surat ke PIKPG dan Sosialisasi dimulai</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('02/04/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('02/07/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">04</span>
                    <span class="text-lg">Feb</span>
                </div>
                <span class="text-lg text-center col-span-3">Persiapan Booklet dan Poster</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('02/07/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('03/01/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">07</span>
                    <span class="text-lg">Feb</span>
                </div>
                <span class="text-lg text-center col-span-3">Peluncuran Poster & Booklet Pendaftaran & Video Submission dibuka</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('03/01/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('03/20/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">01</span>
                    <span class="text-lg">Mar</span>
                </div>
                <span class="text-lg text-center col-span-3">Seleksi Internal dimulai</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('03/20/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('03/28/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">20</span>
                    <span class="text-lg">Mar</span>
                </div>
                <span class="text-lg text-center col-span-3">Sosialisasi berakhir</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('03/28/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('03/30/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">28</span>
                    <span class="text-lg">Mar</span>
                </div>
                <span class="text-lg text-center col-span-3">Survey dimulai</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('03/30/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('04/01/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">30</span>
                    <span class="text-lg">Mar</span>
                </div>
                <span class="text-lg text-center col-span-3">Pendaftaran & Video Submission ditutup</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('04/01/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('04/08/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">01</span>
                    <span class="text-lg">APR</span>
                </div>
                <span class="text-lg text-center col-span-3">Seleksi Internal selesai</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('04/08/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('04/10/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">08</span>
                    <span class="text-lg">APR</span>
                </div>
                <span class="text-lg text-center col-span-3">Survey selesai</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('04/10/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('04/11/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">10</span>
                    <span class="text-lg">APR</span>
                </div>
                <span class="text-lg text-center col-span-3">Penentuan Pemenang Day 1</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('04/11/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('06/19/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">11</span>
                    <span class="text-lg">APR</span>
                </div>
                <span class="text-lg text-center col-span-3">Penentuan Pemenang Day 2</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('06/19/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('06/20/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">19</span>
                    <span class="text-lg">Jun</span>
                </div>
                <span class="text-lg text-center col-span-3">Penjurian Eksternal</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('06/20/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('06/24/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">20</span>
                    <span class="text-lg">Jun</span>
                </div>
                <span class="text-lg text-center col-span-3">Penjurian Eksternal dan Persiapan Expo</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('06/24/2022')) && date('Y-m-d') < date('Y-m-d', strtotime('07/28/2022'))) bg-mangga-green-400 text-white @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">24</span>
                    <span class="text-lg">Jun</span>
                </div>
                <span class="text-lg text-center col-span-3">Persiapan selesai dan Expo dibuka</span>
            </div>
            <div class="grid grid-cols-4 items-center gap-x-4">
                <div
                    class="rounded-full col-span-1 @if (date('Y-m-d') >= date('Y-m-d', strtotime('07/28/2022'))) @endif bg-gray-300 flex flex-col items-center justify-center w-20 h-20">
                    <span class="text-3xl font-lb">28</span>
                    <span class="text-lg">Jul</span>
                </div>
                <span class="text-lg text-center col-span-3">Expo berakhir dan Awarding</span>
            </div>
        </flex>
    </div>
    <div class="flex flex-col gap-y-12 h-vh-30 font-pn">
        <div class="text-6xl font-lb text-center">Semangat Berkompetisi!</div>
        <a href="{{ route('mangga_muda.register') }}"
            class="bg-mangga-orange-300 text-white hover:bg-mangga-orange-400 rounded-md text-center p-4 w-80 xl:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
            Sekarang</a>
    </div>
@endsection

@section('scripts')
    <script>
        function togglePertanyaanAccordion(id) {
            $('.accordion-chevron').removeClass('fa-chevron-down').addClass('fa-chevron-right');
            $('.chevron-' + id).removeClass('fa-chevron-right').addClass('fa-chevron-down');
            $('.accordion-pertanyaan').removeClass('flex').addClass('hidden');
            $('.' + id).removeClass('hidden').addClass('flex');
        }
    </script>
@endsection

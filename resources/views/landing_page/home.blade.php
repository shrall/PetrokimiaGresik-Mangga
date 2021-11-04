@extends('layouts.home')

@section('content')
    <div class="hidden xl:block">
        <div class="flex flex-col content-centerx-4g-home-1 bg-left bg-contain bg-no-repeat px-16 font-os mb-12">
            <div class="col-span-7"></div>
            <div class="col-span-5">
                <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}">
                <div class="text-xl mb-4">Jadilah bagian dari <span class="text-mangga-green-400">Mitra Kebanggaan</span>
                    kami
                </div>
                <a href="#" class="mangga-button-green text-xl">Bergabung</a>
            </div>
        </div>
        <div class="text-6xl text-center font-af text-mangga-green-400 mb-12">Program Mangga</div>
        <div class="flex flex-col items-center px-4 py-8 font-os">
            <div class="col-span-3">
                <img src="{{ asset('assets/img/mangga-gadung.png') }}" alt="" srcset="">
            </div>
            <div class="col-span-9">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make
                a type specimen book.
            </div>
        </div>
        <div class="flex flex-col items-center px-4 py-8 font-os bg-mangga-green-400">
            <div class="col-span-9 text-white">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make
                a type specimen book.
            </div>
            <div class="col-span-3">
                <img src="{{ asset('assets/img/mangga-makmur.png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="flex flex-col items-center px-4 py-8 font-os">
            <div class="col-span-3">
                <img src="{{ asset('assets/img/mangga-arumanis.png') }}" alt="" srcset="">
            </div>
            <div class="col-span-9">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make
                a type specimen book.
            </div>
        </div>
        <div class="flex flex-col items-center px-4font-os bg-light-300 mb-24">
            <div class="col-span-6">
                <div class="text-5xl text-mangga-orange-400 font-medium mb-6">AKAD JASA ADMIN</div>
                <div class="grid grid-cols-2 text-mangga-green-400">
                    <div class="text-5xl"><span class="font-af text-7xl">0.27%</span><br>/bulan</div>
                    <div class="text-5xl"><span class="font-af text-7xl">3.27%</span><br>/bulan</div>
                </div>
            </div>
            <div class="col-span-6">
                <div class="grid grid-cols-2 items-center gap-y-4">
                    <div class="flex items-center text-2xl"><span
                            class="fa fa-fw fa-times-circle text-5xl text-mangga-red-300 mr-2"></span>Tanpa Bunga</div>
                    <div class="flex items-center text-2xl"><span
                            class="fa fa-fw fa-times-circle text-5xl text-mangga-red-300 mr-2"></span>Tanpa Biaya Asuransi
                    </div>
                    <div class="flex items-center text-2xl"><span
                            class="fa fa-fw fa-times-circle text-5xl text-mangga-red-300 mr-2"></span>Tanpa Komisi</div>
                    <div class="flex items-center text-2xl"><span
                            class="fa fa-fw fa-times-circle text-5xl text-mangga-red-300 mr-2"></span>Tanpa Biaya Notaris
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center content-center justify-center text-mangga-green-300 font-af text-8xl mb-12">
            <span class="mb-12">Alur</span> <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                class="w-96 ml-4">
        </div>
        <div class="grid grid-cols-5 items-center gap-4 px-28 mb-24">
            <div class="flex flex-col text-white text-2xl">
                <div class="flex items-center justify-center py-10 bg-mangga-orange-300">Registrasi</div>
                <div
                    class="flex items-center justify-center py-16 border border-mangga-orange-300 text-7xl font-af text-mangga-orange-400">
                    1</div>
            </div>
            <div class="flex flex-col text-white text-2xl">
                <div class="flex items-center justify-center py-10 bg-mangga-green-300">Verifikasi</div>
                <div
                    class="flex items-center justify-center py-16 border border-mangga-green-300 text-7xl font-af text-mangga-green-400">
                    2</div>
            </div>
            <div class="flex flex-col text-white text-2xl">
                <div class="flex items-center justify-center py-10 bg-mangga-orange-300">Penyaluran</div>
                <div
                    class="flex items-center justify-center py-16 border border-mangga-orange-300 text-7xl font-af text-mangga-orange-400">
                    3</div>
            </div>
            <div class="flex flex-col text-white text-2xl">
                <div class="flex items-center justify-center py-10 bg-mangga-green-300 text-center">Pembinaan</div>
                <div
                    class="flex items-center justify-center py-16 border border-mangga-green-300 text-7xl font-af text-mangga-green-400">
                    4</div>
            </div>
            <div class="flex flex-col text-white text-2xl">
                <div class="flex items-center justify-center py-10 bg-mangga-orange-300">Monitoring</div>
                <div
                    class="flex items-center justify-center py-16 border border-mangga-orange-300 text-7xl font-af text-mangga-orange-400">
                    5</div>
            </div>
        </div>
        <img src="{{ asset('assets/svg/asset-home-2.svg') }}" class="w-screen">
        <div class="text-5xl text-center font-af text-mangga-green-400 mb-12">Ajukan Pertanyaan</div>
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-1');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-1" id=""></span>
                    Bagaimana cara menjadi Mitra Kebanggaan Petrokimia Gresik?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-1">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-2');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-2" id=""></span>
                    Berapa lamakah proses menjadi Mitra Kebanggan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-2">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-3');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-3" id=""></span>
                    Apa saja Persyaratan yang perlu disiapkan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <img src="{{ asset('assets/svg/asset-home-3.svg') }}" alt="" srcset="">
        </div>
    </div>
    <div class="hidden md:block xl:hidden">
        <div class="flex flex-col content-centerx-4t-os mb-12">
            <div class="col-span-7 bg-home-1 bg-left bg-contain bg-no-repeat h-vh-40"></div>
            <div class="col-span-5 flex flex-col justify-center">
                <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}">
                <div class="text-sm mb-2">Jadilah bagian dari <span class="text-mangga-green-400">Mitra Kebanggaan</span>
                    kami
                </div>
                <a href="#" class="mangga-button-green text-md self-start">Bergabung</a>
            </div>
        </div>
        <div class="text-6xl text-center font-af text-mangga-green-400 mb-12">Program Mangga</div>
        <div class="flex flex-col items-center px-4 py-8 font-os">
            <div class="col-span-3">
                <img src="{{ asset('assets/img/mangga-gadung.png') }}" alt="" srcset="">
            </div>
            <div class="col-span-9">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make
                a type specimen book.
            </div>
        </div>
        <div class="flex flex-col items-center px-4 py-8 font-os bg-mangga-green-400">
            <div class="col-span-9 text-white">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make
                a type specimen book.
            </div>
            <div class="col-span-3">
                <img src="{{ asset('assets/img/mangga-makmur.png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="flex flex-col items-center px-4 py-8 font-os">
            <div class="col-span-3">
                <img src="{{ asset('assets/img/mangga-arumanis.png') }}" alt="" srcset="">
            </div>
            <div class="col-span-9">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make
                a type specimen book.
            </div>
        </div>
        <div class="flex flex-col items-center px-4font-os bg-light-300 mb-24">
            <div class="col-span-6">
                <div class="text-4xl text-mangga-orange-400 font-medium mb-6">AKAD JASA ADMIN</div>
                <div class="grid grid-cols-2 text-mangga-green-400">
                    <div class="text-3xl"><span class="font-af text-4xl">0.27%</span><br>/bulan</div>
                    <div class="text-3xl"><span class="font-af text-4xl">3.27%</span><br>/bulan</div>
                </div>
            </div>
            <div class="col-span-6">
                <div class="grid grid-cols-2 items-center gap-y-4">
                    <div class="flex items-center text-lg">
                        <span class="fa fa-fw fa-times-circle text-4xl text-mangga-red-300 mr-2"></span>Tanpa Bunga
                    </div>
                    <div class="flex items-center text-lg">
                        <span class="fa fa-fw fa-times-circle text-4xl text-mangga-red-300 mr-2"></span>Tanpa Biaya Asuransi
                    </div>
                    <div class="flex items-center text-lg">
                        <span class="fa fa-fw fa-times-circle text-4xl text-mangga-red-300 mr-2"></span>Tanpa Komisi
                    </div>
                    <div class="flex items-center text-lg">
                        <span class="fa fa-fw fa-times-circle text-4xl text-mangga-red-300 mr-2"></span>Tanpa Biaya Notaris
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center content-center justify-center text-mangga-green-300 font-af text-8xl mb-12">
            <span class="mb-12">Alur</span> <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                class="w-96 ml-4">
        </div>
        <div class="grid grid-cols-5 items-center gap-4 px-16 mb-24">
            <div class="flex flex-col text-white text-lg">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Registrasi</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-af text-mangga-orange-400">
                    1</div>
            </div>
            <div class="flex flex-col text-white text-lg">
                <div class="flex items-center justify-center py-4 bg-mangga-green-300">Verifikasi</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-green-300 text-4xl font-af text-mangga-green-400">
                    2</div>
            </div>
            <div class="flex flex-col text-white text-lg">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Penyaluran</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-af text-mangga-orange-400">
                    3</div>
            </div>
            <div class="flex flex-col text-white text-lg">
                <div class="flex items-center justify-center py-4 bg-mangga-green-300 text-center">Pembinaan</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-green-300 text-4xl font-af text-mangga-green-400">
                    4</div>
            </div>
            <div class="flex flex-col text-white text-lg">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Monitoring</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-af text-mangga-orange-400">
                    5</div>
            </div>
        </div>
        <img src="{{ asset('assets/svg/asset-home-2.svg') }}" class="w-screen">
        <div class="text-5xl text-center font-af text-mangga-green-400 mb-12">Ajukan Pertanyaan</div>
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-1');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-1" id=""></span>
                    Bagaimana cara menjadi Mitra Kebanggaan Petrokimia Gresik?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-1">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-2');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-2" id=""></span>
                    Berapa lamakah proses menjadi Mitra Kebanggan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-2">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-3');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-3" id=""></span>
                    Apa saja Persyaratan yang perlu disiapkan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <img src="{{ asset('assets/svg/asset-home-3.svg') }}" alt="" srcset="">
        </div>
    </div>
    <div class="block md:hidden">
        <div class="flex flex-col items-center justify-center px-4 font-os mb-12">
            <div class="w-full h-vh-40 bg-home-1 bg-center bg-contain bg-no-repeat"></div>
            <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}">
            <div class="text-lg font-semibold mb-2">Jadilah bagian dari <span class="text-mangga-green-400">Mitra
                    Kebanggaan</span>
                kami
            </div>
            <a href="#" class="mangga-button-green text-md">Bergabung</a>
        </div>
        <div class="text-3xl text-center font-af text-mangga-green-400 mb-12">Program Mangga</div>
        <div class="flex flex-col items-center p-8 font-os">
            <img src="{{ asset('assets/img/mangga-gadung.png') }}" alt="" srcset="">
            <div class="text-xl text-center">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make
                a type specimen book.
            </div>
        </div>
        <div class="flex flex-col items-center p-8 font-os bg-mangga-green-400">
            <img src="{{ asset('assets/img/mangga-makmur.png') }}" alt="" srcset="">
            <div class="text-white text-xl text-center">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make
                a type specimen book.
            </div>
        </div>
        <div class="flex flex-col items-center p-8 font-os">
            <img src="{{ asset('assets/img/mangga-arumanis.png') }}" alt="" srcset="">
            <div class="text-xl text-center">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make
                a type specimen book.
            </div>
        </div>
        <div class="flex flex-col items-center px-4 font-os bg-light-300 mb-24 py-8">
            <div class="text-4xl text-mangga-orange-400 font-medium mb-6">AKAD JASA ADMIN</div>
            <div class="grid grid-cols-1 text-mangga-green-400 mb-8">
                <div class="text-5xl"><span class="font-af text-7xl">0.27%</span><br>/bulan</div>
                <div class="text-5xl"><span class="font-af text-7xl">3.27%</span><br>/bulan</div>
            </div>
            <div class="grid grid-cols-1 items-center gap-y-4">
                <div class="flex items-center text-xl">
                    <span class="fa fa-fw fa-times-circle text-5xl text-mangga-red-300"></span>Tanpa Bunga
                </div>
                <div class="flex items-center text-xl">
                    <span class="fa fa-fw fa-times-circle text-5xl text-mangga-red-300"></span>Tanpa Biaya
                    Asuransi
                </div>
                <div class="flex items-center text-xl">
                    <span class="fa fa-fw fa-times-circle text-5xl text-mangga-red-300"></span>Tanpa Komisi
                </div>
                <div class="flex items-center text-xl">
                    <span class="fa fa-fw fa-times-circle text-5xl text-mangga-red-300"></span>Tanpa Biaya Notaris
                </div>
            </div>
        </div>
        <div class="flex items-center content-center justify-center text-mangga-green-300 font-af text-6xl mb-12">
            <span class="mb-6">Alur</span> <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                class="w-52 ml-4">
        </div>
        <div class="grid grid-cols-1 items-center gap-4 px-28 mb-24">
            <div class="flex flex-col text-white text-xl">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Registrasi</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-af text-mangga-orange-400">
                    1</div>
            </div>
            <div class="flex flex-col text-white text-xl">
                <div class="flex items-center justify-center py-4 bg-mangga-green-300">Verifikasi</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-green-300 text-4xl font-af text-mangga-green-400">
                    2</div>
            </div>
            <div class="flex flex-col text-white text-xl">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Penyaluran</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-af text-mangga-orange-400">
                    3</div>
            </div>
            <div class="flex flex-col text-white text-xl">
                <div class="flex items-center justify-center py-4 bg-mangga-green-300 text-center">Pembinaan</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-green-300 text-4xl font-af text-mangga-green-400">
                    4</div>
            </div>
            <div class="flex flex-col text-white text-xl">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Monitoring</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-af text-mangga-orange-400">
                    5</div>
            </div>
        </div>
        <img src="{{ asset('assets/svg/asset-home-2.svg') }}" class="w-screen">
        <div class="text-5xl text-center font-af text-mangga-green-400 mb-12">Ajukan Pertanyaan</div>
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-1');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-md w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-1" id=""></span>
                    Bagaimana cara menjadi Mitra Kebanggaan Petrokimia Gresik?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-md w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-1">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-2');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-md w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-2" id=""></span>
                    Berapa lamakah proses menjadi Mitra Kebanggan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-md w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-2">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-3');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-md w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-3" id=""></span>
                    Apa saja Persyaratan yang perlu disiapkan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-md w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <img src="{{ asset('assets/svg/asset-home-3.svg') }}" alt="" srcset="">
        </div>
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

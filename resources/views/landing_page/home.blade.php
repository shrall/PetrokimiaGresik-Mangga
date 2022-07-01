@extends('layouts.home')

@section('content')
    <div class="hidden xl:block">
        <div
            class="grid grid-cols-12 content-center h-vh-90 bg-landing-page-1 bg-left bg-contain bg-no-repeat px-16 font-pn mb-12">
            <div class="col-span-7"></div>
            <div class="col-span-5">
                <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}">
                <div class="text-xl mb-4">Jadilah bagian dari <span class="text-mangga-green-400">Mitra Kebanggaan</span>
                    kami
                </div>
                <a href="#" class="mangga-button-green text-xl">Bergabung</a>
            </div>
        </div>
        <div class="text-6xl text-center font-lb text-mangga-green-400 mb-12">Program Mangga</div>
        <div class="grid grid-cols-12 items-center pl-16 pr-28 py-8 font-pn">
            <div class="col-span-3">
                <img src="{{ asset('assets/img/mangga-gadung.png') }}" alt="" srcset="">
            </div>
            <div class="col-span-9">
                <span class="font-bold">Mangga Gadung</span> dengan akronim <span class="font-bold">Mitra
                    Kebanggaan - Pedagang Unggul</span>, adalah program yang dikhususkan bagi pedagang pupuk untuk mendorong
                penjualan pupuk non subsidi melalui penyaluran PMK.
            </div>
        </div>
        <div class="grid grid-cols-12 items-center pl-28 pr-16 py-8 font-pn bg-mangga-green-400">
            <div class="col-span-9 text-white">
                <span class="font-bold">Mangga Makmur (Majukan Usaha Rakyat)</span>merupakan program pertanian terpadu
                yang diinisiasi oleh Pupuk Indonesia dan PUMK merupakan bagian kecil dari integrasi program tersebut.
            </div>
            <div class="col-span-3">
                <img src="{{ asset('assets/img/mangga-makmur.png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="grid grid-cols-12 items-center pl-16 pr-28 py-8 font-pn">
            <div class="col-span-3">
                <img src="{{ asset('assets/img/mangga-arumanis.png') }}" alt="" srcset="">
            </div>
            <div class="col-span-9">
                <span class="font-bold">Mangga Arumanis (Asuransi maksimal untuk pertanian strategis)</span>adalah
                program pembinaan sektor pertanian dengan memberikan proteksi asuransi terhadap usaha pertanian mitra
                binaan.
            </div>
        </div>
        <div class="grid grid-cols-12 items-center px-28 py-8 font-pn bg-light-300 mb-24">
            <div class="col-span-6">
                <div class="text-5xl text-mangga-orange-400 font-medium mb-6">AKAD JASA ADMIN</div>
                <div class="grid grid-cols-2 text-mangga-green-400">
                    <div class="text-5xl"><span class="font-lb text-7xl">0.27%</span><br>/bulan</div>
                    <div class="text-5xl"><span class="font-lb text-7xl">3.27%</span><br>/bulan</div>
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
        <div class="flex items-center content-center justify-center text-mangga-green-300 font-lb text-8xl mb-12">
            <span class="mb-12">Alur</span> <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                class="w-96 ml-4">
        </div>
        <div class="grid grid-cols-5 items-center gap-4 px-28 pb-24">
            <div class="flex flex-col text-white text-2xl">
                <div class="flex items-center justify-center py-10 bg-mangga-orange-300">Registrasi</div>
                <div
                    class="flex items-center justify-center py-16 border border-mangga-orange-300 text-7xl font-lb text-mangga-orange-400">
                    1</div>
            </div>
            <div class="flex flex-col text-white text-2xl">
                <div class="flex items-center justify-center py-10 bg-mangga-green-300">Verifikasi</div>
                <div
                    class="flex items-center justify-center py-16 border border-mangga-green-300 text-7xl font-lb text-mangga-green-400">
                    2</div>
            </div>
            <div class="flex flex-col text-white text-2xl">
                <div class="flex items-center justify-center py-10 bg-mangga-orange-300">Penyaluran</div>
                <div
                    class="flex items-center justify-center py-16 border border-mangga-orange-300 text-7xl font-lb text-mangga-orange-400">
                    3</div>
            </div>
            <div class="flex flex-col text-white text-2xl">
                <div class="flex items-center justify-center py-10 bg-mangga-green-300 text-center">Pembinaan</div>
                <div
                    class="flex items-center justify-center py-16 border border-mangga-green-300 text-7xl font-lb text-mangga-green-400">
                    4</div>
            </div>
            <div class="flex flex-col text-white text-2xl">
                <div class="flex items-center justify-center py-10 bg-mangga-orange-300">Monitoring</div>
                <div
                    class="flex items-center justify-center py-16 border border-mangga-orange-300 text-7xl font-lb text-mangga-orange-400">
                    5</div>
            </div>
        </div>
        <div class="grid grid-cols-12 items-center gap-4 px-28 bg-mangga-green-300 my-32">
            <div class="col-span-5 flex items-center justify-center">
                <img src="{{ asset('assets/svg/android-mockup.svg') }}" class="absolute w-80">
            </div>
            <div class="col-span-7 text-white py-24 flex flex-col gap-y-4">
                <div class="font-lb text-6xl">Segera Rilis</div>
                <div class="text-2xl">Anda dapat bergabung menjadi Mitra Kebanggaan Mangga melalui aplikasi
                    Mangga.<br>Aplikasi
                    dapat diunduh melalui Google Play Store.<br>Yuk, jadilah bagian dari Mitra Kebanggaan kami!</div>
                <img src="{{ asset('assets/svg/google-play-button.svg') }}" class="w-80">
            </div>
        </div>
    </div>
    <div class="hidden md:block xl:hidden">
        <div class="grid grid-cols-12 content-center px-16 font-pn mb-12">
            <div class="col-span-7 bg-landing-page-1 bg-left bg-contain bg-no-repeat h-vh-40"></div>
            <div class="col-span-5 flex flex-col justify-center">
                <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}">
                <div class="text-sm mb-2">Jadilah bagian dari <span class="text-mangga-green-400">Mitra Kebanggaan</span>
                    kami
                </div>
                <a href="#" class="mangga-button-green text-md self-start">Bergabung</a>
            </div>
        </div>
        <div class="text-6xl text-center font-lb text-mangga-green-400 mb-12">Program Mangga</div>
        <div class="grid grid-cols-12 items-center pl-16 pr-28 py-8 font-pn">
            <div class="col-span-3">
                <img src="{{ asset('assets/svg/mangga-gadung.svg') }}" alt="" srcset="">
            </div>
            <div class="col-span-9">
                <span class="font-bold">Mangga Gadung</span> dengan akronim <span class="font-bold">Mitra
                    Kebanggaan - Pedagang Unggul</span>, adalah program yang dikhususkan bagi pedagang pupuk untuk mendorong
                penjualan pupuk non subsidi melalui penyaluran PMK.
            </div>
        </div>
        <div class="grid grid-cols-12 items-center pl-28 pr-16 py-8 font-pn bg-mangga-green-400">
            <div class="col-span-9 text-white">
                <span class="font-bold">Mangga Makmur (Majukan Usaha Rakyat)</span>merupakan program pertanian terpadu
                yang diinisiasi oleh Pupuk Indonesia dan PUMK merupakan bagian kecil dari integrasi program tersebut.
            </div>
            <div class="col-span-3">
                <img src="{{ asset('assets/svg/mangga-makmur.svg') }}" alt="" srcset="">
            </div>
        </div>
        <div class="grid grid-cols-12 items-center pl-16 pr-28 py-8 font-pn">
            <div class="col-span-3">
                <img src="{{ asset('assets/img/mangga-arumanis.png') }}" alt="" srcset="">
            </div>
            <div class="col-span-9">
                <span class="font-bold">Mangga Arumanis (Asuransi maksimal untuk pertanian strategis)</span>adalah
                program pembinaan sektor pertanian dengan memberikan proteksi asuransi terhadap usaha pertanian mitra
                binaan.
            </div>
        </div>
        <div class="grid grid-cols-12 items-center px-16 py-8 font-pn bg-light-300 mb-24">
            <div class="col-span-6">
                <div class="text-4xl text-mangga-orange-400 font-medium mb-6">AKAD JASA ADMIN</div>
                <div class="grid grid-cols-2 text-mangga-green-400">
                    <div class="text-3xl"><span class="font-lb text-4xl">0.27%</span><br>/bulan</div>
                    <div class="text-3xl"><span class="font-lb text-4xl">3.27%</span><br>/bulan</div>
                </div>
            </div>
            <div class="col-span-6">
                <div class="grid grid-cols-2 items-center gap-y-4">
                    <div class="flex items-center text-lg">
                        <span class="fa fa-fw fa-times-circle text-4xl text-mangga-red-300 mr-2"></span>Tanpa Bunga
                    </div>
                    <div class="flex items-center text-lg">
                        <span class="fa fa-fw fa-times-circle text-4xl text-mangga-red-300 mr-2"></span>Tanpa Biaya
                        Asuransi
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
        <div class="flex items-center content-center justify-center text-mangga-green-300 font-lb text-8xl pb-12">
            <span class="mb-12">Alur</span> <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                class="w-96 ml-4">
        </div>
        <div class="grid grid-cols-5 items-center gap-4 px-16 mb-24">
            <div class="flex flex-col text-white text-lg">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Registrasi</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-lb text-mangga-orange-400">
                    1</div>
            </div>
            <div class="flex flex-col text-white text-lg">
                <div class="flex items-center justify-center py-4 bg-mangga-green-300">Verifikasi</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-green-300 text-4xl font-lb text-mangga-green-400">
                    2</div>
            </div>
            <div class="flex flex-col text-white text-lg">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Penyaluran</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-lb text-mangga-orange-400">
                    3</div>
            </div>
            <div class="flex flex-col text-white text-lg">
                <div class="flex items-center justify-center py-4 bg-mangga-green-300 text-center">Pembinaan</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-green-300 text-4xl font-lb text-mangga-green-400">
                    4</div>
            </div>
            <div class="flex flex-col text-white text-lg">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Monitoring</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-lb text-mangga-orange-400">
                    5</div>
            </div>
        </div>
        <div class="grid grid-cols-12 items-center gap-4 px-28 bg-mangga-green-300 my-32">
            <div class="col-span-5 flex items-center justify-center">
                <img src="{{ asset('assets/svg/android-mockup.svg') }}" class="absolute w-56">
            </div>
            <div class="col-span-7 text-white py-24 flex flex-col gap-y-4">
                <div class="font-lb text-6xl">Segera Rilis</div>
                <div class="text-2xl">Anda dapat bergabung menjadi Mitra Kebanggaan Mangga melalui aplikasi
                    Mangga.<br>Aplikasi
                    dapat diunduh melalui Google Play Store.<br>Yuk, jadilah bagian dari Mitra Kebanggaan kami!</div>
                <img src="{{ asset('assets/svg/google-play-button.svg') }}" class="w-64">
            </div>
        </div>
    </div>
    <div class="sm:block md:hidden xl:hidden">
        <div class="flex flex-col items-center justify-center px-4 font-pn mb-12">
            <div class="w-full h-vh-40 bg-landing-page-1 bg-center bg-contain bg-no-repeat"></div>
            <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}">
            <div class="text-lg font-semibold mb-2">Jadilah bagian dari <span class="text-mangga-green-400">Mitra
                    Kebanggaan</span>
                kami
            </div>
            <a href="#" class="mangga-button-green text-md">Bergabung</a>
        </div>
        <div class="text-3xl text-center font-lb text-mangga-green-400 mb-12">Program Mangga</div>
        <div class="flex flex-col items-center p-8 font-pn">
            <img src="{{ asset('assets/img/mangga-gadung.png') }}" alt="" srcset="">
            <div class="text-xl text-center">
                <span class="font-bold">Mangga Gadung</span> dengan akronim <span class="font-bold">Mitra
                    Kebanggaan - Pedagang Unggul</span>, adalah program yang dikhususkan bagi pedagang pupuk untuk mendorong
                penjualan pupuk non subsidi melalui penyaluran PMK.
            </div>
        </div>
        <div class="flex flex-col items-center p-8 font-pn bg-mangga-green-400">
            <img src="{{ asset('assets/img/mangga-makmur.png') }}" alt="" srcset="">
            <div class="text-white text-xl text-center">
                <span class="font-bold">Mangga Makmur (Majukan Usaha Rakyat)</span>merupakan program pertanian terpadu
                yang diinisiasi oleh Pupuk Indonesia dan PUMK merupakan bagian kecil dari integrasi program tersebut.
            </div>
        </div>
        <div class="flex flex-col items-center p-8 font-pn">
            <img src="{{ asset('assets/img/mangga-arumanis.png') }}" alt="" srcset="">
            <div class="text-xl text-center">
                <span class="font-bold">Mangga Arumanis (Asuransi maksimal untuk pertanian strategis)</span>adalah
                program pembinaan sektor pertanian dengan memberikan proteksi asuransi terhadap usaha pertanian mitra
                binaan.
            </div>
        </div>
        <div class="flex flex-col items-center px-4 font-pn bg-light-300 mb-24 py-8">
            <div class="text-4xl text-mangga-orange-400 font-medium mb-6">AKAD JASA ADMIN</div>
            <div class="grid grid-cols-1 text-mangga-green-400 mb-8">
                <div class="text-5xl"><span class="font-lb text-7xl">0.27%</span><br>/bulan</div>
                <div class="text-5xl"><span class="font-lb text-7xl">3.27%</span><br>/bulan</div>
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
        <div class="flex items-center content-center justify-center text-mangga-green-300 font-lb text-6xl mb-12">
            <span class="mb-6">Alur</span> <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                class="w-52 ml-4">
        </div>
        <div class="grid grid-cols-1 items-center gap-4 px-28 pb-12">
            <div class="flex flex-col text-white text-xl">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Registrasi</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-lb text-mangga-orange-400">
                    1</div>
            </div>
            <div class="flex flex-col text-white text-xl">
                <div class="flex items-center justify-center py-4 bg-mangga-green-300">Verifikasi</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-green-300 text-4xl font-lb text-mangga-green-400">
                    2</div>
            </div>
            <div class="flex flex-col text-white text-xl">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Penyaluran</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-lb text-mangga-orange-400">
                    3</div>
            </div>
            <div class="flex flex-col text-white text-xl">
                <div class="flex items-center justify-center py-4 bg-mangga-green-300 text-center">Pembinaan</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-green-300 text-4xl font-lb text-mangga-green-400">
                    4</div>
            </div>
            <div class="flex flex-col text-white text-xl">
                <div class="flex items-center justify-center py-4 bg-mangga-orange-300">Monitoring</div>
                <div
                    class="flex items-center justify-center py-8 border border-mangga-orange-300 text-4xl font-lb text-mangga-orange-400">
                    5</div>
            </div>
        </div>
        <div class="grid grid-cols-12 items-center px-4 py-4 bg-mangga-green-300 my-32">
            <div class="col-span-12 flex items-center justify-center">
                <img src="{{ asset('assets/svg/android-mockup.svg') }}" class="w-80">
            </div>
            <div class="col-span-12 text-white flex flex-col items-center text-center gap-y-4">
                <div class="font-lb text-6xl">Segera Rilis</div>
                <div class="text-2xl">Anda dapat bergabung menjadi Mitra Kebanggaan Mangga melalui aplikasi
                    Mangga.<br>Aplikasi
                    dapat diunduh melalui Google Play Store.<br>Yuk, jadilah bagian dari Mitra Kebanggaan kami!</div>
                <img src="{{ asset('assets/svg/google-play-button.svg') }}" class="w-80">
            </div>
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
    <script>
        function openModal(type) {
            $('#' + type + '-modal').removeClass('hidden').addClass('flex');
        }

        function closeModal() {
            $('.modal').removeClass('flex').addClass('hidden');
        }
    </script>
@endsection

@section('modals')
    @if ($event->status == 1)
        <div class="absolute w-screen h-screen flex items-center justify-center modal">
            <div class="bg-black opacity-50 w-screen h-screen absolute background-modal"></div>
            <div class="rounded-lg bg-white px-8 py-6 absolute flex flex-col items-center justify-center gap-y-2 w-4/5">
                <span class="fa fa-fw fa-times text-xl hover:text-red-600 absolute top-4 right-4 cursor-pointer"
                    onclick="closeModal();"></span>
                <div class="flex items-center justify-center w-full">
                    <div class="text-2xl font-bold">PENGUMUMAN</div>
                </div>
                <hr>
                <img src="{{ asset('assets/img/mhe-logo.png') }}" class="w-3/5">
                <div class="text-xl py-2 text-center">MHE (Manga Hybrid Expo) 2022 adalah ajang pameran yang dilaksanakan
                    secara
                    offline dan online bagi Mitra Kebanggaan Petrokimia Gresik yang terpilih untuk
                    menunjukkan produk-produk unggulan mereka. MHE 2022 adalah rangkaian acara
                    HUT ke 50 PT Petrokimia Gresik.</div>
                <a href="{{ route('mhe.home') }}" class="mangga-button-green w-full cursor-pointer">
                    Check Sekarang
                </a>
            </div>
        </div>
    @endif
@endsection

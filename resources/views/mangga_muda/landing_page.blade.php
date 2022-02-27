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
            <img src="{{ asset('assets/img/landing-mangga-muda-2.png') }}"
                class="w-full absolute md:-left-8 -top-16 md:-top-32" id="tentang">
        </div>
        <div class="col-span-12 md:col-span-6 flex flex-col gap-y-4 px-12 pt-64 bg-mangga-green-300">
            <div class="font-lb text-6xl text-white">Program Mangga Muda</div>
            <div class="text-xl text-white">Program Mangga Muda dibagi menjadi 2 kategori yaitu Mangga Muda Agrosociopreneur
                dan Creativesociopreneur.</div>
            @guest
                <a href="{{ route('mangga_muda.register') }}"
                    class="font-lb text-4xl text-mangga-yellow-400 hover:text-mangga-yellow-300 text-right">Daftar Sekarang
                    <span class="fa fa-fw fa-chevron-right"></span>
                </a>
            @endguest
            @auth
                <a href="{{ route('user.form_mangga') }}"
                    class="font-lb text-4xl text-mangga-yellow-400 hover:text-mangga-yellow-300 text-right">Daftar Sekarang
                    <span class="fa fa-fw fa-chevron-right"></span>
                </a>
            @endauth
        </div>
    </div>
    <div class="grid grid-cols-12 h-full md:h-vh-70 xl:h-screen bg-mangga-muda-3 bg-no-repeat bg-cover relative font-pn">
        <div
            class="col-span-12 md:col-span-6 bg-white px-12 md:pl-16 md:pr-24 py-8 flex flex-col text-xl md:absolute md:-top-16 mt-16 md:mt-0">
            <img src="{{ asset('assets/svg/mangga-muda-agrosociopreneur.svg') }}" class="w-full md:w-148">
            <div class="md:pl-24">Program kompetisi pendanaan dan pemberian pembinaan serta pengembangan<br>
                bagi para generasi muda yang memiliki usaha di bidang Agrosocio.</div>
            <div class="font-bold md:pl-24">Kategori :</div>
            <div class="md:pl-24">
                <span class="font-bold">On farm</span> (Usaha Budidaya).<br>
                Sub kategori : Pertanian, Perkebunan, Peternakan, Perikanan
            </div>
            <div class="md:pl-24"><span class="font-bold">Off farm</span> (Usaha Pengolahan Hasil Budidaya).<br>
            </div>
        </div>
        <div
            class="col-span-12 md:col-span-6 xl:col-span-7 bg-white px-12 md:pl-16 md:pr-24 py-8 flex flex-col justify-end text-xl md:absolute md:-bottom-128 md:right-0 my-16 md:mt-0">
            <img src="{{ asset('assets/svg/mangga-muda-creativesocipreneur.svg') }}" class="w-148">
            <div class="pl-24">
                Program kompetisi pendanaan dan pemberian pembinaan serta pengembangan<br>
                bagi para generasi muda yang memiliki usaha di bidang Industri Kreatif.</div>
            <div class="font-bold pl-24">Kategori :</div>
            <ul class="list-disc text-lg ml-5 mb-4 pl-24">
                <li>Content Creator, Cinematography, Photography</li>
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
        <div class="grid grid-col-1 xl:grid-cols-5 gap-12 bg-mangga-green-400 py-8">
            <div class="flex flex-col items-center justify-center">
                <div class="w-24 h-36 bg-buah bg-contain bg-no-repeat bg-center text-center pt-12 pl-4 text-sm">
                    1 Feb -<br>20 Mei
                    <br><br>
                    <span class="text-mangga-yellow-400">Pendaftaran</span>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="w-24 h-36 bg-buah bg-contain bg-no-repeat bg-center text-center pt-12 pl-4 text-sm">
                    1 Feb -<br>20 Mei
                    <br><br>
                    <span class="text-mangga-yellow-400">Pengumpulan Proposal</span>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="w-24 h-36 bg-buah bg-contain bg-no-repeat bg-center text-center pt-12 pl-4 text-sm">
                    20<br>Mei
                    <br><br>
                    <span class="text-mangga-yellow-400">Booth Camp</span>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="w-24 h-36 bg-buah bg-contain bg-no-repeat bg-center text-center pt-12 pl-4 text-sm">
                    24 Juni<br>- 2 Juli
                    <br><br>
                    <span class="text-mangga-yellow-400 font-bold">Mangga Hybrid Expo</span>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="w-24 h-36 bg-buah bg-contain bg-no-repeat bg-center text-center pt-12 pl-4 text-sm">
                    2<br>Juli
                    <br><br>
                    <span class="text-mangga-yellow-400">Awarding</span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-y-12 h-vh-30 font-pn">
        <div class="text-3xl xl:text-6xl font-lb text-center">Semangat Berkompetisi!</div>
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

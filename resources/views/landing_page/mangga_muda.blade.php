@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        @include('landing_page.inc.profil_sidebar')
        <div class="col-span-10 md:col-span-7 2xl:col-span-8 flex flex-col gap-y-4 py-4 px-8">
            <div class="text-6xl font-lb text-mangga-green-400 mb-4">Program Mangga Muda</div>
            <img src="{{ asset('assets/img/mangga-muda.png') }}" class="w-128 mx-auto">
            <div class="border border-gray-400 px-12 bg-white mb-4 grid grid-cols-12 items-center py-8 font-pn">
                <div class="col-span-12 xl:col-span-3">
                    <img src="{{ asset('assets/svg/mangga-muda-agrosociopreneur.svg') }}" alt="" srcset="">
                </div>
                <div class="col-span-12 xl:col-span-9 text-xl">
                    Program kompetisi pendanaan, serta
                    pemberian pembinaan, dan
                    pengembangan bagi para generasi
                    muda yang memiliki usaha
                    (entrepreneur) di bidang
                    agrosociopreneur
                </div>
            </div>
            <div class="border border-gray-400 px-12 bg-white mb-4 grid grid-cols-12 items-center py-8 font-pn">
                <div class="col-span-12 xl:col-span-3 block xl:hidden">
                    <img src="{{ asset('assets/svg/mangga-muda-creativesocipreneur.svg') }}" alt="" srcset="">
                </div>
                <div class="col-span-12 xl:col-span-9 text-xl">
                    menurut britishcouncil adalah sebutan untuk
                    orang yang berwirausaha di bidang kreatif
                    dan mengembangkan inisiatif (festival,
                    pameran, dll) untuk mengembangkan pasar
                    industri kreatif.
                </div>
                <div class="col-span-12 xl:col-span-3 hidden xl:block">
                    <img src="{{ asset('assets/svg/mangga-muda-creativesocipreneur.svg') }}" alt="" srcset="">
                </div>
            </div>
            <div class="grid grid-cols-12 md:gap-x-12 mb-4">
                <div class="col-span-12 md:col-span-6 flex flex-col gap-y-4">
                    <img src="{{ asset('assets/svg/mangga-muda-agrosociopreneur.svg') }}" class="w-80">
                    <div class="font-bold">Kategori :</div>
                    <div><span class="font-bold">On farm</span> (lahan pertanian atau terkait dengan
                        budidaya).<br>
                        Ex : Petani (budidaya padi, sayuran, tanaman hias,
                        dsb.), Pekebun (kelapa sawit, teh, tebu, dsb.),
                        Peternak , Nelayan.
                    </div>
                    <div><span class="font-bold">Off farm</span> (produk non-budidaya atau hasil pasca
                        panennya).<br>
                        Ex : Pedagang sayuran, Pengepul hasil tani, dsb.
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 flex flex-col gap-y-4">
                    <img src="{{ asset('assets/svg/mangga-muda-creativesocipreneur.svg') }}" class="w-80">
                    <div class="font-bold">Kategori :</div>
                    <ul class="list-disc text-lg ml-5 mb-4">
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
            <div class="text-4xl text-center font-lb text-mangga-green-400">Tertarik? Daftar Sekarang.</div>
            <div class="flex flex-col md:flex-row items-center gap-x-4">
                <a href="{{ route('mangga_muda.register') }}"
                    class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-72 md:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                    Mangga Agrosociopreneur</a>
                <a href="{{ route('mangga_muda.register') }}"
                    class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-72 md:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                    Mangga Creativesociopreneur</a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

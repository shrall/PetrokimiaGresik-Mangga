@extends('layouts.muda')

@section('content')
    <div class="grid grid-cols-12 h-screen pb-48" id="beranda">
        <div class="col-span-2"></div>
        <div class="col-span-10 bg-mangga-muda-1 bg-cover relative">
            <img src="{{asset('assets/svg/mangga-muda.svg')}}" class="absolute w-148 top-12 -left-64">
        </div>
    </div>
    <div class="grid grid-cols-12 h-screen bg-mangga-green-300">
        <div class="col-span-2"></div>
        <div class="col-span-4 relative">
            <img src="{{asset('assets/img/mangga-muda-2.png')}}" class="w-full absolute -left-8 -top-24" id="tentang">
        </div>
        <div class="col-span-6 flex flex-col gap-y-4 px-12 pt-64">
            <div class="font-af text-6xl text-white">Program Mangga Muda</div>
            <div class="text-xl text-white">Program Mangga Muda dibagi menjadi 2 kategori yaitu Mangga Muda Agrosociopreneur dan Creativesociopreneur.</div>
            <a href="{{route('mangga_muda.register')}}" class="font-af text-4xl text-mangga-yellow-400 hover:text-mangga-yellow-300 text-right">Daftar Sekarang <span class="fa fa-fw fa-chevron-right"></span></a>
        </div>
    </div>
    <div class="grid grid-cols-12 h-screen bg-mangga-muda-3 bg-no-repeat bg-cover relative">
        <div class="col-span-6 bg-white pl-16 pr-24 py-8 flex flex-col gap-y-8 text-xl absolute -top-16">
            <img src="{{ asset('assets/svg/mangga-muda-agrosociopreneur.svg') }}" class="w-148">
            <div class="font-bold pl-24">Kategori :</div>
            <div class="pl-24"><span class="font-bold">On farm</span> (lahan pertanian atau terkait dengan
                budidaya).<br>
                Ex : Petani (budidaya padi, sayuran, tanaman hias,
                dsb.), Pekebun (kelapa sawit, teh, tebu, dsb.),
                Peternak , Nelayan.
            </div>
            <div class="pl-24"><span class="font-bold">Off farm</span> (produk non-budidaya atau hasil pasca
                panennya).<br>
                Ex : Pedagang sayuran, Pengepul hasil tani, dsb.
            </div>
        </div>
        <div class="col-span-7 bg-white pl-16 pr-24 py-8 flex flex-col justify-end gap-y-8 text-xl absolute -bottom-128 right-0">
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
    <div class="grid grid-cols-12 h-vh-70 bg-mangga-green-300"></div>
    <div class="flex flex-col h-vh-70 px-24 py-8" id="timeline">
        <div class="text-6xl font-af">Timeline</div>
        <div class="mb-24">Lomba Mangga Muda akan dilaksanan dengan jadwal berikut:</div>
        <img src="{{asset('assets/svg/mangga-muda-timeline.svg')}}" class="w-full mb-12">
    </div>
    <div class="flex flex-col gap-y-12 h-vh-30">
        <div class="text-6xl font-af text-center">Semangat Berkompetisi!</div>
        <a href="{{ route('mangga_muda.register') }}"
            class="bg-mangga-orange-300 text-white hover:bg-mangga-orange-400 rounded-md text-center p-4 w-80 2xl:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
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

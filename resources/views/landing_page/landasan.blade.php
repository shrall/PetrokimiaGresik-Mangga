@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        <div class="col-span-10 flex flex-col gap-y-4 py-4 px-8 items-center justify-center">
            <div class="text-6xl font-af text-mangga-green-400 mb-8">Landasan Mangga</div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-24 md:gap-y-0 md:gap-x-8 items-center justify-center py-24">
                <div class="border border-gray-400 px-2 md:px-12 pt-16 h-80 bg-white flex items-center justify-center relative">
                    <img src="{{asset('assets/svg/landasan-1.svg')}}" class="absolute w-40 -top-20">
                    <div class="text-center">PERATURAN MENTERI BADAN USAHA MILIK NEGARA<br>REPUBLIK INDONESIA<br>NOMOR
                        PER-05/MBU/04/2021<br>TENTANG<br>PROGRAM TANGGUNG JAWAB SOSIAL DAN LINGKUNGAN<br>BADAN USAHA MILIK
                        NEGARA</div>
                </div>
                <div class="border border-gray-400 px-2 md:px-12 pt-16 h-80 bg-white flex items-center justify-center relative">
                    <img src="{{asset('assets/svg/landasan-2.svg')}}" class="absolute w-40 -top-20">
                    <div class="text-center">SK Direksi nomor: 0410/B/OT.01.03/69/SK/2020<br>tanggal 15 November
                        2020<br>tentang
                        Pelaksanaan Program Kemitraan dan<br>Program Bina Lingkungan PT Petrokimia Gresik</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

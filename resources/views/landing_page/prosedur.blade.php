@extends('layouts.home')

@section('content')
    <div class="text-center text-mangga-green-400 font-af text-4xl pt-24 mb-4">Prosedur menjadi Mitra Binaan</div>
    <div class="text-center text-mangga-green-400 font-os text-xl mb-2">sesuai dengan</div>
    <div class="text-center text-mangga-green-400 font-os text-xl">INSTRUKSI KERJA</div>
    <div class="text-center text-mangga-green-400 font-os text-xl pb-16">MEKANISME MENJADI MB PROGRAM PUMK 2021</div>
    <div class="mx-64 border border-gray-400 px-12 py-16 bg-white mb-12">
        <div class="text-3xl font-bold mb-2">Kriteria UMK yang dapat menjadi mitra binaan BUMN :</div>
        <ol class="list-decimal text-lg ml-5">
            <li>FC KTP</li>
            <li>FC Kartu Susunan Keluarga (KSK)</li>
            <li>FC SIUP & TDP / IU & NIB</li>
            <li>FC NPWP</li>
            <li>FC Rekening Bank BNI</li>
            <li>Foto 4x6 1 Lembar</li>
            <li>Jaminan Agunan Sertifikat Tanah (SHM)</li>
            <li>Surat Keterangan Usaha/Lahan Garapan dari Desa</li>
            <li>Setempat</li>
        </ol>
    </div>
    <div class="mx-64 border border-gray-400 px-12 py-16 bg-white mb-12">
        <div class="text-3xl font-bold mb-2">Kriteria UMK yang dapat menjadi mitra binaan BUMN :</div>
        <ol class="list-decimal text-lg ml-5">
            <li>FC KTP</li>
            <li>FC Kartu Susunan Keluarga (KSK)</li>
            <li>FC SIUP & TDP / IU & NIB</li>
            <li>FC NPWP</li>
            <li>FC Rekening Bank BNI</li>
            <li>Foto 4x6 1 Lembar</li>
            <li>Jaminan Agunan Sertifikat Tanah (SHM)</li>
            <li>Surat Keterangan Usaha/Lahan Garapan dari Desa</li>
            <li>Setempat</li>
        </ol>
    </div>
    <img src="{{ asset('assets/svg/asset-prosedur-1.svg') }}" class="w-screen">
    <div class="text-center text-mangga-green-400 font-af text-4xl pt-24 mb-24">Prosedur menjadi Mitra Binaan</div>
    <div class="grid grid-cols-12 items-center justify center mx-52 bg-prosedur-2 bg-contain bg-no-repeat bg-right h-vh-80 ">
        <div class="col-span-6 border border-gray-400 bg-white">
            <img src="{{ asset('assets/img/mangga-gadung.png') }}">
            <div class="text-2xl px-12 mb-4">“Mangga Gadung” Mitra Kebanggaan - Pedagang Unggul, Program pembiayaan dan
                literasi keuangan bagi pedangang pupuk dengan benefit:</div>
            <div class="text-2xl font-bold px-12 mb-4">DAPATKAN FASILITAS PINJAMAN</div>
            <div class="text-2xl px-12 mb-12">
                <ul>
                    <li><span class="fa fa-fw fa-leaf text-mangga-green-400"></span>Pinjaman Modal hingga 200 Juta*</li>
                    <li><span class="fa fa-fw fa-leaf text-mangga-green-400"></span>Jangka Pinjaman Sampai 3 Tahun</li>
                    <li><span class="fa fa-fw fa-leaf text-mangga-green-400"></span>Pembinaan Penjualan</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 items-center justify center mx-52 bg-prosedur-3 bg-contain bg-no-repeat bg-left h-vh-80 ">
        <div class="col-span-6"></div>
        <div class="col-span-6 border border-gray-400 bg-white">
            <img src="{{ asset('assets/img/mangga-arumanis.png') }}">
            <div class="text-2xl px-12 mb-4">“Mangga Arumanis” asuransi maksimal untuk pertanian strategis. Program literasi
                Asuransi Usaha Tani Padi (AUTP) bagi petani binaan PT Petrokimia Gresik dengan benefit:</div>
            <div class="text-2xl font-bold px-12 mb-4">DAPATKAN FASILITAS PINJAMAN</div>
            <div class="text-2xl px-12 mb-12">
                <ul>
                    <li><span class="fa fa-fw fa-leaf text-mangga-green-400"></span>Pinjaman Modal hingga 100 Juta*</li>
                    <li><span class="fa fa-fw fa-leaf text-mangga-green-400"></span>rantuan Asuransi Usaha Tani Padi (AUTP)
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 items-center justify center mx-52 bg-prosedur-4 bg-contain bg-no-repeat bg-right h-vh-80">
        <div class="col-span-7 border border-gray-400 bg-white">
            <img src="{{ asset('assets/img/mangga-makmur.png') }}">
            <div class="text-2xl px-12 mb-4">Program Mangga Makmur adalah program pertanian terpadu yang diinisiasi oleh
                Pupuk lndonesia dan PUMK merupakan bagian kecil dari integrasi program tersebut.</div>
            <div class="text-3xl font-bold px-12 mb-12">Program pembiayaan yang dikhususkan bagi petani atau pekebun yang
                tergabung pada program pertanian terpadu “<span class="text-mangga-green-400">MAKMUR</span>”
            </div>
        </div>
    </div>
    <div class="w-full h-8"></div>
@endsection

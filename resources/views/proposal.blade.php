<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="px-16 py-12 bg-cover bg-bottom" style="background-image: url(http://mangga.test/assets/img/proposal-cover.jpg);">
    <div class="flex items-center justify-between mb-4">
        <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}" class="w-64">
        <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}" class="w-64">
    </div>
    <div class="text-center text-2xl">
        Jl. Jenderal Ahmad Yani Gresik (61119)
    </div>
    <div class="text-center text-2xl">
        Telepon : 031.398.2100, 398.2200. Ext. : 2752, 2950, 2918
    </div>
    <div class="text-center text-2xl">
        Fax. : 031.398.2834. E-mail : <a href="mailto:mangga@petrokimia-gresik.com"
            class="text-blue-600 underline">mangga@petrokimia-gresik.com</a>
    </div>
    <hr class="bg-black mt-2 mb-8">
    <div class="border-2 border-black px-6 py-4 mb-12">
        <div class="text-5xl text-center font-bold">PROPOSAL</div>
        <div class="text-4xl text-center font-bold">PROGRAM PENDANAAN UMK</div>
        <div class="text-4xl text-center font-bold">(USAHA MIKRO & KECIL) </div>
        <div class="mt-4 mb-8 grid grid-cols-12 items-center justify-center text-2xl">
            <div class="col-span-4"></div>
            <div class="col-span-2">Nomor</div>
            <div class="col-span-4">: 0888888888888</div>
            <div class="col-span-2"></div>
            <div class="col-span-4"></div>
            <div class="col-span-2">Tanggal</div>
            <div class="col-span-4">: 27 / Januari / 2022</div>
            <div class="col-span-2"></div>
            <div class="col-span-4"></div>
            <div class="col-span-2">Tahap</div>
            <div class="col-span-4">: 0888888888888</div>
            <div class="col-span-2"></div>
            <div class="col-span-4"></div>
            <div class="col-span-2">Paraf</div>
            <div class="col-span-4">: 0888888888888</div>
            <div class="col-span-2"></div>
        </div>
        <div class="mb-32 grid grid-cols-12 items-center justify-center text-2xl font-bold">
            <div class="col-span-2"></div>
            <div class="col-span-4">NAMA PERUSAHAAN</div>
            <div class="col-span-6">: PT. Fast Retail Indonesia</div>
            <div class="col-span-2"></div>
            <div class="col-span-4">PENANGGUNG JAWAB</div>
            <div class="col-span-6">: Muhammad Bagus</div>
            <div class="col-span-2"></div>
            <div class="col-span-4">ALAMAT</div>
            <div class="col-span-4">: Jl. Perkunisan Amparan No. 27C</div>
            <div class="col-span-1">RT: 002</div>
            <div class="col-span-1">RW: 003</div>
            <div class="col-span-3"></div>
            <div class="col-span-3">DESA / KELURAHAN</div>
            <div class="col-span-6">: Muhammad Bagus</div>
            <div class="col-span-3"></div>
            <div class="col-span-3">KECAMATAN</div>
            <div class="col-span-6">: Muhammad Bagus</div>
            <div class="col-span-3"></div>
            <div class="col-span-3">KAB / KODYA</div>
            <div class="col-span-6">: Muhammad Bagus</div>
            <div class="col-span-2"></div>
            <div class="col-span-4">TELEPON / HP / FAX</div>
            <div class="col-span-6">: PT. Fast Retail Indonesia</div>
            <div class="col-span-2"></div>
            <div class="col-span-4">SEKTOR USAHA</div>
            <div class="col-span-6">: PT. Fast Retail Indonesia</div>
            <div class="col-span-2"></div>
            <div class="col-span-4">KOMODITAS</div>
            <div class="col-span-6">: PT. Fast Retail Indonesia</div>
        </div>
    </div>
    <div class="text-center text-3xl font-bold">PERSYARATAN YANG HARUS DILAMPIRKAN</div>
    <div class="grid grid-cols-12 items-center justify-center text-2xl mb-48">
        <div class="col-span-2"></div>
        <div class="col-span-4 font-bold">1 (Satu) LEMBAR FOTO COPY</div>
        <div class="col-span-6"></div>
        <div class="col-span-2"></div>
        <div class="col-span-4">- Kartu Tanda Penduduk (KTP) </div>
        <div class="col-span-4">- Kartu Susunan Keluarga (KSK)</div>
        <div class="col-span-2"></div>
        <div class="col-span-2"></div>
        <div class="col-span-4">- Surat Tanah (SHM)</div>
        <div class="col-span-4">- SIUP & TDP / IU & NIB</div>
        <div class="col-span-2"></div>
        <div class="col-span-2"></div>
        <div class="col-span-4">- Rekening Bank BNI-46</div>
        <div class="col-span-4">- Dan lain-lain sesuai kebutuhan</div>
        <div class="col-span-2"></div>
    </div>
    <div class="w-full flex items-center justify-end text-white font-bold">
        FM-69-0001
    </div>
</body>

</html>

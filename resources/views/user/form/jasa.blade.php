@extends('layouts.form')

@section('content')
    <div class="flex items-center gap-x-4 mb-12">
        <div class="rounded-full p-3 bg-mangga-green-600">
            <span class="fa fa-fw fa-align-left text-white text-xl"></span>
        </div>
        <div class="flex flex-col">
            <div class="text-gray-600 font-semibold">Langkah <span id="counter-steps">1</span>/5</div>
            <div class="font-bold text-xl" id="steps-title">Data Usaha</div>
        </div>
    </div>
    <div class="text-4xl font-bold mb-2" id="form-title">Formulir Peminjaman untuk Jasa</div>
    <div class="text-xl text-gray-600 mb-8" id="form-description">Harap mengisi data-data usaha agar dapat mengajukan pinjaman.
    </div>
    <div class="grid grid-cols-2 gap-x-8">
        <div class="">
            <input type="text" name="" class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-8" placeholder="Nama Usaha">
            <input type="text" name="" class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-8" placeholder="Alamat">
            <input type="text" name="" class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-8" placeholder="Desa">
            <input type="text" name="" class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-8" placeholder="Kecamatan">
            <input type="text" name="" class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-8" placeholder="Kabupaten">
        </div>
        <div class="">
            <label class="text-gray-400">Pendapatan rata-rata per tahun</label>
            <input type="number" name="" class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-8" placeholder="Rp. xxxxx">
            <label class="text-gray-400">Biaya usaha per tahun</label>
            <input type="number" name="" class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-8" placeholder="Rp. xxxxx">
            <label class="text-gray-400">Keuntungan per tahun</label>
            <input type="number" name="" class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-8" placeholder="Rp. xxxxx">
        </div>
    </div>
    <div class="flex items-center justify-end gap-x-4 mt-4">
        <a href="{{ route('user.create_ajuan') }}" class="mangga-button-transparent-orange cursor-pointer">
            <span class="fa fa-fw fa-chevron-left"></span>
            Kembali
        </a>
        <a href="#" class="mangga-button-green cursor-pointer">
            Langkah Selanjutnya
            <span class="fa fa-fw fa-arrow-right"></span>
        </a>
    </div>
@endsection

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
    <div class="text-4xl font-bold mb-2" id="form-title">Formulir Peminjaman untuk Pertanian</div>
    <div class="text-xl text-gray-600 mb-6" id="form-description">Harap mengisi data-data usaha agar dapat mengajukan
        pinjaman.
    </div>
    <div class="grid grid-cols-2 gap-x-8 form-step" id="data-usaha-1">
        <div class="">
            <input type="text" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Nama Usaha">
            <input type="text" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Alamat">
            <input type="text" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Desa">
            <input type="text" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Kecamatan">
            <input type="text" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Kabupaten">
        </div>
        <div class="">
            <label class="text-gray-400">Pendapatan rata-rata per panen</label>
            <input type="number" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Rp. xxxxx">
            <label class="text-gray-400">Biaya usaha per panen</label>
            <input type="number" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Rp. xxxxx">
            <label class="text-gray-400">Keuntungan</label>
            <input type="number" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Rp. xxxxx">
        </div>
    </div>
    <div class="grid-cols-2 gap-x-8 form-step hidden" id="data-usaha-2">
        <div class="">
            <div class="text-2xl font-bold mb-4">Lahan Yang Digarap</div>
            <input type="text" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Alamat Lokasi Lahan">
            <label class="font-bold">Status</label>
            <div class="flex items-center gap-x-2 mb-4">
                <input type="radio" name="" value="bukti-sewa" id="bukti-sewa" checked>
                <label for="bukti-sewa" class="text-gray-700">Hak Milik</label>
                <input type="radio" name="" value="sewa" id="sewa">
                <label for="sewa" class="text-gray-700">Sewa</label>
                <input type="radio" name="" value="penggarap">
                <label for="penggarap" class="text-gray-700">Penggarap</label>
            </div>
            <label class="font-bold">Bukti Kepemilikian</label>
            <div class="flex items-center gap-x-2 mb-4">
                <input type="radio" name="" value="petok-d" id="petok-d" checked>
                <label for="petok-d" class="text-gray-700">Petok D</label>
                <input type="radio" name="" value="sertifikat" id="sertifikat">
                <label for="sertifikat" class="text-gray-700">Sertifikat</label>
                <input type="radio" name="" value="akta-jual-beli" id="akta-jual-beli">
                <label for="akta-jual-beli" class="text-gray-700">Akta Jual Beli</label>
                <input type="radio" name="" value="bukti-sewa" id="bukti-sewa">
                <label for="bukti-sewa" class="text-gray-700">Bukti Sewa</label>
            </div>
            <div class="flex items-center gap-x-2 mb-4">
                <label for="luas" class="text-gray-700">Luas:</label>
                <input type="text" name=""
                    class="w-48 text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3"
                    placeholder="xx">
                <label for="" class="text-gray-700">m2</label>
            </div>
        </div>
        <div class="">
            <div class="flex items-center justify-between gap-x-2 mb-4">
                <div class="text-2xl font-bold">Nilai Kekayaan</div>
                <div class="text-2xl font-bold">Total: Rp. <span id="nilai-kekayaan">xxxxx</span></div>
            </div>
            <label class="text-gray-400">Tanah</label>
            <input type="number" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Rp. xxxxx">
            <label class="text-gray-400">Bangunan</label>
            <input type="number" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Rp. xxxxx">
            <label class="text-gray-400">Alat Kerja/Mesin</label>
            <input type="number" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Rp. xxxxx">
            <label class="text-gray-400">Persediaan</label>
            <input type="number" name=""
                class="w-full text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 mb-6"
                placeholder="Rp. xxxxx">
        </div>
    </div>
    <div class="flex items-center justify-end gap-x-4 mt-4">
        <a href="#" class="mangga-button-transparent-orange cursor-pointer" onclick="previousStep('data-usaha');">
            <span class="fa fa-fw fa-chevron-left"></span>
            Kembali
        </a>
        <a href="#" class="mangga-button-green cursor-pointer" onclick="nextStep('data-usaha');">
            Langkah Selanjutnya
            <span class="fa fa-fw fa-arrow-right"></span>
        </a>
    </div>
@endsection

@section('scripts')
    <script>
        var stepID = 'Data Usaha'
        var stepCounter = 1;

        function nextStep(title) {
            stepCounter += 1;
            if (title == 'data-usaha') {
                $('#steps-title').html('Data Usaha');
            }
            $('#counter-steps').html(stepCounter);
            $('.form-step').removeClass('grid').addClass('hidden');
            $('#data-usaha-' + stepCounter).addClass('grid').removeClass('hidden');
        }

        function previousStep(title) {
            stepCounter -= 1;
            if (title == 'data-usaha') {
                $('#steps-title').html('Data Usaha');
            }
            $('#counter-steps').html(stepCounter);
            if (stepCounter >= 1) {
                $('.form-step').removeClass('grid').addClass('hidden');
                $('#data-usaha-' + stepCounter).addClass('grid').removeClass('hidden');
            } else {
                window.location.href = "{{ route('user.create_ajuan') }}"
            }
        }
    </script>
@endsection

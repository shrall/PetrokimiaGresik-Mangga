@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 gap-x-8 pt-4">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-9">
            <form action="{{ route('user.update', 1) }}" method="post" enctype="multipart/form-data">
                <div class="grid grid-cols-12 gap-x-4 card px-6 py-8">
                    <div class="col-span-8 flex flex-col">
                        <div class="text-2xl font-bold">Informasi Personal</div>
                        <div class="text-md text-gray-600 mb-4">Informasi mengenai individu yang mencakup NO KTP, NO KK,
                            Jenis
                            Kelamin, Agama,
                            Tempat Lahir. Anda juga bisa mengubah informasi personal Anda dengan menekan
                            tombol “Ubah Profile”</div>
                        <label class="text-gray-400">No. KTP</label>
                        <input name="ktp" type="number" class="form-input bg-white mb-4" value="123812847192837105">
                        <label class="text-gray-400">No. KK</label>
                        <input name="kk" type="number" class="form-input bg-white mb-4" value="2348720352398472938">
                        <label class="text-gray-400">Jenis Kelamin</label>
                        <div class="flex items-center gap-x-2 mb-4">
                            <input type="radio" name="kelamin" value="laki-laki" id="laki-laki" checked>
                            <label for="laki-laki" class="text-gray-700">Laki-laki</label>
                            <input type="radio" name="kelamin" value="wanita">
                            <label for="wanita" class="text-gray-700">Wanita</label>
                        </div>
                        <label class="text-gray-400">Agama</label>
                        <select name="agama" class="form-input mb-4">
                            <option value="">Muslim</option>
                            <option value="">Kristen</option>
                            <option value="">Katolik</option>
                            <option value="">Hindu</option>
                            <option value="">Buddha</option>
                            <option value="">Kong Hu Chu</option>
                            <option value="">Lainnya</option>
                        </select>
                        <div class="grid grid-cols-2 items-center gap-x-2 mb-24">
                            <div class="col-span-1">
                                <label class="text-gray-400">Kota Kelahiran</label>
                                <select name="kota_kelahiran" class="form-input">
                                    <option value="">Gresik</option>
                                    <option value="">Surabaya</option>
                                </select>
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Tanggal Lahir</label>
                                <input name="tl" type="date" class="form-input bg-white">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 flex flex-col items-center gap-y-2">
                        <img class="rounded-full w-56 h-56"
                            src="https://image.freepik.com/free-photo/delicious-pasta-meal-black-plate-dinner-dark-background_140725-94451.jpg">
                        <label for="image" class="mangga-button-green">Ubah Foto Profil</label>
                        <input type="file" name="image" id="image" class="hidden">
                        <div class="text-sm text-gray-500">foto.jpg</div>
                        <div class="flex items-center justify-center gap-x-2 mt-auto w-full">
                            <a href="{{ route('user.index') }}" class="mangga-button-gray w-full">Kembali</a>
                            <button type="submit" class="mangga-button-green w-full">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:px-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 xl:col-span-9">
            <form action="{{ route('user.update', 1) }}" method="post" enctype="multipart/form-data">
                <div class="grid grid-cols-12 gap-x-4 card px-6 py-8">
                    <div class="col-span-6 flex flex-col">
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
                        <div class="grid grid-cols-12 items-center gap-x-2">
                            <div class="col-span-8">
                                <label class="text-gray-400">Pekerjaan</label>
                                <input name="" type="text" class="form-input bg-white mb-4" value="">
                            </div>
                            <div class="col-span-4">
                                <label class="text-gray-400">Pensiunan Perusahaan</label>
                                <div class="flex items-center gap-x-2 mb-4">
                                    <input type="radio" name="" value="1" id="ya" checked>
                                    <label for="ya" class="text-gray-700">Ya</label>
                                    <input type="radio" name="" value="0" id="tidak">
                                    <label for="tidak" class="text-gray-700">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <label class="text-gray-400">Tingkat Pendidikan</label>
                        <select name="pendidikan" class="form-input mb-12">
                            <option value="">Tidak Sekolah</option>
                            <option value="">TK</option>
                            <option value="">SD</option>
                            <option value="">SMP</option>
                            <option value="">SMA/Sederajatnya</option>
                            <option value="">D3/Diplomat</option>
                            <option value="">S1/Sarjana</option>
                            <option value="">S2/Magister</option>
                            <option value="">S3/Dokter</option>
                        </select>
                        <label class="text-gray-400">Ahli Waris</label>
                        <input name="" type="text" class="form-input bg-white mb-4" value="">
                        <label class="text-gray-400">Status Rumah</label>
                        <input name="" type="text" class="form-input bg-white mb-4" value="">
                        <label class="text-gray-400 self-start">NPWP</label>
                        <input name="" type="number" class="form-input bg-white mb-4" value="">
                        <div class="grid grid-cols-2 items-center gap-x-2">
                            <div class="col-span-1">
                                <label class="text-gray-400">No. Rekening</label>
                                <input name="" type="number" class="form-input bg-white mb-4" value="">
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Atas Nama</label>
                                <input name="" type="text" class="form-input bg-white mb-4" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 items-center gap-x-2">
                            <div class="col-span-1">
                                <label class="text-gray-400">Nama Bank</label>
                                <input name="" type="text" class="form-input bg-white mb-4" value="">
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Cabang Bank</label>
                                <input name="" type="text" class="form-input bg-white mb-4" value="">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 items-center gap-x-2">
                            <div class="col-span-1">
                                <label class="text-gray-400">Latitude</label>
                                <input name="" type="text" class="form-input bg-white mb-4" value="">
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Longitude</label>
                                <input name="" type="text" class="form-input bg-white mb-4" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 flex flex-col items-center gap-y-2">
                        <img class="rounded-full w-56 h-56"
                            src="https://image.freepik.com/free-photo/delicious-pasta-meal-black-plate-dinner-dark-background_140725-94451.jpg">
                        <label for="image" class="mangga-button-green">Ubah Foto Profil</label>
                        <input type="file" name="image" id="image" class="hidden">
                        <div class="text-sm text-gray-500">foto.jpg</div>
                        <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                            <div class="col-span-1">
                                <label class="text-gray-400">Jenis Kelamin</label>
                                <div class="flex items-center gap-x-2 mb-4">
                                    <input type="radio" name="kelamin" value="laki-laki" id="laki-laki" checked>
                                    <label for="laki-laki" class="text-gray-700">Laki-laki</label>
                                    <input type="radio" name="kelamin" value="wanita" id="wanita">
                                    <label for="wanita" class="text-gray-700">Wanita</label>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Status Perkawinan</label>
                                <div class="flex items-center gap-x-2 mb-4">
                                    <input type="radio" name="perkawinan" value="belum-kawin" id="belum-kawin" checked>
                                    <label for="belum-kawin" class="text-gray-700">Belum Kawin</label>
                                    <input type="radio" name="perkawinan" value="kawin" id="kawin">
                                    <label for="kawin" class="text-gray-700">Kawin</label>
                                </div>
                            </div>
                        </div>
                        <label class="text-gray-400 self-start">Agama</label>
                        <select name="agama" class="form-input mb-4">
                            <option value="">Muslim</option>
                            <option value="">Kristen</option>
                            <option value="">Katolik</option>
                            <option value="">Hindu</option>
                            <option value="">Buddha</option>
                            <option value="">Kong Hu Chu</option>
                            <option value="">Lainnya</option>
                        </select>
                        <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                            <div class="col-span-1">
                                <label class="text-gray-400">Tempat Lahir</label>
                                <input name="birthplace" type="text" class="form-input bg-white mb-4" value="">
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Tanggal Lahir</label>
                                <input name="tl" type="date" class="form-input bg-white">
                            </div>
                        </div>
                        <label class="text-gray-400 self-start">No. Telepon</label>
                        <input name="" type="number" class="form-input bg-white mb-4" value=""><div class="grid grid-cols-2 items-center gap-x-2">
                            <div class="col-span-1">
                                <label class="text-gray-400">Alamat</label>
                                <input name="" type="text" class="form-input bg-white mb-4" value="Jl. Mawar">
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Kode Pos</label>
                                <input name="" type="number" class="form-input bg-white mb-4" value="61233">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                            <div class="col-span-1">
                                <label class="text-gray-400">Provinsi</label>
                                <select name="provinsi" class="form-input mb-4">
                                    <option value="">Tidak Sekolah</option>
                                    <option value="">TK</option>
                                </select>
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Kota/Kabupaten</label>
                                <select name="kota" class="form-input mb-4">
                                    <option value="">Tidak Sekolah</option>
                                    <option value="">TK</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                            <div class="col-span-1">
                                <label class="text-gray-400">Kecamatan</label>
                                <select name="kecamatan" class="form-input mb-4">
                                    <option value="">Tidak Sekolah</option>
                                    <option value="">TK</option>
                                </select>
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Desa/Kelurahan</label>
                                <select name="desa" class="form-input mb-4">
                                    <option value="">Tidak Sekolah</option>
                                    <option value="">TK</option>
                                </select>
                            </div>
                        </div>
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

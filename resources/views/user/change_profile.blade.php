@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:pl-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 xl:col-span-9">
            <form action="{{ route('user.update', 1) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-12 gap-x-4 card px-6 py-8">
                    <div class="col-span-6 flex flex-col">
                        <div class="text-2xl font-bold">Informasi Personal</div>
                        <div class="text-md text-gray-600 mb-4">Informasi mengenai individu yang mencakup NO KTP, NO KK,
                            Jenis
                            Kelamin, Agama,
                            Tempat Lahir. Anda juga bisa mengubah informasi personal Anda dengan menekan
                            tombol “Ubah Profile”</div>
                        <label class="text-gray-400">No. KTP</label>
                        <input name="ktp_code" type="number" class="form-input bg-white mb-4" required
                            value="{{ Auth::user()->ktp_code }}">
                        <label class="text-gray-400">No. KK</label>
                        <input name="kk_code" type="number" class="form-input bg-white mb-4" required
                            value="{{ Auth::user()->kk_code }}">
                        <label class="text-gray-400 self-start">Agama</label>
                        <select name="religion" class="form-input mb-4" required>
                            @foreach ($religions as $e)
                                <option value="{{ $e->id }}" @if (Auth::user()->religion_id == $e->id) selected @endif>{{ $e->name }}</option>
                            @endforeach
                        </select>
                        <div class="grid grid-cols-12 items-center gap-x-2">
                            <div class="col-span-8">
                                <label class="text-gray-400">Pekerjaan</label>
                                <input name="profession" type="text" class="form-input bg-white mb-4" required
                                    value="{{ Auth::user()->profession }}">
                            </div>
                            <div class="col-span-4">
                                <label class="text-gray-400">Pensiunan Perusahaan</label>
                                <div class="flex items-center gap-x-2 mb-4">
                                    <input type="radio" name="retired" value="0" id="tidak" @if (Auth::user()->retired == '0') checked @endif>
                                    <label for="tidak" class="text-gray-700">Tidak</label>
                                    <input type="radio" name="retired" value="1" id="ya" @if (Auth::user()->retired == '1') checked @endif>
                                    <label for="ya" class="text-gray-700">Ya</label>
                                </div>
                            </div>
                        </div>
                        <label class="text-gray-400">Tingkat Pendidikan</label>
                        <select name="education" class="form-input mb-12" required>
                            @foreach ($educations as $e)
                                <option value="{{ $e->id }}" @if (Auth::user()->education_id == $e->id) selected @endif>{{ $e->name }}</option>
                            @endforeach
                        </select>
                        <label class="text-gray-400">Ahli Waris</label>
                        <input name="heir" type="text" class="form-input bg-white mb-4" value="{{ Auth::user()->heir }}"
                            required>
                        <label class="text-gray-400">Status Rumah</label>
                        <select name="house_ownership" class="form-input mb-4" required>
                            @foreach ($establishment_statuses as $es)
                                <option value="{{ $es->id }}" @if (Auth::user()->house_ownership == $es->id) selected @endif>{{ $es->name }}</option>
                            @endforeach
                        </select>
                        <label class="text-gray-400 self-start">NPWP</label>
                        <input name="npwp" type="number" class="form-input bg-white mb-4"
                            value="{{ Auth::user()->npwp }}">
                        <div class="grid grid-cols-2 items-center gap-x-2">
                            <div class="col-span-1">
                                <label class="text-gray-400">No. Rekening</label>
                                <input name="bank_number" type="number" class="form-input bg-white mb-4" required
                                    value="{{ Auth::user()->bank_number }}">
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Atas Nama</label>
                                <input name="bank_owner" type="text" class="form-input bg-white mb-4" required
                                    value="{{ Auth::user()->bank_owner }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 items-center gap-x-2">
                            <div class="col-span-1">
                                <label class="text-gray-400">Nama Bank</label>
                                <input name="bank_name" type="text" class="form-input bg-white mb-4" required
                                    value="{{ Auth::user()->bank_name }}">
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Cabang Bank</label>
                                <input name="bank_branch" type="text" class="form-input bg-white mb-4" required
                                    value="{{ Auth::user()->bank_branch }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 items-center gap-x-2">
                            <div class="col-span-1">
                                <label class="text-gray-400">Latitude</label>
                                <input name="latitude" type="text" class="form-input bg-white mb-4"
                                    value="{{ Auth::user()->latitude }}">
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Longitude</label>
                                <input name="longitude" type="text" class="form-input bg-white mb-4"
                                    value="{{ Auth::user()->longitude }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6 flex flex-col items-center gap-y-2">
                        <img class="rounded-full w-64 h-64" id="preview-image" @if (Auth::user()->picture) src="{{ asset('uploads/user/' . Auth::user()->picture) }}" @else src="{{ asset('assets/img/stock.jpg') }}" @endif>
                        <label for="image" class="mangga-button-green">Ubah Foto Profil</label>
                        <input type="file" name="image" id="image" class="hidden"
                            onchange="loadFile(event, 'image')" accept="image/*">
                        <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                            <div class="col-span-1">
                                <label class="text-gray-400">Jenis Kelamin</label>
                                <div class="flex items-center gap-x-2 mb-4">
                                    <input type="radio" name="gender" value="m" id="laki-laki" @if (Auth::user()->gender == 'm') checked @endif>
                                    <label for="laki-laki" class="text-gray-700">Laki-laki</label>
                                    <input type="radio" name="gender" value="f" id="wanita" @if (Auth::user()->gender == 'f') checked @endif>
                                    <label for="wanita" class="text-gray-700">Wanita</label>
                                </div>
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Status Perkawinan</label>
                                <div class="flex items-center gap-x-2 mb-4">
                                    <input type="radio" name="married" value="0" id="belum-kawin" @if (Auth::user()->married == '0') checked @endif>
                                    <label for="belum-kawin" class="text-gray-700">Belum Kawin</label>
                                    <input type="radio" name="married" value="1" id="kawin" @if (Auth::user()->married == '1') checked @endif>
                                    <label for="kawin" class="text-gray-700">Kawin</label>
                                </div>
                            </div>
                        </div>
                        <label class="text-gray-400 self-start">Nama Pasangan (Jika Sudah Menikah)</label>
                        <input name="spouse" type="text" class="form-input bg-white mb-4"
                            value="{{ Auth::user()->spouse }}">
                        <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                            <div class="col-span-1">
                                <label class="text-gray-400">Tempat Lahir</label>
                                <select name="birth_place" id="birth_place" class="form-input bg-white mb-4" required>
                                    @foreach ($cities as $city)
                                        <option value={{ $city->id }} @if (Auth::user()->birth_place == $city->id) selected @endif>
                                            {{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Tanggal Lahir</label>
                                <input name="birth_date" type="date" class="form-input bg-white" required
                                    value="{{ Auth::user()->birth_date }}">
                            </div>
                        </div>
                        <label class="text-gray-400 self-start">No. Telepon</label>
                        <input name="handphone" type="number" class="form-input bg-white mb-4" required
                            value="{{ Auth::user()->handphone }}">
                        <div class="grid grid-cols-12 items-center gap-x-2">
                            <div class="col-span-6">
                                <label class="text-gray-400">Alamat</label>
                                <input name="address" type="text" class="form-input bg-white mb-4" required
                                    value="{{ Auth::user()->address }}">
                            </div>
                            <div class="col-span-2">
                                <label class="text-gray-400">RT</label>
                                <input name="rt" type="text" class="form-input bg-white mb-4" required
                                    value="{{ Auth::user()->rt }}">
                            </div>
                            <div class="col-span-2">
                                <label class="text-gray-400">RW</label>
                                <input name="rw" type="text" class="form-input bg-white mb-4" required
                                    value="{{ Auth::user()->rw }}">
                            </div>
                            <div class="col-span-2">
                                <label class="text-gray-400">Kode Pos</label>
                                <input name="postal_code" type="number" class="form-input bg-white mb-4" required
                                    value="{{ Auth::user()->postal_code }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                            <div class="col-span-1">
                                <label class="text-gray-400">Provinsi</label>
                                <select name="province" id="province" class="form-input bg-white mb-4" required>
                                    @foreach ($provinces as $province)
                                        <option value={{ $province->id }} @if (Auth::user()->province_id == $province->id) selected @endif>
                                            {{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Kota/Kabupaten</label>
                                <select name="city" id="city" class="form-input bg-white mb-4" required>
                                    @if (Auth::user()->city_id)
                                        @foreach ($cities as $city)
                                            <option value={{ $city->id }} @if (Auth::user()->city_id == $city->id) selected @endif>
                                                {{ $city->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                            <div class="col-span-1">
                                <label class="text-gray-400">Kecamatan</label>
                                <select name="district" id="district" class="form-input bg-white mb-4" required>
                                    @if (Auth::user()->district_id)
                                        @foreach ($districts as $district)
                                            <option value={{ $district->id }} @if (Auth::user()->district_id == $district->id) selected @endif>
                                                {{ $district->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-span-1">
                                <label class="text-gray-400">Desa/Kelurahan</label>
                                <select name="village" id="village" class="form-input bg-white mb-4" required>
                                    @if (Auth::user()->village_id)
                                        @foreach ($villages as $village)
                                            <option value={{ $village->id }} @if (Auth::user()->village_id == $village->id) selected @endif>
                                                {{ $village->name }}</option>
                                        @endforeach
                                    @endif
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

@section('scripts')
    <script>
        var provinces = @json($provinces);
        var cities = @json($cities);
        var districts = @json($districts);
        var villages = @json($villages);

        $('#province').on('change', function(e) {
            $('#city').html(null);
            $('#district').html(null);
            $('#village').html(null);
            let obj1 = cities.filter(function(obj) {
                return obj.province_id === $('#province').val();
            });
            obj1.forEach(element => {
                $('#city').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj2 = districts.filter(function(obj) {
                return obj.regency_id === $('#city').val();
            });
            obj2.forEach(element => {
                $('#district').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj3 = villages.filter(function(obj) {
                return obj.district_id === $('#district').val();
            });
            obj3.forEach(element => {
                $('#village').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
        $('#city').on('change', function(e) {
            $('#district').html(null);
            $('#village').html(null);
            let obj2 = districts.filter(function(obj) {
                return obj.regency_id === $('#city').val();
            });
            obj2.forEach(element => {
                $('#district').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj3 = villages.filter(function(obj) {
                return obj.district_id === $('#district').val();
            });
            obj3.forEach(element => {
                $('#village').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
        $('#district').on('change', function(e) {
            $('#village').html(null);
            let obj3 = villages.filter(function(obj) {
                return obj.district_id === $('#district').val();
            });
            obj3.forEach(element => {
                $('#village').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
    </script>
    <script>
        let obj1 = cities.filter(function(obj) {
            return obj.province_id === $('#province').val();
        });
        obj1.forEach(element => {
            $('#city').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#city").prop("disabled", false);
        let obj2 = districts.filter(function(obj) {
            return obj.regency_id === $('#city').val();
        });
        obj2.forEach(element => {
            $('#district').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#district").prop("disabled", false);
        let obj3 = villages.filter(function(obj) {
            return obj.district_id === $('#district').val();
        });
        obj3.forEach(element => {
            $('#village').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#village").prop("disabled", false);
    </script>

    <script>
        var loadFile = function(event, id) {
            if ($('#' + id)[0].files[0].size > 26214400) {
                alert("Ukuran gambar tidak bisa melebihi 25MB!");
                $('#' + id).val(null);
            } else {
                $('#preview-' + id).attr('src', URL.createObjectURL(event.target.files[0]));
            }
        };
    </script>
@endsection

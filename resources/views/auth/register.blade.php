@extends('layouts.app')

@section('content')
    <div
        class="w-full h-screen bg-sign-up bg-cover flex flex-col xl:grid xl:grid-cols-2 gap-x-4 xl:items-center xl:justify-center">
        <div class="my-12 xl:col-span-1 self-start xl:mt-24 xl:mb-0 px-16">
            <div class="text-4xl xl:text-6xl text-mangga-green-600 font-af">SELAMAT DATANG.</div>
            <div class="text-lg xl:text-2xl text-gray-600 font-os">Silahkan lengkapi daftar diri untuk mendaftar ke Mangga.
            </div>
        </div>
        <div
            class="col-span-1 mx-auto flex flex-col items-start justify-center bg-white rounded-lg w-vw-80 px-8 md:w-vw-60 h-vh-70 md:px-12 xl:w-vw-40 xl:h-vh-90 xl:px-16 py-8 shadow-xl">
            <div class="text-xl md:text-3xl font-af text-mangga-green-600 mb-4">PENDANAAN UMK (PUMK)</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="email" name="email" class="form-input mb-8" placeholder="E-Mail">
                <input type="text" name="name" class="form-input mb-8" placeholder="Nama Lengkap">
                <input type="number" name="handphone" class="form-input mb-8" placeholder="Nomor HP">
                <select name="province" class="form-input mb-8" id="province">
                    @foreach ($provinces as $province)
                        <option value={{ $province->id }}>{{ $province->name }}</option>
                    @endforeach
                </select>
                <select name="city" class="form-input mb-8" id="city">
                </select>
                <select name="district" class="form-input mb-8" id="district">
                </select>
                <select name="village" class="form-input mb-8" id="village">
                </select>
                <input type="password" name="password" class="form-input mb-12" placeholder="Password">
                <input type="password" name="password_confirmation" class="form-input mb-12"
                    placeholder="Konfirmasi Password">
                <button type="submit" class="mangga-button-green w-full mb-4">Daftar</button>
            </form>
            <div class="text-md md:text-lg self-center">Sudah memiliki akun? <a href="{{ route('login') }}"
                    class="text-mangga-green-400">Masuk di sini</a></div>
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
@endsection

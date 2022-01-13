@extends('layouts.muda')

@section('content')
    <div class="w-full h-full bg-sign-up bg-cover flex flex-col xl:grid xl:grid-cols-2 xl:items-center xl:justify-center">
        <div class="col-span-1 flex flex-col items-start justify-center bg-gray-100 h-full px-12 py-4">
            <div class="text-xl md:text-5xl font-af text-mangga-green-300 mb-4">Daftar Sekarang.</div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="rounded-lg bg-red-500 w-full p-4 mb-4 text-white">
                        <span class="fa fa-fw fa-info-circle ml-2"></span>
                        {{$error}}
                    </div>
                @endforeach
            @endif
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" class="form-pengajuan-input mb-8" placeholder="Nama Ketua">
                <input type="email" name="email" class="form-pengajuan-input mb-8" placeholder="E-Mail Ketua">
                <input type="number" name="no_handphone" class="form-pengajuan-input mb-8" placeholder="Nomor HP Ketua">
                <select name="province" class="form-pengajuan-input mb-8" id="province">
                    @foreach ($provinces as $province)
                        <option value={{ $province->id }}>{{ $province->name }}</option>
                    @endforeach
                </select>
                <select name="city" class="form-pengajuan-input mb-8" id="city" disabled>
                    <option value="">Kota/Kabupaten Universitas</option>
                </select>
                <select name="district" class="form-pengajuan-input mb-8" id="district" disabled>
                    <option value="">Kecamatan Universitas</option>
                </select>
                <select name="village" class="form-pengajuan-input mb-8" id="village" disabled>
                    <option value="">Desa/Kelurahan Universitas</option>
                </select>
                <input type="password" name="password" class="form-pengajuan-input mb-12" placeholder="Password">
                <input type="password" name="password_confirmation" class="form-pengajuan-input mb-12"
                    placeholder="Konfirmasi Password">
                <input type="hidden" name="referral_code" value="mamud">
                <button type="submit" class="mangga-button-green w-full mb-4">Daftar</button>
            </form>
            <div class="text-md md:text-lg self-center">Sudah memiliki akun? <a href="{{ route('mangga_muda.login') }}"
                    class="text-mangga-green-400">Masuk di sini</a></div>
        </div>
        <div class="col-span-1 w-full h-full bg-right bg-cover bg-register-muda">
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
            $('#district').html('<option value="">Kecamatan</option>');
            $("#district").prop("disabled", true);
            $('#village').html('<option value="">Desa/Kelurahan</option>');
            $("#village").prop("disabled", true);
            let obj = cities.filter(function(obj) {
                return obj.province_id === $('#province').val();
            });
            obj.forEach(element => {
                $('#city').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            $("#city").prop("disabled", false);
        });
        $('#city').on('change', function(e) {
            $('#district').html(null);
            $('#village').html('<option value="">Desa/Kelurahan</option>');
            $("#village").prop("disabled", true);
            let obj = districts.filter(function(obj) {
                return obj.regency_id === $('#city').val();
            });
            obj.forEach(element => {
                $('#district').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            $("#district").prop("disabled", false);
        });
        $('#district').on('change', function(e) {
            $('#village').html(null);
            let obj = villages.filter(function(obj) {
                return obj.district_id === $('#district').val();
            });
            obj.forEach(element => {
                $('#village').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            $("#village").prop("disabled", false);
        });
    </script>
@endsection

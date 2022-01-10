@extends('layouts.form')

@section('content')
    <div class="flex items-center gap-x-4 mb-12">
        <div class="rounded-full p-3 bg-mangga-green-600">
            <span class="fa fa-fw fa-align-left text-white text-xl"></span>
        </div>
        <div class="flex flex-col">
            <div class="text-gray-600 font-semibold">Langkah <span id="counter-steps">1</span>/5</div>
            <div class="font-bold text-xl" id="steps-title">Data Pengajuan</div>
        </div>
    </div>
    <div class="text-4xl font-bold mb-2" id="form-title">Pengajuan Proposal Program Pendanaan UMK</div>
    <div class="text-xl text-gray-600 mb-6" id="form-description">Harap mengisi data-data kondisi usaha sebagai bahan
        evaluasi agar proposal dapat diajukan.
    </div>
    <div class="grid grid-cols-2 gap-x-8 form-step" id="data-pengajuan-1">
        <div class="">
            <input type="number" name="" class="form-pengajuan-input" placeholder="Jumlah Pengajuan*">
            <input type="number" name="" class="form-pengajuan-input" placeholder="Agunan*">
            <select name="" id="" class="form-pengajuan-input">
                <option value="">Tipe Penyaluran*</option>
            </select>
            <select name="" id="" class="form-pengajuan-input">
                <option value="">Sektor*</option>
            </select>
            <select name="" id="" class="form-pengajuan-input">
                <option value="">Sub Sektor*</option>
            </select>
            <input type="text" name="" class="form-pengajuan-input" placeholder="Jenis Usaha">
        </div>
        <div class="">
            <input type="text" name="" class="form-pengajuan-input" placeholder="Produk Unggulan">
            <select name="" id="" class="form-pengajuan-input">
                <option value="">Bentuk Usaha*</option>
            </select>
            <input type="number" name="" class="form-pengajuan-input" placeholder="Nilai Usaha*">
            <input type="number" name="" class="form-pengajuan-input" placeholder="Nilai Aset*">
            <input type="number" name="" class="form-pengajuan-input" placeholder="Nilai SDM*">
            <input type="number" name="" class="form-pengajuan-input" placeholder="Nilai Omzet per Tahun*">
        </div>
    </div>
    <div class="grid-cols-2 gap-x-8 form-step hidden" id="data-usaha-2">
        <div class="">
            <input type="text" name="" class="form-pengajuan-input" placeholder="Nama Usaha*">
            <input type="text" name="" class="form-pengajuan-input" style="margin-bottom: 0.5rem;"
                placeholder="Alamat Usaha*">
            <input type="checkbox" name="" id="alamat-usaha" class="ml-8" style="margin-bottom: 1rem;">
            <label for="alamat-usaha" class="text-xl">sama dengan rumah</label>
            <select name="" id="" class="form-pengajuan-input">
                <option value="">Provinsi*</option>
            </select>
            <select name="" id="" class="form-pengajuan-input">
                <option value="">Kabupaten/Kota*</option>
            </select>
            <div class="grid grid-cols-2 items-center justify-center gap-x-4">
                <select name="" id="" class="form-pengajuan-input">
                    <option value="">Kecamatan*</option>
                </select>
                <select name="" id="" class="form-pengajuan-input">
                    <option value="">Desa/Kelurahan*</option>
                </select>
            </div>
            <label class="font-bold">Alamat Surat Menyurat*</label>
            <div class="flex items-center gap-x-2 mb-4">
                <input type="radio" name="" value="alamat-surat-rumah" id="alamat-surat-rumah" checked>
                <label for="alamat-surat-rumah" class="text-gray-700">Rumah</label>
                <input type="radio" name="" value="alamat-surat-usaha" id="alamat-surat-usaha">
                <label for="alamat-surat-usaha" class="text-gray-700">Usaha</label>
            </div>
        </div>
        <div class="">
            <input type="number" name="" class="form-pengajuan-input" placeholder="No. Telepon Usaha*">
            <input type="number" name="" class="form-pengajuan-input" placeholder="No. HP Usaha*">
            <input type="email" name="" class="form-pengajuan-input" placeholder="E-Mail">
            <input type="number" name="" class="form-pengajuan-input" style="margin-bottom: 0.5rem;" placeholder="No. SIUP">
            <div class="font-bold mb-2">Tanggal SIUP</div>
            <input type="date" name="" class="form-pengajuan-input">
            <select name="" id="" class="form-pengajuan-input">
                <option value="">Status Tempat Usaha*</option>
            </select>
        </div>
    </div>
    <div class="grid-cols-2 gap-8 form-step hidden" id="dokumen-mitra-3">
        <div class="">
            <label class="font-bold">Foto KTP*</label>
            <div class="flex items-end gap-x-4">
                <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg" id="preview-foto-ktp">
                <div class="flex flex-col gap-y-2">
                    <input type="file" name="" id="foto-ktp" class="hidden" onchange="loadFile(event, 'foto-ktp')"
                        accept="image/*" required>
                    <label for="foto-ktp" class="mangga-button-green cursor-pointer">Unggah Foto KTP</label>
                    <span>*Ukuran File Unggahan Maksimal 25MB</span>
                </div>
            </div>
        </div>
        <div class="">
            <label class="font-bold">Foto Kartu Keluarga*</label>
            <div class="flex items-end gap-x-4">
                <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg" id="preview-foto-kk">
                <div class="flex flex-col gap-y-2">
                    <input type="file" name="" id="foto-kk" class="hidden" onchange="loadFile(event, 'foto-kk')"
                        accept="image/*" required>
                    <label for="foto-kk" class="mangga-button-green cursor-pointer">Unggah Foto KK</label>
                    <span>*Ukuran File Unggahan Maksimal 25MB</span>
                </div>
            </div>
        </div>
        <div class="">
            <label class="font-bold">Foto Selfie dengan KTP*</label>
            <div class="flex items-end gap-x-4">
                <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                    id="preview-foto-selfie-ktp">
                <div class="flex flex-col gap-y-2">
                    <input type="file" name="" id="foto-selfie-ktp" class="hidden" accept="image/*"
                        onchange="loadFile(event, 'foto-selfie-ktp')" required>
                    <label for="foto-selfie-ktp" class="mangga-button-green cursor-pointer">Unggah Foto Selfie dengan
                        KTP</label>
                    <span>*Ukuran File Unggahan Maksimal 25MB</span>
                </div>
            </div>
        </div>
        <div class="">
            <label class="font-bold">Foto Selfie dengan Kartu Keluarga*</label>
            <div class="flex items-end gap-x-4">
                <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                    id="preview-foto-selfie-kk">
                <div class="flex flex-col gap-y-2">
                    <input type="file" name="" id="foto-selfie-kk" class="hidden" accept="image/*"
                        onchange="loadFile(event, 'foto-selfie-kk')" required>
                    <label for="foto-selfie-kk" class="mangga-button-green cursor-pointer">Unggah Foto Selfie dengan
                        KK</label>
                    <span>*Ukuran File Unggahan Maksimal 25MB</span>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-cols-2 gap-8 form-step hidden" id="dokumen-persyaratan-4">
        <div class="mb-24">
            <label class="font-bold">Scan SIUP*</label>
            <div class="flex items-end gap-x-4">
                <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg" id="preview-scan-siup">
                <div class="flex flex-col gap-y-2">
                    <input type="file" name="" id="scan-siup" class="hidden" onchange="loadFile(event, 'scan-siup')"
                        accept="image/*" required>
                    <label for="scan-siup" class="mangga-button-green cursor-pointer">Unggah Scan SIUP</label>
                    <span>*Ukuran File Unggahan Maksimal 25MB</span>
                </div>
            </div>
        </div>
        <div class="mb-24">
            <label class="font-bold">Scan Surat Keterangan Domisili Usaha*</label>
            <div class="flex items-end gap-x-4">
                <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg" id="preview-scan-sk">
                <div class="flex flex-col gap-y-2">
                    <input type="file" name="" id="scan-sk" class="hidden" onchange="loadFile(event, 'scan-sk')"
                        accept="image/*" required>
                    <label for="scan-sk" class="mangga-button-green cursor-pointer">Unggah Scan SK</label>
                    <span>*Ukuran File Unggahan Maksimal 25MB</span>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-cols-2 gap-x-8 form-step hidden" id="data-pendamping-5">
        <div class="">
            <input type="text" name="" class="form-pengajuan-input" placeholder="Nama Pendamping">
            <input type="number" name="" class="form-pengajuan-input" placeholder="Nomor Surat Nikah">
            <div class="font-bold mb-2">Tanggal Menikah</div>
            <input type="date" name="" class="form-pengajuan-input">
            <input type="number" name="" class="form-pengajuan-input" placeholder="Nomor KTP">
            <input type="number" name="" class="form-pengajuan-input" placeholder="Nomor Telepon">
            <input type="number" name="" class="form-pengajuan-input" placeholder="Nomor HP">
        </div>
        <div class="">
            <input type="email" name="" class="form-pengajuan-input" placeholder="E-Mail">
            <input type="text" name="" class="form-pengajuan-input" placeholder="Alamat, RT/RW">
            <select name="" id="" class="form-pengajuan-input">
                <option value="">Provinsi*</option>
            </select>
            <select name="" id="" class="form-pengajuan-input">
                <option value="">Kabupaten/Kota*</option>
            </select>
            <select name="" id="" class="form-pengajuan-input">
                <option value="">Kecamatan*</option>
            </select>
            <select name="" id="" class="form-pengajuan-input">
                <option value="">Desa/Kelurahan*</option>
            </select>
        </div>
    </div>
    <div class="flex items-center justify-end gap-x-4 mt-2">
        <a href="#" class="mangga-button-transparent-orange cursor-pointer" onclick="previousStep();">
            <span class="fa fa-fw fa-chevron-left"></span>
            Kembali
        </a>
        <a href="#" class="mangga-button-green cursor-pointer" onclick="nextStep();">
            <span id="next-button-text">Langkah Selanjutnya</span>
            <span class="fa fa-fw fa-arrow-right"></span>
        </a>
    </div>
@endsection

@section('scripts')
    <script>
        var stepID = 'Data Pengajuan'
        var stepCounter = 1;
        var title = "data-pengajuan";
        var team = false;
        var teamCount = 1;

        function changeTitle() {
            if (stepCounter == 2) {
                title = "data-usaha";
                $('#steps-title').html('Data Usaha');
            } else if (stepCounter == 1) {
                title = "data-pengajuan";
                $('#steps-title').html('Data Pengajuan');
            } else if (stepCounter == 3) {
                title = "dokumen-mitra";
                $('#steps-title').html('Dokumen Mitra');
            } else if (stepCounter == 4) {
                title = "dokumen-persyaratan";
                $('#steps-title').html('Dokumen Persyaratan');
            } else if (stepCounter == 5) {
                title = "data-pendamping";
                $('#steps-title').html('Data Pendamping');
            }
            if (stepCounter == 5 && !team) {
                $('#next-button-text').html('Selesai');
            } else {
                $('#next-button-text').html('Langkah Selanjutnya');
            }

        }

        function nextStep() {
            if (stepCounter >= 5 && !team) {
                //submit form disini
            } else {
                stepCounter += 1;
                changeTitle();
                $('#counter-steps').html(stepCounter);
                $('.form-step').removeClass('grid').addClass('hidden');
                $('#' + title + '-' + stepCounter).addClass('grid').removeClass('hidden');
            }
        }

        function previousStep() {
            stepCounter -= 1;
            changeTitle();
            if (stepCounter >= 1) {
                $('#counter-steps').html(stepCounter);
                $('.form-step').removeClass('grid').addClass('hidden');
                $('#' + title + '-' + stepCounter).addClass('grid').removeClass('hidden');
            } else {
                window.location.href = "{{ route('user.create_ajuan') }}"
            }
        }
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

@section('modals')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal">
        <div class="bg-black opacity-50 w-screen h-screen absolute background-modal"></div>
        <div class="rounded-lg bg-white px-8 py-6 absolute flex flex-col gap-y-2">
            <div class="flex items-center justify-center w-full">
                <div class="text-2xl font-bold">Peringatan</div>
            </div>
            <hr>
            <div class="text-xl py-2 text-center">Anda belum melengkapi data diri.<br>Silahkan edit informasi personal anda
                agar dapat membuat pengajuan.</div>
            <a href="{{ route('user.edit', Auth::id()) }}" class="mangga-button-green w-full cursor-pointer">
                Edit Informasi Personal
                <span class="fa fa-fw fa-arrow-right ml-2"></span>
            </a>
        </div>
    </div>
@endsection

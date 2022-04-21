@extends('layouts.admin')

@section('content')
    <div class="text-4xl font-bold mb-2" id="form-title">Buat Ajuan - Mangga Madu</div>
    <form action="{{ route('admin.madu.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <div class="font-bold text-2xl">Data Akun</div>
        <div class="col-span-12 xl:col-span-9">
            <div class="grid grid-cols-12 gap-x-8">
                <div class="col-span-6 flex flex-col">
                    <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                        <div class="col-span-1">
                            <label class="text-gray-400">Nama Depan</label>
                            <input name="firstname" type="text" class="form-pengajuan-input bg-white" required>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-400">Nama Belakang</label>
                            <input name="lastname" type="text" class="form-pengajuan-input bg-white" required>
                        </div>
                    </div>
                    <label class="text-gray-400">E-Mail</label>
                    <input name="email" type="email" class="form-pengajuan-input bg-white" required>
                    <label class="text-gray-400">Password</label>
                    <input name="password" type="password" class="form-pengajuan-input bg-white" required>
                </div>
                <div class="col-span-6 flex flex-col items-center gap-x-2">
                    <label class="text-gray-400 self-start">No. Telepon</label>
                    <input name="handphone" type="number" class="form-pengajuan-input bg-white" required>
                    <label class="text-gray-400 self-start">NIK Karyawan(Suami)</label>
                    <input type="number" name="nik" class="form-pengajuan-input" required>
                    <label class="text-gray-400 self-start">Departemen</label>
                    <select name="department" class="form-pengajuan-input" id="department" required>
                        @foreach ($departments as $department)
                            <option value={{ $department->id }}>{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <label class="font-bold text-3xl self-start">Nama Bisnis*</label>
        <input type="text" name="name" class="form-pengajuan-input" required>
        <label class="font-bold text-3xl self-start">Deskripsi Bisnis*</label>
        <textarea name="description" id="" cols="30" rows="7" class="form-pengajuan-input" required></textarea>
        <label class="font-bold text-3xl self-start">Link Video*</label>
        <input type="text" name="link" class="form-pengajuan-input" required>
        <label class="font-bold text-3xl self-start">Foto Tempat Usaha/Tempat Tinggal*</label>
        <div class="flex flex-col gap-y-4">
            <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-full h-72 rounded-lg"
                id="preview-foto-establishment">
            <div class="flex flex-col gap-y-2">
                <input type="file" name="image" id="foto-establishment" class="invisible w-2"
                    onchange="loadFile(event, 'foto-establishment')" accept="image/*">
                <label for="foto-establishment" class="mangga-button-green cursor-pointer">Ubah
                    Foto</label>
                <span>*Ukuran File Unggahan Maksimal 2 MB</span>
            </div>
        </div>
        <div class="flex items-center justify-end gap-x-4 mt-2">
            <button type="submit" class="mangga-button-green cursor-pointer">
                <span id="next-button-text">Buat Ajuan</span>
                <span class="fa fa-fw fa-arrow-right"></span>
            </button>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        var loadFile = function(event, id) {
            if ($('#' + id)[0].files[0].size > 2097152) {
                alert("Ukuran gambar tidak bisa melebihi 2 MB!");
                $('#' + id).val(null);
            } else {
                $('#preview-' + id).attr('src', URL.createObjectURL(event.target.files[0]));
            }
        };
    </script>
@endsection

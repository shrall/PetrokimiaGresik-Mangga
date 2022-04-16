@extends('layouts.admin')

@section('content')
    <div class="text-4xl font-bold mb-2" id="form-title">Data Informasi Calon Mangga -
        {{ $madu->registration_number }}</div>
    <form action="{{ route('admin.madu.update', $madu->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <label class="font-bold text-3xl self-start">Nama Bisnis*</label>
        <input type="text" name="name" class="form-pengajuan-input" required value="{{ $madu->name }}">
        <label class="font-bold text-3xl self-start">Deskripsi Bisnis*</label>
        <textarea name="description" id="" cols="30" rows="7" class="form-pengajuan-input"
            required>{{ $madu->description }}</textarea>
        <label class="font-bold text-3xl self-start">Link Video*</label>
        <input type="text" name="link" class="form-pengajuan-input" value="{{ $madu->link }}" required>
        <label class="font-bold text-3xl self-start">Foto Tempat Usaha/Tempat Tinggal*</label>
        <div class="flex flex-col gap-y-4">
            <img src="{{ asset('uploads/mangga/establishment_picture/' . $madu->image) }}" class="w-full h-72 rounded-lg"
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
                <span id="next-button-text">Perbarui Data</span>
                <span class="fa fa-fw fa-arrow-right"></span>
            </button>
        </div>
    </form>
@endsection

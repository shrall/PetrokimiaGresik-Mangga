@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.people.store') }}" method="post">
        @csrf
        <input type="hidden" name="type" value="one">
        <label for="name">Nama*</label>
        <input type="text" name="name" id="name" class="form-pengajuan-input" value="{{ $people->one }}">
        <label for="title">Jabatan*</label>
        <input type="text" name="title" id="title" class="form-pengajuan-input" value="{{ $people->one_title }}">
        <div class="flex items-center justify-end">
            <button type="submit" class="mangga-button-green">Simpan</button>
        </div>
    </form>
@endsection

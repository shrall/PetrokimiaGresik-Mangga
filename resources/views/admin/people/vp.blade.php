@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.people.store') }}" method="post">
        @csrf
        <input type="hidden" name="type" value="vp">
        <label for="pmccm">Nama VP CSR*</label>
        <input type="text" name="vp" id="vp" class="form-pengajuan-input" value="{{ $people->vp }}">
        <div class="flex items-center justify-end">
            <button type="submit" class="mangga-button-green">Simpan</button>
        </div>
    </form>
@endsection

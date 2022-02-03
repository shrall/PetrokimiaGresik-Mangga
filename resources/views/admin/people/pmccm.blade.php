@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.people.store') }}" method="post">
        @csrf
        <input type="hidden" name="type" value="pm_ccm">
        <label for="pmccm">Nama PM CCM*</label>
        <input type="text" name="pm_ccm" id="pm_ccm" class="form-pengajuan-input" value="{{ $people->pm_ccm }}">
        <div class="flex items-center justify-end">
            <button type="submit" class="mangga-button-green">Simpan</button>
        </div>
    </form>
@endsection

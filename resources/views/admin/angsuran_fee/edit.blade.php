@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.angsuran_fee.update', $angsuranFee->id) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="service_fee">Biaya Jasa*</label>
        <input type="number" name="service_fee" id="service_fee" class="form-pengajuan-input" value="{{ $angsuranFee->service_fee }}">
        <div class="flex items-center justify-end">
            <button type="submit" class="mangga-button-green">Simpan</button>
        </div>
    </form>
@endsection

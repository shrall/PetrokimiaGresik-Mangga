@extends('layouts.admin')

@section('content')
    <div class="text-4xl font-bold mb-2" id="form-title">Formulir Evaluasi & Hasil Survey Pinjaman Modal Kerja Program
        Kemitraan</div>
    <div class="text-xl text-gray-600 mb-6" id="form-description">Harap mengisi data-data sesuai kondisi lapangan secara
        objektif dan mematuhi SOP yang berlaku.
    </div>
    @if (session('Message'))
        <div class="rounded-lg bg-mangga-orange-300 p-4 mb-4">
            <span class="fa fa-fw fa-info-circle ml-2"></span>
            {{ session('Message') }}
        </div>
    @endif
    <form action="{{ route('admin.evaluation.check') }}" method="post">
        @csrf
        <label class="font-bold">Nomor Registrasi</label>
        <div class="flex items-center gap-x-4">
            <input type="text" name="one" id="one"
                class="text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 w-16">-
            <input type="text" name="two" id="two"
                class="text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 w-56">-
            <input type="text" name="three" id="three"
                class="text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 w-16">-
            <input type="text" name="four" id="four"
                class="text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 w-16">
            <button type="submit" class="mangga-button-green">Submit</button>
        </div>
        <div class="text-gray-400">contoh: GG-58783939-3-35</div>
    </form>
@endsection

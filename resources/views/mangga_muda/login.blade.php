@extends('layouts.muda')

@section('content')
    <div
        class="w-full h-screen bg-sign-up bg-cover flex flex-col xl:grid xl:grid-cols-2 xl:items-center xl:justify-center">
        <div class="col-span-1 w-full h-screen bg-cover bg-login-muda">
        </div>
        <div class="col-span-1 flex flex-col items-start justify-center bg-gray-100 h-screen px-12 py-4">
            <div class="text-xl md:text-5xl font-lb text-mangga-green-300 mb-4">Masuk.</div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="rounded-lg bg-red-500 w-full p-4 mb-4 text-white">
                        <span class="fa fa-fw fa-info-circle ml-2"></span>
                        {{$error}}
                    </div>
                @endforeach
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" class="form-pengajuan-input mb-8"
                    placeholder="E-Mail">
                <input type="password" name="password"
                    class="form-pengajuan-input mb-12" placeholder="Password">
                <button type="submit" class="mangga-button-green w-full mb-4">Masuk</button>
            </form>
            <div class="text-md md:text-lg">Belum memiliki akun? <a href="{{route('mangga_muda.register')}}" class="text-mangga-green-400">Daftar di sini</a></div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection

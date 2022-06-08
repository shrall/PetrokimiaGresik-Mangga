@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.user.store') }}" method="post">
        @csrf
        <input type="hidden" name="type" value="one">
        <label for="email">E-Mail*</label>
        <input type="text" name="email" id="email" class="form-pengajuan-input">
        <label for="password">Password*</label>
        <input type="password" name="password" id="password" class="form-pengajuan-input">
        <label for="user_role">Tipe Akun*</label>
        <select name="user_role" id="user_role" class="form-pengajuan-input">
            @foreach ($roles as $user_role)
                <option value="{{$user_role->id}}">{{$user_role->name}}</option>
            @endforeach
        </select>
        <div class="flex items-center justify-end">
            <button type="submit" class="mangga-button-green">Simpan</button>
        </div>
    </form>
@endsection

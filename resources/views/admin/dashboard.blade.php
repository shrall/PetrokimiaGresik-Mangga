@extends('layouts.admin')

@section('content')
    <div class="grid grid-cols-3 gap-x-4">
        <div class="border-2 border-gray-400 bg-white">
            <div class="flex items-center justify-evenly gap-x-4 p-4">
                <div class="flex flex-col gap-y-2">
                    <div class="text-5xl text-mangga-green-500 font-bold">
                        {{count($businesses)}}
                    </div>
                    Ajuan
                </div>
                <span class="fa fa-fw fa-clipboard-list text-gray-400 text-8xl"></span>
            </div>
            <hr>
            <a href="#" class="flex justify-center hover:text-gray-700 my-4">Lihat Detail ></a>
        </div>
        <div class="border-2 border-gray-400 bg-white">
            <div class="flex items-center justify-evenly gap-x-4 p-4">
                <div class="flex flex-col gap-y-2">
                    <div class="text-5xl text-mangga-green-500 font-bold">
                        #
                    </div>
                    UMKM
                </div>
                <span class="fa fa-fw fa-store-alt text-gray-400 text-8xl"></span>
            </div>
            <hr>
            <a href="#" class="flex justify-center hover:text-gray-700 my-4">Lihat Detail ></a>
        </div>
        <div class="border-2 border-gray-400 bg-white">
            <div class="flex items-center justify-evenly gap-x-4 p-4">
                <div class="flex flex-col gap-y-2">
                    <div class="text-5xl text-mangga-green-500 font-bold">
                        {{count($users)}}
                    </div>
                    Pengguna
                </div>
                <span class="fa fa-fw fa-users text-gray-400 text-8xl"></span>
            </div>
            <hr>
            <a href="#" class="flex justify-center hover:text-gray-700 my-4">Lihat Detail ></a>
        </div>
    </div>
@endsection

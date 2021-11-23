@extends('layouts.app')

@section('content')
@include('inc.user_sidebar_mobile')
<div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:px-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 xl:col-span-9 xl:pr-8">
            <div class="card px-8 py-6 w-full flex flex-col gap-y-4">
                <div class="text-2xl font-bold"><span class="fa fa-fw fa-store-alt mr-2"></span>Toko A</div>
                <div class="overflow-y-scroll h-vh-60 md:px-8">
                    <div class="flex items-center justify-between gap-x-4 border-b border-gray-600 py-2">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-lg w-32 md:w-56"
                                src="https://image.freepik.com/free-photo/delicious-pasta-meal-black-plate-dinner-dark-background_140725-94451.jpg">
                            <div class="flex flex-col gap-y-2">
                                <span class="text-md md:text-xl font-semibold">Pupuk A(1kg)</span>
                                <span class="text-mangga-orange-400 font-semibold">Rp. 20.000</span>
                                <span class="text-gray-800">Item: 2</span>
                                <span class="font-semibold block md:hidden">Subtotal: Rp.40.000</span>
                            </div>
                        </div>
                        <div class="hidden md:flex items-center gap-x-4">
                            <div class="flex flex-col gap-y-2 font-bold">
                                <span class="text-xl">Subtotal</span>
                                <div class="text-2xl">Rp. 40.000</div>
                            </div>
                            <span class="fa fa-fw fa-trash text-2xl text-red-600 hover:text-red-700 cursor-pointer"></span>
                        </div>
                        <span class="fa fa-fw fa-trash text-2xl text-red-600 hover:text-red-700 cursor-pointer block md:hidden"></span>
                    </div>
                    <div class="flex items-center justify-between gap-x-4 border-b border-gray-600 py-2">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-lg w-32 md:w-56"
                                src="https://image.freepik.com/free-photo/delicious-pasta-meal-black-plate-dinner-dark-background_140725-94451.jpg">
                            <div class="flex flex-col gap-y-2">
                                <span class="text-md md:text-xl font-semibold">Pupuk A(1kg)</span>
                                <span class="text-mangga-orange-400 font-semibold">Rp. 20.000</span>
                                <span class="text-gray-800">Item: 2</span>
                                <span class="font-semibold block md:hidden">Subtotal: Rp.40.000</span>
                            </div>
                        </div>
                        <div class="hidden md:flex items-center gap-x-4">
                            <div class="flex flex-col gap-y-2 font-bold">
                                <span class="text-xl">Subtotal</span>
                                <div class="text-2xl">Rp. 40.000</div>
                            </div>
                            <span class="fa fa-fw fa-trash text-2xl text-red-600 hover:text-red-700 cursor-pointer"></span>
                        </div>
                        <span class="fa fa-fw fa-trash text-2xl text-red-600 hover:text-red-700 cursor-pointer block md:hidden"></span>
                    </div>
                    <div class="flex items-center justify-between gap-x-4 border-b border-gray-600 py-2">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-lg w-32 md:w-56"
                                src="https://image.freepik.com/free-photo/delicious-pasta-meal-black-plate-dinner-dark-background_140725-94451.jpg">
                            <div class="flex flex-col gap-y-2">
                                <span class="text-md md:text-xl font-semibold">Pupuk A(1kg)</span>
                                <span class="text-mangga-orange-400 font-semibold">Rp. 20.000</span>
                                <span class="text-gray-800">Item: 2</span>
                                <span class="font-semibold block md:hidden">Subtotal: Rp.40.000</span>
                            </div>
                        </div>
                        <div class="hidden md:flex items-center gap-x-4">
                            <div class="flex flex-col gap-y-2 font-bold">
                                <span class="text-xl">Subtotal</span>
                                <div class="text-2xl">Rp. 40.000</div>
                            </div>
                            <span class="fa fa-fw fa-trash text-2xl text-red-600 hover:text-red-700 cursor-pointer"></span>
                        </div>
                        <span class="fa fa-fw fa-trash text-2xl text-red-600 hover:text-red-700 cursor-pointer block md:hidden"></span>
                    </div>
                </div>
                <div class="flex items-center justify-end gap-x-4 text-2xl font-semibold">
                    <span class="text-gray-600">Total</span>
                    <span class="text-black">Rp. 200.000</span>
                </div>
            </div>
            <div class="flex items-center justify-end gap-x-4 mt-4">
                <a href="{{ route('user.belanja_list') }}" class="mangga-button-transparent-orange cursor-pointer">
                    <span class="fa fa-fw fa-chevron-left"></span>
                    Kembali
                </a>
                <a href="{{ route('user.belanja_checkout') }}" class="mangga-button-green cursor-pointer">
                    Beli
                    <span class="fa fa-fw fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
@endsection

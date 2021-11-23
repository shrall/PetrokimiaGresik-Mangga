@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="fixed mt-8 xl:hidden">
        <div class="fixed bg-mangga-green-300 rounded-l-full w-12 h-12 right-0 flex items-center justify-center"
            onclick="openModal('cart-summary');">
            <span class="fa fa-fw fa-shopping-cart text-white text-xl" id="sidebar-toggle-button"></span>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:px-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 xl:col-span-9 h-vh-90">
            <div class="px-8 py-6 w-full">
                <div class="rounded-lg bg-mangga-orange-300 p-4 mb-4">
                    <span class="fa fa-fw fa-info-circle ml-2"></span>
                    Kios Anda telah direkomendasikan oleh CV MEKAR JAYA MANDIRI. Silahkan berbelanja produk yang telah
                    tersedia dari Distributor.
                </div>
                <div class="grid grid-cols-12 md:gap-x-8">
                    <div class="col-span-12 xl:col-span-9 grid grid-cols-1 md:grid-cols-3 gap-4">
                        @include('user.inc.belanja_card')
                    </div>
                    <div class="col-span-12 flex xl:hidden mt-8 items-center justify-end">
                        <a href="{{ route('user.belanja_list') }}"
                            class="mangga-button-green w-44 cursor-pointer mt-auto">
                            Checkout
                            <span class="fa fa-fw fa-arrow-right ml-2"></span>
                        </a>
                    </div>
                    <div class="col-span-3 border-l-2 border-gray-400 px-4 hidden xl:flex flex-col justify-between h-vh-70">
                        <div class="flex flex-col card px-4 py-2">
                            <div class="flex items-center justify-between py-3">
                                <span>Pupuk A(1kg)</span>
                                <div>Rp. 40.000 <span class="fa fa-fw fa-times-circle text-red-400 cursor-pointer"></span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between py-3 border-t-2 border-gray-300">
                                <span>Pupuk A(1kg)</span>
                                <div>Rp. 40.000 <span class="fa fa-fw fa-times-circle text-red-400 cursor-pointer"></span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between py-3 border-t-2 border-gray-300">
                                <span>Pupuk A(1kg)</span>
                                <div>Rp. 40.000 <span class="fa fa-fw fa-times-circle text-red-400 cursor-pointer"></span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between py-3 border-t-2 border-black font-semibold">
                                <span>Saldo</span>
                                <div class="">Rp. 40.000.000</div>
                            </div>
                            <div
                                class="flex items-center justify-between py-3 border-t-2 border-mangga-yellow-400 font-semibold">
                                <span>Total</span>
                                <div class="">Rp. 120.000</div>
                            </div>
                        </div>
                        <a href="{{ route('user.belanja_list') }}"
                            class="mangga-button-green w-full cursor-pointer mt-auto">
                            Checkout
                            <span class="fa fa-fw fa-arrow-right ml-2"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="cart-modal">
        <div class="bg-black opacity-50 w-screen h-screen absolute background-modal" onclick="closeModal();"></div>
        <div class="rounded-lg bg-white px-8 pt-8 pb-6 absolute flex flex-col gap-y-4">
            <span class="fa fa-fw fa-times text-xl hover:text-red-600 absolute top-4 right-4 cursor-pointer"
                onclick="closeModal();"></span>
            <div class="flex items-center justify-center gap-x-4">
                <img class="rounded-lg w-64"
                    src="https://image.freepik.com/free-photo/delicious-pasta-meal-black-plate-dinner-dark-background_140725-94451.jpg">
                <div class="flex flex-col gap-y-2">
                    <span>Pupuk A(1kg)</span>
                    <span class="text-mangga-orange-400">Rp. 20.000</span>
                    <div
                        class="flex items-center justify-around rounded-lg border border-mangga-green-500 text-mangga-green-500 py-2">
                        <span class="hover:text-mangga-green-300 fa fa-fw fa-minus cursor-pointer"></span>
                        <div class="px-4 border-l border-r border-gray-500">2</div>
                        <span class="hover:text-mangga-green-300 fa fa-fw fa-plus cursor-pointer"></span>
                    </div>
                </div>
            </div>
            <div class="mangga-button-green w-full cursor-pointer" onclick="closeModal();">
                Tambahkan ke keranjang
                <span class="fa fa-fw fa-arrow-right ml-2"></span>
            </div>
        </div>
    </div>
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="cart-summary-modal">
        <div class="bg-black opacity-50 w-screen h-screen absolute background-modal" onclick="closeModal();"></div>
        <div class="rounded-lg bg-white px-8 pt-8 pb-6 absolute flex flex-col gap-y-4">
            <span class="fa fa-fw fa-times text-xl hover:text-red-600 absolute top-4 right-4 cursor-pointer"
                onclick="closeModal();"></span>
            <div class="flex flex-col w-vw-50 px-4 py-2">
                <div class="flex items-center justify-between py-3">
                    <span>Pupuk A(1kg)</span>
                    <div>Rp. 40.000 <span class="fa fa-fw fa-times-circle text-red-400 cursor-pointer"></span>
                    </div>
                </div>
                <div class="flex items-center justify-between py-3 border-t-2 border-gray-300">
                    <span>Pupuk A(1kg)</span>
                    <div>Rp. 40.000 <span class="fa fa-fw fa-times-circle text-red-400 cursor-pointer"></span>
                    </div>
                </div>
                <div class="flex items-center justify-between py-3 border-t-2 border-gray-300">
                    <span>Pupuk A(1kg)</span>
                    <div>Rp. 40.000 <span class="fa fa-fw fa-times-circle text-red-400 cursor-pointer"></span>
                    </div>
                </div>
                <div class="flex items-center justify-between py-3 border-t-2 border-black font-semibold">
                    <span>Saldo</span>
                    <div class="">Rp. 40.000.000</div>
                </div>
                <div class="flex items-center justify-between py-3 border-t-2 border-mangga-yellow-400 font-semibold">
                    <span>Total</span>
                    <div class="">Rp. 120.000</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function openModal(type) {
            $('#' + type + '-modal').removeClass('hidden').addClass('flex');
        }

        function closeModal() {
            $('.modal').removeClass('flex').addClass('hidden');
        }
    </script>
@endsection

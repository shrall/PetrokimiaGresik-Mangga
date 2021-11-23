@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:px-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 md:col-span-7 xl:col-span-6">
            <div class="card px-8 py-6 w-full flex flex-col gap-y-4">
                <div class="text-2xl font-bold"><span class="fa fa-fw fa-map-marker-alt mr-2"></span>Alamat Pengiriman</div>
                <div class="text-gray-600">
                    <div>Achmad Yoga Prasetya</div>
                    <div>087127172712</div>
                    <div>sholehaja10@gmail.com</div>
                    <div>Perum. ABC DEF, KABUPATEN GRESIK, JAWA TIMUR</div>
                    <div>62917</div>
                </div>
                <div class="text-2xl font-bold"><span class="fa fa-fw fa-truck mr-2"></span>Opsi Pengiriman</div>
                <div class="overflow-y-scroll h-vh-40 pr-2 text-gray-600">
                    <input class="hidden" type="radio" id="shipping-1">
                    <label onclick="changeShipmentMethod(1);" id="shipping-1-label"
                        class="flex flex-col gap-y-2 rounded-lg hover:bg-mangga-green-400 hover:text-white cursor-pointer px-4 py-3 mb-2 shipping-label"
                        for="shipping-1">
                        <div class="font-bold">Reguler</div>
                        <div class="flex items-center justify-between">
                            <div>JNE</div>
                            <div>Rp. 17.000</div>
                        </div>
                    </label>
                    <input class="hidden" type="radio" id="shipping-2">
                    <label onclick="changeShipmentMethod(2);" id="shipping-2-label"
                        class="flex flex-col gap-y-2 rounded-lg hover:bg-mangga-green-400 hover:text-white cursor-pointer px-4 py-3 mb-2 shipping-label"
                        for="shipping-2">
                        <div class="font-bold">Reguler</div>
                        <div class="flex items-center justify-between">
                            <div>JNE</div>
                            <div>Rp. 17.000</div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-5 xl:col-span-3 flex flex-col gap-y-4 pr-4">
            <div class="text-gray-600">Silahkan memilih metode pembayaran yang akan digunakan.</div>
            <input class="hidden" type="radio" id="payment-1" checked>
            <label onclick="changePaymentMethod(1);" for="payment-1"
                class="card flex items-center justify-between px-4 py-8 hover:bg-gray-50 cursor-pointer h-24">
                <img src="{{ asset('assets/img/midtrans-logo.png') }}" class="w-36">
                <span class="far fa-fw fa-dot-circle text-mangga-green-400 text-xl payment-circle"
                    id="payment-circle-1"></span>
            </label>
            <input class="hidden" type="radio" id="payment-2">
            <label onclick="changePaymentMethod(2);" for="payment-2"
                class="card flex items-center justify-between px-4 py-8 hover:bg-gray-50 cursor-pointer h-24">
                <img src="{{ asset('assets/img/bca-logo.png') }}" class="w-36">
                <span class="far fa-fw fa-circle text-xl payment-circle" id="payment-circle-2"></span>
            </label>
            <div class="card flex flex-col gap-y-2 p-4">
                <div class="text-2xl font-semibold flex items-center justify-between">
                    <span>Subtotal</span>
                    <span>Rp. 350.000</span>
                </div>
                <div class="text-lg flex items-center justify-between">
                    <span>Ongkos Kirim</span>
                    <span>Rp. 17.000</span>
                </div>
                <div
                    class="text-mangga-green-400 text-2xl font-semibold flex items-center justify-between border-t border-black">
                    <span>Total</span>
                    <span>Rp. 367.000</span>
                </div>
            </div>
            <div class="flex items-center justify-end gap-x-4 mt-4">
                <a href="{{ route('user.belanja_checkout') }}" class="mangga-button-transparent-orange cursor-pointer">
                    <span class="fa fa-fw fa-chevron-left"></span>
                    Kembali
                </a>
                <a href="{{ route('user.belanja_success') }}" class="mangga-button-green cursor-pointer">
                    Bayar
                    <span class="fa fa-fw fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function changeShipmentMethod(order) {
            $('.shipping-label').removeClass('bg-mangga-green-400').removeClass('text-white');
            $('#shipping-' + order + '-label').addClass('bg-mangga-green-400').addClass('text-white');
        }

        function changePaymentMethod(order) {
            $('.payment-circle').removeClass('fa-dot-circle').addClass('fa-circle').removeClass('text-mangga-green-400');
            $('#payment-circle-' + order).addClass('fa-dot-circle').removeClass('fa-circle').addClass(
                'text-mangga-green-400');
        }
    </script>
@endsection

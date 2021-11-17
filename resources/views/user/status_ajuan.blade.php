@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 gap-x-8 pt-4">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-9">
            <div class="flex flex-col card items-center justify-center gap-y-4 px-8 py-6">
                <div class="text-2xl font-bold mb-8">Status Pengajuan</div>
                <div class="flex items-center justify-center gap-x-2">
                    <div class="flex flex-col items-center justify-center gap-y-2">
                        <div class="rounded-full bg-gray-400 p-4">
                            <span class="fa fa-fw fa-user-shield text-white text-xl"></span>
                        </div>
                        <div class="text-md text-gray-400 text-center w-24 h-24">Login</div>
                    </div>
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                    <div class="flex flex-col items-center justify-center gap-y-2">
                        <div class="rounded-full bg-gray-400 p-4">
                            <span class="fa fa-fw fa-user-edit text-white text-xl"></span>
                        </div>
                        <div class="text-md text-gray-400 text-center w-24 h-24">Lengkapi Data Diri</div>
                    </div>
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                    <div class="flex flex-col items-center justify-center gap-y-2">
                        <div class="rounded-full bg-mangga-orange-300 p-4">
                            <span class="fa fa-fw fa-user-check text-white text-xl"></span>
                        </div>
                        <div class="text-md text-gray-400 text-center w-24 h-24">Validasi Data Diri</div>
                    </div>
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                    <div class="flex flex-col items-center justify-center gap-y-2">
                        <div class="rounded-full bg-gray-400 p-4">
                            <span class="fa fa-fw fa-building text-white text-xl"></span>
                        </div>
                        <div class="text-md text-gray-400 text-center w-24 h-24">Memilih Sektor Usaha</div>
                    </div>
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                    <div class="flex flex-col items-center justify-center gap-y-2">
                        <div class="rounded-full bg-gray-400 p-4">
                            <span class="fab fa-fw fa-wpforms text-white text-xl"></span>
                        </div>
                        <div class="text-md text-gray-400 text-center w-24 h-24">Mengisi Form Pengajuan</div>
                    </div>
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                    <div class="flex flex-col items-center justify-center gap-y-2">
                        <div class="rounded-full bg-gray-400 p-4">
                            <span class="fa fa-fw fa-check-circle text-white text-xl"></span>
                        </div>
                        <div class="text-md text-gray-400 text-center w-24 h-24">Verifikasi</div>
                    </div>
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                    <div class="flex flex-col items-center justify-center gap-y-2">
                        <div class="rounded-full bg-gray-400 p-4">
                            <span class="fa fa-fw fa-info-circle text-white text-xl"></span>
                        </div>
                        <div class="text-md text-gray-400 text-center w-24 h-24">Survey</div>
                    </div>
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                    <div class="flex flex-col items-center justify-center gap-y-2">
                        <div class="rounded-full bg-gray-400 p-4">
                            <span class="fa fa-fw fa-clipboard-check text-white text-xl"></span>
                        </div>
                        <div class="text-md text-gray-400 text-center w-24 h-24">Hasil Analisa Pengajuan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

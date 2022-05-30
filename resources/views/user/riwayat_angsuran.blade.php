@extends('layouts.app')

@php
function rupiah($angka)
{
    $hasil_rupiah = number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
@endphp

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:pl-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        @if (Auth::user()->businesses[0]->business_status_id == 4 || Auth::user()->businesses[0]->business_status_id >= 6)
            <div class="col-span-12 xl:col-span-9 min-h-screen">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-2xl font-bold">Riwayat Angsuran</div>
                    <a class="mangga-button-green cursor-pointer" onclick="openModal('create')">
                        <span class="fa fa-fw fa-file-upload mr-2"></span>Upload Bukti Pembayaran
                    </a>
                </div>
                <div class="card px-8 py-6 w-full hidden md:block mb-4">
                    <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1">Nama Usaha</th>
                                <th data-priority="2">Tanggal Pembayaran</th>
                                <th data-priority="3">Jumlah Pembayaran</th>
                                <th data-priority="5">Klasifikasi</th>
                                <th data-priority="6">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Auth::user()->businesses[0]->angsurans as $business_angsuran)
                                <tr>
                                    <td>{{ $business_angsuran->business->name }}</td>
                                    <td>{{ $business_angsuran->created_at }}</td>
                                    <td>Rp. {{ rupiah($business_angsuran->amount) }}</td>
                                    <td>{{ $business_angsuran->business->utama->evaluation->installment_typed->name }}
                                    </td>
                                    <td>{{ $business_angsuran->status->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card bg-white px-8 py-2">
                    <table id="example" style="width: 100%;" class="text-center">
                        <thead>
                            <tr>
                                <th>TAR</th>
                                <th>Tanggal</th>
                                <th>Pokok</th>
                                <th>Jasa</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <th colspan="2">Normal</th>
                                <th class="text-bold">Rp.
                                    {{ rupiah(Auth::user()->businesses[0]->utama->request_amount) }}</th>
                                @php
                                    $totalpinjam = Auth::user()->businesses[0]->utama->request_amount;
                                    $sisa = 0;
                                    $angsuran = (Auth::user()->businesses[0]->utama->request_amount * (Auth::user()->businesses[0]->utama->service_fee / 12 / 100)) / (1 - 1 / pow(1 + Auth::user()->businesses[0]->utama->service_fee / 12 / 100, Auth::user()->businesses[0]->utama->evaluation->loan_period));
                                    $angsuran_bulet = floor($angsuran / 100) * 100;
                                    $totalangsuran = ceil(($angsuran_bulet * Auth::user()->businesses[0]->utama->evaluation->loan_period) / 10000) * 10000;
                                    $total_terangsur = 0;
                                @endphp
                                @foreach (Auth::user()->businesses[0]->angsurans->where('status_id', 1) as $business_angsuran)
                                    @php
                                        $total_terangsur += $business_angsuran->amount;
                                    @endphp
                                @endforeach
                                <th></th>
                                <th class="text-bold">Rp. {{ rupiah($totalangsuran) }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= Auth::user()->businesses[0]->utama->evaluation->loan_period; $i++)
                                @php
                                    $sisa += $angsuran - $angsuran_bulet;
                                    $jasa = ($totalpinjam * (Auth::user()->businesses[0]->utama->service_fee / 12)) / 100;
                                    $sisa += $jasa - round($jasa / 100) * 100;
                                @endphp
                                @if ($i == Auth::user()->businesses[0]->utama->evaluation->loan_period)
                                    @php
                                        $angsuran_bulet += $totalangsuran - $angsuran_bulet * Auth::user()->businesses[0]->utama->evaluation->loan_period;
                                    @endphp
                                @endif
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ date('d-M-y', strtotime('+' . $i . ' month', strtotime('midnight first day of last month')) + 60 * 60 * 24 * 4) }}
                                    </td>
                                    @php
                                        $total_terangsur -= $angsuran_bulet - round($jasa / 100) * 100;
                                    @endphp
                                    @if ($total_terangsur > 0)
                                        <td>Rp.
                                            {{ rupiah($angsuran_bulet - round($jasa / 100) * 100) }}
                                        </td>
                                    @else
                                        <td>
                                            -
                                        </td>
                                    @endif
                                    @php
                                        $total_terangsur -= round($jasa / 100) * 100;
                                    @endphp
                                    @if ($total_terangsur > 0)
                                        <td>Rp. {{ rupiah(round($jasa / 100) * 100) }}
                                        </td>
                                    @else
                                        <td>
                                            -
                                        </td>
                                    @endif
                                    <td>Rp. {{ rupiah($angsuran_bulet) }}
                                    </td>
                                </tr>
                                @php
                                    $totalpinjam -= $angsuran_bulet - round($jasa / 100) * 100;
                                @endphp
                            @endfor
                        </tbody>
                    </table>
                </div>
                <div class="flex md:hidden flex-col items-center justify-center gap-6">
                    {{-- <div class="relative w-full">
                    <input type="text" class="rounded-full w-full border border-gray-400 pl-6 pr-9 py-2"
                        placeholder="Search">
                    <span class="fa fa-fw fa-search absolute right-4 inset-y-0 my-auto h-4"></span>
                </div> --}}
                    @foreach (Auth::user()->businesses[0]->angsurans as $business_angsuran)
                        <div class="card flex flex-col items-center justify-center gap-2 w-full p-3">
                            <div class="flex items-center justify-between w-full">
                                <div>{{ $business_angsuran->created_at }}</div>
                                <div>{{ $business_angsuran->installment_counter }} -
                                    {{ $business_angsuran->business->utama->evaluation->installment_typed->name }}</div>
                            </div>
                            <div class="flex items-center justify-between w-full">
                                <div class="text-xl">Rp. {{ rupiah($business_angsuran->amount) }}</div>
                                <div>{{ $business_angsuran->status->name }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="col-span-12 xl:col-span-9 min-h-screen">
                <div class="flex items-center justify-center mt-4">
                    <div class="text-3xl">Pengajuan Anda Belum Di Approve.</div>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('modals')
    <div class="fixed w-screen h-screen hidden items-center justify-center modal z-50" id="create-modal">
        <div class="bg-black opacity-50 w-screen h-screen absolute background-modal" onclick="closeModal();"></div>
        <div class="rounded-lg bg-white px-8 pt-8 pb-6 absolute flex flex-col gap-y-4 w-1/2">
            <span class="fa fa-fw fa-times text-xl hover:text-red-600 absolute top-4 right-4 cursor-pointer"
                onclick="closeModal();"></span>
            <form action="{{ route('user.angsuran.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-2 font-os">
                    <div class="text-2xl font-bold">Upload Bukti Pembayaran</div>
                    <label class="text-gray-600 font-bold">Jumlah</label>
                    <input type="number" name="amount" class="form-input" placeholder="Rp." required>
                    <input type="hidden" name="installment_counter" value=0 required>
                    <label class="text-gray-600 font-bold">Bukti Pembayaran</label>
                    <input type="file" name="proof" required>
                    <button type="submit" class="mangga-button-green cursor-pointer">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
    <script>
        function openModal(type) {
            $('#' + type + '-modal').removeClass('hidden').addClass('flex');
        }

        function closeModal() {
            $('.modal').removeClass('flex').addClass('hidden');
        }
    </script>
@endsection

@section('head')
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">


    <!--Datatables -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <style>
        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #0f7144 !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            background: #0f7144 !important;
            border: 1px solid transparent;
            /*border border-transparent*/
            cursor: pointer;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            color: #fff !important;
            cursor: default;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
            cursor: pointer;
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #0f7144 !important;
            /*bg-indigo-500*/
        }

        .paginate_button,
        .paginate_button:hover {
            color: #ffffff !important;
        }

    </style>
@endsection

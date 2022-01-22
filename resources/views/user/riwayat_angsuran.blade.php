@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:pl-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 xl:col-span-9 h-screen">
            <div class="card px-8 py-6 w-full hidden md:block">
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="1">Nama Usaha</th>
                            <th data-priority="2">Tanggal Pembayaran</th>
                            <th data-priority="3">Jumlah Pembayaran</th>
                            <th data-priority="4">Angsuran</th>
                            <th data-priority="5">Klasifikasi</th>
                            <th data-priority="6">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PT. Tani Sukses Raya</td>
                            <td>2021/10/01 21:32:42</td>
                            <td>Rp. 2.500.000</td>
                            <td>3</td>
                            <td>AN</td>
                            <td class="text-yellow-500">Process</td>
                        </tr>
                        <tr>
                            <td>PT. Tani Sukses Raya</td>
                            <td>2021/10/01 21:32:42</td>
                            <td>Rp. 2.000.000</td>
                            <td>2</td>
                            <td>AN</td>
                            <td class="text-green-500">Approved</td>
                        </tr>
                        <tr>
                            <td>PT. Tani Sukses Raya</td>
                            <td>2021/10/01 21:32:42</td>
                            <td>Rp. 2.000.000</td>
                            <td>1</td>
                            <td>AN</td>
                            <td class="text-green-500">Approved</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex md:hidden flex-col items-center justify-center gap-6">
                <div class="relative w-full">
                    <input type="text" class="rounded-full w-full border border-gray-400 pl-6 pr-9 py-2"
                        placeholder="Search">
                    <span class="fa fa-fw fa-search absolute right-4 inset-y-0 my-auto h-4"></span>
                </div>
                <div class="card flex flex-col items-center justify-center gap-2 w-full p-3">
                    <div class="flex items-center justify-between w-full">
                        <div>2021/10/01 21:32:42</div>
                        <div>3 - AN</div>
                    </div>
                    <div class="flex items-center justify-between w-full">
                        <div class="text-xl">2.500.000</div>
                        <div class="text-yellow-500">Process</div>
                    </div>
                </div>
                <div class="card flex flex-col items-center justify-center gap-2 w-full p-3">
                    <div class="flex items-center justify-between w-full">
                        <div>2021/10/01 21:32:42</div>
                        <div>2 - AN</div>
                    </div>
                    <div class="flex items-center justify-between w-full">
                        <div class="text-xl">2.000.000</div>
                        <div class="text-green-500">Approved</div>
                    </div>
                </div>
                <div class="card flex flex-col items-center justify-center gap-2 w-full p-3">
                    <div class="flex items-center justify-between w-full">
                        <div>2021/10/01 21:32:42</div>
                        <div>1 - AN</div>
                    </div>
                    <div class="flex items-center justify-between w-full">
                        <div class="text-xl">2.500.000</div>
                        <div class="text-green-500">Approved</div>
                    </div>
                </div>
            </div>
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

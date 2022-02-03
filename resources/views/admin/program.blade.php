@extends('layouts.admin')

@section('content')
    <div class="grid grid-cols-3 gap-x-4 gap-y-2 mb-4">
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <a href="#">
                <div class="grid grid-cols-2 items-center p-4">
                    <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}" class="w-full">
                    <div class="flex flex-col items-end">
                        <div class="text-4xl text-mangga-green-500 font-bold">
                            {{ count($businesses->where('mangga_type', 1)) }}
                        </div>
                        Ajuan
                    </div>
                </div>
            </a>
        </div>
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <a href="#">
                <div class="grid grid-cols-2 items-center p-4">
                    <img src="{{ asset('assets/img/mangga-muda.png') }}" alt="Mangga Muda" class="w-full">
                    <div class="flex flex-col items-end">
                        <div class="text-4xl text-mangga-green-500 font-bold">
                            {{ count($businesses->where('mangga_type', 2)) }}
                        </div>
                        Ajuan
                    </div>
                </div>
            </a>
        </div>
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <a href="#">
                <div class="grid grid-cols-2 items-center p-4">
                    <img src="{{ asset('assets/img/mangga-makmur.png') }}" class="w-full">
                    <div class="flex flex-col items-end">
                        <div class="text-4xl text-mangga-green-500 font-bold">
                            #
                        </div>
                        Ajuan
                    </div>
                </div>
            </a>
        </div>
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <a href="#">
                <div class="grid grid-cols-2 items-center p-4">
                    <img src="{{ asset('assets/img/mangga-gadung.png') }}" class="w-full">
                    <div class="flex flex-col items-end">
                        <div class="text-4xl text-mangga-green-500 font-bold">
                            #
                        </div>
                        Ajuan
                    </div>
                </div>
            </a>
        </div>
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <a href="#">
                <div class="grid grid-cols-2 items-center p-4">
                    <img src="{{ asset('assets/img/mangga-golek.png') }}" class="w-full">
                    <div class="flex flex-col items-end">
                        <div class="text-4xl text-mangga-green-500 font-bold">
                            #
                        </div>
                        Ajuan
                    </div>
                </div>
            </a>
        </div>
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <a href="#">
                <div class="grid grid-cols-2 items-center p-4">
                    <img src="{{ asset('assets/img/mangga-madu.png') }}" class="w-full">
                    <div class="flex flex-col items-end">
                        <div class="text-4xl text-mangga-green-500 font-bold">
                            #
                        </div>
                        Ajuan
                    </div>
                </div>
            </a>
        </div>
    </div>
    <hr>
    <div class="grid grid-cols-2 gap-x-4 gap-y-2 mb-4">
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <div class="grid grid-cols-4 items-center p-4">
                <span class="fa fa-fw fa-user text-3xl"></span>
                <div class="flex flex-col items-start col-span-2">
                    <div class="text-4xl text-mangga-green-500 font-bold">
                        PM CCM
                    </div>
                    {{ $people->pm_ccm }}
                </div>
                <div class="flex items-center justify-center">
                    <a href="{{ route('admin.people.pmccm') }}" class="mangga-button-green cursor-pointer">
                        <span class="fa fa-fw fa-edit"></span>Edit
                    </a>
                </div>
            </div>
        </div>
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <div class="grid grid-cols-4 items-center p-4">
                <span class="fa fa-fw fa-user text-3xl"></span>
                <div class="flex flex-col items-start col-span-2">
                    <div class="text-4xl text-mangga-green-500 font-bold">
                        VP CSR
                    </div>
                    {{ $people->vp }}
                </div>
                <div class="flex items-center justify-center">
                    <a href="{{ route('admin.people.vp') }}" class="mangga-button-green cursor-pointer">
                        <span class="fa fa-fw fa-edit"></span>Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-white px-8 py-6">
        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">ID</th>
                    <th data-priority="2">Nama Usaha</th>
                    <th data-priority="3">Tanggal Pengajuan</th>
                    <th data-priority="4">Pemilik Usaha</th>
                    <th data-priority="5">Program</th>
                    <th data-priority="6">Status</th>
                    <th data-priority="7">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($businesses as $business)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $business->name }}</td>
                        <td>{{ $business->created_at->format('d/m/Y H:i:s') }}</td>
                        @if ($business->mangga_type == 1)
                            <td>{{ $business->utama->user_name }}</td>
                            <td>Mangga</td>
                        @elseif ($business->mangga_type == 2)
                            <td>{{ $business->muda->leader_name }}</td>
                            <td>Mangga Muda</td>
                        @endif
                        @if ($business->status == 1)
                            <td><span class="fa fa-fw fa-clock text-mangga-orange-400"></span>Belum Upload Ulang Form</td>
                        @elseif ($business->status == 2)
                            <td><span class="fa fa-fw fa-clock text-mangga-orange-400"></span>Belum Disetujui Surveyor</td>
                        @elseif ($business->status == 3)
                            <td><span class="fa fa-fw fa-clock text-mangga-orange-400"></span>Belum Disetujui Pimpinan</td>
                        @elseif ($business->status == 4)
                            <td><span class="fa fa-fw fa-check text-mangga-green-400"></span> Sudah Disetujui Pimpinan</td>
                        @elseif ($business->status == 0)
                            <td><span class="fa fa-fw fa-times text-mangga-red-300"></span>Ditolak</td>
                        @endif
                        @if ($business->mangga_type == 1)
                            <td class="flex items-center justify-center">
                                <a href="{{ route('admin.program.utama', $business->id) }}"
                                    class="mangga-button-green cursor-pointer"><span class="fa fa-fw fa-eye"></span> Lihat
                                    Detail</a>
                            </td>
                        @elseif ($business->mangga_type == 2)
                            <td class="flex items-center justify-center">
                                <a href="{{ route('admin.program.muda', $business->id) }}"
                                    class="mangga-button-green cursor-pointer"><span class="fa fa-fw fa-eye"></span> Lihat
                                    Detail</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
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

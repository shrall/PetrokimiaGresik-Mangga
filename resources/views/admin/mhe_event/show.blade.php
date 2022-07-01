@extends('layouts.admin')

@section('content')
    <div class="text-4xl font-bold mb-2" id="form-title">{{ $mheEvent->name }}</div>
    <div class="card bg-white px-8 py-6">
        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th>No.</th>
                    <th data-priority="1">Nama</th>
                    <th data-priority="2">E-Mail</th>
                    <th data-priority="3">Phone</th>
                    <th data-priority="4">Kode Unik</th>
                    <th data-priority="5">Kode Referensi</th>
                    <th>Tipe</th>
                    <th>Bukti</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mheEvent->transactions as $mheTransaction)
                    <tr>
                        <td>{{ $mheTransaction->id }}</td>
                        <td>{{ $mheTransaction->attendee_name }}</td>
                        <td>{{ $mheTransaction->attendee_email }}</td>
                        <td>{{ $mheTransaction->attendee_phone }}</td>
                        <td>{{ $mheTransaction->ucode->string }}</td>
                        <td>{{ $mheTransaction->reference_code }}</td>
                        <td>{{ $mheTransaction->is_online == 0 ? 'Offline' : 'Online' }}</td>
                        <td>
                            <a target="_blank" href="{{ asset('uploads/mhe/' . $mheTransaction->evidence) }}"
                                class="mangga-button-orange cursor-pointer"><span class="fa fa-fw fa-file"></span>
                            </a>
                        </td>
                        <td class="flex items-center justify-center gap-x-2">
                            @if ($mheTransaction->is_approved == 1)
                                <div class="text-mangga-green-400"><span class="fa fa-fw fa-check mr-2"></span>Tersetujui
                                </div>
                            @elseif($mheTransaction->is_approved == 2)
                                <div class="text-red-500"><span class="fa fa-fw fa-times mr-2"></span>Tertolak
                                </div>
                            @else
                                <a onclick="openModal('accept-tx-{{ $mheTransaction->id }}');"
                                    class="mangga-button-green cursor-pointer"><span class="fa fa-fw fa-check"></span>
                                </a>
                                <a onclick="openModal('reject-tx-{{ $mheTransaction->id }}');"
                                    class="mangga-button-red cursor-pointer"><span class="fa fa-fw fa-times"></span>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('modals')
    @foreach ($mheEvent->transactions as $mheTransaction)
        <div class="fixed w-screen h-screen hidden items-center justify-center modal z-50"
            id="accept-tx-{{ $mheTransaction->id }}-modal">
            <div class="bg-black opacity-50 w-screen h-screen absolute background-modal" onclick="closeModal();"></div>
            <div class="rounded-lg bg-white px-8 pt-8 pb-6 absolute flex flex-col gap-y-4 w-128">
                <span class="fa fa-fw fa-times text-xl hover:text-red-600 absolute top-4 right-4 cursor-pointer"
                    onclick="closeModal();"></span>
                <div class="flex items-center justify-center px-8 py-4">
                    <div class="flex flex-col gap-y-2 text-center">
                        <span>Apakah kamu yakin ingin menyetujui data dengan kode referensi
                            {{ $mheTransaction->reference_code }}?</span>
                    </div>
                </div>
                <a href="{{ route('admin.mhe_transaction.show', $mheTransaction->id) }}"
                    class="mangga-button-green w-full cursor-pointer">
                    Setujui
                    <span class=" fa fa-fw fa-check ml-2"></span>
                </a>
            </div>
        </div>
        <div class="fixed w-screen h-screen hidden items-center justify-center modal z-50"
            id="reject-tx-{{ $mheTransaction->id }}-modal">
            <div class="bg-black opacity-50 w-screen h-screen absolute background-modal" onclick="closeModal();"></div>
            <div class="rounded-lg bg-white px-8 pt-8 pb-6 absolute flex flex-col gap-y-4 w-128">
                <span class="fa fa-fw fa-times text-xl hover:text-red-600 absolute top-4 right-4 cursor-pointer"
                    onclick="closeModal();"></span>
                <div class="flex items-center justify-center px-8 py-4">
                    <div class="flex flex-col gap-y-2 text-center">
                        <span>Apakah kamu yakin ingin menolak data dengan kode referensi
                            {{ $mheTransaction->reference_code }}?</span>
                    </div>
                </div>
                <a href="{{ route('admin.mhe_transaction.edit', $mheTransaction->id) }}"
                    class="mangga-button-red w-full cursor-pointer">
                    Tolak
                    <span class=" fa fa-fw fa-times ml-2"></span>
                </a>
            </div>
        </div>
    @endforeach
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                    responsive: true,
                    "pageLength": 50
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

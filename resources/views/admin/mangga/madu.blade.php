@extends('layouts.admin')

@section('content')
    <div class="flex flex-col card items-center justify-center gap-y-4 px-8 py-6 mb-4">
        <div class="text-2xl font-bold mb-8">Status Pengajuan</div>
        <div class="flex flex-col xl:flex-row items-center justify-center gap-x-2">
            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                <div class="rounded-full bg-gray-400 p-4">
                    <span class="fa fa-fw fa-video text-white text-xl"></span>
                </div>
                <div
                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                    Submit Video</div>
            </div>
            <div class="block xl:hidden">
                <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
            </div>
            <div class="hidden xl:block">
                <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
            </div>
            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                <div class="rounded-full {{ $madu->status == 1 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
                    <span class="fa fa-fw fa-user-check text-white text-xl"></span>
                </div>
                <div
                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                    Menunggu Verifikasi Tim Kemitraan</div>
            </div>
            <div class="block xl:hidden">
                <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
            </div>
            <div class="hidden xl:block">
                <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
            </div>
            @if ($madu->status == 5)
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full bg-mangga-red-300 p-4">
                        <span class="fa fa-fw fa-times text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Ditolak</div>
                </div>
            @else
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full {{ $madu->status == 4 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
                        <span class="fa fa-fw fa-check-double text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Proses Seleksi</div>
                </div>
            @endif
        </div>
        <div class="flex items-center justify-center gap-x-4">
            <a href="{{ route('admin.madu.approve_surveyor', $madu->id) }}"
                class="mangga-button-green cursor-pointer">Setujui
            </a>
            <a href="{{ route('admin.madu.reject', $madu->id) }}" class="mangga-button-red cursor-pointer">Tolak
            </a>
        </div>
    </div>
    {{-- @if (Auth::user()->user_role == 2)
        <div class="card bg-white px-8 py-6 mb-4">
            <div class="text-2xl font-bold mb-2">Log Pengajuan</div>
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">No.</th>
                        <th data-priority="2">Deskripsi</th>
                        <th data-priority="3">Nama Admin</th>
                        <th data-priority="4">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($madu->business->logs as $log)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $log->description }}</td>
                            <td>{{ $log->admin->first_name . ' ' . $log->admin->last_name }}</td>
                            <td>{{ $log->created_at->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif --}}
    <div class="card px-8 py-6 flex flex-col gap-y-4">
        <label class="font-bold text-3xl self-start">Nomor Registrasi</label>
        @if ($madu->status == 4)
            <input type="text" name="name" class="form-pengajuan-input" required disabled
                value="{{ $madu->registration_number }}">
        @else
            <input type="text" name="name" class="form-pengajuan-input" required disabled value="Belum Diverifikasi">
        @endif
        <label class="font-bold text-3xl self-start">NIK Suami</label>
        <input type="text" name="nik_karyawan" class="form-pengajuan-input" required value="{{ $madu->user->nik_karyawan }}" disabled>
        <label class="font-bold text-3xl self-start">Departemen Suami</label>
        <input type="text" name="employee_department_id" class="form-pengajuan-input" required value="{{ $madu->user->department->name }}" disabled>
        <label class="font-bold text-3xl self-start">Nomor Handphone</label>
        <input type="text" name="employee_department_id" class="form-pengajuan-input" required value="{{ $madu->user->handphone }}" disabled>
        <label class="font-bold text-3xl self-start">Nama Bisnis*</label>
        <input type="text" name="name" class="form-pengajuan-input" required value="{{ $madu->name }}" disabled>
        <label class="font-bold text-3xl self-start">Deskripsi Bisnis*</label>
        <textarea name="description" id="" cols="30" rows="7" class="form-pengajuan-input" disabled>{{ $madu->description }}</textarea>
        <label class="font-bold text-3xl self-start">Link Video*</label>
        <a target="_blank" href="{{ $madu->link }}" class="underline text-blue-400">{{ $madu->link }}</a>
        <label class="font-bold text-3xl self-start">Foto Tempat Usaha/Tempat Tinggal*</label>
        <div class="flex flex-col gap-y-4">
            <img src="{{ asset('uploads/mangga/establishment_picture/' . $madu->image) }}" class="w-full h-72 rounded-lg"
                id="preview-foto-establishment">
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

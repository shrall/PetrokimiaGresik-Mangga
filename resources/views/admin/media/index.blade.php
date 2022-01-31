@extends('layouts.admin')

@section('content')
    <div class="grid grid-cols-4 gap-x-4 gap-y-2 mb-4">
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <a href="#">
                <div class="grid grid-cols-2 items-center p-4">
                    <span class="fa fa-fw fa-bullhorn text-5xl text-gray-500"></span>
                    <div class="flex flex-col items-end">
                        <div class="text-4xl text-mangga-green-500 font-bold">
                            {{ count($medias->where('type_id', 1)) }}
                        </div>
                        Pengumuman
                    </div>
                </div>
            </a>
        </div>
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <a href="#">
                <div class="grid grid-cols-2 items-center p-4">
                    <span class="fa fa-fw fa-images text-5xl text-gray-500"></span>
                    <div class="flex flex-col items-end">
                        <div class="text-4xl text-mangga-green-500 font-bold">
                            {{ count($medias->where('type_id', 2)) }}
                        </div>
                        Artikel
                    </div>
                </div>
            </a>
        </div>
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <a href="#">
                <div class="grid grid-cols-2 items-center p-4">
                    <span class="fa fa-fw fa-newspaper text-5xl text-gray-500"></span>
                    <div class="flex flex-col items-end">
                        <div class="text-4xl text-mangga-green-500 font-bold">
                            {{ count($medias->where('type_id', 3)) }}
                        </div>
                        Galeri
                    </div>
                </div>
            </a>
        </div>
        <div class="border-2 border-gray-400 bg-white cursor-pointer hover:bg-gray-100">
            <a href="#">
                <div class="grid grid-cols-2 items-center p-4">
                    <span class="fa fa-fw fa-award text-5xl text-gray-500"></span>
                    <div class="flex flex-col items-end">
                        <div class="text-4xl text-mangga-green-500 font-bold">
                            {{ count($medias->where('type_id', 4)) }}
                        </div>
                        Penghargaan
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="flex items-center justify-end mb-4">
        <a href="{{route('admin.media.create')}}" class="mangga-button-green cursor-pointer">
            <span>Tambah Media</span>
        </a>
    </div>
    <div class="card bg-white px-8 py-6">
        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">Nama</th>
                    <th data-priority="2">Tipe</th>
                    <th data-priority="3">Tanggal Dibuat</th>
                    <th data-priority="4">Dibuat Oleh</th>
                    <th data-priority="5">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medias as $media)
                    <tr>
                        <td>{{ $media->name }}</td>
                        <td>{{ $media->type->name }}</td>
                        <td>{{ $media->created_at->format('d/m/Y H:i:s') }}</td>
                        <td>{{ $media->user->first_name . ' ' . $media->user->last_name }}</td>
                        <td class="flex items-center justify-center gap-x-2">
                            <a target="blank" href="{{ route('media.show', $media->slug) }}"
                                class="mangga-button-green cursor-pointer"><span class="fa fa-fw fa-eye"></span>
                            </a>
                            <a target="blank" href="{{ route('admin.media.edit', $media->slug) }}"
                                class="mangga-button-orange cursor-pointer"><span class="fa fa-fw fa-edit"></span>
                            </a>
                            <a onclick="event.preventDefault(); document.getElementById('delete-media-form').submit();"
                                class="mangga-button-red cursor-pointer"><span class="fa fa-fw fa-trash"></span>
                            </a>
                            <form action="{{ route('admin.media.destroy', $media->slug) }}" id="delete-media-form" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                            </form>
                        </td>
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

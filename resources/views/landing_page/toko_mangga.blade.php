@extends('layouts.home')

@section('content')
    <div class="h-vh-40 xl:h-vh-80 bg-toko_mangga-1 bg-cover flex items-center justify-center mb-8">
        <div class="font-af text-white text-4xl md:text-6xl">Semua berawal dari sini.</div>
    </div>
    <div class="flex items-center justify-end px-8 md:px-16 xl:px-48 mb-8">
        <div class="dropdown inline-block relative">
            <button
                class="bg-white hover:bg-gray-100 text-black shadow-xl font-semibold py-2 px-4 rounded inline-flex items-center">
                <span class="mr-1" id="sort-menu-title">Sort by Date</span>
                <span class="fa fa-fw fa-chevron-down ms-2"></span>
            </button>
            <ul class="dropdown-menu absolute hidden text-black pt-1">
                <li class="">
                    <a class="rounded-t bg-white hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap cursor-pointer"
                        onclick="changeSort('Date')">Sort by
                        Date</a>
                </li>
                <li class="">
                    <a class="rounded-t bg-white hover:bg-gray-100 py-2 px-4 block whitespace-no-wrap cursor-pointer"
                        onclick="changeSort('Likes')">Sort by
                        Likes</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 items-center justify-center gap-x-8 gap-y-6 px-8 md:px-16 xl:px-48 mb-8">
        @for ($i = 0; $i < 8; $i++)
            @include('landing_page.inc.toko_mangga_card')
        @endfor
    </div>
    <div class="flex items-center justify-end pb-8"></div>
@endsection

@section('scripts')
    <script>
        function changeSort(type) {
            $('#sort-menu-title').html('Sort by ' + type);
        }
    </script>
@endsection

@extends('layouts.home')
@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-16">
        <div class="col-span-2"></div>
        <div class="col-span-8 text-4xl py-4 border-b border-gray-400 font-semibold">Media</div>
        <div class="col-span-2 bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-between px-8 py-6 border-b border-gray-400 text-2xl">Filter <span
                    class="fa fa-fw fa-filter text-gray-400"></span></div>
            <div class="flex flex-col gap-y-6 p-8 text-xl">
                <div class="cursor-pointer hover:bg-mangga-green-400 hover:text-white rounded-lg p-3 media-menu"
                    id="media-pengumuman" onclick="changeMediaFilter('pengumuman');">
                    <span class="fa fa-fw fa-bullhorn mr-2"></span>Pengumuman
                </div>
                <div class="cursor-pointer hover:bg-mangga-green-400 hover:text-white rounded-lg p-3 media-menu"
                    id="media-galeri" onclick="changeMediaFilter('galeri');">
                    <span class="fa fa-fw fa-images mr-2"></span>Galeri
                </div>
                <div class="cursor-pointer bg-mangga-green-400 text-white rounded-lg p-3 media-menu" id="media-artikel" onclick="changeMediaFilter('artikel');">
                    <span class="fa fa-fw fa-newspaper mr-2"></span>Artikel
                </div>
                <div class="cursor-pointer hover:bg-mangga-green-400 hover:text-white rounded-lg p-3 media-menu"
                    id="media-penghargaan" onclick="changeMediaFilter('penghargaan');">
                    <span class="fa fa-fw fa-award mr-2"></span>Penghargaan
                </div>
            </div>
        </div>
        <div class="col-span-8 flex flex-col gap-y-4 py-4">
            @for ($i = 0; $i < 5; $i++)
                @include('landing_page.inc.media_card')
            @endfor
        </div>
        <div class="col-span-2"></div>
        <div class="col-span-8"></div>
    </div>
@endsection

@section('scripts')
    <script>
        function changeMediaFilter(type) {
            $('.media-menu').removeClass('bg-mangga-green-400').removeClass('text-white').addClass(
                'hover:bg-mangga-green-400').addClass('hover:text-white');
            $('#media-'+type).addClass('bg-mangga-green-400').addClass('text-white').removeClass(
                'hover:bg-mangga-green-400').removeClass('hover:text-white');
        }
    </script>
@endsection

@extends('layouts.home')
@section('content')
    <img src="{{ asset('uploads/media/banners/' . $media->banner) }}" id="image-banner" class="w-full h-vh-40 object-cover cursor-pointer" onclick="zoomImage('image-banner')">
    <div class="flex flex-col px-12 py-4 gap-y-2">
        <div class="flex items-center">
            <div class="mangga-tag-orange-outline cursor-default">{{ $media->type->name }}</div>
        </div>
        <div class="text-3xl font-bold">{{ $media->name }}</div>
        <div class="flex flex-col md:flex-row md:items-center justify-between">
            <div class="text-gray-400"><span
                    class="fa fa-fw fa-clock mr-2"></span>{{ $media->created_at->format('d/m/Y') }}</div>
            <div class="text-mangga-green-400">oleh
                {{ $media->user->first_name . ' ' . $media->user->last_name }}</div>
        </div>
        <hr>
        @if ($media->type_id != 2)
        <div id="content"></div>
        @else
            <div class="flex flex-col md:flex-row items-center justify-evenly gap-2">
                @foreach ($media->galleries as $item)
                    <img src="{{ asset('uploads/media/gallery/' . $item->path) }}" id="gallery-{{ $loop->iteration }}"
                        onclick="zoomImage('gallery-{{ $loop->iteration }}')"
                        class="h-48 rounded-lg object-cover cursor-pointer transition ease-in-out md:hover:opacity-80 duration-300">
                @endforeach
            </div>
        @endif
    </div>
@endsection

@section('scripts')
    <script>
        function zoomImage(id) {
            console.log(id)
            $('#image-zoomed').attr('src', $('#' + id).attr('src'));
            openModal('image');
        }
    </script>
    <script>
        function openModal(type) {
            $('#' + type + '-modal').removeClass('hidden').addClass('flex');
        }

        function closeModal() {
            $('.modal').removeClass('flex').addClass('hidden');
        }
    </script>
    <script>
        function htmlDecode(input) {
            var e = document.createElement('div');
            e.innerHTML = input;
            return e.childNodes[0].nodeValue;
        }
        $('#content').append(htmlDecode("{{ $media->content }}"))
    </script>
@endsection

@section('modals')
    <div class="fixed w-full h-full hidden items-center justify-center modal" id="image-modal">
        <div class="bg-black opacity-50 w-full h-full absolute background-modal" onclick="closeModal();"></div>
        <img src="" id="image-zoomed" class="h:vh-30 md:h-vh-80 z-50 object-contain">
    </div>
@endsection

@section('head')
    <style>
        table, th, tr, td{
            border: solid 1px black;
        }
    </style>
@endsection

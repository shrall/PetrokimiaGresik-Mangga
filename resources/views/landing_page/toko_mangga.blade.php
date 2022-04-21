@extends('layouts.home')

@section('content')
    <div class="h-vh-40 xl:h-vh-80 bg-toko_mangga-1 bg-cover flex items-center justify-center mb-8">
        <div class="font-lb text-white text-4xl md:text-6xl">Semua berawal dari sini.</div>
    </div>
    {{-- <div class="flex items-center justify-end px-8 md:px-16 xl:px-48 mb-8">
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
    </div> --}}
    <div
        class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 items-center justify-center gap-x-8 gap-y-6 px-8 md:px-16 xl:px-48 mb-8">
        @foreach ($businesses as $business)
            @include('landing_page.inc.toko_mangga_card')
        @endforeach
    </div>
    <div class="flex items-center justify-between px-8 md:px-16 xl:px-48 mb-8">
        {{ $businesses->links() }}
    </div>
@endsection

@section('modals')
    @foreach ($businesses as $business)
        <div class="fixed w-screen h-screen hidden items-center justify-center modal z-50"
            id="business-{{ $business->id }}-modal">
            <div class="bg-black opacity-50 w-screen h-screen absolute background-modal" onclick="closeModal();"></div>
            <div class="rounded-lg bg-white px-8 pt-8 pb-6 absolute flex flex-col gap-y-4 w-3/4">
                <span class="fa fa-fw fa-times text-xl hover:text-red-600 absolute top-4 right-4 cursor-pointer"
                    onclick="closeModal();"></span>
                <div class="flex gap-x-2">
                    <img class="rounded-t-lg w-48"
                        @if ($business->logo) src="{{ asset('uploads/mangga/logos/' . $business->logo) }}" @else src="{{ asset('assets/svg/empty-image.svg') }}" @endif>
                    <div class="flex flex-col gap-2">
                        <span class="text-3xl font-semibold mr-auto">
                            {{ $business->name }}
                        </span>
                        <div class="flex items-center gap-x-2 text-xl bg-white rounded-b-lg">
                            <a href="https://instagram.com/p/{{ $business->utama->instagram }}">
                                <span class="fab fa-fw fa-instagram text-3xl cursor-pointer hover:text-gray-900"></span>
                            </a>
                            <a href="{{ $business->user->google_maps }}">
                                <span class="fa fa-fw fa-compass text-3xl cursor-pointer hover:text-gray-900"></span>
                            </a>
                        </div>
                        <div>{{ $business->utama->toko_description }}</div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('scripts')
    <script>
        function changeSort(type) {
            $('#sort-menu-title').html('Sort by ' + type);
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
@endsection

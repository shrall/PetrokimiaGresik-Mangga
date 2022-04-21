<div class="hover:-translate-y-2 transition-transform transform cursor-pointer"
    onclick="openModal('business-{{ $business->id }}');">
    <img class="rounded-t-lg w-full"
        @if ($business->logo) src="{{ asset('uploads/mangga/logos/' . $business->logo) }}" @else src="{{ asset('assets/svg/empty-image.svg') }}" @endif>
    <div class="flex items-center gap-x-2 p-3 text-xl bg-white rounded-b-lg">
        <span class="font-semibold mr-auto">
            {{ strlen($business->name) > 13 ? substr($business->name, 0, 13) . '...' : $business->name }}
        </span>
        {{-- <a href="#">
            <span class="fa fa-fw fa-shopping-cart text-3xl cursor-pointer hover:text-gray-900"></span>
        </a> --}}
        <a @if ($business->utama->instagram) href="https://instagram.com/p/{{ $business->utama->instagram }}" @endif>
            <span class="fab fa-fw fa-instagram text-3xl cursor-pointer hover:text-gray-900"></span>
        </a>
        <a href="{{ $business->user->google_maps }}">
            <span class="fa fa-fw fa-compass text-3xl cursor-pointer hover:text-gray-900"></span>
        </a>
    </div>
</div>

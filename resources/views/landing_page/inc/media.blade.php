@foreach ($medias as $media)
    <a href="{{ route('media.show', $media->slug) }}">
        <div class="grid grid-cols-12 items-center gap-x-4 bg-white rounded-lg px-8 py-8 md:py-12 font-pn hover:bg-gray-100">
            <img src="{{ asset('uploads/media/banners/' . $media->banner) }}"
                class="h-24 object-cover rounded-lg col-span-3 mx-auto">
            <div class="flex flex-col gap-y-2 w-full text-md md:text-lg col-span-9">
                <div class="items-center justify-between hidden md:flex">
                    <div class="mangga-tag-orange-outline cursor-default">{{ $media->type->name }}</div>
                </div>
                <div class="text-2xl font-bold">{{ $media->name }}</div>
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div class="text-gray-400"><span
                            class="fa fa-fw fa-clock mr-2"></span>{{ $media->created_at->format('d/m/Y') }}</div>
                    <div class="text-mangga-green-400">oleh
                        {{ $media->user->first_name . ' ' . $media->user->last_name }}</div>
                </div>
            </div>
        </div>
    </a>
@endforeach
{{ $medias->links('pagination::tailwind') }}

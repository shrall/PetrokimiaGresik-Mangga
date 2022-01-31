@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.media.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-y-2">
            <label for="name" class="text-2xl font-bold">Judul</label>
            <input type="text" name="name" id="name" class="border p-2" required>
            <label class="text-2xl font-bold">Tipe Media</label>
            <div class="flex items-center gap-x-2">
                @foreach ($types as $type)
                    <input type="radio" name="type_id" id="type-{{ $type->id }}" value={{ $type->id }}
                        @if ($loop->iteration == 1) checked @endif>
                    <label for="type-{{ $type->id }}" class="text-gray-700">{{ $type->name }}</label>
                @endforeach
            </div>
            <label class="text-2xl font-bold">Banner</label>
            <div class="flex items-end gap-x-4">
                <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg" id="preview-foto-banner">
                <div class="flex flex-col gap-y-2">
                    <input type="file" name="banner" id="foto-banner" class="hidden"
                        onchange="loadFile(event, 'foto-banner')" accept="image/*" required>
                    <label for="foto-banner" class="mangga-button-green cursor-pointer">Unggah Banner</label>
                    <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                </div>
            </div>
            <div id="media-article">
                <textarea type="text" name="content" id="input-content"></textarea>
            </div>
            <div id="media-gallery" class="hidden">
                <div class="grid grid-cols-6 gap-2 mb-2 bg-white border p-2" id="gallery-content">
                    Belum ada foto
                </div>
                <div class="flex flex-col gap-y-2">
                    <input type="file" name="gallery[]" id="foto-gallery" class="hidden" multiple
                        onchange="loadGallery(event, 'foto-gallery')" accept="image/*">
                    <label for="foto-gallery" class="mangga-button-green cursor-pointer">Unggah Foto</label>
                    <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                </div>
            </div>
            <div class="flex items-center justify-end mb-4">
                <button type="submit" class="mangga-button-green cursor-pointer">
                    <span>Buat</span>
                </button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        var loadFile = function(event, id) {
            if ($('#' + id)[0].files[0].size > 2097152) {
                alert("Ukuran gambar tidak bisa melebihi 2 MB!");
                $('#' + id).val(null);
            } else {
                $('#preview-' + id).attr('src', URL.createObjectURL(event.target.files[0]));
            }
        };
        var exceed = false;
        var loadGallery = function(event, id) {
            for (let index = 1; index <= $('#' + id)[0].files.length; index++) {
                const element = $('#' + id)[0].files[index - 1];
                if (element.size > 2097152) {
                    alert("Ukuran gambar tidak bisa melebihi 2 MB!");
                    $('#' + id).val(null);
                    exceed = true;
                }
                if (!exceed) {
                    $('#gallery-content').html(null);
                    for (let index = 1; index <= $('#' + id)[0].files.length; index++) {
                        $('#gallery-content').append(
                            `<img src="{{ asset('assets/svg/empty-image.svg') }}" id="gallery-${index}" class="w-48 h-48 rounded-lg">`
                        );
                        $('#gallery-' + index).attr('src', URL.createObjectURL(event.target.files[index - 1]));
                    };
                }
                exceed = false;
            }
        };
    </script>
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <script>
        ClassicEditor.create(document.querySelector('#input-content'), {
                simpleUpload: {
                    uploadUrl: {
                        url: "{{ route('admin.media.uploadphotocontent') }}"
                    }
                },
                mediaEmbed: {
                    previewsInData: true
                }
            }).then(editor => {})
            .catch(error => {
                console.error(error);
                console.error(error.stack);
            });
        ClassicEditor.editorConfig = function(config) {
            // misc options
            config.height = '350px';
        };
    </script>
    <script>
        $(function() {
            $('input:radio[name="type_id"]').on('change', function(e) {
                if ($(this).val() == 2) {
                    $('#media-article').addClass('hidden').removeClass('block')
                    $('#media-gallery').addClass('block').removeClass('hidden')
                } else {
                    $('#media-gallery').addClass('hidden').removeClass('block')
                    $('#media-article').addClass('block').removeClass('hidden')
                }
            });
        });
    </script>
@endsection

@section('head')
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
        }

    </style>
@endsection

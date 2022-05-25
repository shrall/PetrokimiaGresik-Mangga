@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.mhe_event.update', $mheEvent->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <div class="flex flex-col gap-y-2">
            <label for="name" class="text-2xl font-bold">Nama Acara</label>
            <input type="text" name="name" id="name" class="border p-2" value="{{$mheEvent->name}}" required>
            <label for="start" class="text-2xl font-bold">Tanggal Mulai</label>
            <input type="date" name="start" id="start" class="border p-2" value="{{date('Y-m-d', strtotime($mheEvent->start))}}" required>
            <label for="end" class="text-2xl font-bold">Tanggal Berakhir</label>
            <input type="date" name="end" id="end" class="border p-2" value="{{date('Y-m-d', strtotime($mheEvent->end))}}" required>
            <label for="status" class="text-2xl font-bold">Status</label>
            <select name="status" id="status" class="form-pengajuan-input" required>
                <option value=0 {{$mheEvent->status == 0 ? "selected" : ""}}>Tidak Aktif</option>
                <option value=1 {{$mheEvent->status == 1 ? "selected" : ""}}>Aktif</option>
            </select>
            <label for="desc" class="text-2xl font-bold">Deskripsi</label>
            <div>
                <textarea type="text" name="desc" id="input-content">{{$mheEvent->desc}}</textarea>
            </div>
            <div class="flex items-center justify-end mb-4">
                <button type="submit" class="mangga-button-green cursor-pointer">
                    <span>Update</span>
                </button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <script>
        ClassicEditor.create(document.querySelector('#input-content'), {
                mediaEmbed: {
                    previewsInData: true
                },
                removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle',
                    'ImageToolbar', 'ImageUpload', 'MediaEmbed', 'Table'
                ],
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
@endsection

@section('head')
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
        }

    </style>
@endsection

@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:pl-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 xl:col-span-9">
            <div class="flex flex-col card items-center justify-center gap-y-4 px-8 py-6">
                <div class="text-2xl font-bold mb-8">Buat Pengajuan</div>
                @if (Auth::user()->referral_code == 'mamud')
                    <div class="flex items-center">
                        <a href="{{ route('user.form_mangga_muda') }}"
                            class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                            <img src="{{ asset('assets/svg/mangga-muda.svg') }}" class="h-36">
                            <div class="text-lg">Mangga Muda</div>
                        </a>
                    </div>
                @elseif(Auth::user()->referral_code == 'mamad')
                    <div class="flex flex-col xl:flex-row items-center justify-center gap-x-2">
                        <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                            <div
                                class="rounded-full {{ Auth::user()->madus->count() == 0 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
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
                            <div
                                class="rounded-full {{ Auth::user()->madus->count() != 0? (Auth::user()->madus[0]->status == 1? 'bg-mangga-orange-300': 'bg-gray-400'): 'bg-gray-400' }} p-4">
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
                        @if (Auth::user()->madus->count() != 0)
                            @if (Auth::user()->madus[0]->status == 5)
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
                                    <div
                                        class="rounded-full {{ Auth::user()->madus[0]->status == 4 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
                                        <span class="fa fa-fw fa-check-double text-white text-xl"></span>
                                    </div>
                                    <div
                                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                                        Proses Seleksi</div>
                                </div>
                            @endif
                        @else
                            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                                <div
                                    class="rounded-full {{ Auth::user()->madus->count() != 0? (Auth::user()->madus[0]->status == 4? 'bg-mangga-orange-300': 'bg-gray-400'): 'bg-gray-400' }} p-4">
                                    <span class="fa fa-fw fa-check-double text-white text-xl"></span>
                                </div>
                                <div
                                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                                    Proses Seleksi</div>
                            </div>
                        @endif
                    </div>
                    @if (Auth::user()->madus->count() == 0)
                        <div class="rounded-lg bg-mangga-orange-300 p-4 mb-4 w-full">
                            <span class="fa fa-fw fa-info-circle ml-2"></span>
                            Silahkan lengkapi form ajuan bisnis anda dibawah ini.
                        </div>
                    @endif
                    @if (Auth::user()->madus->count() != 0)
                        @if (Auth::user()->madus[0]->status == 1)
                            <div class="rounded-lg bg-mangga-orange-300 p-4 mb-4 w-full">
                                <span class="fa fa-fw fa-info-circle ml-2"></span>
                                Terima kasih sudah mengajukan bisnis anda. Mohon tunggu proses verifikasi dari tim kami.
                            </div>
                        @elseif(Auth::user()->madus[0]->status == 4)
                            <div class="rounded-lg bg-mangga-green-300 p-4 mb-4 w-full">
                                <span class="fa fa-fw fa-info-circle ml-2"></span>
                                Selamat! Ajuan anda telah terverifikasi oleh tim kami.
                            </div>
                        @elseif(Auth::user()->madus[0]->status == 5)
                            <div class="rounded-lg bg-mangga-red-300 p-4 mb-4 w-full">
                                <span class="fa fa-fw fa-info-circle ml-2"></span>
                                Terdapat kesalahan dalam ajuan anda. Mohon direvisi.
                            </div>
                        @endif
                    @endif
                    @if (Auth::user()->madus->count() == 0)
                        <form action="{{ route('user.madu.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="font-bold text-3xl self-start">Nama Bisnis*</label>
                            <input type="text" name="name" class="form-pengajuan-input" required>
                            <label class="font-bold text-3xl self-start">Deskripsi Bisnis*</label>
                            <textarea name="description" id="" cols="30" rows="7" class="form-pengajuan-input"
                                required></textarea>
                            <label class="font-bold text-3xl self-start">Link Video*</label>
                            <input type="text" name="link" class="form-pengajuan-input" required>
                            <label class="font-bold text-3xl self-start">Foto Tempat Usaha/Tempat Tinggal*</label>
                            <div class="flex flex-col gap-y-4">
                                <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-full h-72 rounded-lg"
                                    id="preview-foto-establishment">
                                <div class="flex flex-col gap-y-2">
                                    <input type="file" name="image" id="foto-establishment" class="invisible w-2"
                                        onchange="loadFile(event, 'foto-establishment')" accept="image/*" required>
                                    <label for="foto-establishment" class="mangga-button-green cursor-pointer">Unggah
                                        Foto</label>
                                    <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                                </div>
                            </div>
                            <button type="submit" class="mangga-button-green cursor-pointer">
                                Submit
                            </button>
                        </form>
                    @else
                        <form action="{{ route('user.madu.update', Auth::user()->madus[0]->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <label class="font-bold text-3xl self-start">Nama Bisnis*</label>
                            <input type="text" name="name" class="form-pengajuan-input" required
                                value="{{ Auth::user()->madus[0]->name }}"
                                {{ Auth::user()->madus[0]->status == 5 ? '' : 'disabled' }}>
                            <label class="font-bold text-3xl self-start">Deskripsi Bisnis*</label>
                            <textarea name="description" id="" cols="30" rows="7" class="form-pengajuan-input"
                                {{ Auth::user()->madus[0]->status == 5 ? '' : 'disabled' }}
                                required>{{ Auth::user()->madus[0]->description }}</textarea>
                            <label class="font-bold text-3xl self-start">Link Video*</label>
                            <input type="text" name="link" class="form-pengajuan-input"
                                value="{{ Auth::user()->madus[0]->link }}"
                                {{ Auth::user()->madus[0]->status == 5 ? '' : 'disabled' }} required>
                            <label class="font-bold text-3xl self-start">Foto Tempat Usaha/Tempat Tinggal*</label>
                            <div class="flex flex-col gap-y-4">
                                <img src="{{ asset('uploads/mangga/establishment_picture/' . Auth::user()->madus[0]->image) }}"
                                    class="w-full h-72 rounded-lg" id="preview-foto-establishment">
                                <div class="flex flex-col gap-y-2">
                                    <input type="file" name="image" id="foto-establishment" class="invisible w-2"
                                        onchange="loadFile(event, 'foto-establishment')" accept="image/*">
                                    @if (Auth::user()->madus[0]->status == 5)
                                        <label for="foto-establishment" class="mangga-button-green cursor-pointer">Ubah
                                            Foto</label>
                                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                                    @endif
                                </div>
                            </div>
                            @if (Auth::user()->madus[0]->status == 5)
                                <button type="submit" class="mangga-button-green cursor-pointer">
                                    Edit
                                </button>
                            @endif
                        </form>
                    @endif
                @else
                    <div class="grid grid-cols-4 items-center justify-center gap-8">
                        <a href="{{ route('user.form_mangga', ['sector' => 5]) }}"
                            class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                            <img src="{{ asset('assets/svg/perdagangan.svg') }}" class="w-40 h-36">
                            <div class="text-lg">Perdagangan</div>
                        </a>
                        <a href="{{ route('user.form_mangga', ['sector' => 6]) }}"
                            class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                            <img src="{{ asset('assets/svg/peternakan.svg') }}" class="w-40 h-36">
                            <div class="text-lg">Peternakan</div>
                        </a>
                        <a href="{{ route('user.form_mangga', ['sector' => 3]) }}"
                            class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                            <img src="{{ asset('assets/svg/pertanian.svg') }}" class="w-40 h-36">
                            <div class="text-lg">Pertanian</div>
                        </a>
                        <a href="{{ route('user.form_mangga', ['sector' => 1]) }}"
                            class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                            <img src="{{ asset('assets/svg/jasa.svg') }}" class="w-40 h-36">
                            <div class="text-lg">Industri</div>
                        </a>
                    </div>
                    <div class="grid grid-cols-3 items-center justify-center gap-8">
                        <a href="{{ route('user.form_mangga', ['sector' => 4]) }}"
                            class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                            <img src="{{ asset('assets/svg/jasa.svg') }}" class="w-40 h-36">
                            <div class="text-lg">Jasa</div>
                        </a>
                        <a href="{{ route('user.form_mangga', ['sector' => 8]) }}"
                            class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                            <img src="{{ asset('assets/svg/perkebunan.svg') }}" class="w-40 h-36">
                            <div class="text-lg">Perkebunan</div>
                        </a>
                        <a href="{{ route('user.form_mangga', ['sector' => 2]) }}"
                            class="card-gray flex flex-col items-center justify-center gap-y-4 p-4 cursor-pointer transform transition-transform hover:translate-y-1">
                            <img src="{{ asset('assets/svg/perikanan.svg') }}" class="w-40 h-36">
                            <div class="text-lg">Perikanan</div>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
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
    </script>
@endsection

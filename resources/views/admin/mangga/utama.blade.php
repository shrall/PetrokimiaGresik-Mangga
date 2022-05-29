@extends('layouts.admin')

@php
function rupiah($angka)
{
    $hasil_rupiah = number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
@endphp

@section('content')
    <div class="flex flex-col card items-center justify-center gap-y-4 px-8 py-6 mb-4">
        <div class="text-2xl font-bold mb-8">Status Pengajuan</div>
        <div class="flex flex-col xl:flex-row items-center justify-center gap-x-2">
            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                <div class="rounded-full bg-gray-400 p-4">
                    <span class="fa fa-fw fa-address-card text-white text-xl"></span>
                </div>
                <div
                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                    Lengkapi Data Diri</div>
            </div>
            <div class="block xl:hidden">
                <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
            </div>
            <div class="hidden xl:block">
                <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
            </div>
            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                <div
                    class="rounded-full @if ($utama->business->status == 1) bg-mangga-orange-300 @else bg-gray-400 @endif p-4">
                    <span class="fa fa-fw fa-user-check text-white text-xl"></span>
                </div>
                <div
                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                    Submit Form Pengajuan</div>
            </div>
            <div class="block xl:hidden">
                <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
            </div>
            <div class="hidden xl:block">
                <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
            </div>
            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                <div
                    class="rounded-full @if ($utama->business->status == 2) bg-mangga-orange-300 @else bg-gray-400 @endif p-4">
                    <span class="fa fa-fw fa-signature text-white text-xl"></span>
                </div>
                <div
                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                    Memberi TTD Form Pengajuan
                </div>
            </div>
            @if (!$utama->business->rejected_at)
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if ($utama->business->status == 3) bg-mangga-orange-300 @else bg-gray-400 @endif p-4">
                        <span class="fa fa-fw fa-clipboard-check text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Pengajuan Terevaluasi Surveyor</div>
                </div>
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div
                        class="rounded-full @if ($utama->business->status == 4) bg-mangga-orange-300 @else bg-gray-400 @endif p-4">
                        <span class="fa fa-fw fa-check-double text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Pengajuan Diapprove Pimpinan</div>
                </div>
            @else
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full bg-mangga-red-300 p-4">
                        <span class="fa fa-fw fa-times text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Pengajuan Ditolak</div>
                </div>
            @endif
        </div>
        <label for="complete-form" class="font-bold">Upload Form Yang
            Sudah Di Tanda Tangani</label>
        <form action="{{ route('admin.utama.ttd', $utama->id) }}" method="post" enctype="multipart/form-data"
            class="flex items-center justify-center gap-y-2 bg-gray-300 rounded-xl shadow-xl p-4">
            @csrf
            @method('PATCH')
            <a target="blank" href="{{ asset('uploads/mangga/complete_form/' . $utama->complete_form) }}">
                <span class="fa fa-fw fa-file-pdf"></span>
                <span class="underline">{{ $utama->complete_form }}</span>
            </a>
            <input type="file" name="complete_form" id="complete-form" required>
            <button type="submit" class="mangga-button-green cursor-pointer">Submit</button>
        </form>
        @if (Auth::user()->user_role == 2)
            <div class="flex items-center justify-center gap-x-4">
                @if ($utama->evaluation)
                    <a target="blank" href="{{ route('admin.evaluation.show', $utama->evaluation->id) }}"
                        class="mangga-button-green cursor-pointer">
                        <span class="fa fa-fw fa-file-download"></span>Lihat Hasil Evaluasi
                    </a>
                @else
                    <a href="{{ route('admin.business.show', $utama->business->id) }}"
                        class="mangga-button-green cursor-pointer">Buat Evaluasi (Surveyor)
                    </a>
                @endif
                <a href="{{ route('admin.utama.approve_pimpinan', $utama->id) }}"
                    class="mangga-button-green cursor-pointer">Setujui (Pimpinan)
                </a>
                <a href="{{ route('admin.utama.reject', $utama->id) }}" class="mangga-button-red cursor-pointer">Tolak
                </a>
            </div>
        @elseif (Auth::user()->user_role == 3)
            @if ($utama->business->status == 2)
                @if ($utama->evaluation)
                    <a target="blank" href="{{ route('admin.evaluation.show', $utama->evaluation->id) }}"
                        class="mangga-button-green cursor-pointer">
                        <span class="fa fa-fw fa-file-download"></span>Lihat Hasil Evaluasi
                    </a>
                @else
                    <div class="flex items-center justify-center gap-x-4">
                        <a href="{{ route('admin.business.show', $utama->business->id) }}"
                            class="mangga-button-green cursor-pointer">Buat Evaluasi
                        </a>
                    </div>
                @endif
            @endif
        @elseif (Auth::user()->user_role == 4)
            @if ($utama->business->status == 3)
                <div class="flex items-center justify-center gap-x-4">
                    <a href="{{ route('admin.utama.approve_pimpinan', $utama->id) }}"
                        class="mangga-button-green cursor-pointer">Setujui
                    </a>
                    <a href="{{ route('admin.utama.reject', $utama->id) }}"
                        class="mangga-button-red cursor-pointer">Tolak
                    </a>
                </div>
            @endif
        @endif
    </div>
    @if (Auth::user()->user_role == 2)
        <div class="card bg-white px-8 py-6 mb-4">
            <div class="text-2xl font-bold mb-2">Log Pengajuan</div>
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">No.</th>
                        <th data-priority="2">Deskripsi</th>
                        <th data-priority="3">Nama Admin</th>
                        <th data-priority="4">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($utama->business->logs as $log)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $log->description }}</td>
                            <td>{{ $log->admin->first_name . ' ' . $log->admin->last_name }}</td>
                            <td>{{ $log->created_at->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
    <div class="flex mb-2">
        <div id="nav-pengajuan" onclick="changeMenu('pengajuan');"
            class="text-center w-1/2 border-b-2 border-mangga-green-400 font-bold cursor-pointer nav-menu">
            Data Pengajuan
        </div>
        <div id="nav-angsuran" onclick="changeMenu('angsuran');"
            class="text-center w-1/2 border-b border-gray-400 font-bold cursor-pointer nav-menu">
            Data Angsuran
        </div>
    </div>
    <div id="menu-pengajuan" class="page-menu">
        <form action="{{ route('admin.utama.toko', $utama->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="card px-8 py-6 flex flex-col gap-y-4 mb-4">
                <div class="text-2xl font-bold underline">Informasi Toko Mangga</div>
                <label class="font-bold text-xl self-start">Deskripsi Bisnis*</label>
                <textarea name="description" id="" cols="30" rows="7" class="form-pengajuan-input"
                    required>{{ $utama->toko_description }}</textarea>
                <label class="font-bold text-xl self-start">Username Instagram Usaha*</label>
                <input type="text" name="instagram" class="form-input" required value="{{ $utama->instagram }}"
                    placeholder="Contoh: petrokimiagresik_official">
                <label class="font-bold text-xl self-start">Link Google Maps*</label>
                <input type="text" name="google_maps" class="form-input" required placeholder="https://goo.gl/..."
                    value="{{ $utama->business->user->google_maps }}">
                <label class="font-bold text-xl self-start">Foto Usaha</label>
                <div class="flex flex-col gap-y-4">
                    <div class="flex items-end gap-x-4">
                        <img @if ($utama->business->logo) src="{{ asset('uploads/mangga/logos/' . $utama->business->logo) }}" @else src="{{ asset('assets/svg/empty-image.svg') }}" @endif
                            class="w-48 h-48 rounded-lg" id="preview-logo-usaha">
                        <div class="flex flex-col gap-y-2">
                            <input type="file" name="logo" id="logo-usaha" class="invisible w-2"
                                onchange="loadFile(event, 'logo-usaha')" accept="image/*">
                            <label for="logo-usaha" class="mangga-button-green cursor-pointer">Unggah Foto
                                Usaha</label>
                            <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <button type="submit" class="mangga-button-green cursor-pointer">
                        Submit
                    </button>
                </div>
            </div>
        </form>
        <div class="flex items-center justify-between mb-4">
            <div class="text-2xl font-bold">Detail Pengajuan</div>
            <a target="blank" href="{{ route('admin.utama.download', $utama->id) }}" class="text-lg hover:text-gray-700">
                <span class="fa fa-fw fa-file-download"></span>Preview Proposal Pengajuan
            </a>
        </div>
        <div class="card px-8 py-6 flex flex-col gap-y-4">
            <div class="text-xl font-bold underline">Mitra Binaan</div>
            <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                <div class="flex flex-col">
                    <span class="text-gray-600">Tanggal Pengajuan</span>
                    <span>{{ $utama->created_at->format('d/m/Y') }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Tanggal Penerimaan</span>
                    @if ($utama->accepted_by_surveyor_at)
                        <span>{{ $utama->accepted_by_surveyor_at->format('d/m/Y') }}</span>
                    @else
                        -
                    @endif
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Nama Mitra</span>
                    <span>{{ $utama->user_name }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">No.KTP</span>
                    <span>{{ $utama->user_ktp_code }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Jenis Kelamin</span>
                    @if ($utama->user_gender == 'm')
                        Laki-laki
                    @else
                        Perempuan
                    @endif
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">No.KK</span>
                    <span>{{ $utama->user_kk_code }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Tempat/ Tanggal Lahir</span>
                    <span>{{ $utama->user_birth_place }}, {{ $utama->user_birth_date }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Pekerjaan</span>
                    <span>{{ $utama->user_profession }} </span>
                </div>
                <div class="flex flex-col col-span-2">
                    <span class="text-gray-600">Alamat</span>
                    <span>{{ $utama->user_address }} RT {{ $utama->user_rt }} RW {{ $utama->user_rw }}
                    </span>
                    <span>{{ $utama->user_province }}, {{ $utama->user_city }},
                        {{ $utama->user_district }},
                        {{ $utama->user_village }} {{ $utama->user_postal_code }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">E-Mail</span>
                    <span>{{ $utama->user_email }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">No. Telp</span>
                    <span>{{ $utama->user_phone }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">No. Rekening</span>
                    <span>{{ $utama->user_bank_number }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Cabang Bank</span>
                    <span>{{ $utama->user_branch }} </span>
                </div>
            </div>
            <hr>
            @foreach ($utama->members as $member)
                <div class="text-xl font-bold">Data Anggota {{ $loop->iteration }}</div>
                <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                    <div class="flex flex-col">
                        <span class="text-gray-600">Nama</span>
                        <span>{{ $member->name }} </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-600">Nama Sertifikat</span>
                        <span>{{ $member->certificate_name ?? '-' }} </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-600">No. KTP</span>
                        <span>{{ $member->ktp_code }} </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-600">File Sertifikat</span>
                        @if ($member->certificate)
                            <span class="underline">
                                <a target="blank"
                                    href="{{ asset('uploads/mangga/certificate/' . $member->certificate) }}">Download
                                    Sertifikat</a>
                            </span>
                        @else
                            -
                        @endif
                    </div>
                </div>
                <hr>
            @endforeach
            @if ($utama->companion_name)
                <div class="text-xl font-bold">Data Pendamping</div>
                <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                    <div class="flex flex-col">
                        <span class="text-gray-600">Nama</span>
                        <span>{{ $utama->companion_name }} </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-600">No. KTP</span>
                        <span>{{ $utama->companion_ktp_code }} </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-600">Nomor Surat Menikah</span>
                        <span>{{ $utama->companion_wedding_code }} </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-600">Tanggal menikah</span>
                        <span>{{ $utama->companion_wedding_date }} </span>
                    </div>
                    <div class="flex flex-col col-span-2">
                        <span class="text-gray-600">Alamat</span>
                        <span>{{ $utama->companion_address }}
                        </span>
                        <span>{{ $utama->companionprovince->name }}, {{ $utama->companioncity->name }},
                            {{ $utama->companiondistrict->name }},
                            {{ $utama->companionvillage->name }} {{ $utama->companion_postal_code }}</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-600">E-Mail</span>
                        <span>{{ $utama->companion_email }} </span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-600">No. Telp / HP</span>
                        <span>{{ $utama->companion_telephone ?? '-' }} / {{ $utama->companion_handphone }}
                        </span>
                    </div>
                </div>
                <hr>
            @endif
            <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                <div class="flex flex-col col-span-2">
                    <div class="text-3xl font-bold">{{ $utama->business->name }}</div>
                    <span>{{ $utama->business->address }}
                    </span>
                    <span>{{ $utama->business->province->name }}, {{ $utama->business->city->name }},
                        {{ $utama->business->district->name }},
                        {{ $utama->business->village->name }} {{ $utama->business->postal_code }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">E-Mail</span>
                    <span>{{ $utama->email }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">No. Telp / HP</span>
                    <span>{{ $utama->telephone ?? '-' }} / {{ $utama->handphone }}
                    </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Status Tempat Usaha</span>
                    <span>{{ $utama->establishmentstatus->name }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Alamat Surat Menyurat</span>
                    @if ($utama->mail_address == '0')
                        <span>Rumah</span>
                    @else
                        <span>Usaha</span>
                    @endif
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">No. SIUP</span>
                    <span>{{ $utama->siup_code ?? '-' }}</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Tanggal SIUP</span>
                    <span>{{ $utama->siup_date ?? '-' }}</span>
                </div>
            </div>
            <hr>
            <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                <div class="text-xl font-bold underline">Data Pengajuan</div>
                <div class="text-lg font-bold">Nomor Registrasi : {{ $utama->business->registration_number }}</div>
                <div class="flex flex-col col-span-2">
                    <span class="text-gray-600">Jumlah Pengajuan</span>
                    <span>Rp. {{ number_format($utama->request_amount, 0, ',', '.') }}</span>
                </div>
                <div class="flex flex-col col-span-2">
                    <span class="text-gray-600">Agunan</span>
                    <span>{{ $utama->collateral }}</span>
                </div>
                <div class="flex flex-col col-span-2">
                    <span class="text-gray-600">Persyaratan</span>
                    <div class="grid grid-cols-4 gap-x-4 gap-y-1">
                        <div class="flex items-center gap-x-2">
                            <span class="fa fa-fw fa-check-square"></span>
                            <span>
                                <a target="blank" href="{{ asset('uploads/mangga/ktp/' . $utama->ktp) }}"
                                    class="underline">
                                    KTP
                                </a> dan <a target="blank"
                                    href="{{ asset('uploads/mangga/ktpselfie/' . $utama->ktp_selfie) }}"
                                    class="underline">
                                    Selfie KTP
                                </a>
                            </span>
                        </div>
                        <div class="flex items-center gap-x-2">
                            <span class="fa fa-fw fa-check-square"></span>
                            <span>
                                <a target="blank" href="{{ asset('uploads/mangga/kk/' . $utama->kk) }}"
                                    class="underline">
                                    KK
                                </a> dan <a target="blank"
                                    href="{{ asset('uploads/mangga/kkselfie/' . $utama->kk_selfie) }}"
                                    class="underline">
                                    Selfie KK
                                </a>
                            </span>
                        </div>
                        <div class="flex items-center gap-x-2">
                            @if ($utama->siup)
                                <span class="fa fa-fw fa-check-square"></span>
                                <span>
                                    <a target="blank" href="{{ asset('uploads/mangga/siup/' . $utama->siup) }}"
                                        class="underline">
                                        SIUP
                                    </a>
                                </span>
                            @else
                                <span class="fa fa-fw fa-times-square"></span>
                                <span>
                                    <a target="blank" href="#" class="underline">
                                        SIUP
                                    </a>
                                </span>
                            @endif
                        </div>
                        <div class="flex items-center gap-x-2">
                            <span class="fa fa-fw fa-check-square"></span>
                            <span>
                                <a target="blank" href="{{ asset('uploads/mangga/skdu/' . $utama->skdu) }}"
                                    class="underline">
                                    SK Domisili Usaha
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Tipe Penyaluran</span>
                    <span>{{ $utama->distributiontype->name }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Pemasaran</span>
                    <span>{{ $utama->marketing->name }} @if ($utama->marketing_id == 3)
                            Ekspor ke {{ $utama->export_to }}
                        @endif </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Sektor</span>
                    <span>{{ $utama->business->sector->name }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Subsektor</span>
                    <span>{{ $utama->business->subsector->name }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Jenis Usaha</span>
                    <span>{{ $utama->business->type }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Bentuk Usaha</span>
                    <span>{{ $utama->businessform->name }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Produk Unggulan</span>
                    <span>{{ $utama->best_product }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Komoditi Yang Dihasilkan</span>
                    <span>
                        @if ($utama->business->commodities)
                            @foreach ($utama->business->commodities as $c)
                                @if ($loop->iteration != 1)
                                    ,
                                @endif{{ $c->name }}
                            @endforeach
                        @else
                            -
                        @endif
                    </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Nilai Usaha</span>
                    <span>Rp. {{ number_format($utama->business_value, 0, ',', '.') }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Nilai Omzet per Tahun</span>
                    <span>Rp. {{ number_format($utama->turnover_value, 0, ',', '.') }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Jumlah Unit Usaha</span>
                    <span>{{ $utama->unit_amount }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Jumlah SDM</span>
                    <span>{{ $utama->hr_value }} Orang</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600 font-bold text-lg">Nilai Kekayaan Usaha</span>
                    <table>
                        <tr>
                            <td width="30%">Tanah</td>
                            <td>Rp. {{ number_format($utama->land, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>Bangunan</td>
                            <td>Rp. {{ number_format($utama->building, 0, ',', '.') }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td>Jumlah</td>
                            <td>Rp.
                                {{ number_format($utama->land + $utama->building, 0, ',', '.') }}
                            </td>
                        </tr>
                        <tr>
                            <td>Kas</td>
                            <td>Rp. {{ number_format($utama->treasury, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>Piutang</td>
                            <td>Rp. {{ number_format($utama->credit, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>Peralatan Usaha/Produksi</td>
                            <td>Rp. {{ number_format($utama->production_tools, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>Bank(Tabungan)</td>
                            <td>Rp. {{ number_format($utama->savings, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>Persediaan</td>
                            <td>Rp. {{ number_format($utama->supply, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>Kendaraan</td>
                            <td>Rp. {{ number_format($utama->vehicle, 0, ',', '.') }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td>Jumlah</td>
                            <td>Rp.
                                {{ number_format($utama->treasury + $utama->credit + $utama->production_tools + $utama->savings + $utama->supply + $utama->vehicle, 0, ',', '.') }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600 font-bold text-lg">Penjualan Selama Setahun</span>
                    <table>
                        @php
                            $c_total = 0;
                        @endphp
                        @foreach ($utama->business->commodities as $item)
                            @php
                                $c_total += $item->value;
                            @endphp
                            <tr>
                                <td width="30%">{{ $item->name }}</td>
                                <td>: Rp. {{ number_format($item->value, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                        <tr class="font-bold">
                            <td>Jumlah</td>
                            <td>: Rp.
                                {{ number_format($c_total, 0, ',', '.') }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600 font-bold text-lg">Laba/Keuntungan Selama Setahun</span>
                    <table>
                        <tr>
                            <td width="30%">Nilai Penjualan</td>
                            <td>: Rp. {{ number_format($utama->sales_value, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Biaya Total</td>
                            <td>: Rp. {{ number_format($utama->total_cost, 0, ',', '.') }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td>Jumlah</td>
                            <td>: Rp.
                                {{ number_format($utama->sales_value + $utama->total_cost, 0, ',', '.') }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="flex flex-col col-span-2">
                    <span class="text-gray-600 font-bold text-lg">Permasalahan Usaha Yang Dihadapi</span>
                    {{ $utama->business_problem }}
                </div>
                <div class="flex flex-col col-span-2">
                    <span class="text-gray-600 font-bold text-lg">Rencana Penggunaan Pinjaman Dana</span>
                    <table>
                        @php
                            $p_total = 0;
                        @endphp
                        @foreach ($utama->business->plans as $item)
                            @php
                                $p_total += $item->value;
                            @endphp
                            <tr>
                                <td width="5%" style="vertical-align: top;">{{ $loop->iteration }}.</td>
                                <td style="vertical-align: top;">{{ $item->name }}</td>
                                <td width="25%" style="vertical-align: top;">: Rp.
                                    {{ number_format($item->value, 0, ',', '.') }}
                                </td>
                            </tr>
                        @endforeach
                        <tr class="font-bold">
                            <td></td>
                            <td>Jumlah</td>
                            <td>: Rp.
                                {{ number_format($p_total, 0, ',', '.') }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="flex flex-col col-span-2">
                    <span class="text-gray-600 font-bold text-lg">Rencana pembelian produk non subsidi PT
                        Petrokimia Gresik </span>
                    <table>
                        <tr>
                            <td width="5%">No.</td>
                            <td width="30%">Nama Produk</td>
                            <td width="10%">Kuantum</td>
                            <td width="30%">Harga Satuan</td>
                            <td width="25%">Jumlah</td>
                        </tr>
                        @foreach ($utama->business->products as $item)
                            <tr>
                                <td width="5%">{{ $loop->iteration }}.</td>
                                <td width="30%">{{ $item->name }}</td>
                                <td width="10%">{{ $item->qty ?? '-' }}</td>
                                <td width="30%">Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
                                <td width="25%">Rp. {{ number_format($item->price * $item->qty, 0, ',', '.') }}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600 font-bold text-lg">Foto Tempat Usaha / Tinggal</span>
                    <img src="{{ asset('uploads/mangga/establishment_picture/' . $utama->establishment_picture) }}"
                        class="h-72 rounded-lg">
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600 font-bold text-lg">Foto Komoditas / Produk</span>
                    <img src="{{ asset('uploads/mangga/product_picture/' . $utama->product_picture) }}"
                        class="h-72 rounded-lg">
                </div>
                @if ($utama->business_sketch)
                    <div class="flex flex-col">
                        <span class="text-gray-600 font-bold text-lg">Denah Tempat Usaha</span>
                        <img src="{{ asset('uploads/mangga/business_sketch/' . $utama->business_sketch) }}"
                            class="h-72 rounded-lg">
                    </div>
                @endif
                @if ($utama->house_sketch)
                    <div class="flex flex-col">
                        <span class="text-gray-600 font-bold text-lg">Denah Tempat Tinggal</span>
                        <img src="{{ asset('uploads/mangga/house_sketch/' . $utama->house_sketch) }}"
                            class="h-72 rounded-lg">
                    </div>
                @endif
            </div>
        </div>
    </div>
    @if ($utama->business->business_status_id == 4 || $utama->business->business_status_id >= 6)
        <div id="menu-angsuran" class="hidden page-menu">
            <div class="flex items-center justify-between mb-4">
                <div class="text-2xl font-bold">Detail Angsuran</div>
                <a target="blank" href="{{ route('user.utama.angsuran', $utama->id) }}"
                    class="text-lg hover:text-gray-700">
                    <span class="fa fa-fw fa-file-download"></span>Download Excel Angsuran
                </a>
            </div>
            <div class="grid grid-cols-2 gap-x-8 gap-y-2 mb-2">
                <div class="flex flex-col">
                    <span class="text-gray-600">Tanggal Pengajuan</span>
                    <span>{{ $utama->created_at->format('d/m/Y') }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Jumlah Pengajuan</span>
                    <span>Rp. {{ rupiah($utama->request_amount) }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Tipe Pengajuan</span>
                    <span>{{ $utama->evaluation->installment_typed->name }} </span>
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-600">Durasi Peminjaman</span>
                    <span>{{ $utama->evaluation->loan_period }} Bulan</span>
                </div>
            </div>
            <div class="card bg-white px-8 py-2">
                <table id="examples" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="2">Tanggal Pembayaran</th>
                            <th data-priority="3">Jumlah Pembayaran</th>
                            <th data-priority="5">Klasifikasi</th>
                            <th data-priority="6">Status</th>
                            <th data-priority="7">Bukti Pembayaran</th>
                            <th data-priority="8">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($utama->business->angsurans as $business_angsuran)
                            <tr>
                                <td>{{ $business_angsuran->created_at }}</td>
                                <td>Rp. {{ rupiah($business_angsuran->amount) }}</td>
                                <td>{{ $business_angsuran->business->utama->evaluation->installment_typed->name }}</td>
                                <td>{{ $business_angsuran->status->name }}</td>
                                <td class="text-center"><a target="_blank"
                                        href={{ asset('uploads/mangga/proof/' . $business_angsuran->proof) }}
                                        class="mangga-button-orange cursor-pointer"><span
                                            class="class fa fa-fw fa-image"></span></a></td>
                                <td>
                                    @if ($business_angsuran->status_id == 1)
                                        <div class="text-mangga-green-400"><span
                                                class="fa fa-fw fa-check mr-2"></span>Tersetujui
                                        </div>
                                    @elseif($business_angsuran->status_id == 3)
                                        <div class="text-red-500"><span class="fa fa-fw fa-times mr-2"></span>Tertolak
                                        </div>
                                    @else
                                        <a onclick="openModal('accept-tx-{{ $business_angsuran->id }}');"
                                            class="mangga-button-green cursor-pointer mr-2"><span
                                                class="fa fa-fw fa-check"></span>
                                        </a>
                                        <a onclick="openModal('reject-tx-{{ $business_angsuran->id }}');"
                                            class="mangga-button-red cursor-pointer"><span
                                                class="fa fa-fw fa-times"></span>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div id="menu-angsuran" class="hidden page-menu">
            <div class="flex items-center justify-center mt-4">
                <div class="text-3xl">Pengajuan Ini Belum Di Approve.</div>
            </div>
        </div>
    @endif
@endsection

@section('modals')
    @foreach ($utama->business->angsurans as $business_angsuran)
        <div class="fixed w-screen h-screen hidden items-center justify-center modal z-50"
            id="accept-tx-{{ $business_angsuran->id }}-modal">
            <div class="bg-black opacity-50 w-screen h-screen absolute background-modal" onclick="closeModal();"></div>
            <div class="rounded-lg bg-white px-8 pt-8 pb-6 absolute flex flex-col gap-y-4 w-128">
                <span class="fa fa-fw fa-times text-xl hover:text-red-600 absolute top-4 right-4 cursor-pointer"
                    onclick="closeModal();"></span>
                <div class="flex items-center justify-center px-8 py-4">
                    <div class="flex flex-col gap-y-2 text-center">
                        <span>Apakah kamu yakin ingin menyetujui pembayaran ini?</span>
                    </div>
                </div>
                <a href="{{ route('admin.angsuran.approve', $business_angsuran->id) }}"
                    class="mangga-button-green w-full cursor-pointer">
                    Setujui
                    <span class=" fa fa-fw fa-check ml-2"></span>
                </a>
            </div>
        </div>
        <div class="fixed w-screen h-screen hidden items-center justify-center modal z-50"
            id="reject-tx-{{ $business_angsuran->id }}-modal">
            <div class="bg-black opacity-50 w-screen h-screen absolute background-modal" onclick="closeModal();"></div>
            <div class="rounded-lg bg-white px-8 pt-8 pb-6 absolute flex flex-col gap-y-4 w-128">
                <span class="fa fa-fw fa-times text-xl hover:text-red-600 absolute top-4 right-4 cursor-pointer"
                    onclick="closeModal();"></span>
                <div class="flex items-center justify-center px-8 py-4">
                    <div class="flex flex-col gap-y-2 text-center">
                        <span>Apakah kamu yakin ingin menolak pembayaran ini?</span>
                    </div>
                </div>
                <a href="{{ route('admin.angsuran.reject', $business_angsuran->id) }}"
                    class="mangga-button-red w-full cursor-pointer">
                    Tolak
                    <span class=" fa fa-fw fa-times ml-2"></span>
                </a>
            </div>
        </div>
    @endforeach
@endsection

@section('scripts')
    <script>
        function changeMenu(type) {
            $('.nav-menu').removeClass('border-b-2').removeClass('border-mangga-green-400');
            $('.nav-menu').addClass('border-b').addClass('border-gray-400');
            $('#nav-' + type).addClass('border-b-2').addClass('border-mangga-green-400');
            $('#nav-' + type).removeClass('border-b').removeClass('border-gray-400');
            $('.page-menu').removeClass('block').addClass('hidden');
            $('#menu-' + type).addClass('block').removeClass('hidden');
        }
    </script>
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
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('.stripe').DataTable({
                    pageLength: 5,
                    order: [
                        [0, 'desc']
                    ],
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
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

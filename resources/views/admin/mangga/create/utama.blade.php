@extends('layouts.admin')

@section('content')
    <div class="text-4xl font-bold mb-2" id="form-title">Buat Ajuan - Mangga</div>
    <form action="{{ route('admin.utama.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="font-bold text-2xl mb-4">Data Akun</div>
        <div class="col-span-12 xl:col-span-9">
            <div class="grid grid-cols-12 gap-x-8">
                <div class="col-span-6 flex flex-col">
                    <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                        <div class="col-span-1">
                            <label class="text-gray-400">Nama Depan</label>
                            <input name="firstname" type="text" class="form-pengajuan-input bg-white mb-4" required>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-400">Nama Belakang</label>
                            <input name="lastname" type="text" class="form-pengajuan-input bg-white" required>
                        </div>
                    </div>
                    <label class="text-gray-400">E-Mail</label>
                    <input name="email" type="email" class="form-pengajuan-input bg-white mb-4" required>
                    <label class="text-gray-400">Password</label>
                    <input name="password" type="password" class="form-pengajuan-input bg-white mb-4" required>
                    <label class="text-gray-400">No. KTP</label>
                    <input name="ktp_code" type="number" class="form-pengajuan-input bg-white mb-4" required maxlength=16
                        minlength=16>
                    <label class="text-gray-400">No. KK</label>
                    <input name="kk_code" type="number" class="form-pengajuan-input bg-white mb-4" required maxlength=16
                        minlength=16>
                    <label class="text-gray-400 self-start">Agama</label>
                    <select name="religion" class="form-pengajuan-input mb-4" required>
                        @foreach ($religions as $e)
                            <option value="{{ $e->id }}">
                                {{ $e->name }}</option>
                        @endforeach
                    </select>
                    <div class="grid grid-cols-12 items-center gap-x-2">
                        <div class="col-span-8">
                            <label class="text-gray-400">Pekerjaan</label>
                            <input name="profession" type="text" class="form-pengajuan-input bg-white mb-4" required>
                        </div>
                        <div class="col-span-4">
                            <label class="text-gray-400">Pensiunan Perusahaan</label>
                            <div class="flex items-center gap-x-2 mb-4">
                                <input type="radio" name="retired" value="0" id="tidak" checked>
                                <label for="tidak" class="text-gray-700">Tidak</label>
                                <input type="radio" name="retired" value="1" id="ya">
                                <label for="ya" class="text-gray-700">Ya</label>
                            </div>
                        </div>
                    </div>
                    <label class="text-gray-400">Tingkat Pendidikan</label>
                    <select name="education" class="form-pengajuan-input mb-12" required>
                        @foreach ($educations as $e)
                            <option value="{{ $e->id }}">
                                {{ $e->name }}</option>
                        @endforeach
                    </select>
                    <label class="text-gray-400">Ahli Waris</label>
                    <input name="heir" type="text" class="form-pengajuan-input bg-white mb-4" required>
                    <label class="text-gray-400">Status Rumah</label>
                    <select name="house_ownership" class="form-pengajuan-input mb-4" required>
                        @foreach ($establishment_statuses as $es)
                            <option value="{{ $es->id }}">
                                {{ $es->name }}</option>
                        @endforeach
                    </select>
                    <label class="text-gray-400 self-start">NPWP</label>
                    <input name="npwp" type="number" class="form-pengajuan-input bg-white mb-4">
                    <div class="grid grid-cols-2 items-center gap-x-2">
                        <div class="col-span-1">
                            <label class="text-gray-400">No. Rekening</label>
                            <input name="bank_number" type="number" class="form-pengajuan-input bg-white mb-4" required>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-400">Atas Nama</label>
                            <input name="bank_owner" type="text" class="form-pengajuan-input bg-white mb-4" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center gap-x-2">
                        <div class="col-span-1">
                            <label class="text-gray-400">Nama Bank</label>
                            <input name="bank_name" type="text" class="form-pengajuan-input bg-white mb-4" required>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-400">Cabang Bank</label>
                            <input name="bank_branch" type="text" class="form-pengajuan-input bg-white mb-4" required>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 flex flex-col items-center gap-y-2">
                    <img class="rounded-full w-64 h-64" id="preview-image" src="{{ asset('assets/img/stock.jpg') }}">
                    <label for="image" class="mangga-button-green">Ubah Foto Profil</label>
                    <input type="file" name="image" id="image" class="hidden" onchange="loadFile(event, 'image')"
                        accept="image/*">
                    <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                        <div class="col-span-1">
                            <label class="text-gray-400">Jenis Kelamin</label>
                            <div class="flex items-center gap-x-2 mb-4">
                                <input type="radio" name="gender" value="m" id="laki-laki" checked>
                                <label for="laki-laki" class="text-gray-700">Laki-laki</label>
                                <input type="radio" name="gender" value="f" id="wanita">
                                <label for="wanita" class="text-gray-700">Wanita</label>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-400">Status Perkawinan</label>
                            <div class="flex items-center gap-x-2 mb-4">
                                <input type="radio" name="married" value="0" id="belum-kawin" checked>
                                <label for="belum-kawin" class="text-gray-700">Belum Kawin</label>
                                <input type="radio" name="married" value="1" id="kawin">
                                <label for="kawin" class="text-gray-700">Kawin</label>
                            </div>
                        </div>
                    </div>
                    <label class="text-gray-400 self-start">Nama Pasangan (Jika Sudah Menikah)</label>
                    <input name="spouse" type="text" class="form-pengajuan-input bg-white mb-4">
                    <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                        <div class="col-span-1">
                            <label class="text-gray-400">Tempat Lahir</label>
                            <input name="birth_place" type="text" class="form-pengajuan-input bg-white mb-4" required>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-400">Tanggal Lahir</label>
                            <input name="birth_date" type="date" class="form-pengajuan-input bg-white" required>
                        </div>
                    </div>
                    <label class="text-gray-400 self-start">No. Telepon</label>
                    <input name="handphone" type="number" class="form-pengajuan-input bg-white mb-4" required>
                    <div class="grid grid-cols-12 items-center gap-x-2">
                        <div class="col-span-6">
                            <label class="text-gray-400">Alamat</label>
                            <input name="address" type="text" class="form-pengajuan-input bg-white mb-4" required>
                        </div>
                        <div class="col-span-2">
                            <label class="text-gray-400">RT</label>
                            <input name="rt" type="text" class="form-pengajuan-input bg-white mb-4" required>
                        </div>
                        <div class="col-span-2">
                            <label class="text-gray-400">RW</label>
                            <input name="rw" type="text" class="form-pengajuan-input bg-white mb-4" required>
                        </div>
                        <div class="col-span-2">
                            <label class="text-gray-400">Kode Pos</label>
                            <input name="postal_code" type="number" class="form-pengajuan-input bg-white mb-4" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                        <div class="col-span-1">
                            <label class="text-gray-400">Provinsi</label>
                            <select name="province" id="province-u" class="form-pengajuan-input bg-white mb-4" required>
                                @foreach ($provinces as $province)
                                    <option value={{ $province->id }}>
                                        {{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-400">Kota/Kabupaten</label>
                            <select name="city" id="city-u" class="form-pengajuan-input bg-white mb-4" required>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                        <div class="col-span-1">
                            <label class="text-gray-400">Kecamatan</label>
                            <select name="district" id="district-u" class="form-pengajuan-input bg-white mb-4" required>
                            </select>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-400">Desa/Kelurahan</label>
                            <select name="village" id="village-u" class="form-pengajuan-input bg-white mb-4" required>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center gap-x-2">
                        <div class="col-span-1">
                            <label class="text-gray-400">Latitude</label>
                            <input name="latitude" type="text" class="form-pengajuan-input bg-white mb-4">
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-400">Longitude</label>
                            <input name="longitude" type="text" class="form-pengajuan-input bg-white mb-4">
                        </div>
                    </div>
                    <label class="text-gray-400 self-start">Link Google Maps</label>
                    <input name="google_maps" type="text" class="form-pengajuan-input bg-white mb-4">
                </div>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Data Usaha</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div>
                <label class="font-bold">Nama Usaha</label>
                <input type="text" name="name" class="form-pengajuan-input" placeholder="Nama Usaha*" required>
                <label class="font-bold">Alamat Usaha</label>
                <input type="text" name="address" class="form-pengajuan-input" placeholder="Alamat Usaha*" required>
                <label class=" font-bold">Kode Pos</label>
                <input type="number" name="postal_code" class="form-pengajuan-input" placeholder="Kode Pos*" required>
                <label class="font-bold">Provinsi</label>
                <select name="province" id="province" class="form-pengajuan-input" required>
                    @foreach ($provinces as $province)
                        <option value={{ $province->id }}>{{ $province->name }}
                        </option>
                    @endforeach
                </select>
                <label class="font-bold">Kota</label>
                <select name="city" id="city" class="form-pengajuan-input" required>
                </select>
                <label class="font-bold">Kecamatan/Desa</label>
                <div class="grid grid-cols-2 items-center justify-center gap-x-4">
                    <select name="district" id="district" class="form-pengajuan-input" required>
                    </select>
                    <select name="village" id="village" class="form-pengajuan-input" required>
                    </select>
                </div>
                <label class="font-bold">Alamat Surat Menyurat*</label>
                <div class="flex items-center gap-x-2 mb-4">
                    <input type="radio" name="mail_address" value="0" id="alamat-surat-rumah" checked>
                    <label for="alamat-surat-rumah" class="text-gray-700">Rumah</label>
                    <input type="radio" name="mail_address" value="1" id="alamat-surat-usaha">
                    <label for="alamat-surat-usaha" class="text-gray-700">Usaha</label>
                </div>
            </div>
            <div>
                <label class="font-bold">Telepon</label>
                <input type="number" name="telephone" class="form-pengajuan-input" placeholder="No. Telepon Usaha*"
                    required>
                <label class="font-bold">Handphone</label>
                <input type="number" name="handphone" class="form-pengajuan-input" placeholder="No. HP Usaha*" required>
                <label class="font-bold">E-Mail Usaha</label>
                <input type="email" name="email_usaha" class="form-pengajuan-input" placeholder="E-Mail*" required>
                <label class="font-bold">Kode Siup</label>
                <input type="number" name="siup_code" class="form-pengajuan-input" style="margin-bottom: 0.5rem;"
                    placeholder="No. SIUP*" required>
                <div class="font-bold">Tanggal SIUP*</div>
                <input type="date" name="siup_date" class="form-pengajuan-input" required>
                <div class="font-bold">Status Tempat Usaha</div>
                <select name="establishment_status" id="" class="form-pengajuan-input">
                    @foreach ($establishment_statuses as $es)
                        <option value={{ $es->id }}>{{ $es->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Data Pengajuan</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div>
                <label class="font-bold">Jumlah Pengajuan</label>
                <input type="text" name="request_amount" id="" class="form-pengajuan-input-admin" required>
                <label class="font-bold">Agunan</label>
                <input type="text" name="collateral" id="" class="form-pengajuan-input-admin" required>
                <label class="font-bold">Tipe Pengajuan</label>
                <select name="distribution_type" id="" class="form-pengajuan-input-admin" required>
                    @foreach ($distribution_types as $dt)
                        <option value={{ $dt->id }}>{{ $dt->name }}</option>
                    @endforeach
                </select>
                <label class="font-bold">Sektor</label>
                <select name="sector" id="sector" class="form-pengajuan-input-admin" required>
                    @foreach ($sectors as $sector)
                        <option value={{ $sector->id }}>
                            {{ $sector->name }}</option>
                    @endforeach
                </select>
                <label class="font-bold">Subsektor</label>
                <select name="subsector" id="subsector" class="form-pengajuan-input-admin" required>
                    @foreach ($subsectors as $subsector)
                        <option value={{ $subsector->id }}>
                            {{ $subsector->name }}</option>
                    @endforeach
                </select>
                <label class="font-bold">Jenis Usaha</label>
                <input type="text" name="type" class="form-pengajuan-input-admin" placeholder="Jenis Usaha*" required>
                <select name="marketing" id="marketing" class="form-pengajuan-input-admin" required>
                    @foreach ($marketings as $marketing)
                        <option value={{ $marketing->id }}>
                            {{ $marketing->name }}</option>
                    @endforeach
                </select>
                <input type="text" name="export_to" class="form-pengajuan-input-admin hidden" id="export"
                    placeholder="Ekspor ke...">
            </div>
            <div>
                <label class="font-bold">Produk Unggulan</label>
                <input type="text" name="best_product" class="form-pengajuan-input" placeholder="Produk Unggulan">
                <label class="font-bold">Bentuk Usaha</label>
                <select name="business_form" id="bentuk-usaha" class="form-pengajuan-input">
                    @foreach ($business_forms as $bf)
                        <option value="{{ $bf->id }}">
                            {{ $bf->name }}</option>
                    @endforeach
                </select>
                <label class="font-bold hidden kelompok">Jumlah Anggota</label>
                <input type="number" name="member_count" class="form-pengajuan-input hidden kelompok" id="jumlah-anggota"
                    placeholder="Jumlah Anggota*" onkeyup="refreshMemberCount();">
                <label class="font-bold">Nilai Usaha</label>
                <input type="number" name="business_value" class="form-pengajuan-input" placeholder="Nilai Usaha*"
                    required>
                <label class="font-bold">Nilai Aset</label>
                <input type="number" name="asset_value" class="form-pengajuan-input" placeholder="Nilai Aset*" required>
                <label class="font-bold">Jumlah SDM</label>
                <input type="number" name="hr_value" class="form-pengajuan-input" placeholder="Jumlah SDM*" required>
                <label class="font-bold">Jumlah Unit Usaha</label>
                <input type="number" name="unit_amount" class="form-pengajuan-input" placeholder="Jumlah Unit Usaha*"
                    required>
                <label class="font-bold">Nilai Omzet per Tahun</label>
                <input type="number" name="turnover_value" class="form-pengajuan-input"
                    placeholder="Nilai Omzet per Tahun*" required>
            </div>
        </div>
        <div id="form-kelompok">
        </div>
        <div class="font-bold text-2xl mb-4">Data Pengajuan</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div>
                <input type="number" id="land" name="land" class="form-pengajuan-input" placeholder="Tanah (Rp.)*"
                    required>
                <input type="number" id="building" name="building" class="form-pengajuan-input"
                    placeholder="Bangunan (Rp.)*" required>
            </div>
            <div>
                <input type="number" name="treasury" class="form-pengajuan-input" placeholder="Kas (Rp.)*" required>
                <input type="number" name="credit" class="form-pengajuan-input" placeholder="Piutang (Rp.)*" required>
                <input type="number" id="tools" name="production_tools" class="form-pengajuan-input"
                    placeholder="Peralatan Usaha/Produksi (Rp.)*" required>
                <input type="number" name="savings" class="form-pengajuan-input" placeholder="Bank(Tabungan) (Rp.)*"
                    required>
                <input type="number" id="supply" name="supply" class="form-pengajuan-input" placeholder="Persediaan (Rp.)*"
                    required>
                <input type="number" name="vehicle" class="form-pengajuan-input" placeholder="Kendaraan (Rp.)*" required>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Data Penjualan</div>
        <div class="grid grid-cols-3 gap-x-8">
            <div class="col-span-2">
                @for ($i = 1; $i <= 5; $i++)
                    <input type="text" name="business_commodity_name[{{ $i }}]" class="form-pengajuan-input"
                        placeholder="Nama Komoditas">
                @endfor
            </div>
            <div>
                @for ($i = 1; $i <= 5; $i++)
                    <input type="number" name="business_commodity_value[{{ $i }}]" class="form-pengajuan-input"
                        placeholder="Nilai Komoditas (Rp.)">
                @endfor
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Laba dan Permasalahan</div>
        <div class="grid grid-cols-3 gap-x-8">
            <div>
                <div class="font-bold mb-2">Laba Keuntungan Selama Setahun</div>
                <input type="number" name="sales_value" class="form-pengajuan-input" placeholder="Nilai Penjualan (Rp.)"
                    required>
                <input type="number" name="total_cost" class="form-pengajuan-input" placeholder="Biaya Total (Rp.)"
                    required>
            </div>
            <div class="col-span-2">
                <div class="font-bold mb-2">Permasalahan yang Dihadapi</div>
                <textarea name="business_problem" id="" cols="30" rows="12" class="form-pengajuan-input" required></textarea>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Rencana Penggunaan</div>
        <div class="grid grid-cols-3 gap-x-8">
            <div class="col-span-2">
                @for ($i = 1; $i <= 5; $i++)
                    <input type="text" name="business_plan_name[{{ $i }}]" class="form-pengajuan-input"
                        placeholder="Rencana">
                @endfor
            </div>
            <div>
                @for ($i = 1; $i <= 5; $i++)
                    <input type="number" name="business_plan_value[{{ $i }}]" class="form-pengajuan-input"
                        placeholder="Anggaran Rencana (Rp.)">
                @endfor
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Foto Usaha</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div class="">
                <label class="font-bold">Foto Tempat Usaha/Tempat Tinggal*</label>
                <div class="flex flex-col gap-y-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-full h-72 rounded-lg"
                        id="preview-foto-establishment">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="establishment_picture" id="foto-establishment" class="invisible w-2"
                            onchange="loadFile(event, 'foto-establishment')" accept="image/*" required>
                        <label for="foto-establishment" class="mangga-button-green cursor-pointer">Unggah Foto</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Foto Komoditas/Produk*</label>
                <div class="flex flex-col gap-y-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-full h-72 rounded-lg"
                        id="preview-foto-product">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="product_picture" id="foto-product" class="invisible w-2" required
                            onchange="loadFile(event, 'foto-product')" accept="image/*">
                        <label for="foto-product" class="mangga-button-green cursor-pointer">Unggah Foto</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Denah</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div class="">
                <label class="font-bold">Denah Tempat Usaha</label>
                <div class="flex flex-col gap-y-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-full h-72 rounded-lg"
                        id="preview-foto-sketch-b">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="business_sketch" id="foto-sketch-b" class="invisible w-2" required
                            onchange="loadFile(event, 'foto-sketch-b')" accept="image/*">
                        <label for="foto-sketch-b" class="mangga-button-green cursor-pointer">Unggah Foto</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Denah Tempat Tinggal</label>
                <div class="flex flex-col gap-y-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-full h-72 rounded-lg"
                        id="preview-foto-sketch-h">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="house_sketch" id="foto-sketch-h" class="invisible w-2" required
                            onchange="loadFile(event, 'foto-sketch-h')" accept="image/*">
                        <label for="foto-sketch-h" class="mangga-button-green cursor-pointer">Unggah Foto</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Rencana Pembelian</div>
        <div class="grid grid-cols-2 gap-x-8">
            <input type="hidden" name="business_product_name[1]" value="Urea (Ton)">
            <input type="hidden" name="business_product_name[2]" value="ZA (Ton)">
            <input type="hidden" name="business_product_name[3]" value="ZK (Ton)">
            <input type="hidden" name="business_product_name[4]" value="SP36/26 (Ton)">
            <input type="hidden" name="business_product_name[5]" value="Phonska Plus (Ton)">
            <input type="hidden" name="business_product_name[6]" value="Petro Ningrat (Ton)">
            <input type="hidden" name="business_product_name[7]" value="Petro Nitrat (Ton)">
            <input type="hidden" name="business_product_name[8]" value="Kaptan (Ton)">
            <input type="hidden" name="business_product_name[9]" value="Petro Cas (Ton)">
            <input type="hidden" name="business_product_name[10]" value="Petro Biofertile (Dus)">
            <input type="hidden" name="business_product_name[11]" value="Petro Gladiator (Dus)">
            <input type="hidden" name="business_product_name[12]" value="Petro Biofeed (Dus)">
            <input type="hidden" name="business_product_name[13]" value="Petro Biofish (Dus)">
            <input type="hidden" name="business_product_name[14]" value="Petro Chick (Dus)">
            <div class="col-span-2">
                <label class="font-bold">Distributor Produk</label>
                <input type="text" name="product_distributor" class="form-pengajuan-input" placeholder="Nama Distributor">
            </div>
            <div class="">
                <label class="font-bold">1. Urea (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[1]" class="form-pengajuan-input" placeholder="Kuantum">
                    <input type="number" name="business_product_price[1]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">3. ZK (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[3]" class="form-pengajuan-input" placeholder="Kuantum">
                    <input type="number" name="business_product_price[3]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">5. Phonska Plus (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[5]" class="form-pengajuan-input" placeholder="Kuantum">
                    <input type="number" name="business_product_price[5]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">7. Petro Nitrat (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[7]" class="form-pengajuan-input" placeholder="Kuantum">
                    <input type="number" name="business_product_price[7]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">9. Petro Cas (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[9]" class="form-pengajuan-input" placeholder="Kuantum">
                    <input type="number" name="business_product_price[9]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">11. Petro Gladiator (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[11]" class="form-pengajuan-input"
                        placeholder="Kuantum">
                    <input type="number" name="business_product_price[11]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">13. Petro Biofish (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[13]" class="form-pengajuan-input"
                        placeholder="Kuantum">
                    <input type="number" name="business_product_price[13]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <input type="text" name="business_product_name[15]" class="form-pengajuan-input" placeholder="15.">
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[15]" class="form-pengajuan-input"
                        placeholder="Kuantum">
                    <input type="number" name="business_product_price[15]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
            </div>
            <div class="">
                <label class="font-bold">2. ZA (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[2]" class="form-pengajuan-input" placeholder="Kuantum">
                    <input type="number" name="business_product_price[2]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">4. SP36/26 (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[4]" class="form-pengajuan-input" placeholder="Kuantum">
                    <input type="number" name="business_product_price[4]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">6. Petro Ningrat (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[6]" class="form-pengajuan-input" placeholder="Kuantum">
                    <input type="number" name="business_product_price[6]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">8. Kaptan (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[8]" class="form-pengajuan-input" placeholder="Kuantum">
                    <input type="number" name="business_product_price[8]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">10. Petro Biofertile (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[10]" class="form-pengajuan-input"
                        placeholder="Kuantum">
                    <input type="number" name="business_product_price[10]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">12. Petro Biofeed (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[12]" class="form-pengajuan-input"
                        placeholder="Kuantum">
                    <input type="number" name="business_product_price[12]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">14. Petro Chick (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[14]" class="form-pengajuan-input"
                        placeholder="Kuantum">
                    <input type="number" name="business_product_price[14]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <input type="text" name="business_product_name[16]" class="form-pengajuan-input" placeholder="16.">
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[16]" class="form-pengajuan-input"
                        placeholder="Kuantum">
                    <input type="number" name="business_product_price[16]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Dokumen Mitra</div>
        <div class="grid grid-cols-2 gap-8">
            <div class="">
                <label class="font-bold">Foto KTP*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-ktp">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="ktp" id="foto-ktp" class="invisible w-2" required
                            onchange="loadFile(event, 'foto-ktp')" accept="image/*">
                        <label for="foto-ktp" class="mangga-button-green cursor-pointer">Unggah Foto KTP</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Foto Kartu Keluarga*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-kk">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="kk" id="foto-kk" class="invisible w-2" required
                            onchange="loadFile(event, 'foto-kk')" accept="image/*">
                        <label for="foto-kk" class="mangga-button-green cursor-pointer">Unggah Foto KK</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Foto Selfie dengan KTP*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-selfie-ktp">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="ktp_selfie" id="foto-selfie-ktp" class="invisible w-2" accept="image/*" required
                            onchange="loadFile(event, 'foto-selfie-ktp')">
                        <label for="foto-selfie-ktp" class="mangga-button-green cursor-pointer">Unggah Foto Selfie dengan
                            KTP</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Foto Selfie dengan Kartu Keluarga*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-selfie-kk">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="kk_selfie" id="foto-selfie-kk" class="invisible w-2" accept="image/*" required
                            onchange="loadFile(event, 'foto-selfie-kk')">
                        <label for="foto-selfie-kk" class="mangga-button-green cursor-pointer">Unggah Foto Selfie dengan
                            KK</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div>
                <label class="font-bold">Scan SIUP*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" id="preview-scan-siup">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="siup" id="scan-siup" class="invisible w-2" required
                            onchange="loadFile(event, 'scan-siup')" accept="image/*">
                        <label for="scan-siup" class="mangga-button-green cursor-pointer">Unggah Scan SIUP</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div>
                <label class="font-bold">Scan Surat Keterangan Domisili Usaha*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" id="preview-scan-sk">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="skdu" id="scan-sk" class="invisible w-2" required
                            onchange="loadFile(event, 'scan-sk')" accept="image/*">
                        <label for="scan-sk" class="mangga-button-green cursor-pointer">Unggah Scan SK</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Data Pasangan (Jika Sudah Menikah)</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div class="">
                <input type="text" name="companion_name" class="form-pengajuan-input" placeholder="Nama Pendamping">
                <input type="number" name="companion_wedding_code" class="form-pengajuan-input"
                    placeholder="Nomor Surat Nikah">
                <div class="font-bold mb-2">Tanggal Menikah</div>
                <input type="date" name="companion_wedding_date" class="form-pengajuan-input">
                <input type="number" name="companion_ktp_code" class="form-pengajuan-input" placeholder="Nomor KTP"
                    minlength="16" maxlength="16">
                <input type="number" name="companion_telephone" class="form-pengajuan-input" placeholder="Nomor Telepon">
                <input type="number" name="companion_handphone" class="form-pengajuan-input" placeholder="Nomor HP">
            </div>
            <div class="">
                <input type="email" name="companion_email" class="form-pengajuan-input" placeholder="E-Mail">
                <input type="text" name="companion_address" class="form-pengajuan-input" placeholder="Alamat, RT/RW">
                <select name="companion_province" id="province-p" class="form-pengajuan-input">
                    @foreach ($provinces as $province)
                        <option value={{ $province->id }}>
                            {{ $province->name }}
                        </option>
                    @endforeach
                </select>
                <select name="companion_city" id="city-p" class="form-pengajuan-input">
                </select>
                <select name="companion_district" id="district-p" class="form-pengajuan-input">
                </select>
                <select name="companion_village" id="village-p" class="form-pengajuan-input">
                </select>
            </div>
        </div>
        <div class="flex items-center justify-end gap-x-4 mt-2">
            <button type="submit" class="mangga-button-green cursor-pointer">
                <span id="next-button-text">Buat Ajuan</span>
                <span class="fa fa-fw fa-arrow-right"></span>
            </button>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        var maxSteps = 12;
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('#bentuk-usaha').on('change', function(e) {
            if ($('#bentuk-usaha').val() != 4) {
                team = false;
                $('.kelompok').removeClass('block').addClass('hidden');
                $('#form-kelompok').html(null);
                $('#jumlah-anggota').val(0);
            } else {
                team = true;
                $('.kelompok').removeClass('hidden').addClass('block');
            }
            $('#land').prop("readonly", team);
            $('#building').prop("readonly", team);
            $('#supply').prop("readonly", team);
            $('#tools').prop("readonly", team);
            refreshMemberCount();
        });

        function refreshMemberCount() {
            maxSteps = 12 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0);
            $('#max-steps').html(maxSteps);
            $.post('{{ config('app.url') }}' + "/admin/utama/refresh-kelompok", {
                    _token: CSRF_TOKEN,
                    member: $('#jumlah-anggota').val(),
                    sector: $('#sector').val()
                })
                .done(function(data) {
                    $('#form-kelompok').html(data);
                })
                .fail(function(e) {
                    console.log(e);
                });
            $('.nilai-kekayaan').attr('id', 'nilai-kekayaan-' + (maxSteps - 9));
            $('.penjualan-setahun').attr('id', 'penjualan-setahun-' + (maxSteps - 8));
            $('.laba-permasalahan').attr('id', 'laba-permasalahan-' + (maxSteps - 7));
            $('.rencana-penggunaan').attr('id', 'rencana-penggunaan-' + (maxSteps - 6));
            $('.foto-usaha').attr('id', 'foto-usaha-' + (maxSteps - 5));
            $('.denah-tempat').attr('id', 'denah-tempat-' + (maxSteps - 4));
            $('.rencana-pembelian').attr('id', 'rencana-pembelian-' + (maxSteps - 3));
            $('.dokumen-mitra').attr('id', 'dokumen-mitra-' + (maxSteps - 2));
            $('.dokumen-persyaratan').attr('id', 'dokumen-persyaratan-' + (maxSteps - 1));
            $('.data-pendamping').attr('id', 'data-pendamping-' + (maxSteps));
        }

        function sumData(type) {
            let tempTotal = 0;
            $('.member-' + type).each(function() {
                tempTotal += parseInt($(this).val());
            });
            $('#' + type).val(tempTotal);
        }
    </script>
    <script>
        $('#marketing').on('change', function(e) {
            if ($('#marketing').val() != 3) {
                $('#export').removeClass('block').addClass('hidden');
                $('#export').val(null);
            } else {
                $('#export').removeClass('hidden').addClass('block');
            }
        });
    </script>
    <script>
        var stepID = 'Data Pengajuan'
        var stepCounter = 1;
        var title = "data-pengajuan";
        var team = false;
        var teamCount = 1;

        function changeTitle() {
            if (stepCounter == 1) {
                title = "data-pengajuan";
                $('#steps-title').html('Data Pengajuan');
            } else if (stepCounter == 2) {
                title = "data-usaha";
                $('#steps-title').html('Data Usaha');
            }
            if (!team) {
                if (stepCounter == 3) {
                    title = "nilai-kekayaan";
                    $('#steps-title').html('Nilai Kekayaan Usaha');
                } else if (stepCounter == 4) {
                    title = "penjualan-setahun";
                    $('#steps-title').html('Penjualan Selama Setahun');
                } else if (stepCounter == 5) {
                    title = "laba-permasalahan";
                    $('#steps-title').html('Laba Keuntungan Selama Setahun & Permasalahan yang Dihadapi');
                } else if (stepCounter == 6) {
                    title = "rencana-penggunaan";
                    $('#steps-title').html('Rencana Penggunaan Pinjaman Dana');
                } else if (stepCounter == 7) {
                    title = "foto-usaha";
                    $('#steps-title').html('Foto Tempat Usaha/Tempat Tinggal dan Komoditas/Produk');
                } else if (stepCounter == 8) {
                    title = "denah-tempat";
                    $('#steps-title').html('Denah Tempat Usaha dan Tempat Tinggal');
                } else if (stepCounter == 9) {
                    title = "rencana-pembelian";
                    $('#steps-title').html('Rencana pembelian produk non-subsidi PT Petrokimia Gresik ');
                } else if (stepCounter == 10) {
                    title = "dokumen-mitra";
                    $('#steps-title').html('Dokumen Mitra');
                } else if (stepCounter == 11) {
                    title = "dokumen-persyaratan";
                    $('#steps-title').html('Dokumen Persyaratan');
                } else if (stepCounter == 12) {
                    title = "data-pendamping";
                    $('#steps-title').html('Data Pendamping');
                }
                if (stepCounter == 12) {
                    $('#next-button-text').html('Selesai');
                } else {
                    $('#next-button-text').html('Langkah Selanjutnya');
                }
            } else {
                if (stepCounter == 3 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0)) {
                    title = "nilai-kekayaan";
                    $('#steps-title').html('Nilai Kekayaan Usaha');
                } else if (stepCounter == 4 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0)) {
                    title = "penjualan-setahun";
                    $('#steps-title').html('Penjualan Selama Setahun');
                } else if (stepCounter == 5 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0)) {
                    title = "laba-permasalahan";
                    $('#steps-title').html('Laba Keuntungan Selama Setahun & Permasalahan yang Dihadapi');
                } else if (stepCounter == 6 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0)) {
                    title = "rencana-penggunaan";
                    $('#steps-title').html('Rencana Penggunaan Pinjaman Dana');
                } else if (stepCounter == 7 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0)) {
                    title = "foto-usaha";
                    $('#steps-title').html('Foto Tempat Usaha/Tempat Tinggal dan Komoditas/Produk');
                } else if (stepCounter == 8 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0)) {
                    title = "denah-tempat";
                    $('#steps-title').html('Denah Tempat Usaha dan Tempat Tinggal');
                } else if (stepCounter == 9 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0)) {
                    title = "rencana-pembelian";
                    $('#steps-title').html('Rencana pembelian produk non-subsidi PT Petrokimia Gresik ');
                } else if (stepCounter == 10 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0)) {
                    title = "dokumen-mitra";
                    $('#steps-title').html('Dokumen Mitra');
                } else if (stepCounter == 11 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0)) {
                    title = "dokumen-persyaratan";
                    $('#steps-title').html('Dokumen Persyaratan');
                } else if (stepCounter == 12 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0)) {
                    title = "data-pendamping";
                    $('#steps-title').html('Data Pendamping');
                } else if (stepCounter >= 3) {
                    title = "data-anggota";
                    $('#steps-title').html('Data Anggota');
                }
                if (stepCounter == 12 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0)) {
                    $('#next-button-text').html('Selesai');
                } else {
                    $('#next-button-text').html('Langkah Selanjutnya');
                }
            }
        }

        function checkFields() {
            let state = true;
            $('input,textarea,select').filter('[required]:visible').each(function() {
                if ($(this).val() == '') {
                    state = false;
                    $(this).addClass('border').addClass('border-red-600');
                } else {
                    $(this).removeClass('border').removeClass('border-red-600');
                }
            });
            return state;
        }
        var submitted = false;

        function nextStep() {
            if (checkFields()) {
                if (stepCounter >= 12 && !team) {
                    event.preventDefault();
                    if (!submitted) {
                        submitted == true;
                        document.getElementById('form-mangga-utama').submit();
                    }
                } else if (stepCounter >= 12 + parseInt($('#jumlah-anggota').val() ? $('#jumlah-anggota').val() : 0) &&
                    team) {
                    event.preventDefault();
                    if (!submitted) {
                        submitted == true;
                        document.getElementById('form-mangga-utama').submit();
                    }
                } else {
                    stepCounter += 1;
                    changeTitle();
                    $('#counter-steps').html(stepCounter);
                    $('.form-step').removeClass('grid').addClass('hidden');
                    $('#' + title + '-' + stepCounter).addClass('grid').removeClass('hidden');
                }
            }
        }

        function previousStep() {
            stepCounter -= 1;
            changeTitle();
            if (stepCounter >= 1) {
                $('#counter-steps').html(stepCounter);
                $('.form-step').removeClass('grid').addClass('hidden');
                $('#' + title + '-' + stepCounter).addClass('grid').removeClass('hidden');
            } else {
                window.location.href = "{{ route('user.create_ajuan') }}"
            }
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
    <script>
        var businessforms = @json($business_forms);
        var subsectors = @json($subsectors);

        $('#sector').on('change', function(e) {
            $('#subsector').html(null);
            let obj = subsectors.filter(function(obj) {
                return obj.sector_id === parseInt($('#sector').val());
            });
            obj.forEach(element => {
                $('#subsector').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            $('#bentuk-usaha').html(null);
            businessforms.forEach(element => {
                if (parseInt($('#sector').val()) == 1 || parseInt($('#sector').val()) == 4 || parseInt($(
                            '#sector')
                        .val()) == 5 || parseInt($('#sector').val()) == 7) {
                    if (element.id != 4) {
                        $('#bentuk-usaha').append('<option value="' + element.id + '">' + element.name +
                            '</option>')
                    }
                } else {
                    $('#bentuk-usaha').append('<option value="' + element.id + '">' + element.name +
                        '</option>')
                }
            });
            team = false;
            $('.kelompok').removeClass('block').addClass('hidden');
            $('#form-kelompok').html(null);
            $('#jumlah-anggota').val(0);
            refreshMemberCount();
        });
        let obja = subsectors.filter(function(obj) {
            return obj.sector_id === parseInt($('#sector').val());
        });
        obja.forEach(element => {
            $('#subsector').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $('#bentuk-usaha').html(null);
        businessforms.forEach(element => {
            if (parseInt($('#sector').val()) == 1 || parseInt($('#sector').val()) == 4 || parseInt($('#sector')
                    .val()) == 5 || parseInt($('#sector').val()) == 7) {
                if (element.id != 4) {
                    $('#bentuk-usaha').append('<option value="' + element.id + '">' + element.name + '</option>')
                }
            } else {
                $('#bentuk-usaha').append('<option value="' + element.id + '">' + element.name + '</option>')
            }
        });
    </script>
    <script>
        var provinces = @json($provinces);
        var cities = @json($cities);
        var districts = @json($districts);
        var villages = @json($villages);

        $('#province').on('change', function(e) {
            $('#city').html(null);
            $('#district').html(null);
            $('#village').html(null);
            let obj1 = cities.filter(function(obj) {
                return obj.province_id === $('#province').val();
            });
            obj1.forEach(element => {
                $('#city').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj2 = districts.filter(function(obj) {
                return obj.regency_id === $('#city').val();
            });
            obj2.forEach(element => {
                $('#district').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj3 = villages.filter(function(obj) {
                return obj.district_id === $('#district').val();
            });
            obj3.forEach(element => {
                $('#village').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
        $('#city').on('change', function(e) {
            $('#district').html(null);
            $('#village').html(null);
            let obj2 = districts.filter(function(obj) {
                return obj.regency_id === $('#city').val();
            });
            obj2.forEach(element => {
                $('#district').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj3 = villages.filter(function(obj) {
                return obj.district_id === $('#district').val();
            });
            obj3.forEach(element => {
                $('#village').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
        $('#district').on('change', function(e) {
            $('#village').html(null);
            let obj3 = villages.filter(function(obj) {
                return obj.district_id === $('#district').val();
            });
            obj3.forEach(element => {
                $('#village').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
    </script>
    <script>
        let obj1 = cities.filter(function(obj) {
            return obj.province_id === $('#province').val();
        });
        obj1.forEach(element => {
            $('#city').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#city").prop("disabled", false);
        let obj2 = districts.filter(function(obj) {
            return obj.regency_id === $('#city').val();
        });
        obj2.forEach(element => {
            $('#district').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#district").prop("disabled", false);
        let obj3 = villages.filter(function(obj) {
            return obj.district_id === $('#district').val();
        });
        obj3.forEach(element => {
            $('#village').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#village").prop("disabled", false);
    </script>
    <script>
        $('#province-p').on('change', function(e) {
            $('#city-p').html(null);
            $('#district-p').html(null);
            $('#village-p').html(null);
            let obj1p = cities.filter(function(obj) {
                return obj.province_id === $('#province-p').val();
            });
            obj1p.forEach(element => {
                $('#city-p').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj2p = districts.filter(function(obj) {
                return obj.regency_id === $('#city-p').val();
            });
            obj2p.forEach(element => {
                $('#district-p').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj3p = villages.filter(function(obj) {
                return obj.district_id === $('#district-p').val();
            });
            obj3p.forEach(element => {
                $('#village-p').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
        $('#city-p').on('change', function(e) {
            $('#district-p').html(null);
            $('#village-p').html(null);
            let obj2p = districts.filter(function(obj) {
                return obj.regency_id === $('#city-p').val();
            });
            obj2p.forEach(element => {
                $('#district-p').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj3p = villages.filter(function(obj) {
                return obj.district_id === $('#district-p').val();
            });
            obj3p.forEach(element => {
                $('#village-p').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
        $('#district-p').on('change', function(e) {
            $('#village-p').html(null);
            let obj3p = villages.filter(function(obj) {
                return obj.district_id === $('#district-p').val();
            });
            obj3p.forEach(element => {
                $('#village-p').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
    </script>
    <script>
        let obj1p = cities.filter(function(obj) {
            return obj.province_id === $('#province-p').val();
        });
        obj1p.forEach(element => {
            $('#city-p').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#city-p").prop("disabled", false);
        let obj2p = districts.filter(function(obj) {
            return obj.regency_id === $('#city-p').val();
        });
        obj2p.forEach(element => {
            $('#district-p').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#district-p").prop("disabled", false);
        let obj3p = villages.filter(function(obj) {
            return obj.district_id === $('#district-p').val();
        });
        obj3p.forEach(element => {
            $('#village-p').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#village-p").prop("disabled", false);
    </script>
    <script>
        $('#province-u').on('change', function(e) {
            $('#city-u').html(null);
            $('#district-u').html(null);
            $('#village-u').html(null);
            let obj1u = cities.filter(function(obj) {
                return obj.province_id === $('#province-u').val();
            });
            obj1u.forEach(element => {
                $('#city-u').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj2u = districts.filter(function(obj) {
                return obj.regency_id === $('#city-u').val();
            });
            obj2u.forEach(element => {
                $('#district-u').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj3u = villages.filter(function(obj) {
                return obj.district_id === $('#district-u').val();
            });
            obj3u.forEach(element => {
                $('#village-u').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
        $('#city-u').on('change', function(e) {
            $('#district-u').html(null);
            $('#village-u').html(null);
            let obj2u = districts.filter(function(obj) {
                return obj.regency_id === $('#city-u').val();
            });
            obj2u.forEach(element => {
                $('#district-u').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            let obj3u = villages.filter(function(obj) {
                return obj.district_id === $('#district-u').val();
            });
            obj3u.forEach(element => {
                $('#village-u').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
        $('#district-u').on('change', function(e) {
            $('#village-u').html(null);
            let obj3u = villages.filter(function(obj) {
                return obj.district_id === $('#district-u').val();
            });
            obj3u.forEach(element => {
                $('#village-u').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
    </script>
    <script>
        let obj1u = cities.filter(function(obj) {
            return obj.province_id === $('#province-u').val();
        });
        obj1u.forEach(element => {
            $('#city-u').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#city-u").prop("disabled", false);
        let obj2u = districts.filter(function(obj) {
            return obj.regency_id === $('#city-u').val();
        });
        obj2u.forEach(element => {
            $('#district-u').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#district-u").prop("disabled", false);
        let obj3u = villages.filter(function(obj) {
            return obj.district_id === $('#district-u').val();
        });
        obj3u.forEach(element => {
            $('#village-u').append('<option value="' + element.id + '">' + element.name + '</option>')
        });
        $("#village-u").prop("disabled", false);
    </script>
@endsection

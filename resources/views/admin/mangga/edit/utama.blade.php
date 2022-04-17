@extends('layouts.admin')

@section('content')
    <div class="text-4xl font-bold mb-2" id="form-title">Data Informasi Calon Mangga -
        {{ $utama->business->registration_number }}</div>
    <form action="{{ route('admin.utama.update', $utama->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <div class="font-bold text-2xl mb-4">Data Usaha</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div>
                <label class="font-bold">Nama Usaha</label>
                <input type="text" name="name" class="form-pengajuan-input" placeholder="Nama Usaha*" required
                    value="{{ $utama->business->name }}">
                <label class="font-bold">Alamat Usaha</label>
                <input type="text" name="address" class="form-pengajuan-input" placeholder="Alamat Usaha*" required
                    value="{{ $utama->business->address }}">
                <label class=" font-bold">Kode Pos</label>
                <input type="number" name="postal_code" class="form-pengajuan-input" placeholder="Kode Pos*" required
                    value="{{ $utama->business->postal_code }}">
                <label class="font-bold">Provinsi</label>
                <select name="province" id="province" class="form-pengajuan-input" required>
                    @foreach ($provinces as $province)
                        <option value={{ $province->id }}
                            {{ $utama->business->province_id == $province->id ? 'selected' : '' }}>{{ $province->name }}
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
                    <input type="radio" name="mail_address" value="0" id="alamat-surat-rumah"
                        {{ $utama->mail_address == 0 ? 'checked' : '' }}>
                    <label for="alamat-surat-rumah" class="text-gray-700">Rumah</label>
                    <input type="radio" name="mail_address" value="1" id="alamat-surat-usaha"
                        {{ $utama->mail_address == 1 ? 'checked' : '' }}>
                    <label for="alamat-surat-usaha" class="text-gray-700">Usaha</label>
                </div>
            </div>
            <div>
                <label class="font-bold">Telepon</label>
                <input type="number" name="telephone" class="form-pengajuan-input" placeholder="No. Telepon Usaha*"
                    value="{{ $utama->telephone }}" required>
                <label class="font-bold">Handphone</label>
                <input type="number" name="handphone" class="form-pengajuan-input" placeholder="No. HP Usaha*" required
                    value="{{ $utama->handphone }}">
                <label class="font-bold">E-Mail</label>
                <input type="text" name="email" class="form-pengajuan-input" placeholder="E-Mail*" required
                    value="{{ $utama->email }}">
                <label class="font-bold">Kode Siup</label>
                <input type="number" name="siup_code" class="form-pengajuan-input" style="margin-bottom: 0.5rem;"
                    value="{{ $utama->siup_code }}" placeholder="No. SIUP*" required>
                <div class="font-bold">Tanggal SIUP*</div>
                <input type="date" name="siup_date" class="form-pengajuan-input" required
                    value="{{ $utama->siup_date }}">
                <div class="font-bold">Status Tempat Usaha</div>
                <select name="establishment_status" id="" class="form-pengajuan-input">
                    @foreach ($establishment_statuses as $es)
                        <option value={{ $es->id }}
                            {{ $es->id == $utama->establishment_status_id ? 'selected' : '' }}>{{ $es->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Data Pengajuan</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div>
                <label class="font-bold">Jumlah Pengajuan</label>
                <input type="text" name="request_amount" id="" class="form-pengajuan-input-admin"
                    value="{{ $utama->request_amount }}" required>
                <label class="font-bold">Agunan</label>
                <input type="text" name="collateral" id="" class="form-pengajuan-input-admin"
                    value="{{ $utama->collateral }}" required>
                <label class="font-bold">Tipe Pengajuan</label>
                <select name="distribution_type" id="" class="form-pengajuan-input-admin" required>
                    @foreach ($distribution_types as $dt)
                        <option value={{ $dt->id }} {{$utama->distribution_type_id == $dt->id ? 'selected' : ''}} >{{ $dt->name }}</option>
                    @endforeach
                </select>
                <label class="font-bold">Sektor</label>
                <select name="sector" id="sector" class="form-pengajuan-input-admin" required>
                    @foreach ($sectors as $sector)
                        <option value={{ $sector->id }} @if ($utama->business->sector_id == $sector->id) selected @endif>
                            {{ $sector->name }}</option>
                    @endforeach
                </select>
                <label class="font-bold">Subsektor</label>
                <select name="subsector" id="subsector" class="form-pengajuan-input-admin" required>
                    @foreach ($subsectors as $subsector)
                        <option value={{ $subsector->id }} @if ($utama->business->subsector_id == $subsector->id) selected @endif>
                            {{ $subsector->name }}</option>
                    @endforeach
                </select>
                <label class="font-bold">Jenis Usaha</label>
                <input type="text" name="type" class="form-pengajuan-input-admin" placeholder="Jenis Usaha*"
                    value="{{ $utama->business->type }}" required>
                <select name="marketing" id="marketing" class="form-pengajuan-input-admin" required>
                    @foreach ($marketings as $marketing)
                        <option value={{ $marketing->id }}
                            {{ $utama->marketing_id == $marketing->id ? 'selected' : '' }}>
                            {{ $marketing->name }}</option>
                    @endforeach
                </select>
                <input type="text" name="export_to" class="form-pengajuan-input-admin hidden" id="export"
                    placeholder="Ekspor ke..." value="{{ $utama->export_to }}">
            </div>
            <div>
                <label class="font-bold">Produk Unggulan</label>
                <input type="text" name="best_product" class="form-pengajuan-input" placeholder="Produk Unggulan"
                    value="{{ $utama->best_product }}">
                <label class="font-bold">Bentuk Usaha</label>
                <select name="business_form" id="bentuk-usaha" class="form-pengajuan-input">
                    @foreach ($business_forms as $bf)
                        <option value="{{ $bf->id }}" {{ $utama->business_form_id == $bf->id ? 'selected' : '' }}>
                            {{ $bf->name }}</option>
                    @endforeach
                </select>
                <input type="number" name="member_count"
                    class="form-pengajuan-input {{ $utama->business_form_id != 4 ? 'hidden' : '' }} kelompok"
                    id="jumlah-anggota" value="{{ $utama->member_count }}" placeholder="Jumlah Anggota*" required
                    onkeyup="refreshMemberCount();">
                <label class="font-bold">Nilai Usaha</label>
                <input type="number" name="business_value" class="form-pengajuan-input" placeholder="Nilai Usaha*" required
                    value="{{ $utama->business_value }}">
                <label class="font-bold">Nilai Aset</label>
                <input type="number" name="asset_value" class="form-pengajuan-input" placeholder="Nilai Aset*" required
                    value="{{ $utama->business->asset_value }}">
                <label class="font-bold">Jumlah SDM</label>
                <input type="number" name="hr_value" class="form-pengajuan-input" placeholder="Jumlah SDM*" required
                    value="{{ $utama->hr_value }}">
                <label class="font-bold">Jumlah Unit Usaha</label>
                <input type="number" name="unit_amount" class="form-pengajuan-input" placeholder="Jumlah Unit Usaha*"
                    value="{{ $utama->unit_amount }}" required>
                <label class="font-bold">Nilai Omzet per Tahun</label>
                <input type="number" name="turnover_value" class="form-pengajuan-input" placeholder="Nilai Omzet per Tahun*"
                    value="{{ $utama->turnover_value }}" required>
            </div>
        </div>
        <div id="form-kelompok">
            @foreach ($utama->members as $utama_member)
                <div class="font-bold text-2xl mb-4">Data Anggota - {{ $loop->iteration }}</div>
                <div class="grid grid-cols-2 gap-x-8 form-step">
                    <div class="">
                        <label class="font-bold">Nama Lengkap Sesuai KTP</label>
                        <input type="text" name="member_name[{{ $loop->iteration }}]" class="form-pengajuan-input"
                            placeholder="Nama Lengkap Sesuai KTP*" required value="{{ $utama_member->name }}">
                        <label class="font-bold">NIK</label>
                        <input type="number" name="member_ktp_code[{{ $loop->iteration }}]" class="form-pengajuan-input"
                            minlength="16" maxlength="16" placeholder="NIK*" required
                            value="{{ $utama_member->ktp_code }}">
                        <label class="font-bold">Nomor KK</label>
                        <input type="number" name="member_kk_code[{{ $loop->iteration }}]" class="form-pengajuan-input"
                            placeholder="Nomor KK*" required value="{{ $utama_member->kk_code }}">
                        <label class="font-bold">No. Telepon</label>
                        <input type="number" name="member_phone[{{ $loop->iteration }}]" class="form-pengajuan-input"
                            placeholder="No. Telepon*" required value="{{ $utama_member->phone }}">
                        <label class="font-bold">Alamat Domisili Lengkap</label>
                        <input type="text" name="member_address[{{ $loop->iteration }}]" class="form-pengajuan-input"
                            placeholder="Alamat Domisili Lengkap*" required value="{{ $utama_member->address }}">
                        <div class="">
                            <label class="font-bold">Foto KTP*</label>
                            <div class="flex items-end gap-x-4">
                                <img src="{{ asset('uploads/mangga/ktp/') . '/' . $utama_member->ktp }}"
                                    class="w-48 h-48 rounded-lg" id="preview-foto-ktp-member-{{ $loop->iteration }}">
                                <div class="flex flex-col gap-y-2">
                                    <input type="file" name="member_ktp[{{ $loop->iteration }}]"
                                        id="foto-ktp-member-{{ $loop->iteration }}" class="hidden"
                                        onchange="loadFile(event, 'foto-ktp-member-{{ $loop->iteration }}')"
                                        accept="image/*">
                                    <label for="foto-ktp-member-{{ $loop->iteration }}"
                                        class="mangga-button-green cursor-pointer">Unggah Foto
                                        KTP</label>
                                    <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label class="font-bold">Foto Selfie dengan KTP*</label>
                            <div class="flex items-end gap-x-4">
                                <img src="{{ asset('uploads/mangga/ktpselfie') . '/' . $utama_member->ktp_selfie }}"
                                    class="w-48 h-48 rounded-lg"
                                    id="preview-foto-selfie-ktp-member-{{ $loop->iteration }}">
                                <div class="flex flex-col gap-y-2">
                                    <input type="file" name="member_ktp_selfie[{{ $loop->iteration }}]"
                                        id="foto-selfie-ktp-member-{{ $loop->iteration }}" class="hidden"
                                        accept="image/*"
                                        onchange="loadFile(event, 'foto-selfie-ktp-member-{{ $loop->iteration }}')">
                                    <label for="foto-selfie-ktp-member-{{ $loop->iteration }}"
                                        class="mangga-button-green cursor-pointer">Unggah Foto
                                        Selfie
                                        dengan
                                        KTP</label>
                                    <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                                </div>
                            </div>
                        </div>
                        @if ($utama->business->sector_id == 6)
                            <div class="font-bold mb-2">Data Usaha</div>
                            <input type="number" name="member_income[{{ $loop->iteration }}]"
                                id="member-income-{{ $loop->iteration }}" class="form-pengajuan-input"
                                placeholder="Pendapatan rata-rata (1 tahun)*" value="{{ $utama_member->income }}"
                                onkeyup="$('#member-profit-{{ $loop->iteration }}').val(parseInt($('#member-income-{{ $loop->iteration }}').val())-parseInt($('#member-cost-{{ $loop->iteration }}').val()))"
                                required>
                            <input type="number" name="member_cost[{{ $loop->iteration }}]"
                                id="member-cost-{{ $loop->iteration }}" class="form-pengajuan-input"
                                placeholder="Biaya Pemeliharaan (1 tahun)*" value="{{ $utama_member->cost }}"
                                onkeyup="$('#member-profit-{{ $loop->iteration }}').val(parseInt($('#member-income-{{ $loop->iteration }}').val())-parseInt($('#member-cost-{{ $loop->iteration }}').val()))"
                                required>
                            <input type="number" name="member_profit[{{ $loop->iteration }}]"
                                id="member-profit-{{ $loop->iteration }}" class="form-pengajuan-input"
                                placeholder="Keuntungan*" readonly required value="{{ $utama_member->profit }}">
                            <input type="number" name="member_land[{{ $loop->iteration }}]"
                                class="form-pengajuan-input member-land" onkeyup="sumData('land');"
                                placeholder="Nilai Tanah*" required value="{{ $utama_member->land }}">
                            <input type="number" name="member_building[{{ $loop->iteration }}]"
                                class="form-pengajuan-input member-building" onkeyup="sumData('building');"
                                placeholder="Nilai Bangunan*" required value="{{ $utama_member->building }}">
                            <input type="number" name="member_production_tools[{{ $loop->iteration }}]"
                                class="form-pengajuan-input member-tools" onkeyup="sumData('tools');"
                                placeholder="Alat Kerja/Mesin*" required value="{{ $utama_member->production_tools }}">
                            <input type="number" name="member_supply[{{ $loop->iteration }}]"
                                class="form-pengajuan-input member-supply" onkeyup="sumData('supply');"
                                placeholder="Persediaan*" required value="{{ $utama_member->supply }}">
                            <input type="number" name="member_loan_amount[{{ $loop->iteration }}]"
                                value="{{ $utama_member->loan_amount }}" class="form-pengajuan-input"
                                placeholder="Pinjaman Yang Diminta*" required>
                        @else
                            <div class="font-bold mb-2">Data Usaha</div>
                            <input type="number" name="member_income[{{ $loop->iteration }}]"
                                id="member-income-{{ $loop->iteration }}" class="form-pengajuan-input"
                                placeholder="Pendapatan rata-rata (per panen)*" value="{{ $utama_member->profit }}"
                                onkeyup="$('#member-profit-{{ $loop->iteration }}').val(parseInt($('#member-income-{{ $loop->iteration }}').val())-parseInt($('#member-cost-{{ $loop->iteration }}').val()))"
                                required>
                            <input type="number" name="member_cost[{{ $loop->iteration }}]"
                                id="member-cost-{{ $loop->iteration }}" class="form-pengajuan-input"
                                placeholder="Biaya Pemeliharaan (per panen)*" value="{{ $utama_member->cost }}"
                                onkeyup="$('#member-profit-{{ $loop->iteration }}').val(parseInt($('#member-income-{{ $loop->iteration }}').val())-parseInt($('#member-cost-{{ $loop->iteration }}').val()))"
                                required>
                            <input type="number" name="member_profit[{{ $loop->iteration }}]"
                                value="{{ $utama_member->profit }}" id="member-profit-{{ $loop->iteration }}"
                                class="form-pengajuan-input" placeholder="Keuntungan*" readonly required>
                            <input type="number" name="member_land[{{ $loop->iteration }}]"
                                value="{{ $utama_member->land }}" class="form-pengajuan-input member-land"
                                onkeyup="sumData('land');" placeholder="Nilai Tanah*" required>
                            <input type="number" name="member_building[{{ $loop->iteration }}]"
                                value="{{ $utama_member->building }}" class="form-pengajuan-input member-building"
                                onkeyup="sumData('building');" placeholder="Nilai Bangunan*" required>
                            <input type="number" name="member_production_tools[{{ $loop->iteration }}]"
                                value="{{ $utama_member->production_tools }}" class="form-pengajuan-input member-tools"
                                onkeyup="sumData('tools');" placeholder="Alat Kerja/Mesin*" required>
                            <input type="number" name="member_supply[{{ $loop->iteration }}]"
                                value="{{ $utama_member->supply }}" class="form-pengajuan-input member-supply"
                                onkeyup="sumData('supply');" placeholder="Persediaan*" required>
                            <input type="number" name="member_loan_amount[{{ $loop->iteration }}]"
                                value="{{ $utama_member->loan_amount }}" class="form-pengajuan-input"
                                placeholder="Pinjaman Yang Diminta*" required>
                        @endif
                    </div>
                    <div class="">
                        @if ($utama->business->sector_id == 6)
                            <div class="font-bold mb-2">Rencana Penggunaan Pinjaman</div>
                            <input type="number" name="member_cow_count[{{ $loop->iteration }}]"
                                value="{{ $utama_member->cow_count }}" class="form-pengajuan-input"
                                placeholder="Pembelian Sapi (ekor)*" required>
                            <input type="number" name="member_cow_price[{{ $loop->iteration }}]"
                                value="{{ $utama_member->cow_price }}" class="form-pengajuan-input"
                                placeholder="Pembelian Sapi (Rp.)*" required>
                            <div class="font-bold mb-2">Biaya Perawatan</div>
                            <input type="number" name="member_human_resource[{{ $loop->iteration }}]"
                                value="{{ $utama_member->human_resource }}" class="form-pengajuan-input"
                                placeholder="Tenaga Kerja (Rp.)*" required>
                            <input type="number" name="member_medicine[{{ $loop->iteration }}]"
                                value="{{ $utama_member->medicine }}" class="form-pengajuan-input"
                                placeholder="Obat-obatan (Rp.)*" required>
                            <div class="font-bold mb-2">Pakan</div>
                            <input type="number" name="member_concentrate[{{ $loop->iteration }}]"
                                value="{{ $utama_member->concentrate }}" class="form-pengajuan-input"
                                placeholder="Konsentrate (Rp.)*" required>
                            <input type="number" name="member_hmt[{{ $loop->iteration }}]" class="form-pengajuan-input"
                                value="{{ $utama_member->hmt }}" placeholder="HMT (Rumput, dll.) (Rp.)*" required>
                            <input type="number" name="member_cultivation[{{ $loop->iteration }}]"
                                value="{{ $utama_member->cultivation }}" class="form-pengajuan-input"
                                placeholder="Biaya Garap (Rp.)*" required>
                            <input type="number" name="member_transportation[{{ $loop->iteration }}]"
                                value="{{ $utama_member->transportation }}" class="form-pengajuan-input"
                                placeholder="Transportasi (Rp.)*" required>
                        @elseif ($utama->business->sector_id == 2)
                            <div class="font-bold mb-2">Lahan Yang Digarap</div>
                            <select name="member_land_ownership[{{ $loop->iteration }}]" id=""
                                class="form-pengajuan-input">
                                @foreach ($establishment_statuses as $es)
                                    <option value={{ $es->id }}
                                        {{ $utama_member->land_ownership == $es->id ? 'selected' : '' }}>
                                        {{ $es->name }}</option>
                                @endforeach
                            </select>
                            <input type="number" name="member_land_area[{{ $loop->iteration }}]"
                                value="{{ $utama_member->land_area }}" class="form-pengajuan-input"
                                placeholder="Luas Lahan (m2)*" required>
                            <div class="font-bold mb-2">Rencana Penggunaan Pinjaman</div>
                            <input type="number" name="member_seed[{{ $loop->iteration }}]"
                                value="{{ $utama_member->seed }}" class="form-pengajuan-input"
                                placeholder="Pembelian Bibit (Rp.)*" required>
                            <input type="number" name="member_feed[{{ $loop->iteration }}]"
                                value="{{ $utama_member->feed }}" class="form-pengajuan-input"
                                placeholder="Pembelian Pakan (Rp.)*" required>
                            <input type="number" name="member_medicine[{{ $loop->iteration }}]"
                                value="{{ $utama_member->medicine }}" class="form-pengajuan-input"
                                placeholder="Obat-obatan (Rp.)*" required>
                            <input type="number" name="member_cultivation[{{ $loop->iteration }}]"
                                value="{{ $utama_member->cultivation }}" class="form-pengajuan-input"
                                placeholder="Biaya Garap (Rp.)*" required>
                            <input type="number" name="member_transportation[{{ $loop->iteration }}]"
                                value="{{ $utama_member->transportation }}" class="form-pengajuan-input"
                                placeholder="Transportasi (Rp.)*" required>
                            <input type="number" name="member_others[{{ $loop->iteration }}]"
                                value="{{ $utama_member->others }}" class="form-pengajuan-input"
                                placeholder="Lain-lain (Rp.)*" required>
                            <input type="number" name="member_period_month[{{ $loop->iteration }}]"
                                value="{{ $utama_member->period_month }}" class="form-pengajuan-input"
                                placeholder="Jangka Waktu Usaha (Bulan)*" required>
                        @else
                            <div class="font-bold mb-2">Lahan Yang Digarap</div>
                            <select name="member_land_ownership[{{ $loop->iteration }}]" id=""
                                class="form-pengajuan-input">
                                @foreach ($establishment_statuses as $es)
                                    <option value={{ $es->id }}
                                        {{ $utama_member->land_ownership == $es->id ? 'selected' : '' }}>
                                        {{ $es->name }}</option>
                                @endforeach
                            </select>
                            <input type="number" name="member_land_area[{{ $loop->iteration }}]"
                                value="{{ $utama_member->land_Area }}" class="form-pengajuan-input"
                                placeholder="Luas Lahan (m2)*" required>
                            <div class="font-bold mb-2">Rencana Penggunaan Pinjaman</div>
                            <input type="number" name="member_seed[{{ $loop->iteration }}]"
                                value="{{ $utama_member->seed }}" class="form-pengajuan-input"
                                placeholder="Pembelian Bibit (Rp.)*" required>
                            <input type="number" name="member_fertilizer[{{ $loop->iteration }}]"
                                value="{{ $utama_member->fertilizer }}" class="form-pengajuan-input"
                                placeholder="Pembelian Pupuk (Rp.)*" required>
                            <input type="number" name="member_medicine[{{ $loop->iteration }}]"
                                value="{{ $utama_member->medicine }}" class="form-pengajuan-input"
                                placeholder="Obat-obatan (Rp.)*" required>
                            <input type="number" name="member_cultivation[{{ $loop->iteration }}]"
                                value="{{ $utama_member->cultivation }}" class="form-pengajuan-input"
                                placeholder="Biaya Garap (Rp.)*" required>
                            <input type="number" name="member_transportation[{{ $loop->iteration }}]"
                                value="{{ $utama_member->transportation }}" class="form-pengajuan-input"
                                placeholder="Transportasi (Rp.)*" required>
                            <input type="number" name="member_others[{{ $loop->iteration }}]"
                                value="{{ $utama_member->others }}" class="form-pengajuan-input"
                                placeholder="Lain-lain (Rp.)*" required>
                            <input type="number" name="member_period_month[{{ $loop->iteration }}]"
                                value="{{ $utama_member->period_month }}" class="form-pengajuan-input"
                                placeholder="Jangka Waktu Usaha (Bulan)*" required>
                        @endif
                        <div class="font-bold mb-2">Sertifikat Agunan (Bila Ada)</div>
                        <input type="text" name="member_certificate_name[{{ $loop->iteration }}]"
                            value="{{ $utama_member->certificate_name }}" class="form-pengajuan-input"
                            placeholder="Nama Sertifikat">
                        <input type="text" name="member_certificate_address[{{ $loop->iteration }}]"
                            value="{{ $utama_member->certificate_address }}" class="form-pengajuan-input"
                            placeholder="Alamat Sertifikat">
                        <div class="">
                            <label class="font-bold">Foto Sertifikat</label>
                            <div class="flex items-end gap-x-4">
                                <img src="{{ asset('uploads/mangga/certificate') . '/' . $utama_member->certificate }}"
                                    class="w-48 h-48 rounded-lg"
                                    id="preview-foto-sertifikat-member-{{ $loop->iteration }}">
                                <div class="flex flex-col gap-y-2">
                                    <input type="file" name="member_certificate[{{ $loop->iteration }}]" value=''
                                        id="foto-sertifikat-member-{{ $loop->iteration }}" class="hidden"
                                        onchange="loadFile(event, 'foto-sertifikat-member-{{ $loop->iteration }}')"
                                        accept="image/*">
                                    <label for="foto-sertifikat-member-{{ $loop->iteration }}"
                                        class="mangga-button-green cursor-pointer">Unggah Foto
                                        Sertifikat</label>
                                    <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label class="font-bold">Foto Selfie dengan Sertifikat</label>
                            <div class="flex items-end gap-x-4">
                                <img src="{{ asset('uploads/mangga/certificateselfie') . '/' . $utama_member->certificate_selfie }}"
                                    class="w-48 h-48 rounded-lg"
                                    id="preview-foto-selfie-sertifikat-member-{{ $loop->iteration }}">
                                <div class="flex flex-col gap-y-2">
                                    <input type="file" name="member_certificate_selfie[{{ $loop->iteration }}]" value=''
                                        id="foto-selfie-sertifikat-member-{{ $loop->iteration }}"
                                        class="hidden" accept="image/*"
                                        onchange="loadFile(event, 'foto-selfie-sertifikat-member-{{ $loop->iteration }}')">
                                    <label for="foto-selfie-sertifikat-member-{{ $loop->iteration }}"
                                        class="mangga-button-green cursor-pointer">Unggah
                                        Foto
                                        Selfie dengan
                                        Sertifikat</label>
                                    <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="font-bold text-2xl mb-4">Data Pengajuan</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div>
                <input type="number" id="land" name="land" class="form-pengajuan-input" placeholder="Tanah (Rp.)*"
                    {{ $utama->business_form_id == 4 ? 'readonly' : '' }} required value="{{ $utama->land }}">
                <input type="number" id="building" name="building" class="form-pengajuan-input"
                    value="{{ $utama->building }}" placeholder="Bangunan (Rp.)*"
                    {{ $utama->business_form_id == 4 ? 'readonly' : '' }} required>
            </div>
            <div>
                <input type="number" name="treasury" class="form-pengajuan-input" placeholder="Kas (Rp.)*" required
                    value="{{ $utama->treasury }}">
                <input type="number" name="credit" class="form-pengajuan-input" placeholder="Piutang (Rp.)*" required
                    value="{{ $utama->credit }}">
                <input type="number" id="tools" name="production_tools" class="form-pengajuan-input"
                    value="{{ $utama->production_tools }}" {{ $utama->business_form_id == 4 ? 'readonly' : '' }}
                    placeholder="Peralatan Usaha/Produksi (Rp.)*" required>
                <input type="number" name="savings" class="form-pengajuan-input" placeholder="Bank(Tabungan) (Rp.)*"
                    value="{{ $utama->savings }}" required>
                <input type="number" id="supply" name="supply" class="form-pengajuan-input" placeholder="Persediaan (Rp.)*"
                    value="{{ $utama->supply }}" {{ $utama->business_form_id == 4 ? 'readonly' : '' }} required>
                <input type="number" name="vehicle" class="form-pengajuan-input" placeholder="Kendaraan (Rp.)*" required
                    value="{{ $utama->vehicle }}">
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Data Penjualan</div>
        <div class="grid grid-cols-3 gap-x-8">
            <div class="col-span-2">
                @foreach ($utama->business->commodities as $commodity)
                    <input type="text" name="business_commodity_name[{{ $loop->iteration }}]"
                        value="{{ $commodity->name }}" class="form-pengajuan-input" placeholder="Nama Komoditas">
                @endforeach
                @for ($i = count($utama->business->commodities) + 1; $i <= 5; $i++)
                    <input type="text" name="business_commodity_name[{{ $i }}]" class="form-pengajuan-input"
                        placeholder="Nama Komoditas">
                @endfor
            </div>
            <div>
                @foreach ($utama->business->commodities as $commodity)
                    <input type="number" name="business_commodity_value[{{ $loop->iteration }}]"
                        value="{{ $commodity->value }}" class="form-pengajuan-input"
                        placeholder="Nilai Komoditas (Rp.)">
                @endforeach
                @for ($i = count($utama->business->commodities) + 1; $i <= 5; $i++)
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
                    value="{{ $utama->sales_value }}" required>
                <input type="number" name="total_cost" class="form-pengajuan-input" placeholder="Biaya Total (Rp.)"
                    value="{{ $utama->total_cost }}" required>
            </div>
            <div class="col-span-2">
                <div class="font-bold mb-2">Permasalahan yang Dihadapi</div>
                <textarea name="business_problem" id="" cols="30" rows="12" class="form-pengajuan-input"
                    required>{{ $utama->business_problem }}</textarea>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Rencana Penggunaan</div>
        <div class="grid grid-cols-3 gap-x-8">
            <div class="col-span-2">
                @foreach ($utama->business->plans as $plan)
                    <input type="text" name="business_plan_name[{{ $loop->iteration }}]" value="{{ $plan->name }}"
                        class="form-pengajuan-input" placeholder="Rencana">
                @endforeach
                @for ($i = count($utama->business->plans) + 1; $i <= 5; $i++)
                    <input type="text" name="business_plan_name[{{ $i }}]" class="form-pengajuan-input"
                        placeholder="Rencana">
                @endfor
            </div>
            <div>
                @foreach ($utama->business->plans as $plan)
                    <input type="number" name="business_plan_value[{{ $loop->iteration }}]" value="{{ $plan->value }}"
                        class="form-pengajuan-input" placeholder="Anggaran Rencana (Rp.)">
                @endforeach
                @for ($i = count($utama->business->plans) + 1; $i <= 5; $i++)
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
                    <img src="{{ asset('uploads/mangga/establishment_picture') . '/' . $utama->establishment_picture }}"
                        class="w-full h-72 rounded-lg" id="preview-foto-establishment">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="establishment_picture" id="foto-establishment" class="invisible w-2"
                            onchange="loadFile(event, 'foto-establishment')" accept="image/*">
                        <label for="foto-establishment" class="mangga-button-green cursor-pointer">Unggah Foto</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Foto Komoditas/Produk*</label>
                <div class="flex flex-col gap-y-4">
                    <img src="{{ asset('uploads/mangga/product_picture') . '/' . $utama->product_picture }}"
                        class="w-full h-72 rounded-lg" id="preview-foto-product">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="product_picture" id="foto-product" class="invisible w-2"
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
                    <img src="{{ asset('uploads/mangga/business_sketch') . '/' . $utama->business_sketch }}"
                        class="w-full h-72 rounded-lg" id="preview-foto-sketch-b">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="business_sketch" id="foto-sketch-b" class="invisible w-2"
                            onchange="loadFile(event, 'foto-sketch-b')" accept="image/*">
                        <label for="foto-sketch-b" class="mangga-button-green cursor-pointer">Unggah Foto</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Denah Tempat Tinggal</label>
                <div class="flex flex-col gap-y-4">
                    <img src="{{ asset('uploads/mangga/house_sketch') . '/' . $utama->house_sketch }}"
                        class="w-full h-72 rounded-lg" id="preview-foto-sketch-h">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="house_sketch" id="foto-sketch-h" class="invisible w-2"
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
                <input type="text" name="product_distributor" class="form-pengajuan-input" placeholder="Nama Distributor"
                    value="{{ $utama->product_distributor }}">
            </div>
            <div class="">
                <label class="font-bold">1. Urea (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[1]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[0]->qty }}">
                    <input type="number" name="business_product_price[1]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[0]->price }}">
                </div>
                <label class="font-bold">3. ZK (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[3]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[2]->qty }}">
                    <input type="number" name="business_product_price[3]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[2]->price }}">
                </div>
                <label class="font-bold">5. Phonska Plus (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[5]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[4]->qty }}">
                    <input type="number" name="business_product_price[5]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[4]->price }}">
                </div>
                <label class="font-bold">7. Petro Nitrat (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[7]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[6]->qty }}">
                    <input type="number" name="business_product_price[7]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[6]->price }}">
                </div>
                <label class="font-bold">9. Petro Cas (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[9]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[8]->qty }}">
                    <input type="number" name="business_product_price[9]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[8]->price }}">
                </div>
                <label class="font-bold">11. Petro Gladiator (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[11]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[10]->qty }}">
                    <input type="number" name="business_product_price[11]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[10]->price }}">
                </div>
                <label class="font-bold">13. Petro Biofish (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[13]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[12]->qty }}">
                    <input type="number" name="business_product_price[13]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[12]->price }}">
                </div>
                <input type="text" name="business_product_name[15]" class="form-pengajuan-input" placeholder="15.">
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[15]" class="form-pengajuan-input" placeholder="Kuantum"
                        @if (count($utama->business->products) >= 15) value="{{ $utama->business->products[14]->qty }}" @endif>
                    <input type="number" name="business_product_price[15]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)"
                        @if (count($utama->business->products) >= 15) value="{{ $utama->business->products[14]->price }}" @endif>
                </div>
            </div>
            <div class="">
                <label class="font-bold">2. ZA (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[2]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[1]->qty }}">
                    <input type="number" name="business_product_price[2]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[1]->price }}">
                </div>
                <label class="font-bold">4. SP36/26 (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[4]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[3]->qty }}">
                    <input type="number" name="business_product_price[4]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[3]->price }}">
                </div>
                <label class="font-bold">6. Petro Ningrat (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[6]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[5]->qty }}">
                    <input type="number" name="business_product_price[6]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[5]->price }}">
                </div>
                <label class="font-bold">8. Kaptan (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[8]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[7]->qty }}">
                    <input type="number" name="business_product_price[8]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[7]->price }}">
                </div>
                <label class="font-bold">10. Petro Biofertile (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[10]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[9]->qty }}">
                    <input type="number" name="business_product_price[10]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[9]->price }}">
                </div>
                <label class="font-bold">12. Petro Biofeed (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[12]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[11]->qty }}">
                    <input type="number" name="business_product_price[12]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[11]->price }}">
                </div>
                <label class="font-bold">14. Petro Chick (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[14]" class="form-pengajuan-input" placeholder="Kuantum"
                        value="{{ $utama->business->products[13]->qty }}">
                    <input type="number" name="business_product_price[14]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" value="{{ $utama->business->products[13]->price }}">
                </div>
                <input type="text" name="business_product_name[16]" class="form-pengajuan-input" placeholder="16.">
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[16]" class="form-pengajuan-input" placeholder="Kuantum"
                        @if (count($utama->business->products) >= 16) value="{{ $utama->business->products[15]->qty }}" @endif>
                    <input type="number" name="business_product_price[16]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)"
                        @if (count($utama->business->products) >= 16) value="{{ $utama->business->products[15]->price }}" @endif>
                </div>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Dokumen Mitra</div>
        <div class="grid-cols-2 gap-8 form-step hidden dokumen-mitra" id="dokumen-mitra-10">
            <div class="">
                <label class="font-bold">Foto KTP*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('uploads/mangga/ktp') . '/' . $utama->ktp }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-ktp">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="ktp" id="foto-ktp" class="invisible w-2"
                            onchange="loadFile(event, 'foto-ktp')" accept="image/*">
                        <label for="foto-ktp" class="mangga-button-green cursor-pointer">Unggah Foto KTP</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Foto Kartu Keluarga*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('uploads/mangga/kk') . '/' . $utama->kk }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-kk">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="kk" id="foto-kk" class="invisible w-2"
                            onchange="loadFile(event, 'foto-kk')" accept="image/*">
                        <label for="foto-kk" class="mangga-button-green cursor-pointer">Unggah Foto KK</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Foto Selfie dengan KTP*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('uploads/mangga/ktpselfie') . '/' . $utama->ktp_selfie }}"
                        class="w-48 h-48 rounded-lg" id="preview-foto-selfie-ktp">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="ktp_selfie" id="foto-selfie-ktp" class="invisible w-2" accept="image/*"
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
                    <img src="{{ asset('uploads/mangga/kkselfie') . '/' . $utama->kk_selfie }}"
                        class="w-48 h-48 rounded-lg" id="preview-foto-selfie-kk">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="kk_selfie" id="foto-selfie-kk" class="invisible w-2" accept="image/*"
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
                    <img src="{{ asset('uploads/mangga/siup') . '/' . $utama->siup }}" class="w-48 h-48 rounded-lg"
                        id="preview-scan-siup">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="siup" id="scan-siup" class="invisible w-2"
                            onchange="loadFile(event, 'scan-siup')" accept="image/*">
                        <label for="scan-siup" class="mangga-button-green cursor-pointer">Unggah Scan SIUP</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div>
                <label class="font-bold">Scan Surat Keterangan Domisili Usaha*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('uploads/mangga/skdu') . '/' . $utama->skdu }}" class="w-48 h-48 rounded-lg"
                        id="preview-scan-sk">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="skdu" id="scan-sk" class="invisible w-2"
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
                <input type="text" name="companion_name" class="form-pengajuan-input" placeholder="Nama Pendamping"
                    value="{{ $utama->companion_name }}">
                <input type="number" name="companion_wedding_code" class="form-pengajuan-input"
                    value="{{ $utama->companion_wedding_code }}" placeholder="Nomor Surat Nikah">
                <div class="font-bold mb-2">Tanggal Menikah</div>
                <input type="date" name="companion_wedding_date" class="form-pengajuan-input"
                    value="{{ $utama->companion_wedding_date }}">
                <input type="number" name="companion_ktp_code" class="form-pengajuan-input" placeholder="Nomor KTP"
                    value="{{ $utama->companion_ktp_code }}" minlength="16" maxlength="16">
                <input type="number" name="companion_telephone" class="form-pengajuan-input" placeholder="Nomor Telepon"
                    value="{{ $utama->companion_telephone }}">
                <input type="number" name="companion_handphone" class="form-pengajuan-input" placeholder="Nomor HP"
                    value="{{ $utama->companion_handphone }}">
            </div>
            <div class="">
                <input type="email" name="companion_email" class="form-pengajuan-input" placeholder="E-Mail"
                    value="{{ $utama->companion_email }}">
                <input type="text" name="companion_address" class="form-pengajuan-input" placeholder="Alamat, RT/RW"
                    value="{{ $utama->companion_address }}">
                <select name="companion_province" id="province-p" class="form-pengajuan-input">
                    @foreach ($provinces as $province)
                        <option value={{ $province->id }}
                            {{ $utama->companion_province == $province->id ? 'selected' : '' }}>
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
                <span id="next-button-text">Perbarui Data</span>
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
                event.preventDefault();
                if (!submitted) {
                    submitted == true;
                    document.getElementById('form-mangga-utama').submit();
                }
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
        var ucity = @json($utama->business->city_id);
        var udistrict = @json($utama->business->district_id);
        var uvillage = @json($utama->business->village_id);

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
            if (ucity != element.id) {
                $('#city').append('<option value="' + element.id + '">' + element.name + '</option>')
            } else {
                $('#city').append('<option value="' + element.id + '" selected>' + element.name + '</option>')
            }
        });
        $("#city").prop("disabled", false);
        let obj2 = districts.filter(function(obj) {
            return obj.regency_id === $('#city').val();
        });
        obj2.forEach(element => {
            if (udistrict != element.id) {
                $('#district').append('<option value="' + element.id + '">' + element.name + '</option>')
            } else {
                $('#district').append('<option value="' + element.id + '" selected>' + element.name + '</option>')
            }
        });
        $("#district").prop("disabled", false);
        let obj3 = villages.filter(function(obj) {
            return obj.district_id === $('#district').val();
        });
        obj3.forEach(element => {
            if (uvillage != element.id) {
                $('#village').append('<option value="' + element.id + '">' + element.name + '</option>')
            } else {
                $('#village').append('<option value="' + element.id + '" selected>' + element.name + '</option>')
            }
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
        var pcity = @json($utama->companion_city);
        var pdistrict = @json($utama->companion_district);
        var pvillage = @json($utama->companion_village);
        let obj1p = cities.filter(function(obj) {
            return obj.province_id === $('#province-p').val();
        });
        obj1p.forEach(element => {
            if (pcity != element.id) {
                $('#city-p').append('<option value="' + element.id + '">' + element.name + '</option>')
            } else {
                $('#city-p').append('<option value="' + element.id + '" selected>' + element.name + '</option>')
            }
        });
        $("#city-p").prop("disabled", false);
        let obj2p = districts.filter(function(obj) {
            return obj.regency_id === $('#city-p').val();
        });
        obj2p.forEach(element => {
            if (pdistrict != element.id) {
                $('#district-p').append('<option value="' + element.id + '">' + element.name + '</option>')
            } else {
                $('#district-p').append('<option value="' + element.id + '" selected>' + element.name + '</option>')
            }
        });
        $("#district-p").prop("disabled", false);
        let obj3p = villages.filter(function(obj) {
            return obj.district_id === $('#district-p').val();
        });
        obj3p.forEach(element => {
            if (pvillage != element.id) {
                $('#village-p').append('<option value="' + element.id + '">' + element.name + '</option>')
            } else {
                $('#village-p').append('<option value="' + element.id + '" selected>' + element.name + '</option>')
            }
        });
        $("#village-p").prop("disabled", false);
    </script>
@endsection

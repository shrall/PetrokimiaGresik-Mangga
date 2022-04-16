@extends('layouts.admin')

@section('content')
    <div class="text-4xl font-bold mb-2" id="form-title">Data Informasi Calon Mangga -
        {{ $muda->business->registration_number }}</div>
    <form action="{{ route('admin.muda.update', $muda->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <div class="font-bold text-2xl mb-4">Data Pengajuan</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div class="">
                <input type="text" name="business_title" class="form-pengajuan-input" value="{{ $muda->business_title }}"
                    placeholder="Judul Usaha*" required>
                <input type="text" name="leader_name" class="form-pengajuan-input" value="{{ $muda->leader_name }}"
                    placeholder="Nama/No.Mahasiswa Ketua Tim*" required>
                <input type="text" name="leader_email" class="form-pengajuan-input" value="{{ $muda->leader_email }}"
                    placeholder="E-Mail Ketua Tim*" required>
                <input type="text" name="leader_phone" class="form-pengajuan-input" value="{{ $muda->leader_phone }}"
                    placeholder="No. HP Ketua Tim*" required>
                <label class="font-bold">KTP Ketua*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('uploads/mangga/ktp/' . $muda->leader_ktp) }}" class="w-48 h-48 rounded-lg"
                        id="preview-leader-ktp">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="leader_ktp" id="leader-ktp" class="invisible w-2"
                            onchange="loadFile(event, 'leader-ktp')" accept="image/*">
                        <label for="leader-ktp" class="mangga-button-green cursor-pointer">Unggah Foto KTP</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
                <label class="font-bold">KTM Ketua*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('uploads/mangga/ktm/' . $muda->leader_ktm) }}" class="w-48 h-48 rounded-lg"
                        id="preview-leader-ktm">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="leader_ktm" id="leader-ktm" class="invisible w-2"
                            onchange="loadFile(event, 'leader-ktm')" accept="image/*">
                        <label for="leader-ktm" class="mangga-button-green cursor-pointer">Unggah Foto KTM</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
                <input type="text" name="university" class="form-pengajuan-input" value="{{ $muda->university }}"
                    placeholder="Asal Universitas*" required>
                <input type="text" name="faculty" class="form-pengajuan-input" value="{{ $muda->faculty }}"
                    placeholder="Fakultas*" required>
                <input type="text" name="recommender" class="form-pengajuan-input" value="{{ $muda->recommender }}"
                    placeholder="Perekomendasi*" required>
                <input type="text" name="recommender_position" value="{{ $muda->recommender_position }}"
                    class="form-pengajuan-input" placeholder="Jabatan Perekomendasi*" required>
                <input type="number" name="member_count" value="{{ $muda->member_count }}" class="form-pengajuan-input"
                    placeholder="Jumlah Anggota*" required onkeyup="updateMembers();">
                <label class="font-bold">Logo Usaha*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('uploads/mangga/logos/' . $muda->business->logo) }}" class="w-48 h-48 rounded-lg"
                        id="preview-logo-usaha">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="logo" id="logo-usaha" class="invisible w-2"
                            onchange="loadFile(event, 'logo-usaha')" accept="image/*">
                        <label for="logo-usaha" class="mangga-button-green cursor-pointer">Unggah Logo Usaha</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="" id="member-input-list">
                @foreach ($muda->members as $member)
                    <input type="text" name="member_name[{{ $loop->iteration }}]" class="form-pengajuan-input"
                        placeholder="Nama Anggota {{ $loop->iteration }}*" value="{{ $member->name }}" required>
                    <div class="flex items-end gap-x-4">
                        <img src="{{ asset('uploads/mangga/ktp/' . $member->ktp) }}" class="w-48 h-48 rounded-lg"
                            id="preview-member-ktp-{{ $loop->iteration }}">
                        <div class="flex flex-col gap-y-2">
                            <input type="file" name="member_ktp[{{ $loop->iteration }}]"
                                id="member-ktp-{{ $loop->iteration }}" class="invisible w-2"
                                onchange="loadFile(event, 'member-ktp-{{ $loop->iteration }}')" accept="image/*">
                            <label for="member-ktp-{{ $loop->iteration }}"
                                class="mangga-button-green cursor-pointer">Unggah Foto
                                KTP</label>
                            <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                        </div>
                    </div>
                    <div class="flex items-end gap-x-4">
                        <img src="{{ asset('uploads/mangga/ktm/' . $member->ktm) }}" class="w-48 h-48 rounded-lg"
                            id="preview-member-ktm-{{ $loop->iteration }}">
                        <div class="flex flex-col gap-y-2">
                            <input type="file" name="member_ktm[{{ $loop->iteration }}]"
                                id="member-ktm-{{ $loop->iteration }}" class="invisible w-2"
                                onchange="loadFile(event, 'member-ktm-{{ $loop->iteration }}')" accept="image/*">
                            <label for="member-ktm-{{ $loop->iteration }}"
                                class="mangga-button-green cursor-pointer">Unggah Foto
                                KTM</label>
                            <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                        </div>
                    </div>
                    @if (!$loop->last)
                        <hr>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Data Usaha</div>
        <div class="grid-cols-2 gap-x-8 grid">
            <div class="">
                <input type="text" name="name" class="form-pengajuan-input" placeholder="Nama Usaha*"
                    value="{{ $muda->business->name }}" required>
                <select name="muda_type" id="muda_type" class="form-pengajuan-input" required>
                    @foreach ($types as $type)
                        <option value={{ $type->id }} @if ($muda->type_id == $type->id) selected @endif>
                            {{ $type->name }}</option>
                    @endforeach
                </select>
                <select name="category" id="category" class="form-pengajuan-input" required>
                    @foreach ($categories as $category)
                        @if ($category->type_id == $muda->type_id)
                            <option value={{ $category->id }} @if ($muda->category_id == $category->id) selected @endif>
                                {{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
                <input type="text" name="subcategory" class="form-pengajuan-input" value="{{ $muda->subcategory }}"
                    placeholder="Subkategori*" required>
                <input type="text" name="type" class="form-pengajuan-input" value="{{ $muda->business->type }}"
                    placeholder="Jenis Usaha*" required>
                <input type="number" name="asset_value" class="form-pengajuan-input"
                    value="{{ $muda->business->asset_value }}" placeholder="Nilai Aset Usaha*"
                    style="margin-bottom: 0.5rem;">
                <label for="alamat-usaha" class="text-gray-600 ml-4" style="margin-bottom: 1rem;">Note: Selama 6 bulan
                    terakhir</label>
            </div>
            <div class="">
                <input type="text" name="address" class="form-pengajuan-input" value="{{ $muda->business->address }}"
                    placeholder="Alamat Usaha*" required>
                <select name="province" id="province" class="form-pengajuan-input" required>
                    @foreach ($provinces as $province)
                        <option value={{ $province->id }} @if ($muda->business->province_id == $province->id) selected @endif>
                            {{ $province->name }}</option>
                    @endforeach
                </select>
                <select name="city" id="city" class="form-pengajuan-input" required>
                    @foreach ($cities as $city)
                        @if ($muda->business->province_id == $city->province_id)
                            <option value={{ $city->id }} @if ($muda->business->city_id == $city->id) selected @endif>
                                {{ $city->name }}</option>
                        @endif
                    @endforeach
                </select>
                <div class="grid grid-cols-2 items-center justify-center gap-x-4">
                    <select name="district" id="district" class="form-pengajuan-input" required>
                        @foreach ($districts as $district)
                            @if ($muda->business->city_id == $district->regency_id)
                                <option value={{ $district->id }} @if ($muda->business->district_id == $district->id) selected @endif>
                                    {{ $district->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <select name="village" id="village" class="form-pengajuan-input" required>
                        @foreach ($villages as $village)
                            @if ($muda->business->district_id == $village->district_id)
                                <option value={{ $village->id }} @if ($muda->business->village_id == $village->id) selected @endif>
                                    {{ $village->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <input type="number" name="postal_code" class="form-pengajuan-input"
                    value="{{ $muda->business->postal_code }}" placeholder="Kode Pos Usaha*" required>
            </div>
            <hr class="col-span-2">
            <div class="col-span-2">
                <textarea name="prospect" id="" cols="30" rows="7" class="form-pengajuan-input"
                    placeholder="Prospek Pengembangan Usaha*" required>{{ $muda->prospect }}</textarea>
            </div>
            <div class="col-span-2">
                <textarea name="growth_plan" id="" cols="30" rows="7" class="form-pengajuan-input"
                    placeholder="Rencana Pengembangan Usaha*" required>{{ $muda->growth_plan }}</textarea>
            </div>
            <div class="col-span-2">
                <input type="number" name="target" value="{{ $muda->target }}" class="form-pengajuan-input"
                    placeholder="Nilai Target Penjualan*" required>
            </div>
            <div class="col-span-2">
                <textarea name="needs" id="" cols="30" rows="7" class="form-pengajuan-input" placeholder="Kebutuhan dan Sumber Daya*"
                    required>{{ $muda->needs }}</textarea>
            </div>
            <div class="col-span-2">
                <textarea name="utilization_plan" id="" cols="30" rows="7" class="form-pengajuan-input"
                    placeholder="Rencana Penggunaan Dana*" required>{{ $muda->utilization_plan }}</textarea>
            </div>
            <div class="col-span-2">
                <textarea name="return_plan" id="" cols="30" rows="7" class="form-pengajuan-input"
                    placeholder="Rencana Pengembalian Dana*" required>{{ $muda->return_plan }}</textarea>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Analisa Ide</div>
        <div class="grid-cols-2 gap-8 grid">
            <div class="col-span-2">
                <textarea required placeholder="Tuliskan deskripsi produk/usaha/jasa yang anda kembangkan. Termasuk keunggulan, ide, diferensiasi dan keunikan serta potensi pertumbuhan dan resikonya.*"
                    name="description" id="" cols="30" rows="17"
                    class="form-pengajuan-input">{{ $muda->description }}</textarea>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Analisa Pemasaran</div>
        <div class="grid-cols-12 gap-8 grid">
            <div class="col-span-8">
                <textarea required placeholder="Jelaskan pangsa pasar produk atau jasa anda saat ini. Disertai dengan data-data yang mendukung, misalnya kegiatan pengembangan pemasaran, konsep STP, 4P dan petapositioning, kegiatan promosi, strategi penetapan harga, market share, analisis pesaing, trend perkembangan pasar dll.*"
                    name="market_share" id="" cols="30" rows="17"
                    class="form-pengajuan-input">{{ $muda->market_share }}</textarea>
            </div>
            <div class="col-span-4">
                <label class="font-bold">Peta Positioning*</label>
                <div class="flex flex-col items-start gap-x-4">
                    <img src="{{ asset('uploads/mangga/marketpositions/' . $muda->market_position) }}"
                        class="w-48 h-48 rounded-lg" id="preview-peta-positioning">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="market_position" id="peta-positioning" class="invisible w-2"
                            onchange="loadFile(event, 'peta-positioning')" accept="image/*">
                        <label for="peta-positioning" class="mangga-button-green cursor-pointer">Unggah Peta
                            Positioning</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Analisa Operasional</div>
        <div class="grid-cols-12 gap-8 grid">
            <div class="col-span-8">
                <textarea required placeholder="Jelaskan strategi produksi (bila barang) atau pola pelayanan (jasa) usaha anda. Misalnya strategi pemilihan komponen biaya produksi dan teknologi proses, desain struktur organisasi, serta analisa kebutuhan SDM dan desain kompetensi.*"
                    name="production_strategy" id="" cols="30" rows="17"
                    class="form-pengajuan-input">{{ $muda->production_strategy }}</textarea>
            </div>
            <div class="col-span-4">
                <label class="font-bold">Struktur Organisasi*</label>
                <div class="flex flex-col items-start gap-x-4">
                    <img src="{{ asset('uploads/mangga/organizationstructures/' . $muda->organization_structure) }}"
                        class="w-48 h-48 rounded-lg" id="preview-struktur-organisasi">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="organization_structure" id="struktur-organisasi" class="invisible w-2"
                            onchange="loadFile(event, 'struktur-organisasi')" accept="image/*">
                        <label for="struktur-organisasi" class="mangga-button-green cursor-pointer">Unggah Struktur
                            Organisasi</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Target Usaha</div>
        <div class="grid-cols-2 grid">
            <div class="col-span-2">
                <textarea required placeholder="Tuliskan pencapaian perkembangan usaha anda (omzet, asset, cashflow) dalam skala waktu sekaligus strategi produksi, pemasaran dan keuangan untuk mencapai target tersebut (atau strategi pengembangan usaha termasuk pola pembiayaannya).*"
                    name="target_plan" id="" cols="30" rows="17"
                    class="form-pengajuan-input">{{ $muda->target_plan }}</textarea>
            </div>
        </div>
        <div class="grid-cols-12 gap-8 grid">
            <div class="col-span-8">
                <textarea required placeholder="Lampirkan analisis investasi, rencana cashflow, estimasi rugi laba, laporan rugi laba dan halhal lain yang mendukung usaha anda misalnya struktur pendanaan.*"
                    name="finance" id="" cols="30" rows="17"
                    class="form-pengajuan-input">{{ $muda->finance }}</textarea>
            </div>
            <div class="col-span-4">
                <label class="font-bold">Struktur Pendanaan*</label>
                <div class="flex flex-col items-start gap-x-4">
                    <img src="{{ asset('uploads/mangga/financeattachments/' . $muda->finance_attachment) }}"
                        class="w-48 h-48 rounded-lg" id="preview-struktur-pendanaan">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="finance_attachment" id="struktur-pendanaan" class="invisible w-2"
                            onchange="loadFile(event, 'struktur-pendanaan')" accept="image/*">
                        <label for="struktur-pendanaan" class="mangga-button-green cursor-pointer">Unggah Struktur
                            Pendanaan</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Arus Kas</div>
        <div class="grid-cols-2 gap-x-8 grid">
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 1</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[1]" value="{{ $muda->reports[0]->inflow_sales }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[1]" value="{{ $muda->reports[0]->inflow_loan }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*" required>
                <input type="number" name="inflow_subtotal[1]" value="{{ $muda->reports[0]->inflow_subtotal }}"
                    class="form-pengajuan-input" placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[1]" value="{{ $muda->reports[0]->outflow_investment }}"
                    class="form-pengajuan-input" placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[1]" value="{{ $muda->reports[0]->outflow_ingredient }}"
                    class="form-pengajuan-input" placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[1]" value="{{ $muda->reports[0]->outflow_production }}"
                    class="form-pengajuan-input" placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[1]" value="{{ $muda->reports[0]->outflow_maintenance }}"
                    class="form-pengajuan-input" placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[1]" value="{{ $muda->reports[0]->outflow_admin }}"
                    class="form-pengajuan-input" placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[1]" value="{{ $muda->reports[0]->outflow_installments }}"
                    class="form-pengajuan-input" placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[1]" value="{{ $muda->reports[0]->outflow_subtotal }}"
                    class="form-pengajuan-input" style="margin-bottom: 4rem;" placeholder="Sub Total Pengeluaran*"
                    required>
                <input type="number" name="difference[1]" value="{{ $muda->reports[0]->difference }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[1]" value="{{ $muda->reports[0]->difference_start }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[1]" value="{{ $muda->reports[0]->difference_end }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Akhir*" required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 2</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[2]" value="{{ $muda->reports[1]->inflow_sales }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[2]" value="{{ $muda->reports[1]->inflow_loan }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*" required>
                <input type="number" name="inflow_subtotal[2]" value="{{ $muda->reports[1]->inflow_subtotal }}"
                    class="form-pengajuan-input" placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[2]" value="{{ $muda->reports[1]->outflow_investment }}"
                    class="form-pengajuan-input" placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[2]" value="{{ $muda->reports[1]->outflow_ingredient }}"
                    class="form-pengajuan-input" placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[2]" value="{{ $muda->reports[1]->outflow_production }}"
                    class="form-pengajuan-input" placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[2]" value="{{ $muda->reports[1]->outflow_maintenance }}"
                    class="form-pengajuan-input" placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[2]" value="{{ $muda->reports[1]->outflow_admin }}"
                    class="form-pengajuan-input" placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[2]" value="{{ $muda->reports[1]->outflow_installments }}"
                    class="form-pengajuan-input" placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[2]" value="{{ $muda->reports[1]->outflow_subtotal }}"
                    class="form-pengajuan-input" style="margin-bottom: 4rem;" placeholder="Sub Total Pengeluaran*"
                    required>
                <input type="number" name="difference[2]" value="{{ $muda->reports[1]->difference }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[2]" value="{{ $muda->reports[1]->difference_start }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[2]" value="{{ $muda->reports[1]->difference_end }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Akhir*" required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 3</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[3]" value="{{ $muda->reports[2]->inflow_sales }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[3]" value="{{ $muda->reports[2]->inflow_loan }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*" required>
                <input type="number" name="inflow_subtotal[3]" value="{{ $muda->reports[2]->inflow_subtotal }}"
                    class="form-pengajuan-input" placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[3]" value="{{ $muda->reports[2]->outflow_investment }}"
                    class="form-pengajuan-input" placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[3]" value="{{ $muda->reports[2]->outflow_ingredient }}"
                    class="form-pengajuan-input" placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[3]" value="{{ $muda->reports[2]->outflow_production }}"
                    class="form-pengajuan-input" placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[3]" value="{{ $muda->reports[2]->outflow_maintenance }}"
                    class="form-pengajuan-input" placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[3]" value="{{ $muda->reports[2]->outflow_admin }}"
                    class="form-pengajuan-input" placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[3]" value="{{ $muda->reports[2]->outflow_installments }}"
                    class="form-pengajuan-input" placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[3]" value="{{ $muda->reports[2]->outflow_subtotal }}"
                    class="form-pengajuan-input" style="margin-bottom: 4rem;" placeholder="Sub Total Pengeluaran*"
                    required>
                <input type="number" name="difference[3]" value="{{ $muda->reports[2]->difference }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[3]" value="{{ $muda->reports[2]->difference_start }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[3]" value="{{ $muda->reports[2]->difference_end }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Akhir*" required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 4</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[4]" value="{{ $muda->reports[3]->inflow_sales }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[4]" value="{{ $muda->reports[3]->inflow_loan }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*" required>
                <input type="number" name="inflow_subtotal[4]" value="{{ $muda->reports[3]->inflow_subtotal }}"
                    class="form-pengajuan-input" placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[4]" value="{{ $muda->reports[3]->outflow_investment }}"
                    class="form-pengajuan-input" placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[4]" value="{{ $muda->reports[3]->outflow_ingredient }}"
                    class="form-pengajuan-input" placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[4]" value="{{ $muda->reports[3]->outflow_production }}"
                    class="form-pengajuan-input" placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[4]" value="{{ $muda->reports[3]->outflow_maintenance }}"
                    class="form-pengajuan-input" placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[4]" value="{{ $muda->reports[3]->outflow_admin }}"
                    class="form-pengajuan-input" placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[4]"
                    value="{{ $muda->reports[3]->outflow_installments }}" class="form-pengajuan-input"
                    placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[4]" value="{{ $muda->reports[3]->outflow_subtotal }}"
                    class="form-pengajuan-input" style="margin-bottom: 4rem;" placeholder="Sub Total Pengeluaran*"
                    required>
                <input type="number" name="difference[4]" value="{{ $muda->reports[3]->difference }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[4]" value="{{ $muda->reports[3]->difference_start }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[4]" value="{{ $muda->reports[3]->difference_end }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Akhir*" required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 5</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[5]" value="{{ $muda->reports[4]->inflow_sales }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[5]" value="{{ $muda->reports[4]->inflow_loan }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*" required>
                <input type="number" name="inflow_subtotal[5]" value="{{ $muda->reports[4]->inflow_subtotal }}"
                    class="form-pengajuan-input" placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[5]" value="{{ $muda->reports[4]->outflow_investment }}"
                    class="form-pengajuan-input" placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[5]" value="{{ $muda->reports[4]->outflow_ingredient }}"
                    class="form-pengajuan-input" placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[5]" value="{{ $muda->reports[4]->outflow_production }}"
                    class="form-pengajuan-input" placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[5]" value="{{ $muda->reports[4]->outflow_maintenance }}"
                    class="form-pengajuan-input" placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[5]" value="{{ $muda->reports[4]->outflow_admin }}"
                    class="form-pengajuan-input" placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[5]"
                    value="{{ $muda->reports[4]->outflow_installments }}" class="form-pengajuan-input"
                    placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[5]" value="{{ $muda->reports[4]->outflow_subtotal }}"
                    class="form-pengajuan-input" style="margin-bottom: 4rem;" placeholder="Sub Total Pengeluaran*"
                    required>
                <input type="number" name="difference[5]" value="{{ $muda->reports[4]->difference }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[5]" value="{{ $muda->reports[4]->difference_start }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[5]" value="{{ $muda->reports[4]->difference_end }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Akhir*" required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 6</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[6]" value="{{ $muda->reports[5]->inflow_sales }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[6]" value="{{ $muda->reports[5]->inflow_loan }}"
                    class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*" required>
                <input type="number" name="inflow_subtotal[6]" value="{{ $muda->reports[5]->inflow_subtotal }}"
                    class="form-pengajuan-input" placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[6]" value="{{ $muda->reports[5]->outflow_investment }}"
                    class="form-pengajuan-input" placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[6]" value="{{ $muda->reports[5]->outflow_ingredient }}"
                    class="form-pengajuan-input" placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[6]" value="{{ $muda->reports[5]->outflow_production }}"
                    class="form-pengajuan-input" placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[6]" value="{{ $muda->reports[5]->outflow_maintenance }}"
                    class="form-pengajuan-input" placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[6]" value="{{ $muda->reports[5]->outflow_admin }}"
                    class="form-pengajuan-input" placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[6]"
                    value="{{ $muda->reports[5]->outflow_installments }}" class="form-pengajuan-input"
                    placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[6]" value="{{ $muda->reports[5]->outflow_subtotal }}"
                    class="form-pengajuan-input" style="margin-bottom: 4rem;" placeholder="Sub Total Pengeluaran*"
                    required>
                <input type="number" name="difference[6]" value="{{ $muda->reports[5]->difference }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[6]" value="{{ $muda->reports[5]->difference_start }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[6]" value="{{ $muda->reports[5]->difference_end }}"
                    class="form-pengajuan-input" placeholder="Selisih Kas Akhir*" required>
            </div>
        </div>
        <div class="flex items-center justify-end gap-x-4 mt-2">
            <button type="submit" class="mangga-button-green cursor-pointer" onclick="nextStep();">
                <span id="next-button-text">Langkah Selanjutnya</span>
                <span class="fa fa-fw fa-arrow-right"></span>
            </button>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        function updateMembers() {
            var members = $("input[name='member_count']").val();
            $('#member-input-list').html(null);
            for (let index = 1; index <= members; index++) {
                $('#member-input-list').append(
                    `<input type="text" name="member_name[${index}]" class="form-pengajuan-input" placeholder="Nama Anggota ${index}*" required>`
                )
                $('#member-input-list').append(
                    `<div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-member-ktp-${index}">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="member_ktp[${index}]" id="member-ktp-${index}" class="invisible w-2"
                            onchange="loadFile(event, 'member-ktp-${index}')" accept="image/*">
                        <label for="member-ktp-${index}" class="mangga-button-green cursor-pointer">Unggah Foto KTP</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>`
                )
                $('#member-input-list').append(
                    `<div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-member-ktm-${index}">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="member_ktm[${index}]" id="member-ktm-${index}" class="invisible w-2"
                            onchange="loadFile(event, 'member-ktm-${index}')" accept="image/*">
                        <label for="member-ktm-${index}" class="mangga-button-green cursor-pointer">Unggah Foto KTM</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>`
                )
                if (index != members) {
                    $('#member-input-list').append(
                        `<hr class="mb-2 border-2">`
                    )
                }
            }
        }
    </script>
    <script>
        var categories = @json($categories);

        $('#muda_type').on('change', function(e) {
            $('#category').html(null);
            let obj = categories.filter(function(obj) {
                return obj.type_id === parseInt($('#muda_type').val());
            });
            obj.forEach(element => {
                $('#category').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
        });
    </script>
    <script>
        var stepID = 'Data Pengajuan'
        var stepCounter = 1;
        var title = "data-pengajuan";
        var team = false;
        var teamCount = 1;

        function changeTitle() {
            if (stepCounter == 2) {
                title = "data-usaha";
                $('#steps-title').html('Data Usaha');
            } else if (stepCounter == 1) {
                title = "data-pengajuan";
                $('#steps-title').html('Data Pengajuan');
            } else if (stepCounter == 3) {
                title = "analisa-ide";
                $('#steps-title').html('Analisa Ide');
            } else if (stepCounter == 4) {
                title = "analisa-pemasaran";
                $('#steps-title').html('Analisa Pemasaran');
            } else if (stepCounter == 5) {
                title = "analisa-operasional";
                $('#steps-title').html('Analisa Operasional');
            } else if (stepCounter == 6) {
                title = "target-usaha";
                $('#steps-title').html('Target Usaha');
            } else if (stepCounter == 7) {
                title = "target-usaha";
                $('#steps-title').html('Target Usaha');
            } else if (stepCounter == 8) {
                title = "arus-kas";
                $('#steps-title').html('Arus Kas 6 Bulan Terakhir');
            }
            if (stepCounter == 10 && !team) {
                $('#next-button-text').html('Selesai');
            } else {
                $('#next-button-text').html('Langkah Selanjutnya');
            }

        }

        var submitted = false;

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

        function nextStep() {
            if (checkFields()) {
                if (stepCounter >= 10 && !team) {
                    event.preventDefault();
                    if (!submitted) {
                        submitted == true;
                        document.getElementById('form-mangga-muda').submit();
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
@endsection

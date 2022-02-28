@extends('layouts.form')

@section('content')
    <form action="{{ route('user.utama.store') }}" method="post" enctype="multipart/form-data" id="form-mangga-utama">
        @csrf
        <div class="flex items-center gap-x-4 mb-12">
            <div class="rounded-full p-3 bg-mangga-green-600">
                <span class="fa fa-fw fa-align-left text-white text-xl"></span>
            </div>
            <div class="flex flex-col">
                <div class="text-gray-600 font-semibold">Langkah <span id="counter-steps">1</span>/<span
                        id="max-steps">12</span>
                </div>
                <div class="font-bold text-xl" id="steps-title">Data Pengajuan</div>
            </div>
        </div>
        <div class="text-4xl font-bold mb-2" id="form-title">Pengajuan Proposal Program Pendanaan UMK</div>
        <div class="text-xl text-gray-600 mb-6" id="form-description">Harap mengisi data-data kondisi usaha sebagai bahan
            evaluasi agar proposal dapat diajukan.
        </div>
        <div class="grid grid-cols-2 gap-x-8 form-step" id="data-pengajuan-1">
            <div class="">
                <input type="number" name="request_amount" class="form-pengajuan-input" placeholder="Jumlah Pengajuan*"
                    required>
                <input type="number" name="collateral" class="form-pengajuan-input" placeholder="Agunan*" required>
                <select name="distribution_type" id="" class="form-pengajuan-input">
                    @foreach ($distribution_types as $dt)
                        <option value={{ $dt->id }}>{{ $dt->name }}</option>
                    @endforeach
                </select>
                <select name="sector" id="sector" class="form-pengajuan-input" required>
                    @foreach ($sectors as $sector)
                        <option value={{ $sector->id }} @if ($selected_sector == $sector->id) selected @endif>
                            {{ $sector->name }}</option>
                    @endforeach
                </select>
                <select name="subsector" id="subsector" class="form-pengajuan-input" required>
                </select>
                <input type="text" name="type" class="form-pengajuan-input" placeholder="Jenis Usaha*" required>
                <select name="marketing" id="marketing" class="form-pengajuan-input" required>
                    @foreach ($marketings as $marketing)
                        <option value={{ $marketing->id }}>{{ $marketing->name }}</option>
                    @endforeach
                </select>
                <input type="text" name="export_to" class="form-pengajuan-input hidden" id="export"
                    placeholder="Ekspor ke...">
            </div>
            <div class="">
                <input type="text" name="best_product" class="form-pengajuan-input" placeholder="Produk Unggulan">
                <select name="business_form" id="bentuk-usaha" class="form-pengajuan-input">
                </select>
                <input type="number" name="member_count" class="form-pengajuan-input hidden kelompok" id="jumlah-anggota"
                    placeholder="Jumlah Anggota*" required onkeyup="refreshMemberCount();">
                <input type="number" name="business_value" class="form-pengajuan-input" placeholder="Nilai Usaha*" required>
                <input type="number" name="asset_value" class="form-pengajuan-input" placeholder="Nilai Aset*" required>
                <input type="number" name="hr_value" class="form-pengajuan-input" placeholder="Jumlah SDM*" required>
                <input type="number" name="unit_amount" class="form-pengajuan-input" placeholder="Jumlah Unit Usaha*"
                    required>
                <input type="number" name="turnover_value" class="form-pengajuan-input" placeholder="Nilai Omzet per Tahun*"
                    required>
            </div>
        </div>
        <div class="grid-cols-2 gap-x-8 form-step hidden" id="data-usaha-2">
            <div class="">
                <input type="text" name="name" class="form-pengajuan-input" placeholder="Nama Usaha*" required>
                <input type="text" name="address" class="form-pengajuan-input" placeholder="Alamat Usaha*" required>
                <input type="number" name="postal_code" class="form-pengajuan-input" placeholder="Kode Pos*" required>
                <select name="province" id="province" class="form-pengajuan-input" required>
                    @foreach ($provinces as $province)
                        <option value={{ $province->id }}>{{ $province->name }}</option>
                    @endforeach
                </select>
                <select name="city" id="city" class="form-pengajuan-input" required>
                </select>
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
            <div class="">
                <input type="number" name="telephone" class="form-pengajuan-input" placeholder="No. Telepon Usaha*"
                    required>
                <input type="number" name="handphone" class="form-pengajuan-input" placeholder="No. HP Usaha*" required>
                <input type="text" name="email" class="form-pengajuan-input" placeholder="E-Mail*" required>
                <input type="number" name="siup_code" class="form-pengajuan-input" style="margin-bottom: 0.5rem;"
                    placeholder="No. SIUP*" required>
                <div class="font-bold mb-2">Tanggal SIUP*</div>
                <input type="date" name="siup_date" class="form-pengajuan-input" required>
                <div class="font-bold mb-2">Status Tempat Usaha</div>
                <select name="establishment_status" id="" class="form-pengajuan-input">
                    @foreach ($establishment_statuses as $es)
                        <option value={{ $es->id }}>{{ $es->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div id="form-kelompok">
        </div>
        <div class="grid-cols-2 gap-x-8 form-step hidden nilai-kekayaan" id="nilai-kekayaan-3">
            <div>
                <input type="number" id="land" name="land" class="form-pengajuan-input" placeholder="Tanah (Rp.)*" required>
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
        <div class="grid-cols-3 gap-x-8 form-step hidden penjualan-setahun" id="penjualan-setahun-4">
            <div class="col-span-2">
                <input type="text" name="business_commodity_name[1]" class="form-pengajuan-input"
                    placeholder="Nama Komoditas">
                <input type="text" name="business_commodity_name[2]" class="form-pengajuan-input"
                    placeholder="Nama Komoditas">
                <input type="text" name="business_commodity_name[3]" class="form-pengajuan-input"
                    placeholder="Nama Komoditas">
                <input type="text" name="business_commodity_name[4]" class="form-pengajuan-input"
                    placeholder="Nama Komoditas">
                <input type="text" name="business_commodity_name[5]" class="form-pengajuan-input"
                    placeholder="Nama Komoditas">
            </div>
            <div>
                <input type="number" name="business_commodity_value[1]" class="form-pengajuan-input"
                    placeholder="Nilai Komoditas (Rp.)">
                <input type="number" name="business_commodity_value[2]" class="form-pengajuan-input"
                    placeholder="Nilai Komoditas (Rp.)">
                <input type="number" name="business_commodity_value[3]" class="form-pengajuan-input"
                    placeholder="Nilai Komoditas (Rp.)">
                <input type="number" name="business_commodity_value[4]" class="form-pengajuan-input"
                    placeholder="Nilai Komoditas (Rp.)">
                <input type="number" name="business_commodity_value[5]" class="form-pengajuan-input"
                    placeholder="Nilai Komoditas (Rp.)">
            </div>
        </div>
        <div class="grid-cols-3 gap-x-8 form-step hidden laba-permasalahan" id="laba-permasalahan-5">
            <div>
                <div class="font-bold mb-2">Laba Keuntungan Selama Setahun</div>
                <input type="number" name="sales_value" class="form-pengajuan-input" placeholder="Nilai Penjualan (Rp.)"
                    required>
                <input type="number" name="total_cost" class="form-pengajuan-input" placeholder="Biaya Total (Rp.)"
                    required>
            </div>
            <div class="col-span-2">
                <div class="font-bold mb-2">Permasalahan yang Dihadapi</div>
                <textarea name="business_problem" id="" cols="30" rows="12" class="form-pengajuan-input"
                    required></textarea>
            </div>
        </div>
        <div class="grid-cols-3 gap-x-8 form-step hidden rencana-penggunaan" id="rencana-penggunaan-6">
            <div class="col-span-2">
                <input type="text" name="business_plan_name[1]" class="form-pengajuan-input" placeholder="Rencana" required>
                <input type="text" name="business_plan_name[2]" class="form-pengajuan-input" placeholder="Rencana">
                <input type="text" name="business_plan_name[3]" class="form-pengajuan-input" placeholder="Rencana">
                <input type="text" name="business_plan_name[4]" class="form-pengajuan-input" placeholder="Rencana">
                <input type="text" name="business_plan_name[5]" class="form-pengajuan-input" placeholder="Rencana">
            </div>
            <div>
                <input type="number" name="business_plan_value[1]" class="form-pengajuan-input"
                    placeholder="Anggaran Rencana (Rp.)" required>
                <input type="number" name="business_plan_value[2]" class="form-pengajuan-input"
                    placeholder="Anggaran Rencana (Rp.)">
                <input type="number" name="business_plan_value[3]" class="form-pengajuan-input"
                    placeholder="Anggaran Rencana (Rp.)">
                <input type="number" name="business_plan_value[4]" class="form-pengajuan-input"
                    placeholder="Anggaran Rencana (Rp.)">
                <input type="number" name="business_plan_value[5]" class="form-pengajuan-input"
                    placeholder="Anggaran Rencana (Rp.)">
            </div>
        </div>
        <div class="grid-cols-2 gap-8 form-step hidden foto-usaha" id="foto-usaha-7">
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
                        <input type="file" name="product_picture" id="foto-product" class="invisible w-2"
                            onchange="loadFile(event, 'foto-product')" accept="image/*" required>
                        <label for="foto-product" class="mangga-button-green cursor-pointer">Unggah Foto</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-cols-2 gap-8 form-step hidden denah-tempat" id="denah-tempat-8">
            <div class="">
                <label class="font-bold">Denah Tempat Usaha</label>
                <div class="flex flex-col gap-y-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-full h-72 rounded-lg"
                        id="preview-foto-sketch-b">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="business_sketch" id="foto-sketch-b" class="invisible w-2"
                            onchange="loadFile(event, 'foto-sketch-b')" accept="image/*" required>
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
                        <input type="file" name="house_sketch" id="foto-sketch-h" class="invisible w-2"
                            onchange="loadFile(event, 'foto-sketch-h')" accept="image/*" required>
                        <label for="foto-sketch-h" class="mangga-button-green cursor-pointer">Unggah Foto</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-cols-2 gap-8 form-step hidden rencana-pembelian" id="rencana-pembelian-9">
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
                    <input type="number" name="business_product_qty[1]" class="form-pengajuan-input" placeholder="Kuantum"
                    >
                    <input type="number" name="business_product_price[1]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)">
                </div>
                <label class="font-bold">3. ZK (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[3]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[3]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
                </div>
                <label class="font-bold">5. Phonska Plus (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[5]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[5]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
                </div>
                <label class="font-bold">7. Petro Nitrat (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[7]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[7]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
                </div>
                <label class="font-bold">9. Petro Cas (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[9]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[9]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
                </div>
                <label class="font-bold">11. Petro Gladiator (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[11]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[11]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
                </div>
                <label class="font-bold">13. Petro Biofish (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[13]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[13]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
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
                    <input type="number" name="business_product_qty[2]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[2]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
                </div>
                <label class="font-bold">4. SP36/26 (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[4]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[4]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
                </div>
                <label class="font-bold">6. Petro Ningrat (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[6]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[6]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
                </div>
                <label class="font-bold">8. Kaptan (Ton)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[8]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[8]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
                </div>
                <label class="font-bold">10. Petro Biofertile (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[10]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[10]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
                </div>
                <label class="font-bold">12. Petro Biofeed (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[12]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[12]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
                </div>
                <label class="font-bold">14. Petro Chick (Dus)</label>
                <div class="grid grid-cols-4 gap-x-4">
                    <input type="number" name="business_product_qty[14]" class="form-pengajuan-input" placeholder="Kuantum"
                        >
                    <input type="number" name="business_product_price[14]" class="form-pengajuan-input col-span-3"
                        placeholder="Harga Satuan (Rp.)" >
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
        <div class="grid-cols-2 gap-8 form-step hidden dokumen-mitra" id="dokumen-mitra-10">
            <div class="">
                <label class="font-bold">Foto KTP*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-ktp">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="ktp" id="foto-ktp" class="invisible w-2"
                            onchange="loadFile(event, 'foto-ktp')" accept="image/*" required>
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
                        <input type="file" name="kk" id="foto-kk" class="invisible w-2"
                            onchange="loadFile(event, 'foto-kk')" accept="image/*" required>
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
                        <input type="file" name="ktp_selfie" id="foto-selfie-ktp" class="invisible w-2" accept="image/*"
                            required onchange="loadFile(event, 'foto-selfie-ktp')" required>
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
                        <input type="file" name="kk_selfie" id="foto-selfie-kk" class="invisible w-2" accept="image/*"
                            required onchange="loadFile(event, 'foto-selfie-kk')" required>
                        <label for="foto-selfie-kk" class="mangga-button-green cursor-pointer">Unggah Foto Selfie dengan
                            KK</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-cols-2 gap-8 form-step hidden dokumen-persyaratan" id="dokumen-persyaratan-11">
            <div class="mb-24">
                <label class="font-bold">Scan SIUP*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-scan-siup">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="siup" id="scan-siup" class="invisible w-2"
                            onchange="loadFile(event, 'scan-siup')" accept="image/*" required>
                        <label for="scan-siup" class="mangga-button-green cursor-pointer">Unggah Scan SIUP</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="mb-24">
                <label class="font-bold">Scan Surat Keterangan Domisili Usaha*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-scan-sk">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="skdu" id="scan-sk" class="invisible w-2"
                            onchange="loadFile(event, 'scan-sk')" accept="image/*" required>
                        <label for="scan-sk" class="mangga-button-green cursor-pointer">Unggah Scan SK</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-cols-2 gap-x-8 form-step hidden data-pendamping" id="data-pendamping-12">
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
                        <option value={{ $province->id }}>{{ $province->name }}</option>
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
            <a href="#" class="mangga-button-transparent-orange cursor-pointer" onclick="previousStep();">
                <span class="fa fa-fw fa-chevron-left"></span>
                Kembali
            </a>
            <a href="#" class="mangga-button-green cursor-pointer" onclick="nextStep();">
                <span id="next-button-text">Langkah Selanjutnya</span>
                <span class="fa fa-fw fa-arrow-right"></span>
            </a>
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
            $.post('{{ config('app.url') }}' + "/form/mangga/refresh-kelompok", {
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
@endsection

@section('modals')
    @if (!Auth::user()->email || !Auth::user()->handphone || !Auth::user()->ktp_code || !Auth::user()->kk_code || !Auth::user()->postal_code || !Auth::user()->birth_date || !Auth::user()->birth_place || !Auth::user()->address || !Auth::user()->profession || !Auth::user()->heir || !Auth::user()->house_ownership || !Auth::user()->bank_number || !Auth::user()->bank_owner || !Auth::user()->bank_name || !Auth::user()->bank_branch || !Auth::user()->rt || !Auth::user()->rw)
        <div class="absolute w-screen h-screen flex items-center justify-center modal">
            <div class="bg-black opacity-50 w-screen h-screen absolute background-modal"></div>
            <div class="rounded-lg bg-white px-8 py-6 absolute flex flex-col gap-y-2">
                <div class="flex items-center justify-center w-full">
                    <div class="text-2xl font-bold">Peringatan</div>
                </div>
                <hr>
                <div class="text-xl py-2 text-center">Anda belum melengkapi data diri.<br>Silahkan edit informasi personal
                    anda
                    agar dapat membuat pengajuan.</div>
                <a href="{{ route('user.edit', Auth::id()) }}" class="mangga-button-green w-full cursor-pointer">
                    Edit Informasi Personal
                    <span class="fa fa-fw fa-arrow-right ml-2"></span>
                </a>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="absolute w-full h-full items-center flex justify-center modal">
            <div class="bg-black opacity-50 w-full absolute background-modal" style="height: 75rem;"
                onclick="closeModal();"></div>
            <div class="rounded-lg bg-white px-8 py-6 absolute flex flex-col gap-y-2">
                <span class="fa fa-fw fa-times text-xl hover:text-red-600 absolute top-4 right-4 cursor-pointer"
                    onclick="closeModal();"></span>
                <div class="flex items-center justify-center w-full">
                    <div class="text-2xl font-bold text-mangga-red-300">Pengisian Form Belum Lengkap</div>
                </div>
                <hr>
                <div class="text-xl py-2 text-center">Silahkan memeriksa kembali field yang belum terisi:</div>
                <div class="grid grid-cols-5 gap-2">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
                <a href="#" onclick="closeModal();" class="mangga-button-green w-full cursor-pointer">
                    Ok
                </a>
            </div>
        </div>
    @endif
@endsection

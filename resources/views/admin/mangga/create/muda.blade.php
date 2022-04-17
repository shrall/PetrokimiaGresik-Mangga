@extends('layouts.admin')

@section('content')
    <div class="text-4xl font-bold mb-2" id="form-title">Buat Ajuan - Mangga Muda</div>
    <form action="{{ route('admin.muda.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
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
                </div>
                <div class="col-span-6 flex flex-col items-center gap-y-2">
                    <label class="text-gray-400 self-start">No. Telepon</label>
                    <input name="handphone" type="number" class="form-pengajuan-input bg-white mb-4" required>
                    <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                        <div class="col-span-1">
                            <label class="text-gray-400">Provinsi</label>
                            <select name="province" id="province" class="form-pengajuan-input bg-white mb-4" required>
                                @foreach ($provinces as $province)
                                    <option value={{ $province->id }}>
                                        {{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-400">Kota/Kabupaten</label>
                            <select name="city" id="city" class="form-pengajuan-input bg-white mb-4" required>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center gap-x-2 w-full">
                        <div class="col-span-1">
                            <label class="text-gray-400">Kecamatan</label>
                            <select name="district" id="district" class="form-pengajuan-input bg-white mb-4" required>
                            </select>
                        </div>
                        <div class="col-span-1">
                            <label class="text-gray-400">Desa/Kelurahan</label>
                            <select name="village" id="village" class="form-pengajuan-input bg-white mb-4" required>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Data Pengajuan</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div class="">
                <input type="text" name="business_title" class="form-pengajuan-input" placeholder="Judul Usaha*" required>
                <input type="text" name="leader_name" class="form-pengajuan-input" placeholder="Nama/No.Mahasiswa Ketua Tim*"
                    required>
                <input type="text" name="leader_email" class="form-pengajuan-input" placeholder="E-Mail Ketua Tim*" required>
                <input type="text" name="leader_phone" class="form-pengajuan-input" placeholder="No. HP Ketua Tim*" required>
                <label class="font-bold">KTP Ketua*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
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
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-leader-ktm">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="leader_ktm" id="leader-ktm" class="invisible w-2"
                            onchange="loadFile(event, 'leader-ktm')" accept="image/*">
                        <label for="leader-ktm" class="mangga-button-green cursor-pointer">Unggah Foto KTM</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
                <input type="text" name="university" class="form-pengajuan-input" placeholder="Asal Universitas*" required>
                <input type="text" name="faculty" class="form-pengajuan-input" placeholder="Fakultas*" required>
                <input type="text" name="recommender" class="form-pengajuan-input" placeholder="Perekomendasi*" required>
                <input type="text" name="recommender_position" class="form-pengajuan-input"
                    placeholder="Jabatan Perekomendasi*" required>
                <input type="number" name="member_count" class="form-pengajuan-input" placeholder="Jumlah Anggota*" required
                    onkeyup="updateMembers();">
                <label class="font-bold">Logo Usaha*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        class="w-48 h-48 rounded-lg" id="preview-logo-usaha">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="logo" id="logo-usaha" class="invisible w-2"
                            onchange="loadFile(event, 'logo-usaha')" accept="image/*">
                        <label for="logo-usaha" class="mangga-button-green cursor-pointer">Unggah Logo Usaha</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="" id="member-input-list">
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Data Usaha</div>
        <div class="grid-cols-2 gap-x-8 grid">
            <div class="">
                <input type="text" name="name" class="form-pengajuan-input" placeholder="Nama Usaha*" required>
                <select name="muda_type" id="muda_type" class="form-pengajuan-input" required>
                    @foreach ($types as $type)
                        <option value={{ $type->id }}>
                            {{ $type->name }}</option>
                    @endforeach
                </select>
                <select name="category" id="category" class="form-pengajuan-input" required>
                </select>
                <input type="text" name="subcategory" class="form-pengajuan-input" placeholder="Subkategori*" required>
                <input type="text" name="type" class="form-pengajuan-input" placeholder="Jenis Usaha*" required>
                <input type="number" name="asset_value" class="form-pengajuan-input" placeholder="Nilai Aset Usaha*"
                    style="margin-bottom: 0.5rem;">
                <label for="alamat-usaha" class="text-gray-600 ml-4" style="margin-bottom: 1rem;">Note: Selama 6 bulan
                    terakhir</label>
            </div>
            <div class="">
                <input type="text" name="address" class="form-pengajuan-input" placeholder="Alamat Usaha*" required>
                <select name="province" id="province" class="form-pengajuan-input" required>
                    @foreach ($provinces as $province)
                        <option value={{ $province->id }}>
                            {{ $province->name }}</option>
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
                <input type="number" name="postal_code" class="form-pengajuan-input" placeholder="Kode Pos Usaha*" required>
            </div>
            <hr class="col-span-2">
            <div class="col-span-2">
                <textarea name="prospect" id="" cols="30" rows="7" class="form-pengajuan-input"
                    placeholder="Prospek Pengembangan Usaha*" required></textarea>
            </div>
            <div class="col-span-2">
                <textarea name="growth_plan" id="" cols="30" rows="7" class="form-pengajuan-input"
                    placeholder="Rencana Pengembangan Usaha*" required></textarea>
            </div>
            <div class="col-span-2">
                <input type="number" name="target" class="form-pengajuan-input"
                    placeholder="Nilai Target Penjualan*" required>
            </div>
            <div class="col-span-2">
                <textarea name="needs" id="" cols="30" rows="7" class="form-pengajuan-input" placeholder="Kebutuhan dan Sumber Daya*"
                    required></textarea>
            </div>
            <div class="col-span-2">
                <textarea name="utilization_plan" id="" cols="30" rows="7" class="form-pengajuan-input"
                    placeholder="Rencana Penggunaan Dana*" required></textarea>
            </div>
            <div class="col-span-2">
                <textarea name="return_plan" id="" cols="30" rows="7" class="form-pengajuan-input"
                    placeholder="Rencana Pengembalian Dana*" required></textarea>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Analisa Ide</div>
        <div class="grid-cols-2 gap-8 grid">
            <div class="col-span-2">
                <textarea required placeholder="Tuliskan deskripsi produk/usaha/jasa yang anda kembangkan. Termasuk keunggulan, ide, diferensiasi dan keunikan serta potensi pertumbuhan dan resikonya.*"
                    name="description" id="" cols="30" rows="17" class="form-pengajuan-input"></textarea>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Analisa Pemasaran</div>
        <div class="grid-cols-12 gap-8 grid">
            <div class="col-span-8">
                <textarea required placeholder="Jelaskan pangsa pasar produk atau jasa anda saat ini. Disertai dengan data-data yang mendukung, misalnya kegiatan pengembangan pemasaran, konsep STP, 4P dan petapositioning, kegiatan promosi, strategi penetapan harga, market share, analisis pesaing, trend perkembangan pasar dll.*"
                    name="market_share" id="" cols="30" rows="17" class="form-pengajuan-input"></textarea>
            </div>
            <div class="col-span-4">
                <label class="font-bold">Peta Positioning*</label>
                <div class="flex flex-col items-start gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-peta-positioning">
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
                    name="production_strategy" id="" cols="30" rows="17" class="form-pengajuan-input"></textarea>
            </div>
            <div class="col-span-4">
                <label class="font-bold">Struktur Organisasi*</label>
                <div class="flex flex-col items-start gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-struktur-organisasi">
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
                    name="target_plan" id="" cols="30" rows="17" class="form-pengajuan-input"></textarea>
            </div>
        </div>
        <div class="grid-cols-12 gap-8 grid">
            <div class="col-span-8">
                <textarea required placeholder="Lampirkan analisis investasi, rencana cashflow, estimasi rugi laba, laporan rugi laba dan halhal lain yang mendukung usaha anda misalnya struktur pendanaan.*"
                    name="finance" id="" cols="30" rows="17" class="form-pengajuan-input"></textarea>
            </div>
            <div class="col-span-4">
                <label class="font-bold">Struktur Pendanaan*</label>
                <div class="flex flex-col items-start gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-struktur-pendanaan">
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
                <input type="number" name="inflow_sales[1]" class="form-pengajuan-input"
                    placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[1]" class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*"
                    required>
                <input type="number" name="inflow_subtotal[1]" class="form-pengajuan-input"
                    placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[1]" class="form-pengajuan-input"
                    placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[1]" class="form-pengajuan-input"
                    placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[1]" class="form-pengajuan-input"
                    placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[1]" class="form-pengajuan-input"
                    placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[1]" class="form-pengajuan-input"
                    placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[1]" class="form-pengajuan-input"
                    placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[1]" class="form-pengajuan-input" style="margin-bottom: 4rem;"
                    placeholder="Sub Total Pengeluaran*" required>
                <input type="number" name="difference[1]" class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[1]" class="form-pengajuan-input"
                    placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[1]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 2</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[2]" class="form-pengajuan-input"
                    placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[2]" class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*"
                    required>
                <input type="number" name="inflow_subtotal[2]" class="form-pengajuan-input"
                    placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[2]" class="form-pengajuan-input"
                    placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[2]" class="form-pengajuan-input"
                    placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[2]" class="form-pengajuan-input"
                    placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[2]" class="form-pengajuan-input"
                    placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[2]" class="form-pengajuan-input"
                    placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[2]" class="form-pengajuan-input"
                    placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[2]" class="form-pengajuan-input" style="margin-bottom: 4rem;"
                    placeholder="Sub Total Pengeluaran*" required>
                <input type="number" name="difference[2]" class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[2]" class="form-pengajuan-input"
                    placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[2]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 3</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[3]" class="form-pengajuan-input"
                    placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[3]" class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*"
                    required>
                <input type="number" name="inflow_subtotal[3]" class="form-pengajuan-input"
                    placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[3]" class="form-pengajuan-input"
                    placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[3]" class="form-pengajuan-input"
                    placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[3]" class="form-pengajuan-input"
                    placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[3]" class="form-pengajuan-input"
                    placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[3]" class="form-pengajuan-input"
                    placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[3]" class="form-pengajuan-input"
                    placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[3]" class="form-pengajuan-input" style="margin-bottom: 4rem;"
                    placeholder="Sub Total Pengeluaran*" required>
                <input type="number" name="difference[3]" class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[3]" class="form-pengajuan-input"
                    placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[3]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 4</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[4]" class="form-pengajuan-input"
                    placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[4]" class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*"
                    required>
                <input type="number" name="inflow_subtotal[4]" class="form-pengajuan-input"
                    placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[4]" class="form-pengajuan-input"
                    placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[4]" class="form-pengajuan-input"
                    placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[4]" class="form-pengajuan-input"
                    placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[4]" class="form-pengajuan-input"
                    placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[4]" class="form-pengajuan-input"
                    placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[4]" class="form-pengajuan-input"
                    placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[4]" class="form-pengajuan-input" style="margin-bottom: 4rem;"
                    placeholder="Sub Total Pengeluaran*" required>
                <input type="number" name="difference[4]" class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[4]" class="form-pengajuan-input"
                    placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[4]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 5</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[5]" class="form-pengajuan-input"
                    placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[5]" class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*"
                    required>
                <input type="number" name="inflow_subtotal[5]" class="form-pengajuan-input"
                    placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[5]" class="form-pengajuan-input"
                    placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[5]" class="form-pengajuan-input"
                    placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[5]" class="form-pengajuan-input"
                    placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[5]" class="form-pengajuan-input"
                    placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[5]" class="form-pengajuan-input"
                    placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[5]" class="form-pengajuan-input"
                    placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[5]" class="form-pengajuan-input" style="margin-bottom: 4rem;"
                    placeholder="Sub Total Pengeluaran*" required>
                <input type="number" name="difference[5]" class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[5]" class="form-pengajuan-input"
                    placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[5]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 6</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[6]" class="form-pengajuan-input"
                    placeholder="Penerimaan Penjualan*" required>
                <input type="number" name="inflow_loan[6]" class="form-pengajuan-input" placeholder="Penerimaan Pinjaman*"
                    required>
                <input type="number" name="inflow_subtotal[6]" class="form-pengajuan-input"
                    placeholder="Sub Total Penerimaan*" required>
                <label class="text-gray-600 font-bold">Pengeluaran</label>
                <input type="number" name="outflow_investment[6]" class="form-pengajuan-input"
                    placeholder="Pembelian Asset (Investasi)*" required>
                <input type="number" name="outflow_ingredient[6]" class="form-pengajuan-input"
                    placeholder="Pembelian Bahan Baku*" required>
                <input type="number" name="outflow_production[6]" class="form-pengajuan-input"
                    placeholder="Biaya Produksi Lain-lain*" required>
                <input type="number" name="outflow_maintenance[6]" class="form-pengajuan-input"
                    placeholder="Biaya Pemeliharaan*" required>
                <input type="number" name="outflow_admin[6]" class="form-pengajuan-input"
                    placeholder="Biaya Administrasi Lain-lain*" required>
                <input type="number" name="outflow_installments[6]" class="form-pengajuan-input"
                    placeholder="Angsuran Pokok*" required>
                <input type="number" name="outflow_subtotal[6]" class="form-pengajuan-input" style="margin-bottom: 4rem;"
                    placeholder="Sub Total Pengeluaran*" required>
                <input type="number" name="difference[6]" class="form-pengajuan-input" placeholder="Selisih Kas*" required>
                <input type="number" name="difference_start[6]" class="form-pengajuan-input"
                    placeholder="Selisih Kas Awal*" required>
                <input type="number" name="difference_end[6]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
            </div>
        </div>
        <div class="flex items-center justify-end gap-x-4 mt-2">
            <button type="submit" class="mangga-button-green cursor-pointer" onclick="nextStep();">
                <span id="next-button-text">Buat Ajuan</span>
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

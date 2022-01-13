@extends('layouts.form')

@section('content')
    <form action="{{ route('user.muda.store') }}" method="post" enctype="multipart/form-data" id="form-mangga-muda">
        @csrf
        <div class="flex items-center gap-x-4 mb-12">
            <div class="rounded-full p-3 bg-mangga-green-600">
                <span class="fa fa-fw fa-align-left text-white text-xl"></span>
            </div>
            <div class="flex flex-col">
                <div class="text-gray-600 font-semibold">Langkah <span id="counter-steps">1</span>/10</div>
                <div class="font-bold text-xl" id="steps-title">Data Pengajuan</div>
            </div>
        </div>
        <div class="text-4xl font-bold mb-2" id="form-title">Pengajuan Proposal Program Mangga Muda</div>
        <div class="text-xl text-gray-600 mb-6" id="form-description">Harap mengisi data-data kondisi usaha sebagai bahan
            evaluasi agar proposal dapat diajukan.
        </div>
        <div class="grid grid-cols-2 gap-x-8 form-step" id="data-pengajuan-1">
            <div class="">
                <input type="text" name="business_title" class="form-pengajuan-input" placeholder="Judul Usaha*" required>
                <input type="text" name="leader_name" class="form-pengajuan-input"
                    placeholder="Nama/No.Mahasiswa Ketua Tim*" required>
                <input type="text" name="university" class="form-pengajuan-input" placeholder="Asal Universitas*" required>
                <input type="text" name="faculty" class="form-pengajuan-input" placeholder="Fakultas*" required>
                <input type="number" name="member_count" class="form-pengajuan-input" placeholder="Jumlah Anggota*" required
                    onkeyup="updateMembers();">
            </div>
            <div class="" id="member-input-list">
                <input type="text" name="member_name[1]" class="form-pengajuan-input" placeholder="Nama Anggota 1*" required>
            </div>
            <div class="">
                <label class="font-bold">Logo Usaha*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-logo-usaha">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="logo" id="logo-usaha" class="hidden"
                            onchange="loadFile(event, 'logo-usaha')" accept="image/*" required>
                        <label for="logo-usaha" class="mangga-button-green cursor-pointer">Unggah Logo Usaha</label>
                        <span>*Ukuran File Unggahan Maksimal 25MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-cols-2 gap-x-8 gap-y-2 form-step hidden" id="data-usaha-2">
            <div class="">
                <input type="text" name="name" class="form-pengajuan-input" placeholder="Nama Usaha*" required>
                <select name="sector" id="sector" class="form-pengajuan-input" required>
                    @foreach ($sectors as $sector)
                        <option value={{ $sector->id }}>{{ $sector->name }}</option>
                    @endforeach
                </select>
                <select name="subsector" id="subsector" class="form-pengajuan-input" disabled required>
                    <option value="">Sub Sektor*</option>
                </select>
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
                        <option value={{ $province->id }}>{{ $province->name }}</option>
                    @endforeach
                </select>
                <select name="city" id="city" class="form-pengajuan-input" disabled required>
                    <option value="">Kabupaten/Kota*</option>
                </select>
                <div class="grid grid-cols-2 items-center justify-center gap-x-4">
                    <select name="district" id="district" class="form-pengajuan-input" disabled required>
                        <option value="">Kecamatan*</option>
                    </select>
                    <select name="village" id="village" class="form-pengajuan-input" disabled required>
                        <option value="">Desa/Kelurahan*</option>
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
                <input type="number" name="target" class="form-pengajuan-input" placeholder="Nilai Target Penjualan*"
                    required>
            </div>
            <div class="col-span-2">
                <textarea name="needs" id="" cols="30" rows="7" class="form-pengajuan-input"
                    placeholder="Kebutuhan dan Sumber Daya*" required></textarea>
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
        <div class="grid-cols-2 gap-8 form-step hidden" id="analisa-ide-3">
            <div class="col-span-2">
                <textarea
                    placeholder="Tuliskan deskripsi produk/usaha/jasa yang anda kembangkan. Termasuk keunggulan, ide, diferensiasi dan keunikan serta potensi pertumbuhan dan resikonya.*"
                    name="description" id="" cols="30" rows="17" class="form-pengajuan-input"></textarea>
            </div>
        </div>
        <div class="grid-cols-12 gap-8 form-step hidden" id="analisa-pemasaran-4">
            <div class="col-span-8">
                <textarea
                    placeholder="Jelaskan pangsa pasar produk atau jasa anda saat ini. Disertai dengan data-data yang mendukung, misalnya kegiatan pengembangan pemasaran, konsep STP, 4P dan petapositioning, kegiatan promosi, strategi penetapan harga, market share, analisis pesaing, trend perkembangan pasar dll.*"
                    name="market_share" id="" cols="30" rows="17" class="form-pengajuan-input"></textarea>
            </div>
            <div class="col-span-4">
                <label class="font-bold">Peta Positioning*</label>
                <div class="flex flex-col items-start gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-peta-positioning">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="market_position" id="peta-positioning" class="hidden"
                            onchange="loadFile(event, 'peta-positioning')" accept="image/*" required>
                        <label for="peta-positioning" class="mangga-button-green cursor-pointer">Unggah Peta
                            Positioning</label>
                        <span>*Ukuran File Unggahan Maksimal 25MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-cols-12 gap-8 form-step hidden" id="analisa-operasional-5">
            <div class="col-span-8">
                <textarea
                    placeholder="Jelaskan strategi produksi (bila barang) atau pola pelayanan (jasa) usaha anda. Misalnya strategi pemilihan komponen biaya produksi dan teknologi proses, desain struktur organisasi, serta analisa kebutuhan SDM dan desain kompetensi.*"
                    name="production_strategy" id="" cols="30" rows="17" class="form-pengajuan-input"></textarea>
            </div>
            <div class="col-span-4">
                <label class="font-bold">Struktur Organisasi*</label>
                <div class="flex flex-col items-start gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-struktur-organisasi">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="organization_structure" id="struktur-organisasi" class="hidden"
                            onchange="loadFile(event, 'struktur-organisasi')" accept="image/*" required>
                        <label for="struktur-organisasi" class="mangga-button-green cursor-pointer">Unggah Struktur
                            Organisasi</label>
                        <span>*Ukuran File Unggahan Maksimal 25MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-cols-2 gap-8 form-step hidden" id="target-usaha-6">
            <div class="col-span-2">
                <textarea
                    placeholder="Tuliskan pencapaian perkembangan usaha anda (omzet, asset, cashflow) dalam skala waktu sekaligus strategi produksi, pemasaran dan keuangan untuk mencapai target tersebut (atau strategi pengembangan usaha termasuk pola pembiayaannya).*"
                    name="target_plan" id="" cols="30" rows="17" class="form-pengajuan-input"></textarea>
            </div>
        </div>
        <div class="grid-cols-12 gap-8 form-step hidden" id="target-usaha-7">
            <div class="col-span-8">
                <textarea
                    placeholder="Lampirkan analisis investasi, rencana cashflow, estimasi rugi laba, laporan rugi laba dan halhal lain yang mendukung usaha anda misalnya struktur pendanaan.*"
                    name="finance" id="" cols="30" rows="17" class="form-pengajuan-input"></textarea>
            </div>
            <div class="col-span-4">
                <label class="font-bold">Struktur Pendanaan*</label>
                <div class="flex flex-col items-start gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-struktur-pendanaan">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="finance_attachment" id="struktur-pendanaan" class="hidden"
                            onchange="loadFile(event, 'struktur-pendanaan')" accept="image/*" required>
                        <label for="struktur-pendanaan" class="mangga-button-green cursor-pointer">Unggah Struktur
                            Pendanaan</label>
                        <span>*Ukuran File Unggahan Maksimal 25MB</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-cols-2 gap-x-8 form-step hidden" id="arus-kas-8">
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 1</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[1]" class="form-pengajuan-input" placeholder="Penerimaan Penjualan*"
                    required>
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
                <input type="number" name="difference_start[1]" class="form-pengajuan-input" placeholder="Selisih Kas Awal*"
                    required>
                <input type="number" name="difference_end[1]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 2</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[2]" class="form-pengajuan-input" placeholder="Penerimaan Penjualan*"
                    required>
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
                <input type="number" name="difference_start[2]" class="form-pengajuan-input" placeholder="Selisih Kas Awal*"
                    required>
                <input type="number" name="difference_end[2]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
            </div>
        </div>
        <div class="grid-cols-2 gap-x-8 form-step hidden" id="arus-kas-9">
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 3</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[3]" class="form-pengajuan-input" placeholder="Penerimaan Penjualan*"
                    required>
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
                <input type="number" name="difference_start[3]" class="form-pengajuan-input" placeholder="Selisih Kas Awal*"
                    required>
                <input type="number" name="difference_end[3]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 4</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[4]" class="form-pengajuan-input" placeholder="Penerimaan Penjualan*"
                    required>
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
                <input type="number" name="difference_start[4]" class="form-pengajuan-input" placeholder="Selisih Kas Awal*"
                    required>
                <input type="number" name="difference_end[4]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
            </div>
        </div>
        <div class="grid-cols-2 gap-x-8 form-step hidden" id="arus-kas-10">
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 5</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[5]" class="form-pengajuan-input" placeholder="Penerimaan Penjualan*"
                    required>
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
                <input type="number" name="difference_start[5]" class="form-pengajuan-input" placeholder="Selisih Kas Awal*"
                    required>
                <input type="number" name="difference_end[5]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
            </div>
            <div class="">
                <label class="text-gray-600 font-bold text-xl">BULAN 6</label><br>
                <label class="text-gray-600 font-bold">Penerimaan</label>
                <input type="number" name="inflow_sales[6]" class="form-pengajuan-input" placeholder="Penerimaan Penjualan*"
                    required>
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
                <input type="number" name="difference_start[6]" class="form-pengajuan-input" placeholder="Selisih Kas Awal*"
                    required>
                <input type="number" name="difference_end[6]" class="form-pengajuan-input" placeholder="Selisih Kas Akhir*"
                    required>
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
        function updateMembers() {
            var members = $("input[name='member_count']").val();
            console.log(members);
            $('#member-input-list').html(null);
            for (let index = 1; index <= members; index++) {
                $('#member-input-list').append(
                    `<input type="text" name="member_name[${index}]" class="form-pengajuan-input" placeholder="Nama Anggota ${index}*" required>`
                )
            }
        }
    </script>
    <script>
        var subsectors = @json($subsectors);

        $('#sector').on('change', function(e) {
            $('#subsector').html(null);
            let obj = subsectors.filter(function(obj) {
                console.log(obj.sector_id);
                console.log($('#sector').val());
                return obj.sector_id === parseInt($('#sector').val());
            });
            obj.forEach(element => {
                $('#subsector').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            $("#subsector").prop("disabled", false);
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
                $('#steps-title').html('analisa-ide');
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

        function nextStep() {
            if (stepCounter >= 10 && !team) {
                event.preventDefault();
                if (!submitted) {
                    document.getElementById('form-mangga-muda').submit();
                    submitted == true;
                }
            } else {
                stepCounter += 1;
                changeTitle();
                $('#counter-steps').html(stepCounter);
                $('.form-step').removeClass('grid').addClass('hidden');
                $('#' + title + '-' + stepCounter).addClass('grid').removeClass('hidden');
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
            if ($('#' + id)[0].files[0].size > 26214400) {
                alert("Ukuran gambar tidak bisa melebihi 25MB!");
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
            console.log('province');
            $('#city').html(null);
            $('#district').html('<option value="">Kecamatan</option>');
            $("#district").prop("disabled", true);
            $('#village').html('<option value="">Desa/Kelurahan</option>');
            $("#village").prop("disabled", true);
            let obj = cities.filter(function(obj) {
                return obj.province_id === $('#province').val();
            });
            obj.forEach(element => {
                $('#city').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            $("#city").prop("disabled", false);
        });
        $('#city').on('change', function(e) {
            $('#district').html(null);
            $('#village').html('<option value="">Desa/Kelurahan</option>');
            $("#village").prop("disabled", true);
            let obj = districts.filter(function(obj) {
                return obj.regency_id === $('#city').val();
            });
            obj.forEach(element => {
                $('#district').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            $("#district").prop("disabled", false);
        });
        $('#district').on('change', function(e) {
            $('#village').html(null);
            let obj = villages.filter(function(obj) {
                return obj.district_id === $('#district').val();
            });
            obj.forEach(element => {
                $('#village').append('<option value="' + element.id + '">' + element.name + '</option>')
            });
            $("#village").prop("disabled", false);
        });
    </script>
@endsection

@section('modals')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal">
        <div class="bg-black opasubsector-50 w-screen h-screen absolute background-modal"></div>
        <div class="rounded-lg bg-white px-8 py-6 absolute flex flex-col gap-y-2">
            <div class="flex items-center justify-center w-full">
                <div class="text-2xl font-bold">Peringatan</div>
            </div>
            <hr>
            <div class="text-xl py-2 text-center">Anda belum melengkapi data diri.<br>Silahkan edit informasi personal anda
                agar dapat membuat pengajuan.</div>
            <a href="{{ route('user.edit', Auth::id()) }}" class="mangga-button-green w-full cursor-pointer">
                Edit Informasi Personal
                <span class="fa fa-fw fa-arrow-right ml-2"></span>
            </a>
        </div>
    </div>
@endsection

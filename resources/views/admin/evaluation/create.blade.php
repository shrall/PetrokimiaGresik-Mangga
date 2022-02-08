@extends('layouts.admin')

@section('content')
    <div class="text-4xl font-bold mb-2" id="form-title">Formulir Evaluasi & Hasil Survey Pinjaman Modal Kerja Program
        Kemitraan</div>
    <div class="text-xl text-gray-600 mb-6" id="form-description">Harap mengisi data-data sesuai kondisi lapangan secara
        objektif dan mematuhi SOP yang berlaku.
    </div>
    <form action="{{ route('admin.evaluation.store') }}" method="post">
        @csrf
        <input type="hidden" name="business_id" value={{$business->id}}>
        <div class="font-bold text-2xl mb-4">Data Informasi Calon Mangga -
            {{ $business->registration_number }}</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div class="">
                <label class="font-bold">Nama Usaha</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->name }}" disabled>
            </div>
            <div class="">
                <label class="font-bold">Nama Pemilik</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->utama->user_name }}"
                    disabled>
            </div>
            <div class="">
                <label class="font-bold">Sektor</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->sector->name }}"
                    disabled>
            </div>
            <div class="">
                <label class="font-bold">Telepon / HP</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->utama->user_phone }}"
                    disabled>
            </div>
            <div class="">
                <label class="font-bold">Subsektor</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->subsector->name }}"
                    disabled>
            </div>
            <div class="">
                <div class="grid grid-cols-6 gap-x-2">
                    <label class="font-bold col-span-4">Alamat</label>
                    <label class="font-bold">RT</label>
                    <label class="font-bold">RW</label>
                </div>
                <div class="grid grid-cols-6 gap-x-2">
                    <input type="text" name="" id="" class="form-pengajuan-input col-span-4"
                        value="{{ $business->utama->user_address }}" disabled>
                    <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->utama->user_rt }}"
                        disabled>
                    <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->utama->user_rw }}"
                        disabled>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Jenis Usaha</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->type }}" disabled>
            </div>
            <div class="grid grid-cols-2 gap-x-4">
                <div>
                    <label class="font-bold">Provinsi</label>
                    <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->province->name }}"
                        disabled>
                </div>
                <div>
                    <label class="font-bold">Kabupaten/Kota</label>
                    <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->city->name }}"
                        disabled>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Bentuk Usaha</label>
                <input type="text" name="" id="" class="form-pengajuan-input"
                    value="{{ $business->utama->businessform->name }}" disabled>
            </div>
            <div class="grid grid-cols-2 gap-x-4">
                <div>
                    <label class="font-bold">Kecamatan</label>
                    <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->district->name }}"
                        disabled>
                </div>
                <div>
                    <label class="font-bold">Desa/Kelurahan</label>
                    <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->village->name }}"
                        disabled>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Komoditi</label>
                <input type="text" name="commodity" id="commodity" class="form-pengajuan-input">
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Data Evaluasi Calon Mangga</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div>
                <label class="font-bold">Tipe Angsuran</label>
                <select name="installment_type" id="installment_type" class="form-pengajuan-input" required>
                    @foreach ($its as $it)
                        <option value={{ $it->id }}>{{ $it->name }}</option>
                    @endforeach
                </select>
            </div>
            <div></div>
            <div class="flex flex-col">
                <label class="font-bold">Kas (Rp.)</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->utama->treasury }}"
                    disabled>
                <label class="font-bold">Piutang (Rp.)</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->utama->credit }}"
                    disabled>
                <label class="font-bold">Persediaan (Rp.)</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->utama->supply }}"
                    disabled>
                <label class="font-bold">Peralatan/Kendaraan (Rp.)</label>
                <input type="text" name="" id="" class="form-pengajuan-input"
                    value="{{ $business->utama->vehicle + $business->utama->production_tools }}" disabled>
                <label class="font-bold">TOTAL ASET BERSIH (Rp.)</label>
                <input type="text" name="" id="" class="form-pengajuan-input"
                    value="{{ $business->utama->vehicle + $business->utama->production_tools + $business->utama->supply + $business->utama->credit + $business->utama->treasury }}"
                    disabled>
            </div>
            <div class="flex flex-col">
                <label class="font-bold">Nilai Penjualan (Rp.)</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->utama->sales_value }}"
                    disabled>
                <label class="font-bold">Biaya Total (Rp.)</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->utama->total_cost }}"
                    disabled>
                <label class="font-bold">LABA USAHA (Rp.)</label>
                <input type="text" name="" id="" class="form-pengajuan-input"
                    value="{{ $business->utama->sales_value + $business->utama->total_cost }}" disabled>
            </div>
        </div>
        @if ($business->utama->business_form_id != 4)
            <div class="font-bold text-2xl mb-4">Data Evaluasi Calon Mangga (Perorangan)</div>
            <div class="grid grid-cols-2 gap-x-8">
                <div class="">
                    <label class="font-bold">Jumlah Pengajuan (Rp.)</label>
                    <input type="text" name="" id="" class="form-pengajuan-input"
                        value="{{ $business->utama->request_amount }}" disabled>
                </div>
                <div class="">
                    <label class="font-bold">Kemampuan Angsur (Rp.)</label>
                    <input type="text" name="" id="" class="form-pengajuan-input"
                        value="{{ ($business->utama->sales_value + $business->utama->total_cost) / 36 }}" disabled>
                </div>
                <div class="">
                    <label class="font-bold">Pinjaman Tahap</label>
                    <input type="text" name="loan_step" id="loan_step" class="form-pengajuan-input">
                </div>
                <div class="">
                    <label class="font-bold">Angsuran/bulan (Rp.)</label>
                    <input type="number" name="installment_amount" id="installment_amount" class="form-pengajuan-input">
                </div>
                <div>
                    <label class="font-bold">Masa Pinjaman Untuk Perorangan</label>
                    <select name="loan_period" id="loan_period" class="form-pengajuan-input" required>
                        <option value=12>12 Bulan</option>
                        <option value=24>24 Bulan</option>
                        <option value=36>36 Bulan</option>
                    </select>
                </div>
                <div>
                    <label class="font-bold">Masa Tenggang Untuk Perorangan</label>
                    <select name="grace_period" id="grace_period" class="form-pengajuan-input" required>
                        <option value=3>3 Bulan</option>
                        <option value=6>6 Bulan</option>
                    </select>
                </div>
                <div class="">
                    <label class="font-bold">Jumlah yang dilayani (KT)</label>
                    <input type="number" name="number_served" id="number_served" class="form-pengajuan-input">
                </div>
            </div>
        @else
            <div class="font-bold text-2xl mb-4">Data Evaluasi Calon Mangga (Berkelompok)</div>
            <div class="grid grid-cols-2 gap-x-8">
                <div class="">
                    <label class="font-bold">Jumlah Pengajuan (Rp.)</label>
                    <input type="text" name="" id="" class="form-pengajuan-input"
                        value="{{ $business->utama->request_amount }}" disabled>
                </div>
                <div class="">
                    <label class="font-bold">Jumlah Anggota</label>
                    <input type="text" name="" id="" class="form-pengajuan-input"
                        value="{{ $business->utama->member_count }}" disabled>
                </div>
                <div class="">
                    <label class="font-bold">Luas (m2/ha)</label>
                    <input type="text" name="land_area" id="land_area" class="form-pengajuan-input">
                </div>
                <div></div>
                <div class="">
                    <label class="font-bold">Jumlah (ekor)</label>
                    <input type="number" name="animal_count" id="animal_count" class="form-pengajuan-input">
                </div>
                <div class="">
                    <label class="font-bold">Kemampuan Kandang (ekor)</label>
                    <input type="number" name="shed_count" id="shed_count" class="form-pengajuan-input">
                </div>
                <div class="">
                    <label class="font-bold">Jumlah Akumulatif Peralatan & Persediaan (Rp.)</label>
                    <input type="number" name="asset_total" id="asset_total" class="form-pengajuan-input">
                </div>
                <div class="">
                    <label class="font-bold">LABA USAHA/PANEN (Rp.)</label>
                    <input type="number" name="shed_count" id="shed_count" class="form-pengajuan-input">
                </div>
                <div class="">
                    <label class="font-bold">Pinjaman Tahap</label>
                    <input type="text" name="loan_step" id="loan_step" class="form-pengajuan-input">
                </div>
                <div></div>
                <div>
                    <label class="font-bold">Masa Pinjaman Untuk Kelompok (Bulan)</label>
                    <input type="number" name="loan_period" id="loan_period" class="form-pengajuan-input">
                </div>
                <div>
                    <label class="font-bold">Termin Untuk Kelompok</label>
                    <select name="grace_period" id="grace_period" class="form-pengajuan-input" required>
                        <option value=1>1 Termin</option>
                        <option value=2>2 Termin</option>
                    </select>
                </div>
                <div class="">
                    <label class="font-bold">Luas (m2/ha) (Survey)</label>
                    <input type="number" name="land_area_surveyor" id="land_area_surveyor" class="form-pengajuan-input">
                </div>
                <div class="">
                    <label class="font-bold">Jumlah (ekor) (Survey)</label>
                    <input type="number" name="animal_count_surveyor" id="animal_count_surveyor"
                        class="form-pengajuan-input">
                </div>
            </div>
        @endif
        <div class="font-bold text-2xl mb-4">Data Agunan Calon Mangga</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div class="">
                <label class="font-bold">Agunan</label>
                <input type="text" name="" id="" class="form-pengajuan-input" disabled
                    value="{{ $business->utama->collateral }}">
            </div>
            <div></div>
            <div class="">
                <label class="font-bold">Luas Agunan (m2/ha)</label>
                <input type="number" name="collateral_area" id="collateral_area" class="form-pengajuan-input">
            </div>
            <div class="">
                <label class="font-bold">Nama Pemegang Hak</label>
                <input type="text" name="collateral_owner" id="collateral_owner" class="form-pengajuan-input">
            </div>
            <div class="">
                <label class="font-bold">Tanggal Penerbitan Sertifikat</label>
                <input type="date" name="collateral_date" id="collateral_date" class="form-pengajuan-input">
            </div>
            <div class="">
                <label class="font-bold">Taksiran Harga (Rp.)</label>
                <input type="number" name="collateral_price" id="collateral_price" class="form-pengajuan-input">
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Daftar Isian Survey Calon Mangga</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div class="">
                <label class="font-bold">1. Bentuk Usaha</label>
                <input type="text" name="" id="" class="form-pengajuan-input"
                    value="{{ $business->utama->businessform->name }}" disabled>
            </div>
            <div></div>
            <div class="">
                <label class="font-bold">2. Status Tempat Usaha</label>
                <input type="text" name="" id="" class="form-pengajuan-input"
                    value="{{ $business->utama->establishmentstatus->name }}" disabled>
            </div>
            <div>
                <label class="font-bold">3. Modal Usaha Yang Digunakan</label>
                <select name="capital_source" id="capital_source" class="form-pengajuan-input" required>
                    @foreach ($css as $cs)
                        <option value={{ $cs->id }}>{{ $cs->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="">
                <label class="font-bold">4. Pelatihan</label>
                <select name="training" id="training" class="form-pengajuan-input">
                    <option value=0>Tidak Pernah</option>
                    <option value=1>Pernah</option>
                </select>
            </div>
            <div class="">
                <label class="font-bold">Jenis Pelatihan</label>
                <input type="text" name="training_type" id="training_type" class="form-pengajuan-input">
            </div>
            <div class="">
                <label class="font-bold">Dari Instansi</label>
                <input type="text" name="training_instance" id="training_instance" class="form-pengajuan-input">
            </div>
            <div></div>
            <div>
                <label class="font-bold">5. Pencatatan<br>Keuangan</label>
                <select name="finance_record" id="finance_record" class="form-pengajuan-input" required>
                    @foreach ($frs as $fr)
                        <option value={{ $fr->id }}>{{ $fr->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="">
                <label class="font-bold"><br>Produksi</label>
                <select name="record_production" id="record_production" class="form-pengajuan-input">
                    <option value=0>Tidak Ada</option>
                    <option value=1>Ada</option>
                </select>
            </div>
            <div class="">
                <label class="font-bold">Persediaan</label>
                <select name="record_stock" id="record_stock" class="form-pengajuan-input">
                    <option value=0>Tidak Ada</option>
                    <option value=1>Ada</option>
                </select>
            </div>
            <div></div>
            <div class="">
                <label class="font-bold">6. Struktur Organisasi</label>
                <select name="organization_structure" id="organization_structure" class="form-pengajuan-input">
                    <option value=0>Ada</option>
                    <option value=1>Tidak Ada</option>
                </select>
            </div>
            <div></div>
            <div class="">
                <label class="font-bold">7. Produksi<br>Jumlah Tenaga Kerja (orang)</label>
                <input type="number" name="labor_force" id="labor_force" class="form-pengajuan-input">
            </div>
            <div>
                <label class="font-bold"><br>Proses Produksi</label>
                <select name="production_process" id="production_process" class="form-pengajuan-input" required>
                    @foreach ($pps as $pp)
                        <option value={{ $pp->id }}>{{ $pp->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="">
                <label class="font-bold">Peralatan Yang Dimiliki</label>
                <div class="grid grid-cols-2 gap-x-4">
                    <input type="text" name="evaluation_equipment[0]" id="evaluation_equipment[0]"
                        class="form-pengajuan-input">
                    <input type="text" name="evaluation_equipment[1]" id="evaluation_equipment[1]"
                        class="form-pengajuan-input">
                    <input type="text" name="evaluation_equipment[2]" id="evaluation_equipment[2]"
                        class="form-pengajuan-input">
                    <input type="text" name="evaluation_equipment[3]" id="evaluation_equipment[3]"
                        class="form-pengajuan-input">
                </div>
            </div>
            <div class="">
                <label class="font-bold">Hak Paten</label>
                <select name="patent" id="patent" class="form-pengajuan-input">
                    <option value=0>Tidak Ada</option>
                    <option value=1>Ada</option>
                </select>
            </div>
            <div class="col-span-2">
                <label class="font-bold">8. Pemasaran<br>Jaringan Pemasaran</label>
                <div class="flex items-center gap-x-2">
                    <div class="flex items-center gap-x-2">
                        <input type="checkbox" name="market_local" id="">
                        Lokal
                    </div>
                    <div class="flex items-center gap-x-2">
                        <input type="checkbox" name="market_province" id="">
                        Antar Provinsi
                    </div>
                    <div class="flex items-center gap-x-2">
                        <input type="checkbox" name="market_export" id="">
                        Ekspor Ke
                        <input type="text" name="export_to" id="export_to"
                            class="text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 w-80">
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Sistem Pembayaran</label>
                <div class="flex items-center gap-x-2">
                    <div class="flex items-center gap-x-2">
                        <input type="checkbox" name="payment_cash" id="">
                        Tunai
                    </div>
                    <div class="flex items-center gap-x-2">
                        <input type="checkbox" name="payment_check" id="">
                        Cek Giro
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Pemasaran Produk Sesuai</label>
                <div class="flex items-center gap-x-2">
                    <div class="flex items-center gap-x-2">
                        <input type="checkbox" name="market_order" id="">
                        Order
                    </div>
                    <div class="flex items-center gap-x-2">
                        <input type="checkbox" name="market_routine" id="">
                        Rutin
                    </div>
                    <div class="flex items-center gap-x-2">
                        <input type="checkbox" name="market_consignment" id="">
                        Konsinyasi
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <label class="font-bold">9. Aset Usaha<br>Bangunan/Tanah</label>
                <div class="flex items-center gap-x-2">
                    @foreach ($ess as $es)
                        <div class="flex items-center gap-x-2">
                            <input type="radio" name="land_ownsership" @if ($loop->iteration == 1) checked @endif value="{{ $es->id }}">{{ $es->name }}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-span-2">
                <label class="font-bold">Kendaraan</label>
                <div class="flex items-center gap-x-2">
                    <div class="flex items-center gap-x-2">
                        <input type="checkbox" name="bike" id="">
                        Motor (Rp.)
                        <input type="number" name="bike_value" id="bike_value"
                            class="text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 w-80">
                    </div>
                    <div class="flex items-center gap-x-2">
                        <input type="checkbox" name="car" id="">
                        Mobil (Rp.)
                        <input type="number" name="car_value" id="car_value"
                            class="text-lg md:text-xl focus:outline-none disabled:text-gray-400 rounded-xl shadow-md p-3 w-80">
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Lain-lain (Rp.)</label>
                <input type="number" name="other_assets" id="other_assets" class="form-pengajuan-input">
            </div>
            <div></div>
            <div class="">
                <label class="font-bold">10. Rata-rata Biaya Hidup/bulan<br>Listrik, Telpon, Air</label>
                <input type="number" name="utility_cost" id="utility_cost" class="form-pengajuan-input">
            </div>
            <div class="">
                <label class="font-bold"><br>Kebutuhan Sehari-hari</label>
                <input type="number" name="daily_cost" id="daily_cost" class="form-pengajuan-input">
            </div>
            <div class="">
                <label class="font-bold">Lain-lain</label>
                <input type="number" name="other_cost" id="other_cost" class="form-pengajuan-input">
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Rugi/Laba</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div class="">
                <label class="font-bold">Sektor</label>
                <input type="text" name="" id="" class="form-pengajuan-input" value="{{ $business->sector->name }}"
                    disabled>
            </div>
            @if ($business->sector_id == 1 || $business->sector_id == 4 || $business->sector_id == 5)
                <div class="">
                    <label class="font-bold">Tahun</label>
                    <input type="number" name="year" id="year" class="form-pengajuan-input">
                </div>
            @endif
            <div class="">
                <label class="font-bold">1. Penjualan (Rp.)</label>
                <input type="number" name="sales" id="sales" onchange="getGross();" class="form-pengajuan-input">
            </div>
            <div></div>
            <div class="">
                <label class="font-bold">2. Harga Pokok Penjualan (Rp.)</label>
                <input type="number" name="goods_cost" id="goods_cost" onchange="getGross();" class="form-pengajuan-input">
            </div>
            <div class="col-span-2">
                <div class="grid grid-cols-3 gap-x-4">
                    @if ($business->sector_id == 1 || $business->sector_id == 4 || $business->sector_id == 5)
                        <div class="">
                            <label class="font-bold">Persediaan Awal (Rp.)</label>
                            <input type="number" name="supply_start" class="form-pengajuan-input">
                        </div>
                    @else
                        <div class="">
                            <label class="font-bold">Persediaan (Rp.)</label>
                            <input type="number" name="supply_start" class="form-pengajuan-input">
                        </div>
                    @endif
                    <div class="">
                        <label class="font-bold">Pembelian (Rp.)</label>
                        <input type="number" name="purchase" class="form-pengajuan-input">
                    </div>
                    @if ($business->sector_id == 1 || $business->sector_id == 4 || $business->sector_id == 5)
                        <div class="">
                            <label class="font-bold">Persediaan Akhir (Rp.)</label>
                            <input type="number" name="supply_end" class="form-pengajuan-input">
                        </div>
                    @endif
                </div>
            </div>
            <div class="">
                <label class="font-bold">3. Rugi/Laba Kotor (Rp.)</label>
                <input type="number" value=0 name="gross" id="gross" class="form-pengajuan-input" onchange="getPL();"
                    readonly>
            </div>
            <div class="col-span-2">
                <div class="grid grid-cols-3 gap-x-4">
                    <div class="">
                        <label class="font-bold">4. Biaya Administrasi<br>Gaji/Upah (Rp.)</label>
                        <input type="number" name="expense_salary" id="expense_salary" onchange="getPL();"
                            class="form-pengajuan-input">
                    </div>
                    <div class="">
                        <label class="font-bold"><br>Transportasi (Rp.)</label>
                        <input type="number" name="expense_transport" id="expense_transport" onchange="getPL();"
                            class="form-pengajuan-input">
                    </div>
                    <div class="">
                        <label class="font-bold"><br>Listrik/Telpon/Air (Rp.)</label>
                        <input type="number" name="expense_utility" id="expense_utility" onchange="getPL();"
                            class="form-pengajuan-input">
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="grid grid-cols-3 gap-x-4">
                    @if ($business->sector_id != 1 && $business->sector_id != 4 && $business->sector_id != 5)
                        <div class="">
                            <label class="font-bold">Biaya Pupuk/Obat-obatan (Rp.)</label>
                            <input type="number" name="expense_fertilizer" id="expense_fertilizer" onchange="getPL();"
                                class="form-pengajuan-input">
                        </div>
                    @endif
                    <div class="">
                        <label class="font-bold">Sewa (Rp.)</label>
                        <input type="number" name="expense_rent" id="expense_rent" onchange="getPL();"
                            class="form-pengajuan-input">
                    </div>
                    <div class="">
                        <label class="font-bold">Lain-lain (Rp.)</label>
                        <input type="number" name="expense_others" id="expense_others" onchange="getPL();"
                            class="form-pengajuan-input">
                    </div>
                </div>
            </div>
            <div>
                <label class="font-bold">5. Pendapatan Lain</label>
                <input type="text" name="other_income_1" onchange="getPL();" placeholder="Nama Pendapatan Lain"
                    class="form-pengajuan-input">
            </div>
            <div>
                <label class="font-bold invisible">X</label>
                <input type="text" name="other_income_2" onchange="getPL();" placeholder="Nama Pendapatan Lain"
                    class="form-pengajuan-input">
            </div>
            <div>
                <label class="font-bold">Nilai Pendapatan Lain (Rp.)</label>
                <input type="number" name="other_income_value_1" onchange="getPL();" value=0
                    placeholder="Pendapatan Lain 1 (Rp.)" id="other_income_value_1" class="form-pengajuan-input">
            </div>
            <div>
                <label class="font-bold">Nilai Pendapatan Lain (Rp.)</label>
                <input type="number" name="other_income_value_2" onchange="getPL();" value=0
                    placeholder="Pendapatan Lain 2 (Rp.)" id="other_income_value_2" class="form-pengajuan-input">
            </div>
            <div class="">
                <label class="font-bold">Rugi/Laba (Rp.)</label>
                <input type="number" name="profit_loss" id="profit_loss" class="form-pengajuan-input" readonly>
            </div>
        </div>
        <div class="font-bold text-2xl mb-4">Usulan Surveyor</div>
        <div class="grid grid-cols-2 gap-x-8">
            <div class="">
                <label class="font-bold">Hasil Survey</label>
                <select name="status" id="status" class="form-pengajuan-input">
                    <option value=0>Ditolak</option>
                    <option value=1>Diterima</option>
                </select>
            </div>
            <div></div>
            <div class="">
                <label class="font-bold">Nama Surveyor</label>
                <input type="text" name="surveyor_name" id="surveyor_name" class="form-pengajuan-input">
            </div>
            <div class="">
                <label class="font-bold">Kab/Kota Survey</label>
                <input type="text" name="survey_city" id="survey_city" class="form-pengajuan-input">
            </div>
            <div class="">
                <label class="font-bold">Tanggal Survey</label>
                <input type="date" name="survey_date" id="survey_date" class="form-pengajuan-input">
            </div>
            <div class="">
                <label class="font-bold">Usulan Pinjaman (Rp.)</label>
                <input type="number" name="loan_suggestion" id="loan_suggestion" class="form-pengajuan-input">
            </div>
            <div class="col-span-2">
                <label class="font-bold">Catatan Surveyor</label>
            </div>
            <textarea name="surveyor_note" class="form-pengajuan-input col-span-2" rows="10"></textarea>
        </div>
        <button type="submit" class="mangga-button-green">Submit</button>
    </form>
@endsection

@section('scripts')
    <script>
        function getGross() {
            $('#gross').val($('#sales').val() - $('#goods_cost').val());
            getPL();
        }

    </script>
    @if ($business->sector_id == 1 || $business->sector_id == 4 || $business->sector_id == 5)
        <script>
            function getPL() {
                $('#profit_loss').val(
                    parseInt(parseInt($('#gross').val()) + parseInt($('#other_income_value_1').val()) + parseInt($(
                        '#other_income_value_2').val())) -
                    $('#expense_salary').val() -
                    $('#expense_transport').val() -
                    $('#expense_utility').val() -
                    $('#expense_rent').val() -
                    $('#expense_others').val()
                );
            }

        </script>
    @else
        <script>
            function getPL() {
                $('#profit_loss').val(
                    parseInt(parseInt($('#gross').val()) + parseInt($('#other_income_value_1').val()) + parseInt($(
                        '#other_income_value_2').val())) -
                    $('#expense_salary').val() -
                    $('#expense_fertilizer').val() -
                    $('#expense_transport').val() -
                    $('#expense_utility').val() -
                    $('#expense_rent').val() -
                    $('#expense_others').val()
                );
            }

        </script>
    @endif
@endsection

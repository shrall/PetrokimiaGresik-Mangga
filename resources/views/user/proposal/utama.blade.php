<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        .text-center {
            text-align: center;
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .px-16 {
            padding-left: 4rem;
            padding-right: 4rem;
        }

        .border-2 {
            border-width: 2px;
        }

        .border-black {
            border-color: #000000;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .mb-12 {
            margin-bottom: 3rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .text-5xl {
            font-size: 3rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .text-4xl {
            font-size: 2.25rem;
        }

    </style>
</head>

<body class="" style="font-family: Arial;">
    <div class="px-16 py-14" style="height: 1220px; margin-bottom: 24rem;">
        <table style="width: 100%;" class="mb-4">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 16rem;"></td>
                <td style="text-align: end;"><img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                        style="width: 16rem;"></td>
            </tr>
        </table>
        <div class="text-center text-2xl">
            Jl. Jenderal Ahmad Yani Gresik (61119)
        </div>
        <div class="text-center text-2xl">
            Telepon : 031.398.2100, 398.2200. Ext. : 2752, 2950, 2918
        </div>
        <div class="text-center text-2xl">
            Fax. : 031.398.2834. E-mail : <a href="mailto:mangga@petrokimia-gresik.com"
                class="text-blue-600 underline">mangga@petrokimia-gresik.com</a>
        </div>
        <hr class="bg-black mt-2 mb-8">
        <div class="border-2 border-black px-6 py-4 mb-12" style="border: 2px solid black; height: 60%;">
            <div class="text-5xl text-center font-bold">PROPOSAL</div>
            <div class="text-4xl text-center font-bold">PROGRAM PENDANAAN UMK</div>
            <div class="text-4xl text-center font-bold">(USAHA MIKRO & KECIL) </div>
            <table style="margin-left: auto; margin-right: auto; font-size: 1.25rem; margin-bottom: 6rem;"
                class="mt-2">
                <tr>
                    <td>Nomor</td>
                    <td>: {{ $utama->business->registration_number }}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>: {{ $utama->created_at->format('d/m/Y') }}</td>
                </tr>
                <tr>
                    <td>Tahap</td>
                    <td>: Pengajuan</td>
                </tr>
                <tr>
                    <td>Paraf</td>
                    <td>: PT Petrokimia Gresik</td>
                </tr>
            </table>
            <table style="font-size: 1.25rem; margin-bottom: 4rem;" class="font-bold">
                <tr>
                    <td>NAMA PERUSAHAAN</td>
                    <td>: {{ $utama->business->name }}</td>
                </tr>
                <tr>
                    <td>PENANGGUNG JAWAB</td>
                    <td>: {{ $utama->user_name }}</td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td>: {{ $utama->business->address }}</td>
                </tr>
                <tr>
                    <td style="padding-left: 1rem;">DESA / KELURAHAN</td>
                    <td>: {{ $utama->business->village->name }}</td>
                </tr>
                <tr>
                    <td style="padding-left: 1rem;">KECAMATAN</td>
                    <td>: {{ $utama->business->district->name }}</td>
                </tr>
                <tr>
                    <td style="padding-left: 1rem;">KAB / KODYA</td>
                    <td>: {{ $utama->business->city->name }}</td>
                </tr>
                <tr>
                    <td>TELEPON / HP / FAX</td>
                    <td>: {{ $utama->telephone ?? $utama->handphone }}</td>
                </tr>
                <tr>
                    <td>SEKTOR USAHA</td>
                    <td>: {{ $utama->business->sector->name }}</td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">KOMODITAS</td>
                    <td>: @if ($utama->business->commodities)
                            @foreach ($utama->business->commodities as $c)
                                @if ($loop->iteration != 1)
                                    <span style="visibility: hidden;">:</span>
                                    @endif{{ $c->name }}@if (!$loop->last)
                                        <br>
                                    @endif
                                @endforeach
                            @else
                                -
                            @endif
                    </td>
                </tr>
            </table>
        </div>
        <div style="height: 20%;">
            <div class="text-center text-3xl font-bold" style="font-size: 1.5rem; margin-bottom: 1.4rem;">PERSYARATAN
                YANG
                HARUS DILAMPIRKAN</div>
            <table style="font-size: 1.25rem; margin-left: auto; margin-right: auto;">
                <tr class="font-bold">
                    <td>1 (Satu) LEMBAR FOTO COPY</td>
                    <td></td>
                </tr>
                <tr>
                    <td style="padding-left: 1.2rem;">- Kartu Tanda Penduduk (KTP)</td>
                    <td style="padding-left: 1.2rem;">- Kartu Susunan Keluarga (KSK)</td>
                </tr>
                <tr>
                    <td style="padding-left: 1.2rem;">- Surat Tanah (SHM)</td>
                    <td style="padding-left: 1.2rem;">- SIUP & TDP / IU & NIB</td>
                </tr>
                <tr>
                    <td style="padding-left: 1.2rem;">- Rekening Bank BNI-46</td>
                    <td style="padding-left: 1.2rem;">- Dan lain-lain sesuai kebutuhan</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="px-16 py-14" style="height: 1220px; margin-bottom: 24rem;">
        <div style="height: 2rem;"></div>
        <table style="width: 100%;" class="mb-4">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                <td class="text-2xl font-bold text-center">PROPOSAL PROGRAM PENDANAAN UMK<br>(USAHA MIKRO & KECIL)</td>
                <td style="text-align: end;"><img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                        style="width: 12rem;"></td>
            </tr>
        </table>
        <div class="mb-4">Perihal : <span style="text-decoration: underline;">Permohonan Pendanaan UMK</span>
        </div>
        <div>Kepada Yth</div>
        <div>Direksi PT Petrokimia Gresik</div>
        <div>u.p. VP Corporate Social Responsibility</div>
        <div class="mb-4">di Gresik</div>
        <div class="mb-4">Dengan Hormat,</div>
        <div class="mb-4">Dalam rangka meningkatkan kegiatan usaha, dengan ini kami mengajukan permohonan
            program pendanaan UMK
            dari PT Petrokimia Gresik.</div>
        <div class="mb-4">Sebagai bahan evaluasi, berikut kami sampaikan data-data kondisi usaha yang sedang
            kami jalankan sebagai berikut:</div>
        <div class="font-bold" style="font-size: 1.25rem;">I.A. Data Usaha</div>
        <table class="mb-4" style="font-size: 1.1rem; width: 100%;">
            <tr>
                <td width="5%">1.</td>
                <td width="25%">Usaha</td>
                <td>: {{ $utama->businessform->name }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Nomor & Tgl SIUP</td>
                <td>: {{ $utama->siup_code }}, {{ $utama->siup_date }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Nama Usaha</td>
                <td>: {{ $utama->business->name }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>NPWP</td>
                <td>: {{ $utama->user_npwp ?? '-' }}</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Sektor Usaha</td>
                <td>: {{ $utama->business->sector->name }}</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Alamat</td>
                <td>: {{ $utama->business->address }}, {{ $utama->business->postal_code }}</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Nomor Telepon/HP</td>
                <td>: {{ $utama->telephone ?? '-' }} HP : {{ $utama->handphone }}</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Komoditas Yang Dihasilkan</td>
                <td>: @if ($utama->business->commodities)
                        @foreach ($utama->business->commodities as $c)
                            {{ $c->name }}@if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    @else
                        -
                    @endif
                </td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Jumlah Unit Usaha</td>
                <td>: {{ $utama->unit_amount }} Unit | Jumlah Tenaga Kerja : {{ $utama->hr_value }} Orang</td>
            </tr>
            <tr>
                <td>10.</td>
                <td>Pemasaran</td>
                <td>: {{ $utama->marketing->name }} @if ($utama->marketing_id == 3)
                        ke {{ $utama->export_to }}
                    @endif
                </td>
            </tr>
        </table>
        <div class="font-bold" style="font-size: 1.25rem;">I.B. Penanggung Jawab Usaha</div>
        <table style="font-size: 1.1rem; width: 100%;">
            <tr>
                <td width="5%">1.</td>
                <td width="25%">Nama</td>
                <td>: {{ $utama->user_name . ' ' . $utama->user_last_name }} |
                    (Suami/Istri) : {{ $utama->user_spouse ?? '-' }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Tanggal Lahir</td>
                <td>: {{ $utama->user_birth_date }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Nomor KTP</td>
                <td>: {{ $utama->user_ktp_code }}</td>
            </tr>
            <tr>
                <td style="vertical-align: top;">4.</td>
                <td style="vertical-align: top;">Alamat Tempat Tinggal</td>
                <td>: {{ $utama->user_address }} | RT : {{ $utama->user_rt }} RW :
                    {{ $utama->user_rw }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Desa/Kelurahan</td>
                <td>: {{ $utama->user_village }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Kecamatan</td>
                <td>: {{ $utama->user_district }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Kab./Kodya</td>
                <td>: {{ $utama->user_city }}</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Nomor Telepon</td>
                <td>: {{ $utama->user_telephone ?? '-' }}</td>
            </tr>
            <tr>
                <td></td>
                <td>Nomor HP</td>
                <td>: {{ $utama->user_phone ?? '-' }}</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Bank BNI 46 Cabang</td>
                <td>: {{ $utama->user_bank_branch }}</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Nomor Rekening</td>
                <td>: {{ $utama->user_bank_number }}</td>
            </tr>
        </table>
    </div>
    <div class="px-16 py-14" style="height: 1220px; margin-bottom: 24rem;">
        <div style="height: 2rem;"></div>
        <table style="width: 100%;" class="mb-4">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                <td class="text-2xl font-bold text-center">PROPOSAL PROGRAM PENDANAAN UMK<br>(USAHA MIKRO & KECIL)</td>
                <td style="text-align: end;"><img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                        style="width: 12rem;"></td>
            </tr>
        </table>
        <div class="font-bold" style="font-size: 1.25rem;">II. NILAI KEKAYAAN USAHA</div>
        <div style="font-size: 1.1rem;">Status per tanggal : {{ $utama->created_at->format('d/m/Y') }}</div>
        <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
            <tr>
                <td width="5%">1.</td>
                <td width="30%">Tanah</td>
                <td>: Rp. {{ number_format($utama->land, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Bangunan</td>
                <td>: Rp. {{ number_format($utama->building, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td></td>
                <td>Jumlah</td>
                <td>: Rp.
                    {{ number_format($utama->land + $utama->building, 0, ',', '.') }}
                </td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Kas</td>
                <td>: Rp. {{ number_format($utama->treasury, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Piutang</td>
                <td>: Rp. {{ number_format($utama->credit, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Peralatan Usaha/Produksi</td>
                <td>: Rp. {{ number_format($utama->production_tools, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Bank(Tabungan)</td>
                <td>: Rp. {{ number_format($utama->savings, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Persediaan</td>
                <td>: Rp. {{ number_format($utama->supply, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Kendaraan</td>
                <td>: Rp. {{ number_format($utama->vehicle, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td></td>
                <td>Jumlah</td>
                <td>: Rp.
                    {{ number_format($utama->supply + $utama->vehicle + $utama->treasury + $utama->credit + $utama->production_tools + $utama->savings,0,',','.') }}
                </td>
            </tr>
        </table>
        <div class="font-bold" style="font-size: 1.25rem;">III. PENJUALAN SELAMA 1 (SATU) TAHUN</div>
        <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
            @php
                $c_total = 0;
            @endphp
            @foreach ($utama->business->commodities as $item)
                @php
                    $c_total += $item->value;
                @endphp
                <tr>
                    <td width="5%">{{ $loop->iteration }}.</td>
                    <td width="30%">{{ $item->name }}</td>
                    <td>: Rp. {{ number_format($item->value, 0, ',', '.') }}</td>
                </tr>
            @endforeach
            <tr class="font-bold">
                <td></td>
                <td>Jumlah</td>
                <td>: Rp.
                    {{ number_format($c_total, 0, ',', '.') }}
                </td>
            </tr>
        </table>
        <div class="font-bold" style="font-size: 1.25rem;">IV. LABA / KEUNTUNGAN SELAMA 1 (SATU) TAHUN</div>
        <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
            <tr>
                <td width="5%">1.</td>
                <td width="30%">Nilai Penjualan</td>
                <td>: Rp. {{ number_format($utama->sales_value, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td width="5%">2.</td>
                <td width="30%">Biaya Total</td>
                <td>: Rp. {{ number_format($utama->total_cost, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td></td>
                <td>Jumlah</td>
                <td>: Rp.
                    {{ number_format($utama->sales_value + $utama->total_cost, 0, ',', '.') }}
                </td>
            </tr>
        </table>
    </div>
    <div class="px-16 py-14" style="height: 1220px; margin-bottom: 24rem;">
        <div style="height: 2rem;"></div>
        <table style="width: 100%;" class="mb-4">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                <td class="text-2xl font-bold text-center">PROPOSAL PROGRAM PENDANAAN UMK<br>(USAHA MIKRO & KECIL)</td>
                <td style="text-align: end;"><img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                        style="width: 12rem;"></td>
            </tr>
        </table>
        <div class="font-bold" style="font-size: 1.25rem;">V. Permasalahan Usaha Yang Dihadapi</div>
        <div style="height: 8%" class="mb-4">{{ $utama->business_problem }}</div>
        <div class="font-bold" style="font-size: 1.25rem;">VI. Pinjaman Yang Diharapkan</div>
        <div class="mb-4">Rp. {{ number_format($utama->request_amount, 0, ',', '.') }}</div>
        <div class="font-bold" style="font-size: 1.25rem;">VII. Rencana Penggunaan Pendanaan UMK</div>
        <div style="font-size: 1.1rem;">Apabila memperoleh pendanaan UMK, akan dipergunakan untuk : </div>
        <div style="height: 30%">
            <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
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
        <div style="font-size: 1.1rem;" class="mb-4">Demikian permohonan kami, atas persetujuan Bapak
            disampaikan terima kasih.</div>
        <div class="px-16" class="mb-4">
            <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                <tr>
                    <td width="4cm;"
                        style="height: 6cm; text-align: center; border: 2px solid black; vertical-align: middle;">
                        Pas Foto<br>
                        4x6<br>
                        Ketua Kelompok<br>
                    </td>
                    <td width="20%"></td>
                    <td width="50%" style="text-align: center;">
                        .............................................. , ..................<br>
                        Hormat Kami,<br>
                        Pemohon,<br><br><br><br>
                        Materai Rp. 10.000<br><br><br><br>
                        ({{ $utama->user_name }})
                    </td>
                </tr>
            </table>
        </div>
        <div style="text-align: center;">
            <br>
            Menyetujui,<br>
            Pemberi Rekomendasi<br>
            <br><br><br><br><br><br><br><br>
            (..............................................................)<br>
            Nama Terang & Tanda Tangan
        </div>
    </div>
    <div class="px-16 py-14" style="height: 1220px; margin-bottom: 24rem;">
        <div style="height: 2rem;"></div>
        <table style="width: 100%;" class="mb-4">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                <td class="text-2xl font-bold text-center">PROPOSAL PROGRAM PENDANAAN UMK<br>(USAHA MIKRO & KECIL)</td>
                <td style="text-align: end;"><img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                        style="width: 12rem;"></td>
            </tr>
        </table>
        <div class="font-bold text-center" style="font-size: 1.25rem;" class="mb-4">Foto Tempat Usaha / Tempat
            Tinggal</div>
        <div class="text-center mb-4" style="height: 40%;">
            <img src="{{ asset('uploads/mangga/establishment_picture/' . $utama->establishment_picture) }}"
                style="height: 100%; max-width: 50rem;">
        </div>
        <div class="font-bold text-center" style="font-size: 1.25rem;" class="mb-4">Foto Komoditas / Produk
        </div>
        <div class="text-center mb-4" style="height: 40%; ">
            <img src="{{ asset('uploads/mangga/product_picture/' . $utama->product_picture) }}"
                style="height: 100%; max-width: 50rem;">
        </div>
    </div>
    <div class="px-16 py-14" style="height: 1220px; margin-bottom: 24rem;">
        <div style="height: 2rem;"></div>
        <table style="width: 100%;" class="mb-4">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                <td class="text-2xl font-bold text-center">PROPOSAL PROGRAM PENDANAAN UMK<br>(USAHA MIKRO & KECIL)</td>
                <td style="text-align: end;"><img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                        style="width: 12rem;"></td>
            </tr>
        </table>
        <div class="font-bold text-center" style="font-size: 1.25rem;" class="mb-4">Denah Tempat Usaha</div>
        <div class="text-center mb-4" style="height: 40%;">
            @if ($utama->business_sketch)
                <img src="{{ asset('uploads/mangga/business_sketch/' . $utama->business_sketch) }}"
                    style="height: 100%; max-width: 50rem;">
            @endif
        </div>
        <div class="font-bold text-center" style="font-size: 1.25rem;" class="mb-4">Denah Tempat Tinggal</div>
        <div class="text-center mb-4" style="height: 40%; ">
            @if ($utama->house_sketch)
                <img src="{{ asset('uploads/mangga/house_sketch/' . $utama->house_sketch) }}"
                    style="height: 100%; max-width: 50rem;">
            @endif
        </div>
    </div>
    <div class="px-16 py-14" style="height: 1220px; margin-bottom: 24rem;">
        <div style="height: 2rem;"></div>
        <table style="width: 100%;" class="mb-4">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                <td class="text-2xl font-bold text-center">PROPOSAL PROGRAM PENDANAAN UMK<br>(USAHA MIKRO & KECIL)</td>
                <td style="text-align: end;"><img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                        style="width: 12rem;"></td>
            </tr>
        </table>
        <div class="font-bold text-center" style="font-size: 1.25rem;" class="mb-4">PEMERINTAHAN KAB. / KODYA
            : {{ $utama->user_city }}</div>
        <div class="font-bold text-center" style="font-size: 1.25rem;" class="mb-4">KECAMATAN :
            {{ $utama->user_district }}</div>
        <div class="font-bold text-center" style="font-size: 1.25rem;" class="mb-4">DESA / KELURAHAN :
            {{ $utama->user_village }}</div>
        <div style="height: 2rem;"></div>
        <div class="font-bold text-center" style="font-size: 1.25rem; text-decoration: underline;">SURAT KETERANGAN
        </div>
        <div class="text-center" style="font-size: 1.25rem;" class="mb-12">Nomor :
            ................................</div>
        <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
            <tr>
                <td width="25%">Diberikan Kepada</td>
                <td></td>
            </tr>
            <tr>
                <td width="25%">Nama</td>
                <td>: {{ $utama->user_name }}</td>
            </tr>
            <tr>
                <td width="25%">Tempat / Tanggal Lahir</td>
                <td>: {{ $utama->user_birthplace->name ?? '-' }},
                    {{ $utama->user_birth_date }}</td>
            </tr>
            <tr>
                <td width="25%">No. KTP</td>
                <td>: {{ $utama->user_ktp_code }}</td>
            </tr>
            <tr>
                <td width="25%">Agama</td>
                <td>: {{ $utama->business->user->religion->name }}</td>
            </tr>
            <tr>
                <td width="25%">Pekerjaan</td>
                <td>: {{ $utama->user_profession }}</td>
            </tr>
            <tr>
                <td width="25%">Alamat</td>
                <td>: {{ $utama->user_address }}</td>
            </tr>
            <tr>
                <td width="25%">Tujuan</td>
                <td>: PT Petrokimia Gresik</td>
            </tr>
            <tr>
                <td width="25%">Keperluan</td>
                <td>: Mengajukan Pinjaman Modal Kerja program pendanaan UMK</td>
            </tr>
            <tr>
                <td width="25%">Keterangan lain-lain </td>
                <td>: Menerangkan bahwa orang tersebut di atas mempunyai usaha {{ $utama->business->name }} yang
                    berlokasi di alamat tersebut di atas</td>
            </tr>
        </table>
        <div style="font-size: 1.1rem;" class="mb-12">Demikian Surat Keterangan ini dibuat dengan sebenarnya
            untuk dipergunakan sebagaimana mestinya</div>
        <div class="px-16" class="mb-4">
            <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                <tr>
                    <td width="4cm;" style="height: 6cm; text-align: center;vertical-align: middle;">
                    </td>
                    <td width="20%"></td>
                    <td width="50%">
                        .......................................... , ...................<br>
                        Kepala Desa / Kelurahan : .....................<br>
                        Kecamatan : ...........................................<br><br><br><br>
                        (..............................................................)<br>
                    </td>
                </tr>
            </table>
        </div>
        <div
            style="border: solid 2px black; padding-left: 4px; padding-right: 4px; padding-top: 2px; padding-bottom: 2px; width: 30%;">
            <div style="text-decoration: underline;" class="font-bold">Catatan :</div>
            <div>Dapat menggunakan form dari Desa / Kelurahan setempat</div>
        </div>
    </div>
    <div class="px-16 py-14" style="height: 1220px; margin-bottom: 24rem;">
        <div style="height: 2rem;"></div>
        <table style="width: 100%;" class="mb-4">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                <td class="text-2xl font-bold text-center">PROPOSAL PROGRAM PENDANAAN UMK<br>(USAHA MIKRO & KECIL)</td>
                <td style="text-align: end;"><img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                        style="width: 12rem;"></td>
            </tr>
        </table>
        <div class="font-bold text-center" style="font-size: 1.25rem;" class="mb-4">SURAT PERNYATAAN</div>
        <div class="font-bold text-center" style="font-size: 1.25rem;">TIDAK SEDANG MENJADI MITRA BINAAN BUMN PEMBINA
            LAIN</div>
        <div style="height: 2rem;"></div>
        <div style="font-size: 1.1rem;" class="mb-4">Kami yang bertandatangan di bawah ini :</div>
        <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
            <tr>
                <td width="25%">Nama Calon Mitra Binaan</td>
                <td>: {{ $utama->user_name }}</td>
            </tr>
            <tr>
                <td width="25%">Tanggal Lahir</td>
                <td>: {{ $utama->user_birth_date }}</td>
            </tr>
            <tr>
                <td width="25%">Nama Usaha / Kelompok</td>
                <td>: {{ $utama->business->name }}</td>
            </tr>
            <tr>
                <td width="25%">Alamat</td>
                <td>: {{ $utama->user_address }}</td>
            </tr>
            <tr>
                <td width="25%">Desa/Kel.</td>
                <td>: {{ $utama->user_village }}</td>
            </tr>
            <tr>
                <td width="25%">Kecamatan</td>
                <td>: {{ $utama->user_district }}</td>
            </tr>
            <tr>
                <td width="25%">Kabupaten</td>
                <td>: {{ $utama->user_city }}</td>
            </tr>
            <tr>
                <td width="25%">No. KTP</td>
                <td>: {{ $utama->user_ktp_code }}</td>
            </tr>
        </table>
        <div style="font-size: 1.1rem;" class="mb-4">Dengan ini meyatakan dengan sebenar-benarnya bahwa :
        </div>
        <div class="px-16" class="mb-4">
            <div style="font-size: 1.1rem;">1. Saat ini kami tidak menjadi Mitra Binaan BUMN pembinaan lain</div>
            <div style="font-size: 1.1rem;">2. Apabila dikemudian hari kami melanggar ketentuan tersebut, maka kami
                sanggup mengembalikan pinjaman Pendanaan UMK dari PT Petrokimia Gresik sesuai dengan peraturan yang
                berlaku</div>
        </div>
        <div style="height: 2rem;"></div>
        <div style="font-size: 1.1rem;" class="mb-4">Demikian Surat Pernyataan ini kami buat dengan
            sebenar-benarnya dan dapat dipertanggungjawabkan.</div>
        <div style="height: 3rem;"></div>
        <div style="font-size: 1.1rem;" class="mb-4">Yang Menyatakan,</div>
        <div style="font-size: 1.1rem;" class="mb-4">{{ $utama->business->name }}
        </div>
        <div style="height: 5rem;"></div>
        <div>
            ({{ $utama->user_name }})<br>
            Ketua Kelompok/Pengusaha Kecil
        </div>
    </div>
    <div class="px-16 py-14" style="height: 1220px; margin-bottom: 24rem;">
        <div style="height: 2rem;"></div>
        <table style="width: 100%;" class="mb-4">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                <td class="text-2xl font-bold text-center">PROPOSAL PROGRAM PENDANAAN UMK<br>(USAHA MIKRO & KECIL)</td>
                <td style="text-align: end;"><img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                        style="width: 12rem;"></td>
            </tr>
        </table>
        <div class="font-bold text-center" style="font-size: 1.25rem;" class="mb-4">PAKTA INTEGRITAS</div>
        <div style="height: 2rem;"></div>
        <div style="font-size: 1.1rem;" class="mb-4">Dalam rangka mendukung perusahaan yang bersih dari
            praktik penyuapan melalui penerapan
            Sistem Manajemen Anti Penyuapan (SMAP), kami sebagai calon mitra binaan dengan ini
            menyatakan dengan sebenarnya bahwa :</div>
        <div style="height: 2rem;"></div>
        <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
            <tr>
                <td width="5%">1.</td>
                <td>Kami berjanji akan mengikuti program Pendanaan UMK (PUMK) melalui pinjaman modal
                    kerja secara bersih, transparan dan profesional untuk memberikan hasil kerja terbaik dan
                    tidak akan melakukan praktik Korupsi, Kolusi dan Nepotisme (KKN) dengan karyawan
                    Departemen CSR PT Petrokimia Gresik, ataupun sebaliknya.
                </td>
            </tr>
            <tr>
                <td width="5%">2.</td>
                <td>Kami tidak akan menerima sesuatu dalam bentuk apapun dari karyawan Departemen CSR
                    PT Petrokimia Gresik dan kami tidak akan memberikan sesuatu dalam bentuk apapun juga
                    kepada karyawan Departemen CSR PT Petrokimia Gresik
                </td>
            </tr>
            <tr>
                <td width="5%">3.</td>
                <td>Apabila terbukti melanggar hal – hal yang telah dinyatakan dalam <span class="font-bold">PAKTA
                        INTEGRITAS</span> ini,
                    maka kami bersedia dikenakan sanksi sesuai dengan peraturan perundang – undangan yang
                    berlaku.
                </td>
            </tr>
        </table>
        <div style="font-size: 1.1rem;" class="mb-4">Demikian pernyataan ini kami buat dengan sebenar –
            benarnya dan dapat
            dipertanggungjawabkan.</div>
        <div style="height: 3rem;"></div>
        <div style="font-size: 1.1rem;" class="mb-4">............................. , ......,
            .................. {{ date('Y') }}</div>
        <div style="height: 5rem;"></div>
        <div class="">
            ({{ $utama->user_name }})
        </div>
    </div>
    <div class="px-16 py-14" style="height: 1220px; @if ($utama->business_form_id == 4) margin-bottom: 24rem; @endif">
        <div style="height: 2rem;"></div>
        <table style="width: 100%;" class="mb-4">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                <td class="text-2xl font-bold text-center">PROPOSAL PROGRAM PENDANAAN UMK<br>(USAHA MIKRO & KECIL)</td>
                <td style="text-align: end;"><img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}"
                        style="width: 12rem;"></td>
            </tr>
        </table>
        <div class="font-bold text-center" style="font-size: 1.25rem;" class="mb-4">SURAT PERMOHONAN
            PINJAMAN PUMK</div>
        <div style="height: 2rem;"></div>
        <div style="font-size: 1.1rem;" class="mb-4">Saya yang bertanda tangan di bawah ini :</div>
        <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
            <tr>
                <td width="25%">Nama</td>
                <td>: {{ $utama->user_name }}</td>
            </tr>
            <tr>
                <td width="25%">Alamat</td>
                <td>: {{ $utama->user_address }}</td>
            </tr>
            <tr>
                <td width="25%">Pekerjaan</td>
                <td>: {{ $utama->user_profession }}</td>
            </tr>
            <tr>
                <td width="25%">No. Telp/HP</td>
                <td>: {{ $utama->user_phone }}</td>
            </tr>
            <tr>
                <td width="25%">Sektor</td>
                <td>: {{ $utama->business->sector->name }}</td>
            </tr>
        </table>
        <div style="font-size: 1.1rem;" class="mb-4">Pada hari ini tanggal
            {{ $utama->created_at->format('d, M Y') }} , kami memohon agar diberikan pinjaman
            Pendanaan UMK untuk menunjang dan meningkatkan hasil penjualan pada usaha kami
        </div>
        <div style="font-size: 1.1rem;" class="mb-4">Rencana pembelian produk non-subsidi PT Petrokimia
            Gresik sebagai berikut :</div>
        <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
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
                    <td width="10%">{{ $item->qty }}</td>
                    <td width="30%">Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
                    <td width="25%">Rp. {{ number_format($item->price * $item->qty, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </table>
        <div style="font-size: 1.1rem;" class="mb-4">Setelah menerima pencairan Pendanaan UMK (PUMK) Dep. CSR
            PT Petrokimia Gresik. Kami
            berharap dapat membeli produk non subsidi yang sudah kami pilih sesuai dengan kolom di atas
            melalui distributor <span class="font-bold">{{ $utama->product_distributor }}</span>
        </div>
        <div style="font-size: 1.1rem;" class="mb-4">Demikian formulir ini kami isi tanpa ada unsur paksaan
            dari pihak manapun.</div>
        <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
            <tr>
                <td width="33%" style="text-align: center;">
                    Mengetahui,<br>
                    Calon Mitra Binaan<br><br><br><br><br><br><br><br><br>
                    ({{ $utama->user_name }})
                </td>
                <td width="33%" style="text-align: center;">
                    <br>
                    {{ $people->one_title }}<br><br><br><br><br><br><br><br><br>
                    ({{ $people->one }})
                </td>
                <td width="33%" style="text-align: center;">
                    Menyetujui,<br>
                    {{ $people->two_title }}<br><br><br><br><br><br><br><br><br>
                    ({{ $people->two }})
                </td>
            </tr>
        </table>
    </div>
    @if ($utama->business_form_id == 4)
        @if ($utama->business->sector_id == 6)
            @foreach ($utama->members as $member)
                <div class="px-16 py-14"
                    style="height: 1220px; @if (!$loop->last) margin-bottom: 24rem; @endif">
                    <div style="height: 2rem;"></div>
                    <table style="width: 100%;" class="mb-4">
                        <tr>
                            <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                            <td class="text-2xl font-bold text-center">FORMULIR PINJAMAN MODAL KERJA<br>USAHA PERIKANAN
                                {{ $utama->business->name }}
                            </td>
                            <td style="text-align: end;"><img
                                    src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}" style="width: 12rem;">
                            </td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="25%">Desa/Kelurahan</td>
                            <td>: {{ $utama->user_village }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Kecamatan</td>
                            <td>: {{ $utama->user_district }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Kabupaten</td>
                            <td>: {{ $utama->user_city }}</td>
                        </tr>
                    </table>
                    <hr>
                    <table style="font-size: 1.1rem; width: 100%; margin-bottom: 8rem;">
                        <tr>
                            <td width="5%">1.</td>
                            <td width="30%">Nama</td>
                            <td>: {{ $member->name }}</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Alamat</td>
                            <td>: {{ $member->address }}</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Pendapatan rata-rata (1 tahun)</td>
                            <td>: {{ $member->income }}</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Biaya usaha (1 tahun)</td>
                            <td>: {{ $member->cost }}</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Keuntungan (1 tahun)</td>
                            <td>: {{ $member->profit }}</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Nilai Kekayaan</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tanah</td>
                            <td>: Rp. {{ number_format($member->land, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Bangunan</td>
                            <td>: Rp. {{ number_format($member->building, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Alat Kerja/Mesin</td>
                            <td>: Rp. {{ number_format($member->production_tools, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Persediaan</td>
                            <td>: Rp. {{ number_format($member->supply, 0, ',', '.') }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td></td>
                            <td>Jumlah</td>
                            <td>: Rp.
                                {{ number_format($member->land + $member->building + $member->production_tools + $member->supply, 0, ',', '.') }}
                            </td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Pinjaman Yang Diminta</td>
                            <td>: Rp. {{ number_format($member->loan_amount, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Rencana Penggunaan Pinjaman</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pembelian Bakalan: {{ $member->cow_count }} ekor</td>
                            <td>: Rp. {{ number_format($member->cow_price, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biaya Perawatan: </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tenaga Kerja</td>
                            <td>: Rp. {{ number_format($member->human_resource, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Obat-obatan</td>
                            <td>: Rp. {{ number_format($member->medicine, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pakan: </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Konsentrate</td>
                            <td>: Rp. {{ number_format($member->concentrate, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>HMT (Rumput, dll)</td>
                            <td>: Rp. {{ number_format($member->hmt, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biaya Garap</td>
                            <td>: Rp. {{ number_format($member->cultivation, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Transportasi</td>
                            <td>: Rp. {{ number_format($member->transportation, 0, ',', '.') }}</td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="50%" style="text-align: center;">

                            </td>
                            <td width="50%" style="text-align: center;">
                                .................................,
                                ....-...............{{ $member->created_at->year }}
                            </td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="38%" style="text-align: center;">
                                Mengetahui,<br><br><br><br><br><br><br><br><br><br>
                                Ketua Kelompok
                            </td>
                            <td width="24%"
                                style="width:4cm; height: 6cm; text-align: center; border: 2px solid black; vertical-align: middle;">
                                Pas Foto<br>
                                4x6<br>
                            </td>
                            <td width="38%" style="text-align: center;">
                                Hormat Kami,<br><br><br><br><br><br><br><br><br><br>
                                Pemohon
                            </td>
                        </tr>
                    </table>
                </div>
            @endforeach
        @elseif ($utama->business->sector_id == 2)
            @foreach ($utama->members as $member)
                <div class="px-16 py-14"
                    style="height: 1220px; @if (!$loop->last) margin-bottom: 24rem; @endif">
                    <div style="height: 2rem;"></div>
                    <table style="width: 100%;" class="mb-4">
                        <tr>
                            <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                            <td class="text-2xl font-bold text-center">FORMULIR PINJAMAN MODAL KERJA<br>USAHA PERIKANAN
                                {{ $utama->business->name }}
                            </td>
                            <td style="text-align: end;"><img
                                    src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}" style="width: 12rem;">
                            </td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="25%">Desa/Kelurahan</td>
                            <td>: {{ $utama->user_village }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Kecamatan</td>
                            <td>: {{ $utama->user_district }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Kabupaten</td>
                            <td>: {{ $utama->user_city }}</td>
                        </tr>
                    </table>
                    <hr>
                    <table style="font-size: 1.1rem; width: 100%; margin-bottom: 8rem;">
                        <tr>
                            <td width="5%">1.</td>
                            <td width="30%">Nama</td>
                            <td>: {{ $member->name }}</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Alamat</td>
                            <td>: {{ $member->address }}</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Pendapatan rata-rata per panen</td>
                            <td>: {{ $member->income }}</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Biaya usaha per panen</td>
                            <td>: {{ $member->cost }}</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Keuntungan</td>
                            <td>: {{ $member->profit }}</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Lahan Yang Digarap</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Status</td>
                            <td>: {{ $member->lo->name }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Luas</td>
                            <td>: {{ $member->land_area }} m2
                            </td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Nilai Kekayaan</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tanah</td>
                            <td>: Rp. {{ number_format($member->land, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Bangunan</td>
                            <td>: Rp. {{ number_format($member->building, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Alat Kerja/Mesin</td>
                            <td>: Rp. {{ number_format($member->production_tools, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Persediaan</td>
                            <td>: Rp. {{ number_format($member->supply, 0, ',', '.') }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td></td>
                            <td>Jumlah</td>
                            <td>: Rp.
                                {{ number_format($member->land + $member->building + $member->production_tools + $member->supply, 0, ',', '.') }}
                            </td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Pinjaman Yang Diminta</td>
                            <td>: Rp. {{ number_format($member->loan_amount, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Rencana Penggunaan Pinjaman</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pembelian Bibit</td>
                            <td>: Rp. {{ number_format($member->seed, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pembelian Pakan</td>
                            <td>: Rp. {{ number_format($member->feed, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Obat-obatan</td>
                            <td>: Rp. {{ number_format($member->medicine, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biaya Garap</td>
                            <td>: Rp. {{ number_format($member->cultivation, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Transportasi</td>
                            <td>: Rp. {{ number_format($member->transportation, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lain-lain</td>
                            <td>: Rp. {{ number_format($member->others, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Jangka Waktu Usaha (Bulan)</td>
                            <td>: {{ $member->period_month }} bulan</td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="50%" style="text-align: center;">

                            </td>
                            <td width="50%" style="text-align: center;">
                                .................................,
                                ....-...............{{ $member->created_at->year }}
                            </td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="38%" style="text-align: center;">
                                Mengetahui,<br><br><br><br><br><br><br><br><br><br>
                                Ketua Kelompok
                            </td>
                            <td width="24%"
                                style="width:4cm; height: 6cm; text-align: center; border: 2px solid black; vertical-align: middle;">
                                Pas Foto<br>
                                4x6<br>
                            </td>
                            <td width="38%" style="text-align: center;">
                                Hormat Kami,<br><br><br><br><br><br><br><br><br><br>
                                Pemohon
                            </td>
                        </tr>
                    </table>
                </div>
            @endforeach
        @elseif ($utama->business->sector_id == 3)
            @foreach ($utama->members as $member)
                <div class="px-16 py-14"
                    style="height: 1220px; @if (!$loop->last) margin-bottom: 24rem; @endif">
                    <div style="height: 2rem;"></div>
                    <table style="width: 100%;" class="mb-4">
                        <tr>
                            <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                            <td class="text-2xl font-bold text-center">FORMULIR PINJAMAN MODAL KERJA<br>USAHA PERTANIAN
                                {{ $utama->business->name }}
                            </td>
                            <td style="text-align: end;"><img
                                    src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}" style="width: 12rem;">
                            </td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="25%">Desa/Kelurahan</td>
                            <td>: {{ $utama->user_village }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Kecamatan</td>
                            <td>: {{ $utama->user_district }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Kabupaten</td>
                            <td>: {{ $utama->user_city }}</td>
                        </tr>
                    </table>
                    <hr>
                    <table style="font-size: 1.1rem; width: 100%; margin-bottom: 8rem;">
                        <tr>
                            <td width="5%">1.</td>
                            <td width="30%">Nama</td>
                            <td>: {{ $member->name }}</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Alamat</td>
                            <td>: {{ $member->address }}</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Pendapatan rata-rata per panen</td>
                            <td>: {{ $member->income }}</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Biaya usaha per panen</td>
                            <td>: {{ $member->cost }}</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Keuntungan</td>
                            <td>: {{ $member->profit }}</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Lahan Yang Digarap</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Status</td>
                            <td>: {{ $member->lo->name }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Luas</td>
                            <td>: {{ $member->land_area }} m2
                            </td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Nilai Kekayaan</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tanah</td>
                            <td>: Rp. {{ number_format($member->land, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Bangunan</td>
                            <td>: Rp. {{ number_format($member->building, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Alat Kerja/Mesin</td>
                            <td>: Rp. {{ number_format($member->production_tools, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Persediaan</td>
                            <td>: Rp. {{ number_format($member->supply, 0, ',', '.') }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td></td>
                            <td>Jumlah</td>
                            <td>: Rp.
                                {{ number_format($member->land + $member->building + $member->production_tools + $member->supply, 0, ',', '.') }}
                            </td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Pinjaman Yang Diminta</td>
                            <td>: Rp. {{ number_format($member->loan_amount, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Rencana Penggunaan Pinjaman</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pembelian Bibit</td>
                            <td>: Rp. {{ number_format($member->seed, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pembelian Pakan</td>
                            <td>: Rp. {{ number_format($member->feed, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Obat-obatan</td>
                            <td>: Rp. {{ number_format($member->medicine, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biaya Garap</td>
                            <td>: Rp. {{ number_format($member->cultivation, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Transportasi</td>
                            <td>: Rp. {{ number_format($member->transportation, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lain-lain</td>
                            <td>: Rp. {{ number_format($member->others, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Jangka Waktu Usaha (Bulan)</td>
                            <td>: {{ $member->period_month }} bulan</td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="50%" style="text-align: center;">

                            </td>
                            <td width="50%" style="text-align: center;">
                                .................................,
                                ....-...............{{ $member->created_at->year }}
                            </td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="38%" style="text-align: center;">
                                Mengetahui,<br><br><br><br><br><br><br><br><br><br>
                                Ketua Kelompok
                            </td>
                            <td width="24%"
                                style="width:4cm; height: 6cm; text-align: center; border: 2px solid black; vertical-align: middle;">
                                Pas Foto<br>
                                4x6<br>
                            </td>
                            <td width="38%" style="text-align: center;">
                                Hormat Kami,<br><br><br><br><br><br><br><br><br><br>
                                Pemohon
                            </td>
                        </tr>
                    </table>
                </div>
            @endforeach
        @elseif ($utama->business->sector_id == 8)
            @foreach ($utama->members as $member)
                <div class="px-16 py-14"
                    style="height: 1220px; @if (!$loop->last) margin-bottom: 24rem; @endif">
                    <div style="height: 2rem;"></div>
                    <table style="width: 100%;" class="mb-4">
                        <tr>
                            <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 12rem;"></td>
                            <td class="text-2xl font-bold text-center">FORMULIR PINJAMAN MODAL KERJA<br>USAHA
                                PERKEBUNAN
                                {{ $utama->business->name }}
                            </td>
                            <td style="text-align: end;"><img
                                    src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}" style="width: 12rem;">
                            </td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="25%">Desa/Kelurahan</td>
                            <td>: {{ $utama->user_village }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Kecamatan</td>
                            <td>: {{ $utama->user_district }}</td>
                        </tr>
                        <tr>
                            <td width="25%">Kabupaten</td>
                            <td>: {{ $utama->user_city }}</td>
                        </tr>
                    </table>
                    <hr>
                    <table style="font-size: 1.1rem; width: 100%; margin-bottom: 8rem;">
                        <tr>
                            <td width="5%">1.</td>
                            <td width="30%">Nama</td>
                            <td>: {{ $member->name }}</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Alamat</td>
                            <td>: {{ $member->address }}</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Pendapatan rata-rata per panen</td>
                            <td>: {{ $member->income }}</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Biaya usaha per panen</td>
                            <td>: {{ $member->cost }}</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Keuntungan</td>
                            <td>: {{ $member->profit }}</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Lahan Yang Digarap</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Status</td>
                            <td>: {{ $member->lo->name }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Luas</td>
                            <td>: {{ $member->land_area }} m2
                            </td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Nilai Kekayaan</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tanah</td>
                            <td>: Rp. {{ number_format($member->land, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Bangunan</td>
                            <td>: Rp. {{ number_format($member->building, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Alat Kerja/Mesin</td>
                            <td>: Rp. {{ number_format($member->production_tools, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Persediaan</td>
                            <td>: Rp. {{ number_format($member->supply, 0, ',', '.') }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td></td>
                            <td>Jumlah</td>
                            <td>: Rp.
                                {{ number_format($member->land + $member->building + $member->production_tools + $member->supply, 0, ',', '.') }}
                            </td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Pinjaman Yang Diminta</td>
                            <td>: Rp. {{ number_format($member->loan_amount, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Rencana Penggunaan Pinjaman</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pembelian Bibit</td>
                            <td>: Rp. {{ number_format($member->seed, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pembelian Pakan</td>
                            <td>: Rp. {{ number_format($member->feed, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Obat-obatan</td>
                            <td>: Rp. {{ number_format($member->medicine, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biaya Garap</td>
                            <td>: Rp. {{ number_format($member->cultivation, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Transportasi</td>
                            <td>: Rp. {{ number_format($member->transportation, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lain-lain</td>
                            <td>: Rp. {{ number_format($member->others, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Jangka Waktu Usaha (Bulan)</td>
                            <td>: {{ $member->period_month }} bulan</td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="50%" style="text-align: center;">

                            </td>
                            <td width="50%" style="text-align: center;">
                                .................................,
                                ....-...............{{ $member->created_at->year }}
                            </td>
                        </tr>
                    </table>
                    <table style="font-size: 1.1rem; width: 100%;" class="mb-4">
                        <tr>
                            <td width="38%" style="text-align: center;">
                                Mengetahui,<br><br><br><br><br><br><br><br><br><br>
                                Ketua Kelompok
                            </td>
                            <td width="24%"
                                style="width:4cm; height: 6cm; text-align: center; border: 2px solid black; vertical-align: middle;">
                                Pas Foto<br>
                                4x6<br>
                            </td>
                            <td width="38%" style="text-align: center;">
                                Hormat Kami,<br><br><br><br><br><br><br><br><br><br>
                                Pemohon
                            </td>
                        </tr>
                    </table>
                </div>
            @endforeach
        @endif
    @endif
</body>

</html>

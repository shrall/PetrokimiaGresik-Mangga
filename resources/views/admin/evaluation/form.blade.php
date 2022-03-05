<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

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
    <div class="px-16 py-14" style="height: 1220px;">
        <table style="width: 100%;" class="mb-4">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 16rem;"></td>
                <td style="text-align: center;"><br>
                    <div class="font-bold">Nomor Dokumen : {{ $evaluation->utama->business->registration_number }}
                    </div>
                    <hr>
                    EVALUASI & HASIL SURVEY<br>
                    PINJAMAN MODAL KERJA <br>
                    PROGRAM PENDANAAN UMK (USAHA MIKRO & KECIL)
                </td>
                <td style="text-align: end;">
                    <img src="{{ asset('assets/svg/mangga-logo-with-text.svg') }}" style="width: 16rem;">
                </td>
            </tr>
        </table>
        <hr>
        <table style="font-size: 1.25rem;">
            <tr>
                <td>Sektor Usaha</td>
                <td width="35%">: {{ $evaluation->sector->name }}</td>
                <td>|</td>
                <td>Bentuk Usaha</td>
                <td>: {{ $evaluation->utama->businessform->name }}</td>
            </tr>
            <tr>
                <td>Komoditi</td>
                <td width="35%">: {{ $evaluation->commodity }}</td>
            </tr>
        </table>
        <hr>
        <div style="font-size: 1.5rem;">DATA CALON MITRA BINAAN</div>
        <table style="font-size: 1.15rem;">
            <tr>
                <td>No. Proposal / Tahun</td>
                <td>:
                    {{ $evaluation->utama->business->registration_number }}/{{ date('Y', strtotime($evaluation->utama->created_at)) }}
                </td>
            </tr>
            <tr>
                <td>Nama Usaha</td>
                <td>: {{ $evaluation->utama->business->name }}</td>
                <td>Nama Pemilik</td>
                <td>: {{ $evaluation->utama->user_name }}</td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Alamat Tempat Tinggal</td>
                <td>: {{ $evaluation->utama->user_address }} | RT : {{ $evaluation->utama->user_rt }} RW :
                    {{ $evaluation->utama->user_rw }}</td>
                <td>Telepon / HP</td>
                <td>: {{ $evaluation->utama->user_phone }}</td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Desa/Kelurahan</td>
                <td>: {{ $evaluation->utama->user_village }}</td>
                <td style="vertical-align: top;">Kecamatan</td>
                <td>: {{ $evaluation->utama->user_district }}</td>
            </tr>
            <tr>
                <td style="vertical-align: top;">Kabupaten/Kota</td>
                <td>: {{ $evaluation->utama->user_city }}</td>
                <td style="vertical-align: top;">Provinsi</td>
                <td>: {{ $evaluation->utama->user_province }}</td>
            </tr>
        </table>
        <hr>
        <div style="font-size: 1.5rem;">EVALUASI</div>
        <table style="font-size: 1.15rem;">
            <tr>
                <td></td>
                <td width="30%"><input type="checkbox" {{ $evaluation->installment_type == 0 ? 'checked' : '' }}>
                    Angsuran (AN)</td>
                <td></td>
                <td><input type="checkbox" {{ $evaluation->installment_type == 1 ? 'checked' : '' }}> Yarnen (YN)
                </td>
            </tr>
            <tr>
                <td>Kas</td>
                <td>: Rp.
                    {{ number_format($evaluation->utama->treasury, 0, ',', '.') }}</td>
                <td>Jumlah Anggota</td>
                <td>: {{ $evaluation->utama->member_count }}</td>
            </tr>
            <tr>
                <td>Piutang</td>
                <td>: Rp.
                    {{ number_format($evaluation->utama->credit, 0, ',', '.') }}</td>
                <td>Luas</td>
                <td>: {{ $evaluation->land_area }} m2/ha | Jumlah : {{ $evaluation->animal_count }} ekor</td>
            </tr>
            <tr>
                <td>Persediaan</td>
                <td>: Rp.
                    {{ number_format($evaluation->utama->supply, 0, ',', '.') }}</td>
                <td>Kemampuan Kandang</td>
                <td>: {{ $evaluation->shed_count }} ekor</td>
            </tr>
            <tr>
                <td>Peralatan/Kendaraan</td>
                <td>: Rp.
                    {{ number_format($evaluation->utama->vehicle + $evaluation->utama->production_tools, 0, ',', '.') }}
                </td>
                <td>Peralatan & Persediaan</td>
                <td>: Rp.
                    {{ number_format($evaluation->asset_total, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="font-bold">TOTAL ASET BERSIH</td>
                <td>: Rp.
                    {{ number_format($evaluation->utama->vehicle + $evaluation->utama->production_tools + $evaluation->utama->credit + $evaluation->utama->treasury, 0, ',', '.') }}
                </td>
            </tr>
            <tr>
                <td>Penjualan 1 Tahun</td>
                <td>: Rp.
                    {{ number_format($evaluation->utama->sales_value, 0, ',', '.') }}
                </td>
            </tr>
            <tr>
                <td>Biaya Usaha</td>
                <td>: Rp.
                    {{ number_format($evaluation->utama->total_cost, 0, ',', '.') }}
                </td>
            </tr>
            <tr>
                <td class="font-bold">LABA USAHA</td>
                <td>: Rp.
                    {{ number_format($evaluation->utama->sales_value + $evaluation->utama->total_cost, 0, ',', '.') }}
                </td>
                <td class="font-bold">LABA USAHA/PANEN</td>
                <td>: Rp.
                    {{ number_format($evaluation->profit_per_harvest, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>Permintaan Pinjaman</td>
                <td>: Rp.
                    {{ number_format($evaluation->utama->request_amount, 0, ',', '.') }}</td>
                <td>Permintaan Pinjaman</td>
                <td>: Rp.
                    {{ number_format($evaluation->utama->request_amount, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>Pinjaman Tahap</td>
                <td>: {{ $evaluation->loan_step }}</td>
                <td>Pinjaman Tahap</td>
                <td>: {{ $evaluation->loan_step }}</td>
            </tr>
            <tr>
                <td>Kemampuan Angsur</td>
                <td>: Rp.
                    {{ number_format(($evaluation->utama->sales_value + $evaluation->utama->total_cost) / 36, 0, ',', '.') }}
                </td>
                <td>Luas</td>
                <td>: {{ $evaluation->land_area_surveyor }} m2/ha | Jumlah :
                    {{ $evaluation->animal_count_surveyor }} ekor</td>
            </tr>
            <tr>
                <td>Maks. Pinjaman</td>
                <td>: Rp. 250.000.000
                </td>
            </tr>
            <tr>
                <td>Angsuran</td>
                <td>: Rp.
                    {{ number_format($evaluation->installment_amount, 0, ',', '.') }} /bulan
                </td>
            </tr>
            <tr>
                <td>Masa Pinjaman</td>
                <td>: {{ $evaluation->loan_period }} bulan
                </td>
                <td>Masa Pinjaman</td>
                <td>: {{ $evaluation->loan_period }} bulan
                </td>
            </tr>
            <tr>
                <td>Masa Tenggang</td>
                <td>: {{ $evaluation->grace_period }} bulan
                </td>
                <td>Termin</td>
                <td>: {{ $evaluation->term_group }} termin
                </td>
            </tr>
            <tr>
                <td>Jumlah Yang Dilayani</td>
                <td>: {{ $evaluation->number_served }} KT (Khusus Kios Pupuk)
                </td>
            </tr>
        </table>
        <hr>
        <div style="font-size: 1.5rem;">DATA AGUNAN</div>
        <table style="font-size: 1.15rem;">
            <tr>
                <td>Jaminan/Agunan</td>
                <td>: <input type="checkbox" {{ $evaluation->collateral_date ? 'checked' : '' }}>Sertifikat | Luas :
                    {{ $evaluation->collateral_area }} m2</td>
            </tr>
            <tr>
                <td>Taksiran Harga</td>
                <td>: Rp.
                    {{ number_format($evaluation->collateral_price, 0, ',', '.') }}
                </td>
            </tr>
        </table>
        <hr>
        <div style="font-size: 1.5rem;">USULAN SURVEYOR</div>
        <table style="font-size: 1.15rem; margin-bottom:4rem;">
            <tr>
                <td>Nama Surveyor</td>
                <td width="55%">: {{$evaluation->surveyor_name}}</td>
                <td>Tanggal Survey</td>
                <td>: {{$evaluation->survey_date}}</td>
            </tr>
            <tr>
                <td>Hasil Survey</td>
                <td>: {{$evaluation->utama->business->status == 5 ? 'DITOLAK' : 'DITERIMA'}}
                </td>
            </tr>
            <tr>
                <td>Usulan Pinjaman</td>
                <td>: Rp.
                    {{ number_format($evaluation->loan_suggestion, 0, ',', '.') }}
                </td>
            </tr>
        </table>
        <table style="font-size: 1.25rem; text-align: center; margin-bottom: 4rem; width: 100%;">
            <tr>
                <td width="33%">Diusulkan Oleh<br>Surveyor</td>
                <td width="33%">Diperiksa Oleh<br>AVP Kemitraan</td>
                <td width="33%">Disetujui Oleh<br>VP CSR</td>
            </tr>
        </table>
    </div>
</body>

</html>

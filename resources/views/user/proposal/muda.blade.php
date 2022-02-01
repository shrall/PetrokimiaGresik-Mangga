<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        .text-center {
            text-align: center;
        }

        .text-xl {
            font-size: 1.25rem;
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

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .font-lb {
            font-family: "Libre Baskerville";
        }

    </style>
</head>

<body class="" style="font-family: Arial;">
    <div class="px-16 py-14"
        style="height: 1220px; padding-bottom: 10rem; margin-bottom: 4rem; background-repeat: no-repeat; background-size: contain; background-position: center; background-image: url({{ asset('assets/svg/proposal-muda.svg') }})">
        <table style="width: 100%; padding-bottom: 12rem;">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 16rem;"></td>
                <td style="text-align: end;"><img src="{{ asset('assets/img/mangga-muda.png') }}"
                        style="width: 16rem;">
                </td>
            </tr>
        </table>
        <div class="font-bold text-center text-4xl font-lb" style="margin-bottom: 3rem;">{{ $muda->business->name }}
        </div>
        <div class="text-center" style="height: 20%; margin-bottom: 7rem;">
            <img src="{{ asset('uploads/mangga/logos/' . $muda->business->logo) }}" style="height: 100%;">
        </div>
        <div style="height: 40%">
            <table style="margin-left: auto; margin-right: auto; font-size: 1.25rem;" class="mt-2">
                <tr>
                    <td>Judul Usaha</td>
                    <td>: {{ $muda->business_title }}</td>
                </tr>
                <tr>
                    <td>Nama / No. Mhs. Ketua Tim</td>
                    <td>: {{ $muda->leader_name }}</td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">Nama Anggota</td>
                    <td>: @foreach ($muda->members as $member)
                            @if ($loop->iteration != 1)
                                <span style="visibility: hidden;">:</span>
                            @endif{{ $member->name }}<br>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Asal Universitas</td>
                    <td>: {{ $muda->university }}</td>
                </tr>
            </table>
        </div>
        <div class="text-xl text-center">Fakultas {{ $muda->faculty }}</div>
        <div class="text-xl text-center">{{ $muda->university }}</div>
        <div class="text-xl text-center">{{ $muda->business->city->name }}</div>
        <div class="text-xl text-center">{{ date('Y') }}</div>
    </div>
    <div class="px-16 py-14"
        style="height: 1220px; padding-bottom: 10rem; margin-bottom: 4rem; border-bottom: solid 4px #009345;">
        <table style="width: 100%;">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 16rem;"></td>
                <td style="text-align: end;"><img src="{{ asset('assets/img/mangga-muda.png') }}"
                        style="width: 16rem;">
                </td>
            </tr>
        </table>
        <div class="font-bold font-lb" style="font-size: 2rem; margin-bottom: 2rem;" class="mb-4">Table of Contents
        </div>
        <table style="width: 100%;border-collapse: collapse;">
            <tr>
                <td style=" background-color: #009345; border: solid 4px #009345; width: 40%;">
                    <div style="width: 5rem; padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px white; color:white; margin-left: auto; margin-right: 12px;"
                        class="text-center text-4xl font-lb">01</div>
                </td>
                <td style="padding-left: 12px;">Executive Resume</td>
            </tr>
            <tr>
                <td style=" background-color: #009345; border: solid 4px #009345;">
                    <div style="width: 5rem; padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px white; color:white; margin-left: auto; margin-right: 12px;"
                        class="text-center text-4xl font-lb">02</div>
                </td>
                <td style="padding-left: 12px;">Analisa Ide</td>
            </tr>
            <tr>
                <td style=" background-color: #009345; border: solid 4px #009345;">
                    <div style="width: 5rem; padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px white; color:white; margin-left: auto; margin-right: 12px;"
                        class="text-center text-4xl font-lb">03</div>
                </td>
                <td style="padding-left: 12px;">Analisa Pemasaran</td>
            </tr>
            <tr>
                <td style=" background-color: #009345; border: solid 4px #009345;">
                    <div style="width: 5rem; padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px white; color:white; margin-left: auto; margin-right: 12px;"
                        class="text-center text-4xl font-lb">04</div>
                </td>
                <td style="padding-left: 12px;">Analisa Operasional</td>
            </tr>
            <tr>
                <td style=" background-color: #009345; border: solid 4px #009345;">
                    <div style="width: 5rem; padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px white; color:white; margin-left: auto; margin-right: 12px;"
                        class="text-center text-4xl font-lb">05</div>
                </td>
                <td style="padding-left: 12px;">Target Usaha</td>
            </tr>
            <tr>
                <td style=" background-color: #009345; border: solid 4px #009345;">
                    <div style="width: 5rem; padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px white; color:white; margin-left: auto; margin-right: 12px;"
                        class="text-center text-4xl font-lb">06</div>
                </td>
                <td style="padding-left: 12px;">Analisa Keuangan</td>
            </tr>
            <tr>
                <td style=" background-color: #009345; border: solid 4px #009345;">
                    <div style="width: 5rem; padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px white; color:white; margin-left: auto; margin-right: 12px;"
                        class="text-center text-4xl font-lb">07</div>
                </td>
                <td style="padding-left: 12px;">Arus Kas (Cash-Flow) 6 Bulan Terakhir</td>
            </tr>
        </table>
    </div>
    <div class="px-16 py-14"
        style="height: 1220px; padding-bottom: 10rem; margin-bottom: 4rem; border-bottom: solid 4px #009345;">
        <table style="width: 100%;">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="height: 6rem;">
                    <img src="{{ asset('assets/img/mangga-muda.png') }}" style="height: 6rem;">
                </td>
                <td>
                    <div style="padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px #009345; color:#009345;"
                        class="text-center text-4xl font-lb">01</div>
                </td>
            </tr>
        </table>
        <div class="font-bold font-lb text-center" style="font-size: 1.5rem;" class="mb-4">Executive Resume
        </div>
        <div style="font-size: 1.1rem;" class="text-center mb-4">Berisi rangkuman isi business, antara lain: profil
            perusahan atau usaha, jenis sektor usaha, nilai
            penjualan per bulan/tahun saat ini, nilai aset perusahaan atau usaha 6 bulan terakhir, prospek
            pengembangan usaha, rencana pengembangan usaha, proyeksi/nilai target penjualan,
            kebutuhan dan sumber dana, rencana penggunaan dana, dan rencana pengembalian dana
            sesuai tenor pinjaman.</div>
        <hr>
        <div style="font-size: 1.1rem;" class="font-bold">Prospek</div>
        <div style="font-size: 1.1rem;" class="mb-4">{{ $muda->prospect }}</div>
    </div>
    <div class="px-16 py-14"
        style="height: 1220px; padding-bottom: 10rem; margin-bottom: 4rem; border-bottom: solid 4px #009345;">
        <table style="width: 100%;">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="height: 6rem;">
                    <img src="{{ asset('assets/img/mangga-muda.png') }}" style="height: 6rem;">
                </td>
                <td>
                    <div style="padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px #009345; color:#009345;"
                        class="text-center text-4xl font-lb">02</div>
                </td>
            </tr>
        </table>
        <div class="font-bold font-lb text-center" style="font-size: 1.5rem;" class="mb-4">Analisa Ide</div>
        <div style="font-size: 1.1rem;" class="text-center mb-4">Tuliskan deskripsi produk/usaha/jasa yang anda
            kembangkan. Termasuk keunggulan, ide,
            diferensiasi dan keunikan serta potensi pertumbuhan dan resikonya.</div>
        <hr>
        <div style="font-size: 1.1rem;" class="font-bold">Deskripsi</div>
        <div style="font-size: 1.1rem;" class="mb-4">{{ $muda->description }}</div>
    </div>
    <div class="px-16 py-14"
        style="height: 1220px; padding-bottom: 10rem; margin-bottom: 4rem; border-bottom: solid 4px #009345;">
        <table style="width: 100%;">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="height: 6rem;">
                    <img src="{{ asset('assets/img/mangga-muda.png') }}" style="height: 6rem;">
                </td>
                <td>
                    <div style="padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px #009345; color:#009345;"
                        class="text-center text-4xl font-lb">03</div>
                </td>
            </tr>
        </table>
        <div class="font-bold font-lb text-center" style="font-size: 1.5rem;" class="mb-4">Analisa Pemasaran
        </div>
        <div style="font-size: 1.1rem;" class="text-center mb-4">Jelaskan pangsa pasar produk atau jasa anda saat ini.
            Disertai dengan data-data yang
            mendukung, misalnya kegiatan pengembangan pemasaran, konsep STP, 4P dan peta
            positioning, kegiatan promosi, strategi penetapan harga, market share, analisis pesaing, trend
            perkembangan pasar dll.</div>
        <hr>
        <div style="font-size: 1.1rem;" class="font-bold">Pangsa Pasar Produk dan Go-To-Market Strategy</div>
        <div style="font-size: 1.1rem;" class="mb-4">{{ $muda->market_share }}</div>
        <div class="font-bold text-center" style="font-size: 1.1rem;" class="mb-4">Peta Positioning</div>
        <div class="text-center mb-4" style="height: 40%;">
            <img src="{{ asset('uploads/mangga/marketpositions/' . $muda->market_position) }}"
                style="height: 100%; max-width: 50rem;">
        </div>
    </div>
    <div class="px-16 py-14"
        style="height: 1220px; padding-bottom: 10rem; margin-bottom: 4rem; border-bottom: solid 4px #009345;">
        <table style="width: 100%;">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="height: 6rem;">
                    <img src="{{ asset('assets/img/mangga-muda.png') }}" style="height: 6rem;">
                </td>
                <td>
                    <div style="padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px #009345; color:#009345;"
                        class="text-center text-4xl font-lb">04</div>
                </td>
            </tr>
        </table>
        <div class="font-bold font-lb text-center" style="font-size: 1.5rem;" class="mb-4">Analisa Operasional
        </div>
        <div style="font-size: 1.1rem;" class="text-center mb-4">Jelaskan strategi produksi (bila barang) atau pola
            pelayanan (jasa) usaha anda. Misalnya strategi
            pemilihan komponen biaya produksi dan teknologi proses, desain struktur organisasi, serta
            analisa kebutuhan SDM dan desain kompetensi.</div>
        <hr>
        <div style="font-size: 1.1rem;" class="font-bold">Strategi Produksi</div>
        <div style="font-size: 1.1rem;" class="mb-4">{{ $muda->production_strategy }}</div>
        <div class="font-bold text-center" style="font-size: 1.1rem;" class="mb-4">Struktur Organisasi</div>
        <div class="text-center mb-4" style="height: 40%;">
            <img src="{{ asset('uploads/mangga/organizationstructures/' . $muda->organization_structure) }}"
                style="height: 100%; max-width: 50rem;">
        </div>
    </div>
    <div class="px-16 py-14"
        style="height: 1220px; padding-bottom: 10rem; margin-bottom: 4rem; border-bottom: solid 4px #009345;">
        <table style="width: 100%;">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="height: 6rem;">
                    <img src="{{ asset('assets/img/mangga-muda.png') }}" style="height: 6rem;">
                </td>
                <td>
                    <div style="padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px #009345; color:#009345;"
                        class="text-center text-4xl font-lb">05</div>
                </td>
            </tr>
        </table>
        <div class="font-bold font-lb text-center" style="font-size: 1.5rem;" class="mb-4">Target Usaha</div>
        <div style="font-size: 1.1rem;" class="text-center mb-4">Tuliskan pencapaian perkembangan usaha anda (omzet,
            asset, cashflow) dalam skala waktu
            sekaligus strategi produksi, pemasaran dan keuangan untuk mencapai target tersebut (atau
            strategi pengembangan usaha termasuk pola pembiayaannya).</div>
        <hr>
        <div style="font-size: 1.1rem;" class="font-bold">Rencana Untuk Mencapai Target</div>
        <div style="font-size: 1.1rem;" class="mb-4">{{ $muda->target_plan }}</div>
    </div>
    <div class="px-16 py-14"
        style="height: 1220px; padding-bottom: 10rem; margin-bottom: 4rem; border-bottom: solid 4px #009345;">
        <table style="width: 100%;">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="height: 6rem;">
                    <img src="{{ asset('assets/img/mangga-muda.png') }}" style="height: 6rem;">
                </td>
                <td>
                    <div style="padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px #009345; color:#009345;"
                        class="text-center text-4xl font-lb">06</div>
                </td>
            </tr>
        </table>
        <div class="font-bold font-lb text-center" style="font-size: 1.5rem;" class="mb-4">Analisa Keuangan
        </div>
        <div style="font-size: 1.1rem;" class="text-center mb-4">Lampirkan analisis investasi, rencana cashflow,
            estimasi
            rugi laba, laporan rugi laba dan hal-hal
            lain yang mendukung usaha anda misalnya struktur pendanaan</div>
        <hr>
        <div style="font-size: 1.1rem;" class="font-bold">Analisis Investasi dan Rencana Cashflow</div>
        <div style="font-size: 1.1rem;" class="mb-4">{{ $muda->finance }}</div>
        <div class="font-bold text-center" style="font-size: 1.1rem;" class="mb-4">Struktur Pendanaan</div>
        <div class="text-center mb-4" style="height: 40%;">
            <img src="{{ asset('uploads/mangga/financeattachments/' . $muda->finance_attachment) }}"
                style="height: 100%; max-width: 50rem;">
        </div>
    </div>
    <div class="px-16 py-14" style="height: 1220px;">
        <table style="width: 100%;">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="height: 6rem;">
                    <img src="{{ asset('assets/img/mangga-muda.png') }}" style="height: 6rem;">
                </td>
                <td>
                    <div style="padding-top: 20px; padding-bottom: 20px; border-radius: 50%; border: solid 2px #009345; color:#009345;"
                        class="text-center text-4xl font-lb">07</div>
                </td>
            </tr>
        </table>
        <div class="font-bold font-lb text-center" style="font-size: 1.5rem;" class="mb-8">
            Arus Kas (Cash-Flow) 6 Bulan Terakhir
        </div>
        <table class="" style="width: 100%; border: solid 1px gray;">
            <tr class="font-bold">
                <td class="" style="border: solid 1px gray;" width="20%">Bulan ke-</td>
                <td class="text-center" style="border: solid 1px gray;">1</td>
                <td class="text-center" style="border: solid 1px gray;">2</td>
                <td class="text-center" style="border: solid 1px gray;">3</td>
                <td class="text-center" style="border: solid 1px gray;">4</td>
                <td class="text-center" style="border: solid 1px gray;">5</td>
                <td class="text-center" style="border: solid 1px gray;">6</td>
            </tr>
            <tr>
                <td class="" style="border: solid 1px gray;">Penerimaan Penjualan</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->inflow_sales, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->inflow_sales, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->inflow_sales, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->inflow_sales, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->inflow_sales, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->inflow_sales, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="" style="border: solid 1px gray;">Penerimaan Pinjaman</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->inflow_loan, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->inflow_loan, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->inflow_loan, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->inflow_loan, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->inflow_loan, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->inflow_loan, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td class="" style="border: solid 1px gray;">Subtotal Penerimaan</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->inflow_subtotal, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->inflow_subtotal, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->inflow_subtotal, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->inflow_subtotal, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->inflow_subtotal, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->inflow_subtotal, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="" style="border: solid 1px gray;">Pembelian Asset (Investasi)</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->outflow_investment, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->outflow_investment, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->outflow_investment, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->outflow_investment, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->outflow_investment, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->outflow_investment, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="" style="border: solid 1px gray;">Pembelian Bahan Baku</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->outflow_ingredient, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->outflow_ingredient, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->outflow_ingredient, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->outflow_ingredient, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->outflow_ingredient, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->outflow_ingredient, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="" style="border: solid 1px gray;">Biaya Produksi Lain-lain</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->outflow_production, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->outflow_production, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->outflow_production, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->outflow_production, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->outflow_production, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->outflow_production, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="" style="border: solid 1px gray;">Biaya Pemeliharaan</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->outflow_maintenance, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->outflow_maintenance, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->outflow_maintenance, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->outflow_maintenance, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->outflow_maintenance, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->outflow_maintenance, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="" style="border: solid 1px gray;">Biaya Administrasi Lain-lain</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->outflow_admin, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->outflow_admin, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->outflow_admin, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->outflow_admin, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->outflow_admin, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->outflow_admin, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="" style="border: solid 1px gray;">Angsuran Pokok</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->outflow_installments, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->outflow_installments, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->outflow_installments, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->outflow_installments, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->outflow_installments, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->outflow_installments, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td class="" style="border: solid 1px gray;">Sub Total Pengeluaran</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->outflow_subtotal, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->outflow_subtotal, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->outflow_subtotal, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->outflow_subtotal, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->outflow_subtotal, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->outflow_subtotal, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td class="" style="border: solid 1px gray;">Selisih Kas</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->difference, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->difference, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->difference, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->difference, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->difference, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->difference, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td class="" style="border: solid 1px gray;">Selisih Kas Awal</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->difference_start, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->difference_start, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->difference_start, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->difference_start, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->difference_start, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->difference_start, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td class="" style="border: solid 1px gray;">Selisih Kas Akhir</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[0]->difference_end, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[1]->difference_end, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[2]->difference_end, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[3]->difference_end, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[4]->difference_end, 0, ',', '.') }}</td>
                <td class="" style="border: solid 1px gray;">
                    Rp. {{ number_format($muda->reports[5]->difference_end, 0, ',', '.') }}</td>
            </tr>
        </table>
    </div>
</body>

</html>

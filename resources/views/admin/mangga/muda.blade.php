@extends('layouts.admin')

@section('content')
    <div class="flex flex-col card items-center justify-center gap-y-4 px-8 py-6 mb-4">
        <div class="text-2xl font-bold mb-8">Status Pengajuan</div>
        <div class="flex flex-col xl:flex-row items-center justify-center gap-x-2">
            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                <div class="rounded-full bg-gray-400 p-4">
                    <span class="fa fa-fw fa-address-card text-white text-xl"></span>
                </div>
                <div
                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                    Lengkapi Data Diri</div>
            </div>
            <div class="block xl:hidden">
                <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
            </div>
            <div class="hidden xl:block">
                <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
            </div>
            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                <div class="rounded-full @if ($muda->business->status == 2) bg-mangga-orange-300 @else bg-gray-400 @endif p-4">
                    <span class="fa fa-fw fa-user-check text-white text-xl"></span>
                </div>
                <div
                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                    Submit Form Pengajuan</div>
            </div>
            @if (!$muda->business->rejected_at)
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full @if ($muda->business->status == 3) bg-mangga-orange-300 @else bg-gray-400 @endif p-4">
                        <span class="fa fa-fw fa-clipboard-check text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Pengajuan Terverifikasi</div>
                </div>
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full @if ($muda->business->status == 4) bg-mangga-orange-300 @else bg-gray-400 @endif p-4">
                        <span class="fa fa-fw fa-print text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Cetak Proposal</div>
                </div>
            @else
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full bg-mangga-red-300 p-4">
                        <span class="fa fa-fw fa-times text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Pengajuan Ditolak</div>
                </div>
            @endif
        </div>
        @if (Auth::user()->user_role == 2)
            <div class="flex items-center justify-center gap-x-4">
                <a href="{{ route('admin.muda.approve_surveyor', $muda->id) }}"
                    class="mangga-button-green cursor-pointer">Setujui
                </a>
                <a href="{{ route('admin.muda.reject', $muda->id) }}" class="mangga-button-red cursor-pointer">Tolak
                </a>
            </div>
        @elseif (Auth::user()->user_role == 3)
            @if ($muda->business->status == 2)
                <div class="flex items-center justify-center gap-x-4">
                    <a href="{{ route('admin.muda.approve_surveyor', $muda->id) }}"
                        class="mangga-button-green cursor-pointer">Setujui
                    </a>
                    <a href="{{ route('admin.muda.reject', $muda->id) }}" class="mangga-button-red cursor-pointer">Tolak
                    </a>
                </div>
            @endif
        @elseif (Auth::user()->user_role == 4)
            @if ($muda->business->status == 3)
                <div class="flex items-center justify-center gap-x-4">
                    <a href="{{ route('admin.muda.approve_surveyor', $muda->id) }}"
                        class="mangga-button-green cursor-pointer">Setujui
                    </a>
                    <a href="{{ route('admin.muda.reject', $muda->id) }}" class="mangga-button-red cursor-pointer">Tolak
                    </a>
                </div>
            @endif
        @endif
    </div>
    @if (Auth::user()->user_role == 2)
        <div class="card bg-white px-8 py-6 mb-4">
            <div class="text-2xl font-bold mb-2">Log Pengajuan</div>
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">No.</th>
                        <th data-priority="2">Deskripsi</th>
                        <th data-priority="3">Nama Admin</th>
                        <th data-priority="4">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($muda->business->logs as $log)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $log->description }}</td>
                            <td>{{ $log->admin->first_name . ' ' . $log->admin->last_name }}</td>
                            <td>{{ $log->created_at->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
    <div class="flex items-center justify-between mb-4">
        <div class="text-2xl font-bold">Detail Pengajuan</div>
        <a target="blank" href="{{ route('admin.muda.download', $muda->id) }}" class="text-lg hover:text-gray-700">
            <span class="fa fa-fw fa-file-download"></span>Preview Proposal Pengajuan
        </a>
    </div>
    <div class="card px-8 py-6 flex flex-col gap-y-4">
        <div class="text-xl font-bold">Data Pengajuan</div>
        <div class="text-lg font-bold">Nomor Registrasi : {{ $muda->business->status >= 3 ? $muda->business->registration_number : '-' }}</div>
        <div class="grid grid-cols-3 gap-x-4">
            <img src="{{ asset('uploads/mangga/logos/' . $muda->business->logo) }}" alt="" srcset=""
                class="w-full">
            <div class="flex flex-col gap-y-2">
                <div class="text-3xl font-bold">{{ $muda->business_title }}</div>
                <div class="text-xl">{{ $muda->leader_name }}</div>
                <div class="text-xl">{{ $muda->university }}</div>
                <div class="text-xl">{{ $muda->faculty }}</div>
                <div class="text-xl">{{ $muda->recommender }} - {{$muda->recommender_position}}</div>
                <div class="text-xl">{{ $muda->member_count }} Anggota
                </div>
            </div>
            <div class="flex flex-col gap-y-2">
                <div class="text-3xl font-bold">Anggota Tim</div>
                @foreach ($muda->members as $member)
                    <div class="text-xl">{{ $member->name }}</div>
                @endforeach
            </div>
        </div>
        <hr class="">
        <div class="text-xl font-bold underline">Executive Resume</div>
        <div class="grid grid-cols-12 gap-x-4">
            <img src="{{ asset('uploads/mangga/logos/' . $muda->business->logo) }}" alt="" srcset=""
                class="w-full col-span-5 rounded-lg">
            <div class="flex flex-col gap-y-2 col-span-7">
                <div class="text-3xl font-bold">{{ $muda->business->name }}</div>
                <div class="flex">{{ $muda->business->sector->name }} |
                    {{ $muda->business->subsector->name }}</div>
                <div class="flex flex-col gap-y-1">
                    <span>{{ $muda->business->address }}</span>
                    <span>{{ $muda->business->city->name }},
                        {{ $muda->business->province->name }}</span>
                    <span>{{ $muda->business->postal_code }}</span>
                </div>
            </div>
        </div>
        <div class="text-xl font-bold">Prospek Pengembangan Usaha</div>
        <div class="text-xl">{{ $muda->prospect }}</div>
        <div class="text-xl font-bold">Rencana Pengembangan Usaha</div>
        <div class="text-xl">{{ $muda->growth_plan }}</div>
        <div class="text-xl font-bold">Nilai Target Penjualan</div>
        <div class="text-xl">{{ $muda->target }}</div>
        <div class="text-xl font-bold">Kebutuhan dan Sumber Dana</div>
        <div class="text-xl">{{ $muda->needs }}</div>
        <div class="text-xl font-bold">Rencana Penggunaan Dana</div>
        <div class="text-xl">{{ $muda->utilization_plan }}</div>
        <div class="text-xl font-bold">Rencana Pengembalian Dana</div>
        <div class="text-xl">{{ $muda->return_plan }}</div>
        <hr>
        <div class="text-xl font-bold underline">Analisa Ide</div>
        <div class="text-xl font-bold">Deskripsi</div>
        <div class="text-xl">{{ $muda->description }}</div>
        <hr>
        <div class="text-xl font-bold underline">Analisa Pemasaran</div>
        <div class="text-xl font-bold">Pangsa Pasar Produk dan Go-To-Market Strategy</div>
        <div class="text-xl">{{ $muda->market_share }}</div>
        <div class="text-xl font-bold">Peta Positioning</div>
        <img src="{{ asset('uploads/mangga/marketpositions/' . $muda->market_position) }}" class="w-128">
        <hr>
        <div class="text-xl font-bold underline">Analisa Pemasaran</div>
        <div class="text-xl font-bold">Strategi Produksi</div>
        <div class="text-xl">{{ $muda->production_strategy }}</div>
        <div class="text-xl font-bold">Struktur Organisasi</div>
        <img src="{{ asset('uploads/mangga/organizationstructures/' . $muda->organization_structure) }}"
            class="w-128">
        <hr>
        <div class="text-xl font-bold underline">Target Usaha</div>
        <div class="text-xl font-bold">Rencana Untuk Mencapai Target</div>
        <div class="text-xl">{{ $muda->target_plan ?? 'asd' }}</div>
        <hr>
        <div class="text-xl font-bold underline">Analisa Keuangan</div>
        <div class="text-xl font-bold">Analisis Investasi dan Rencana Cashflow</div>
        <div class="text-xl">{{ $muda->finance }}</div>
        <div class="text-xl font-bold">Struktur Pendanaan</div>
        <img src="{{ asset('uploads/mangga/financeattachments/' . $muda->finance_attachment) }}" class="w-128">
        <hr>
        <div class="text-xl font-bold underline">Arus Kas (Cash-Flow) 6 Bulan Terakhir</div>
        <table class="border border-gray-600">
            <tr class="font-bold">
                <td class="border border-gray-600" width="40%">Bulan ke-</td>
                <td class="border border-gray-600">1</td>
                <td class="border border-gray-600">2</td>
                <td class="border border-gray-600">3</td>
                <td class="border border-gray-600">4</td>
                <td class="border border-gray-600">5</td>
                <td class="border border-gray-600">6</td>
            </tr>
            <tr>
                <td class="border border-gray-600">Penerimaan Penjualan</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->inflow_sales, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->inflow_sales, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->inflow_sales, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->inflow_sales, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->inflow_sales, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->inflow_sales, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="border border-gray-600">Penerimaan Pinjaman</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->inflow_loan, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->inflow_loan, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->inflow_loan, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->inflow_loan, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->inflow_loan, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->inflow_loan, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td class="border border-gray-600">Subtotal Penerimaan</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->inflow_subtotal, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->inflow_subtotal, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->inflow_subtotal, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->inflow_subtotal, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->inflow_subtotal, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->inflow_subtotal, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="border border-gray-600">Pembelian Asset (Investasi)</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->outflow_investment, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->outflow_investment, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->outflow_investment, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->outflow_investment, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->outflow_investment, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->outflow_investment, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="border border-gray-600">Pembelian Bahan Baku</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->outflow_ingredient, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->outflow_ingredient, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->outflow_ingredient, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->outflow_ingredient, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->outflow_ingredient, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->outflow_ingredient, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="border border-gray-600">Biaya Produksi Lain-lain</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->outflow_production, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->outflow_production, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->outflow_production, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->outflow_production, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->outflow_production, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->outflow_production, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="border border-gray-600">Biaya Pemeliharaan</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->outflow_maintenance, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->outflow_maintenance, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->outflow_maintenance, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->outflow_maintenance, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->outflow_maintenance, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->outflow_maintenance, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="border border-gray-600">Biaya Administrasi Lain-lain</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->outflow_admin, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->outflow_admin, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->outflow_admin, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->outflow_admin, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->outflow_admin, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->outflow_admin, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td class="border border-gray-600">Angsuran Pokok</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->outflow_installments, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->outflow_installments, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->outflow_installments, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->outflow_installments, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->outflow_installments, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->outflow_installments, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td class="border border-gray-600">Sub Total Pengeluaran</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->outflow_subtotal, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->outflow_subtotal, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->outflow_subtotal, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->outflow_subtotal, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->outflow_subtotal, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->outflow_subtotal, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td class="border border-gray-600">Selisih Kas</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->difference, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->difference, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->difference, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->difference, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->difference, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->difference, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td class="border border-gray-600">Selisih Kas Awal</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->difference_start, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->difference_start, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->difference_start, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->difference_start, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->difference_start, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->difference_start, 0, ',', '.') }}</td>
            </tr>
            <tr class="font-bold">
                <td class="border border-gray-600">Selisih Kas Akhir</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[0]->difference_end, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[1]->difference_end, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[2]->difference_end, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[3]->difference_end, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[4]->difference_end, 0, ',', '.') }}</td>
                <td class="border border-gray-600">
                    Rp. {{ number_format($muda->reports[5]->difference_end, 0, ',', '.') }}</td>
            </tr>
        </table>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
@endsection

@section('head')
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">


    <!--Datatables -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <style>
        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #0f7144 !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            background: #0f7144 !important;
            border: 1px solid transparent;
            /*border border-transparent*/
            cursor: pointer;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            color: #fff !important;
            cursor: default;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
            cursor: pointer;
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #0f7144 !important;
            /*bg-indigo-500*/
        }

        .paginate_button,
        .paginate_button:hover {
            color: #ffffff !important;
        }

    </style>
@endsection

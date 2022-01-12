@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:px-0 xl:pr-8">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        @if (Auth::user()->referral_code == 'mamud')

            <div class="col-span-12 xl:col-span-9 h-full">
                <div class="text-2xl font-bold mb-8">Detail Pengajuan</div>
                <div class="card px-8 py-6 flex flex-col gap-y-4">
                    <div class="text-xl font-bold">Data Pengajuan</div>
                    <div class="grid grid-cols-3 gap-x-4">
                        <img src="{{ asset('uploads/mangga/logos/' . Auth::user()->businesses[0]->logo) }}" alt=""
                            srcset="" class="w-full">
                        <div class="flex flex-col gap-y-2">
                            <div class="text-3xl font-bold">{{ Auth::user()->businesses[0]->muda->business_title }}</div>
                            <div class="text-xl">{{ Auth::user()->businesses[0]->muda->leader_name }}</div>
                            <div class="text-xl">{{ Auth::user()->businesses[0]->muda->university }}</div>
                            <div class="text-xl">{{ Auth::user()->businesses[0]->muda->faculty }}</div>
                            <div class="text-xl">{{ Auth::user()->businesses[0]->muda->member_count }} Anggota
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <div class="text-3xl font-bold">Anggota Tim</div>
                            @foreach (Auth::user()->businesses[0]->muda->members as $member)
                                <div class="text-xl">{{ $member->name }}</div>
                            @endforeach
                        </div>
                    </div>
                    <hr class="">
                    <div class="text-xl font-bold underline">Executive Resume</div>
                    <div class="grid grid-cols-12 gap-x-4">
                        <img src="{{ asset('uploads/mangga/logos/' . Auth::user()->businesses[0]->logo) }}" alt=""
                            srcset="" class="w-full col-span-5 rounded-lg">
                        <div class="flex flex-col gap-y-2 col-span-7">
                            <div class="text-3xl font-bold">{{ Auth::user()->businesses[0]->name }}</div>
                            <div class="flex">{{ Auth::user()->businesses[0]->sector->name }} |
                                {{ Auth::user()->businesses[0]->subsector->name }}</div>
                            <div class="flex flex-col gap-y-1">
                                <span>{{ Auth::user()->businesses[0]->address }}</span>
                                <span>{{ Auth::user()->businesses[0]->city->name }},
                                    {{ Auth::user()->businesses[0]->province->name }}</span>
                                <span>{{ Auth::user()->businesses[0]->postal_code }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-xl font-bold">Prospek Pengembangan Usaha</div>
                    <div class="text-xl">{{ Auth::user()->businesses[0]->muda->prospect }}</div>
                    <div class="text-xl font-bold">Rencana Pengembangan Usaha</div>
                    <div class="text-xl">{{ Auth::user()->businesses[0]->muda->growth_plan }}</div>
                    <div class="text-xl font-bold">Nilai Target Penjualan</div>
                    <div class="text-xl">{{ Auth::user()->businesses[0]->muda->target }}</div>
                    <div class="text-xl font-bold">Kebutuhan dan Sumber Dana</div>
                    <div class="text-xl">{{ Auth::user()->businesses[0]->muda->needs }}</div>
                    <div class="text-xl font-bold">Rencana Penggunaan Dana</div>
                    <div class="text-xl">{{ Auth::user()->businesses[0]->muda->utilization_plan }}</div>
                    <div class="text-xl font-bold">Rencana Pengembalian Dana</div>
                    <div class="text-xl">{{ Auth::user()->businesses[0]->muda->return_plan }}</div>
                    <hr>
                    <div class="text-xl font-bold underline">Analisa Ide</div>
                    <div class="text-xl font-bold">Deskripsi</div>
                    <div class="text-xl">{{ Auth::user()->businesses[0]->muda->description }}</div>
                    <hr>
                    <div class="text-xl font-bold underline">Analisa Pemasaran</div>
                    <div class="text-xl font-bold">Pangsa Pasar Produk dan Go-To-Market Strategy</div>
                    <div class="text-xl">{{ Auth::user()->businesses[0]->muda->market_share }}</div>
                    <div class="text-xl font-bold">Peta Positioning</div>
                    <img src="{{ asset('uploads/mangga/marketpositions/' . Auth::user()->businesses[0]->muda->market_position) }}"
                        class="w-128">
                    <hr>
                    <div class="text-xl font-bold underline">Analisa Pemasaran</div>
                    <div class="text-xl font-bold">Strategi Produksi</div>
                    <div class="text-xl">{{ Auth::user()->businesses[0]->muda->production_strategy }}</div>
                    <div class="text-xl font-bold">Struktur Organisasi</div>
                    <img src="{{ asset('uploads/mangga/organizationstructures/' . Auth::user()->businesses[0]->muda->organization_structure) }}"
                        class="w-128">
                    <hr>
                    <div class="text-xl font-bold underline">Target Usaha</div>
                    <div class="text-xl font-bold">Rencana Untuk Mencapai Target</div>
                    <div class="text-xl">{{ Auth::user()->businesses[0]->muda->target_plan ?? 'asd' }}</div>
                    <hr>
                    <div class="text-xl font-bold underline">Analisa Keuangan</div>
                    <div class="text-xl font-bold">Analisis Investasi dan Rencana Cashflow</div>
                    <div class="text-xl">{{ Auth::user()->businesses[0]->muda->finance }}</div>
                    <div class="text-xl font-bold">Struktur Pendanaan</div>
                    <img src="{{ asset('uploads/mangga/financeattachments/' . Auth::user()->businesses[0]->muda->finance_attachment) }}"
                        class="w-128">
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
                                {{ Auth::user()->businesses[0]->muda->reports[0]->inflow_sales }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->inflow_sales }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->inflow_sales }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->inflow_sales }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->inflow_sales }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->inflow_sales }}</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-600">Penerimaan Pinjaman</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->inflow_loan }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->inflow_loan }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->inflow_loan }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->inflow_loan }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->inflow_loan }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->inflow_loan }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td class="border border-gray-600">Subtotal Penerimaan</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->inflow_subtotal }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->inflow_subtotal }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->inflow_subtotal }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->inflow_subtotal }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->inflow_subtotal }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->inflow_subtotal }}</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-600">Pembelian Asset (Investasi)</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->outflow_investment }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->outflow_investment }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->outflow_investment }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->outflow_investment }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->outflow_investment }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->outflow_investment }}</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-600">Pembelian Bahan Baku</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->outflow_ingredient }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->outflow_ingredient }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->outflow_ingredient }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->outflow_ingredient }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->outflow_ingredient }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->outflow_ingredient }}</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-600">Biaya Produksi Lain-lain</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->outflow_production }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->outflow_production }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->outflow_production }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->outflow_production }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->outflow_production }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->outflow_production }}</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-600">Biaya Pemeliharaan</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->outflow_maintenance }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->outflow_maintenance }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->outflow_maintenance }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->outflow_maintenance }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->outflow_maintenance }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->outflow_maintenance }}</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-600">Biaya Administrasi Lain-lain</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->outflow_admin }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->outflow_admin }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->outflow_admin }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->outflow_admin }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->outflow_admin }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->outflow_admin }}</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-600">Angsuran Pokok</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->outflow_installments }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->outflow_installments }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->outflow_installments }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->outflow_installments }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->outflow_installments }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->outflow_installments }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td class="border border-gray-600">Sub Total Pengeluaran</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->outflow_subtotal }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->outflow_subtotal }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->outflow_subtotal }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->outflow_subtotal }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->outflow_subtotal }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->outflow_subtotal }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td class="border border-gray-600">Selisih Kas</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->difference }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->difference }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->difference }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->difference }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->difference }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->difference }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td class="border border-gray-600">Selisih Kas Awal</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->difference_start }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->difference_start }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->difference_start }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->difference_start }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->difference_start }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->difference_start }}</td>
                        </tr>
                        <tr class="font-bold">
                            <td class="border border-gray-600">Selisih Kas Akhir</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[0]->difference_end }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[1]->difference_end }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[2]->difference_end }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[3]->difference_end }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[4]->difference_end }}</td>
                            <td class="border border-gray-600">
                                {{ Auth::user()->businesses[0]->muda->reports[5]->difference_end }}</td>
                        </tr>
                    </table>
                </div>
            </div>
    </div>
@else
    <div class="col-span-12 xl:col-span-9 h-screen xl:h-vh-80">
        <div class="flex flex-col card items-center justify-center gap-y-4 px-8 py-6">
            <div class="text-2xl font-bold mb-8">Status Pengajuan</div>
            <div class="flex flex-col xl:flex-row items-center justify-center gap-x-2">
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full bg-gray-400 p-4">
                        <span class="fa fa-fw fa-user-shield text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Login</div>
                </div>
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full bg-gray-400 p-4">
                        <span class="fa fa-fw fa-user-edit text-white text-xl"></span>
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
                    <div class="rounded-full bg-mangga-orange-300 p-4">
                        <span class="fa fa-fw fa-user-check text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Validasi Data Diri</div>
                </div>
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full bg-gray-400 p-4">
                        <span class="fa fa-fw fa-building text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Memilih Sektor Usaha</div>
                </div>
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full bg-gray-400 p-4">
                        <span class="fab fa-fw fa-wpforms text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Mengisi Form Pengajuan</div>
                </div>
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full bg-gray-400 p-4">
                        <span class="fa fa-fw fa-check-circle text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Verifikasi</div>
                </div>
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full bg-gray-400 p-4">
                        <span class="fa fa-fw fa-info-circle text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Survey</div>
                </div>
                <div class="block xl:hidden">
                    <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                </div>
                <div class="hidden xl:block">
                    <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                </div>
                <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                    <div class="rounded-full bg-gray-400 p-4">
                        <span class="fa fa-fw fa-clipboard-check text-white text-xl"></span>
                    </div>
                    <div
                        class="text-md text-gray-400 text-center w-56 xl:w-24 h-24 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                        Hasil Analisa Pengajuan</div>
                </div>
            </div>
        </div>
    </div>
    @endif
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

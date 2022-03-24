@extends('layouts.app')

@section('content')
    @include('inc.user_sidebar_mobile')
    <div class="grid grid-cols-12 gap-x-8 gap-y-4 py-4 px-8 xl:pl-0">
        <div class="col-span-3 hidden xl:block border-r-2 border-gray-400">
            @include('inc.user_sidebar')
        </div>
        <div class="col-span-12 xl:col-span-9 h-full">
            <div class="flex flex-col card items-center justify-center gap-y-4 px-8 py-6">
                <div class="text-2xl font-bold mb-8">Status Pengajuan</div>
                <div class="flex flex-col xl:flex-row items-center justify-center gap-x-2">
                    <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                        <div class="rounded-full bg-gray-400 p-4">
                            <span class="fa fa-fw fa-address-card text-white text-xl"></span>
                        </div>
                        <div
                            class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                            Lengkapi Data Diri</div>
                    </div>
                    <div class="block xl:hidden">
                        <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                    </div>
                    <div class="hidden xl:block">
                        <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                    </div>
                    @if (Auth::user()->referral_code != 'mamud')
                        <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                            <div
                                class="rounded-full {{ Auth::user()->businesses[0]->status == 1 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
                                <span class="fa fa-fw fa-user-check text-white text-xl"></span>
                            </div>
                            <div
                                class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                                Submit Form Pengajuan</div>
                        </div>
                        <div class="block xl:hidden">
                            <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                        </div>
                        <div class="hidden xl:block">
                            <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                        </div>
                        <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                            <div
                                class="rounded-full {{ Auth::user()->businesses[0]->status == 2 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
                                <span class="fa fa-fw fa-signature text-white text-xl"></span>
                            </div>
                            <div
                                class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                                Memberi TTD Form Pengajuan
                            </div>
                        </div>
                    @else
                        <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                            <div
                                class="rounded-full {{ Auth::user()->businesses[0]->status == 1 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
                                <span class="fa fa-fw fa-user-check text-white text-xl"></span>
                            </div>
                            <div
                                class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                                Submit Form Proposal</div>
                        </div>
                        <div class="block xl:hidden">
                            <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                        </div>
                        <div class="hidden xl:block">
                            <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                        </div>
                        <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                            <div
                                class="rounded-full {{ Auth::user()->businesses[0]->status == 2 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
                                <span class="fa fa-fw fa-print text-white text-xl"></span>
                            </div>
                            <div
                                class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                                Submit Ulang Proposal</div>
                        </div>
                    @endif
                    @if (!Auth::user()->businesses->last()->rejected_at)
                        @if (Auth::user()->referral_code != 'mamud')
                            <div class="block xl:hidden">
                                <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                            </div>
                            <div class="hidden xl:block">
                                <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                            </div>
                            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                                <div
                                    class="rounded-full {{ Auth::user()->businesses[0]->status == 3 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
                                    <span class="fa fa-fw fa-clipboard-check text-white text-xl"></span>
                                </div>
                                <div
                                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                                    Pengajuan Terevaluasi Surveyor</div>
                            </div>
                            <div class="block xl:hidden">
                                <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                            </div>
                            <div class="hidden xl:block">
                                <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                            </div>
                            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                                <div
                                    class="rounded-full {{ Auth::user()->businesses[0]->status == 4 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
                                    <span class="fa fa-fw fa-check-double text-white text-xl"></span>
                                </div>
                                <div
                                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                                    Pengajuan Diapprove Pimpinan</div>
                            </div>
                        @else
                            <div class="block xl:hidden">
                                <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                            </div>
                            <div class="hidden xl:block">
                                <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                            </div>
                            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                                <div
                                    class="rounded-full {{ Auth::user()->businesses[0]->status == 3 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
                                    <span class="fa fa-fw fa-clipboard-check text-white text-xl"></span>
                                </div>
                                <div
                                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                                    Pengajuan Terverifikasi</div>
                            </div>
                            <div class="block xl:hidden">
                                <span class="fa fa-fw fa-arrow-down text-gray-400 text-xl"></span>
                            </div>
                            <div class="hidden xl:block">
                                <span class="fa fa-fw fa-arrow-right text-gray-400 text-xl"></span>
                            </div>
                            <div class="flex flex-row xl:flex-col items-center justify-center gap-y-2">
                                <div
                                    class="rounded-full {{ Auth::user()->businesses[0]->status == 4 ? 'bg-mangga-orange-300' : 'bg-gray-400' }} p-4">
                                    <span class="fa fa-fw fa-print text-white text-xl"></span>
                                </div>
                                <div
                                    class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                                    Cetak Proposal</div>
                            </div>
                        @endif
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
                                class="text-md text-gray-400 text-center w-56 xl:w-24 h-16 ml-4 xl:ml-0 flex items-center justify-start xl:items-baseline xl:justify-center">
                                Pengajuan Ditolak</div>
                        </div>
                    @endif
                </div>
                @if (Auth::user()->referral_code == 'mamud')
                    <div class="flex items-center mb-4">
                        <a href="{{ route('user.muda.edit', $muda->id) }}" class="mangga-button-green cursor-pointer">Edit
                            Form</a>
                    </div>
                @endif
                @if (Auth::user()->referral_code != 'mamud')
                    <label for="complete-form" class="font-bold">Upload Form Yang
                        Sudah Di Tanda Tangani</label>
                    <form action="{{ route('user.utama.ttd', $utama->id) }}" method="post" enctype="multipart/form-data"
                        class="flex items-center justify-center gap-y-2 bg-gray-300 rounded-xl shadow-xl p-4">
                        @csrf
                        @method('PATCH')
                        <a target="blank" href="{{ asset('uploads/mangga/complete_form/' . $utama->complete_form) }}">
                            <span class="fa fa-fw fa-file-pdf"></span>
                            <span class="underline">{{ $utama->complete_form }}</span>
                        </a>
                        <input type="file" name="complete_form" id="complete-form" required>
                        <button type="submit" class="mangga-button-green cursor-pointer">Submit</button>
                    </form>
                @else
                    <label for="complete-form" class="font-bold">Upload Form Yang
                        Sudah Di Tanda Tangani</label>
                    <form action="{{ route('user.muda.ttd', $muda->id) }}" method="post" enctype="multipart/form-data"
                        class="flex items-center justify-center gap-y-2 bg-gray-300 rounded-xl shadow-xl p-4">
                        @csrf
                        @method('PATCH')
                        <a target="blank" href="{{ asset('uploads/mangga/complete_form/' . $muda->complete_form) }}">
                            <span class="fa fa-fw fa-file-pdf"></span>
                            <span class="underline">{{ $muda->complete_form }}</span>
                        </a>
                        <input type="file" name="complete_form" id="complete-form" required>
                        <button type="submit" class="mangga-button-green cursor-pointer">Submit</button>
                    </form>
                @endif
            </div>
            @if (Auth::user()->referral_code == 'mamud')
                <div class="flex items-center justify-between mb-4">
                    <div class="text-2xl font-bold">Detail Pengajuan</div>
                    <a target="blank" href="{{ route('user.muda.download', $muda->id) }}"
                        class="text-lg hover:text-gray-700">
                        <span class="fa fa-fw fa-file-download"></span>Preview Proposal Pengajuan
                    </a>
                </div>
                <div class="card px-8 py-6 flex flex-col gap-y-4">
                    <div class="text-xl font-bold">Data Pengajuan</div>
                    <div class="text-lg font-bold">Nomor Registrasi :
                        {{ $muda->business->status >= 3 ? $muda->business->registration_number : '-' }}</div>
                    <div class="grid grid-cols-3 gap-x-4">
                        <img src="{{ asset('uploads/mangga/logos/' . $muda->business->logo) }}" alt="" srcset=""
                            class="w-full">
                        <div class="flex flex-col gap-y-2">
                            <div class="text-3xl font-bold">{{ $muda->business_title }}</div>
                            <div class="text-xl">{{ $muda->leader_name }}</div>
                            <div class="text-xl">{{ $muda->leader_email }}</div>
                            <div class="text-xl">{{ $muda->leader_phone }}</div>
                            <div class="text-xl">{{ $muda->university }}</div>
                            <div class="text-xl">{{ $muda->faculty }}</div>
                            <div class="text-xl">{{ $muda->recommender }} - {{ $muda->recommender_position }}
                            </div>
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
                            <div class="flex">{{ $muda->type->name }} |
                                {{ $muda->category->name }} - {{ $muda->subcategory }}</div>
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
                    <img src="{{ asset('uploads/mangga/marketpositions/' . $muda->market_position) }}"
                        class="w-128">
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
                    <img src="{{ asset('uploads/mangga/financeattachments/' . $muda->finance_attachment) }}"
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
            @else
                <div class="flex items-center justify-between mb-4">
                    <div class="text-2xl font-bold">Detail Pengajuan</div>
                    <a target="blank" href="{{ route('user.utama.download', $utama->id) }}"
                        class="text-lg hover:text-gray-700">
                        <span class="fa fa-fw fa-file-download"></span>Preview Proposal Pengajuan
                    </a>
                </div>
                <div class="card px-8 py-6 flex flex-col gap-y-4">
                    <div class="text-xl font-bold underline">Mitra Binaan</div>
                    <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                        <div class="flex flex-col">
                            <span class="text-gray-600">Tanggal Pengajuan</span>
                            <span>{{ $utama->created_at->format('d/m/Y') }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Tanggal Penerimaan</span>
                            @if ($utama->approved_by_surveyor_at)
                                <span>{{ $utama->approved_by_surveyor_at->format('d/m/Y') }}</span>
                            @else
                                -
                            @endif
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Nama Mitra</span>
                            <span>{{ $utama->user_name }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">No.KTP</span>
                            <span>{{ $utama->user_ktp_code }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Jenis Kelamin</span>
                            @if ($utama->user_gender == 'm')
                                Laki-laki
                            @else
                                Perempuan
                            @endif
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">No.KK</span>
                            <span>{{ $utama->user_kk_code }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Tempat/ Tanggal Lahir</span>
                            <span>{{ $utama->user_birth_place }}, {{ $utama->user_birth_date }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Pekerjaan</span>
                            <span>{{ $utama->user_profession }} </span>
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-gray-600">Alamat</span>
                            <span>{{ $utama->user_address }} RT {{ $utama->user_rt }} RW {{ $utama->user_rw }}
                            </span>
                            <span>{{ $utama->user_province }}, {{ $utama->user_city }},
                                {{ $utama->user_district }},
                                {{ $utama->user_village }} {{ $utama->user_postal_code }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">E-Mail</span>
                            <span>{{ $utama->user_email }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">No. Telp</span>
                            <span>{{ $utama->user_phone }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">No. Rekening</span>
                            <span>{{ $utama->user_bank_number }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Cabang Bank</span>
                            <span>{{ $utama->user_branch }} </span>
                        </div>
                    </div>
                    <hr>
                    @if (count($utama->members))
                        @foreach ($utama->members as $member)
                            <div class="text-xl font-bold">Data Anggota {{ $loop->iteration }}</div>
                            <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                                <div class="flex flex-col">
                                    <span class="text-gray-600">Nama</span>
                                    <span>{{ $member->name }} </span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-gray-600">Nama Sertifikat</span>
                                    <span>{{ $member->certificate_name ?? '-' }} </span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-gray-600">No. KTP</span>
                                    <span>{{ $member->ktp_code }} </span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-gray-600">File Sertifikat</span>
                                    @if ($member->certificate)
                                        <span class="underline">
                                            <a target="blank"
                                                href="{{ asset('uploads/mangga/certificate/' . $member->certificate) }}">Download
                                                Sertifikat</a>
                                        </span>
                                    @else
                                        -
                                    @endif
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    @endif
                    @if ($utama->companion_name)
                        <div class="text-xl font-bold">Data Pendamping</div>
                        <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                            <div class="flex flex-col">
                                <span class="text-gray-600">Nama</span>
                                <span>{{ $utama->companion_name }} </span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-600">No. KTP</span>
                                <span>{{ $utama->companion_ktp_code }} </span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-600">Nomor Surat Menikah</span>
                                <span>{{ $utama->companion_wedding_code }} </span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-600">Tanggal menikah</span>
                                <span>{{ $utama->companion_wedding_date }} </span>
                            </div>
                            <div class="flex flex-col col-span-2">
                                <span class="text-gray-600">Alamat</span>
                                <span>{{ $utama->companion_address }}
                                </span>
                                <span>{{ $utama->companionprovince->name }}, {{ $utama->companioncity->name }},
                                    {{ $utama->companiondistrict->name }},
                                    {{ $utama->companionvillage->name }} {{ $utama->companion_postal_code }}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-600">E-Mail</span>
                                <span>{{ $utama->companion_email }} </span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-600">No. Telp / HP</span>
                                <span>{{ $utama->companion_telephone ?? '-' }} / {{ $utama->companion_handphone }}
                                </span>
                            </div>
                        </div>
                        <hr>
                    @endif
                    <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                        <div class="flex flex-col col-span-2">
                            <div class="text-3xl font-bold">{{ $utama->business->name }}</div>
                            <span>{{ $utama->business->address }}
                            </span>
                            <span>{{ $utama->business->province->name }}, {{ $utama->business->city->name }},
                                {{ $utama->business->district->name }},
                                {{ $utama->business->village->name }} {{ $utama->business->postal_code }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">E-Mail</span>
                            <span>{{ $utama->email }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">No. Telp / HP</span>
                            <span>{{ $utama->telephone ?? '-' }} / {{ $utama->handphone }}
                            </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Status Tempat Usaha</span>
                            <span>{{ $utama->establishmentstatus->name }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Alamat Surat Menyurat</span>
                            @if ($utama->mail_address == '0')
                                <span>Rumah</span>
                            @else
                                <span>Usaha</span>
                            @endif
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">No. SIUP</span>
                            <span>{{ $utama->siup_code ?? '-' }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Tanggal SIUP</span>
                            <span>{{ $utama->siup_date ?? '-' }}</span>
                        </div>
                    </div>
                    <hr>
                    <div class="grid grid-cols-2 gap-x-8 gap-y-2">
                        <div class="text-xl font-bold underline">Data Pengajuan</div>
                        <div class="text-lg font-bold">Nomor Registrasi : {{ $utama->business->registration_number }}
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-gray-600">Jumlah Pengajuan</span>
                            <span>Rp. {{ number_format($utama->request_amount, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-gray-600">Agunan</span>
                            <span>{{ $utama->collateral }}</span>
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-gray-600">Persyaratan</span>
                            <div class="grid grid-cols-4 gap-x-4 gap-y-1">
                                <div class="flex items-center gap-x-2">
                                    <span class="fa fa-fw fa-check-square"></span>
                                    <span>
                                        <a target="blank" href="{{ asset('uploads/mangga/ktp/' . $utama->ktp) }}"
                                            class="underline">
                                            KTP
                                        </a> dan <a target="blank"
                                            href="{{ asset('uploads/mangga/ktpselfie/' . $utama->ktp_selfie) }}"
                                            class="underline">
                                            Selfie KTP
                                        </a>
                                    </span>
                                </div>
                                <div class="flex items-center gap-x-2">
                                    <span class="fa fa-fw fa-check-square"></span>
                                    <span>
                                        <a target="blank" href="{{ asset('uploads/mangga/kk/' . $utama->kk) }}"
                                            class="underline">
                                            KK
                                        </a> dan <a target="blank"
                                            href="{{ asset('uploads/mangga/kkselfie/' . $utama->kk_selfie) }}"
                                            class="underline">
                                            Selfie KK
                                        </a>
                                    </span>
                                </div>
                                <div class="flex items-center gap-x-2">
                                    @if ($utama->siup)
                                        <span class="fa fa-fw fa-check-square"></span>
                                        <span>
                                            <a target="blank" href="{{ asset('uploads/mangga/siup/' . $utama->siup) }}"
                                                class="underline">
                                                SIUP
                                            </a>
                                        </span>
                                    @else
                                        <span class="fa fa-fw fa-times-square"></span>
                                        <span>
                                            <a target="blank" href="#" class="underline">
                                                SIUP
                                            </a>
                                        </span>
                                    @endif
                                </div>
                                <div class="flex items-center gap-x-2">
                                    <span class="fa fa-fw fa-check-square"></span>
                                    <span>
                                        <a target="blank" href="{{ asset('uploads/mangga/skdu/' . $utama->skdu) }}"
                                            class="underline">
                                            SK Domisili Usaha
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Tipe Penyaluran</span>
                            <span>{{ $utama->distributiontype->name }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Pemasaran</span>
                            <span>{{ $utama->marketing->name }} @if ($utama->marketing_id == 3)
                                    Ekspor ke {{ $utama->export_to }}
                                @endif </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Sektor</span>
                            <span>{{ $utama->business->sector->name }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Subsektor</span>
                            <span>{{ $utama->business->subsector->name }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Jenis Usaha</span>
                            <span>{{ $utama->business->type }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Bentuk Usaha</span>
                            <span>{{ $utama->businessform->name }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Produk Unggulan</span>
                            <span>{{ $utama->best_product }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Komoditi Yang Dihasilkan</span>
                            <span>
                                @if ($utama->business->commodities)
                                    @foreach ($utama->business->commodities as $c)
                                        @if ($loop->iteration != 1)
                                            ,
                                        @endif{{ $c->name }}
                                    @endforeach
                                @else
                                    -
                                @endif
                            </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Nilai Usaha</span>
                            <span>Rp. {{ number_format($utama->business_value, 0, ',', '.') }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Nilai Omzet per Tahun</span>
                            <span>Rp. {{ number_format($utama->turnover_value, 0, ',', '.') }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Jumlah Unit Usaha</span>
                            <span>{{ $utama->unit_amount }} </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">Jumlah SDM</span>
                            <span>{{ $utama->hr_value }} Orang</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600 font-bold text-lg">Nilai Kekayaan Usaha</span>
                            <table>
                                <tr>
                                    <td width="30%">Tanah</td>
                                    <td>Rp. {{ number_format($utama->land, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td>Bangunan</td>
                                    <td>Rp. {{ number_format($utama->building, 0, ',', '.') }}</td>
                                </tr>
                                <tr class="font-bold">
                                    <td>Jumlah</td>
                                    <td>Rp.
                                        {{ number_format($utama->land + $utama->building, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kas</td>
                                    <td>Rp. {{ number_format($utama->treasury, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td>Piutang</td>
                                    <td>Rp. {{ number_format($utama->credit, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td>Peralatan Usaha/Produksi</td>
                                    <td>Rp. {{ number_format($utama->production_tools, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td>Bank(Tabungan)</td>
                                    <td>Rp. {{ number_format($utama->savings, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td>Persediaan</td>
                                    <td>Rp. {{ number_format($utama->supply, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td>Kendaraan</td>
                                    <td>Rp. {{ number_format($utama->vehicle, 0, ',', '.') }}</td>
                                </tr>
                                <tr class="font-bold">
                                    <td>Jumlah</td>
                                    <td>Rp.
                                        {{ number_format($utama->treasury + $utama->credit + $utama->production_tools + $utama->savings + $utama->supply + $utama->vehicle,0,',','.') }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600 font-bold text-lg">Penjualan Selama Setahun</span>
                            <table>
                                @php
                                    $c_total = 0;
                                @endphp
                                @foreach ($utama->business->commodities as $item)
                                    @php
                                        $c_total += $item->value;
                                    @endphp
                                    <tr>
                                        <td width="30%">{{ $item->name }}</td>
                                        <td>: Rp. {{ number_format($item->value, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                                <tr class="font-bold">
                                    <td>Jumlah</td>
                                    <td>: Rp.
                                        {{ number_format($c_total, 0, ',', '.') }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600 font-bold text-lg">Laba/Keuntungan Selama Setahun</span>
                            <table>
                                <tr>
                                    <td width="30%">Nilai Penjualan</td>
                                    <td>: Rp. {{ number_format($utama->sales_value, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Biaya Total</td>
                                    <td>: Rp. {{ number_format($utama->total_cost, 0, ',', '.') }}</td>
                                </tr>
                                <tr class="font-bold">
                                    <td>Jumlah</td>
                                    <td>: Rp.
                                        {{ number_format($utama->sales_value + $utama->total_cost, 0, ',', '.') }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-gray-600 font-bold text-lg">Permasalahan Usaha Yang Dihadapi</span>
                            {{ $utama->business_problem }}
                        </div>
                        <div class="flex flex-col col-span-2">
                            <span class="text-gray-600 font-bold text-lg">Rencana Penggunaan Pinjaman Dana</span>
                            <table>
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
                        <div class="flex flex-col col-span-2">
                            <span class="text-gray-600 font-bold text-lg">Rencana pembelian produk non subsidi PT
                                Petrokimia Gresik </span>
                            <table>
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
                                        <td width="10%">{{ $item->qty ?? '-' }}</td>
                                        <td width="30%">Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
                                        <td width="25%">Rp. {{ number_format($item->price * $item->qty, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600 font-bold text-lg">Foto Tempat Usaha / Tinggal</span>
                            <img src="{{ asset('uploads/mangga/establishment_picture/' . $utama->establishment_picture) }}"
                                class="h-72 rounded-lg">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600 font-bold text-lg">Foto Komoditas / Produk</span>
                            <img src="{{ asset('uploads/mangga/product_picture/' . $utama->product_picture) }}"
                                class="h-72 rounded-lg">
                        </div>
                        @if ($utama->business_sketch)
                            <div class="flex flex-col">
                                <span class="text-gray-600 font-bold text-lg">Denah Tempat Usaha</span>
                                <img src="{{ asset('uploads/mangga/business_sketch/' . $utama->business_sketch) }}"
                                    class="h-72 rounded-lg">
                            </div>
                        @endif
                        @if ($utama->house_sketch)
                            <div class="flex flex-col">
                                <span class="text-gray-600 font-bold text-lg">Denah Tempat Tinggal</span>
                                <img src="{{ asset('uploads/mangga/house_sketch/' . $utama->house_sketch) }}"
                                    class="h-72 rounded-lg">
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

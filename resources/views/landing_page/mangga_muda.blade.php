@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        @include('landing_page.inc.profil_sidebar')
        <div class="col-span-10 md:col-span-7 2xl:col-span-8 flex flex-col gap-y-4 py-4 px-8">
            <img src="{{ asset('assets/img/mmbc-logo.png') }}" class="w-148 mx-auto">
            <div class="border border-gray-400 px-12 bg-white mb-4 grid grid-cols-12 items-center py-8 font-pn">
                <div class="col-span-12 xl:col-span-3">
                    <img src="{{ asset('assets/svg/mangga-muda-agrosociopreneur.svg') }}" alt="" srcset="">
                </div>
                <div class="col-span-12 xl:col-span-9 text-xl">
                    Program kompetisi pendanaan dan pemberian pembinaan serta pengembangan
                    bagi para generasi muda yang memiliki usaha di bidang Agrosocio.
                </div>
            </div>
            <div class="border border-gray-400 px-12 bg-white mb-4 grid grid-cols-12 items-center py-8 font-pn">
                <div class="col-span-12 xl:col-span-3 block xl:hidden">
                    <img src="{{ asset('assets/svg/mangga-muda-creativesocipreneur.svg') }}" alt="" srcset="">
                </div>
                <div class="col-span-12 xl:col-span-9 text-xl">
                    Program kompetisi pendanaan dan pemberian pembinaan serta pengembangan
                    bagi para generasi muda yang memiliki usaha di bidang Industri Kreatif.
                </div>
                <div class="col-span-12 xl:col-span-3 hidden xl:block">
                    <img src="{{ asset('assets/svg/mangga-muda-creativesocipreneur.svg') }}" alt="" srcset="">
                </div>
            </div>
            <div class="grid grid-cols-12 md:gap-x-12 mb-4">
                <div class="col-span-12 md:col-span-6 flex flex-col gap-y-4">
                    <img src="{{ asset('assets/svg/mangga-muda-agrosociopreneur.svg') }}" class="w-72">
                    <div class="font-bold">Kategori :</div>
                    <div><span class="font-bold">On farm</span> (Usaha Budidaya).<br>
                        Sub kategori : Pertanian, Perkebunan, Peternakan, Perikanan
                    </div>
                    <div><span class="font-bold">Off farm</span> (Usaha Pengolahan Hasil Budidaya).
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 flex flex-col gap-y-4">
                    <img src="{{ asset('assets/svg/mangga-muda-creativesocipreneur.svg') }}" class="w-72">
                    <div class="font-bold">Kategori :</div>
                    <ul class="list-disc text-lg ml-5 mb-4">
                        <li>Content Creator, Cinematography, Photography</li>
                        <li>Fashion</li>
                        <li>Food & Beverages</li>
                        <li>Furniture</li>
                        <li>Home Appliances</li>
                        <li>Otomotive</li>
                        <li>Others</li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-end font-bold font-lb text-4xl text-mangga-green-400">Persyaratan Umum</div>
            <hr class="border border-mangga-green-400 mb-8">
            <div>
                <ol>
                    <li>Peserta berstatus mahasiswa aktif semester 2 dan maksimal semester 6.</li>
                    <li>Usia peserta maksimal 23 tahun.</li>
                    <li>Peserta berstatus mahasiswa aktif yang dibuktikan dengan melampirkan scan Kartu Tanda Mahasiswa,
                        scan surat tanda mahasiswa aktif</li>
                    <li>Melampirkan surat rekomendasi dari Perguruan Tinggi (minimal fakultas/universitas)</li>
                    <li>Peserta dapat berupa kelompok (maksimal 3 orang) maupun perseorangan.</li>
                    <li>Anggota Tim tidak diperkenankan terdiri dari Perguruan Tinggi yang berbeda.</li>
                    <li>Bisnis yang diajukan dalam proposal telah berjalan ≥ 6 bulan melalui surat pernyataan yang
                        ditandatangani oleh dekan/pejabat setara (seperti direktur, kaprodi, dsb)</li>
                    <li>Peserta yang telah terdaftar di dalam proposal tidak boleh digantikan dengan peserta lain mulai dari
                        tahap penyusunan proposal hingga tahap akhir</li>
                    <li>Setiap peserta diperbolehkan berpartisipasi lebih dari 1 proposal.</li>
                    <li>Semua peserta diwajibkan hadir dalam seluruh rangkaian acara hingga babak final.</li>
                    <li>Setiap peserta diwajibkan mengirim hardfile proposal 2 eksemplar</li>
                    <li>Persyaratan poin 3, 4, 7, dan 11 dikirim melalui ekspedisi ke kantor CSR PT Petrokimia Gresik di
                        Gedung Anex Lt 2 – Graha Petrokimia Gresik, Jl. Ahmad Yani, Gresik - 61119.</li>
                    <li>Seluruh proposal bisnis yang diterima oleh PT Petrokimia Gresik menjadi hak milik panitia</li>
                    <li>Apabila peserta terbukti melanggar ketentuan poin-poin diatas maka akan didiskualifikasi dan
                        Keputusan dewan juri bersifat mutlak dan tidak bisa diganggu gugat</li>
                </ol>
            </div>
            <div class="flex font-bold font-lb text-4xl text-mangga-green-400">Reward & Pendanaan</div>
            <hr class="border border-mangga-green-400 mb-8">
            <div class="grid grid-cols-12 gap-2">
                <div class="col-span-12 xl:col-span-7">
                    <img src="{{ asset('assets/svg/mmbc-asset-1.svg') }}" alt="" srcset="">
                </div>
                <div class="col-span-12 xl:col-span-5 flex flex-col">
                    <ul class="mb-12">
                        <li>Nilai pokok pinjaman</li>
                        <li>Asuransi usaha dari Jamkrindo</li>
                        <li>JAP 3,27 % pertahun (6% efektif anuitas)</li>
                        <li>Jangka waktu 1 tahun</li>
                    </ul>
                    <div>Besaran PUMK yang diterima masing-masing pemenang maksimal :</div>
                    <ul class="text-mangga-green-500">
                        <li>Juara 1 : Rp200.000.000,-</li>
                        <li>Juara 2 : Rp175.000.000,-</li>
                        <li>Juara 3 : Rp150.000.000,-</li>
                        <li>Juara 4 : Rp125.000.000,-</li>
                        <li>Juara 5 : Rp125.000.000,-</li>
                    </ul>
                </div>
            </div>
            <img src="{{ asset('assets/svg/mmbc-asset-2.svg') }}" class="w-128 mx-auto">
            <div class="grid grid-cols-2 gap-x-24 gap-y-2 mb-4">
                <div class="border border-gray-400 p-4 bg-white flex flex-col gap-2 items-center col-span-2 xl:col-span-1">
                    <div class="font-lb text-3xl text-mangga-green-500 mb-4 font-bold">Top 3</div>
                    <div>Peringkat 1</div>
                    <div class="font-os text-mangga-orange-300 font-extrabold text-2xl">Rp. 10.000.000</div>
                    <div>Peringkat 2</div>
                    <div class="font-os text-mangga-orange-300 font-extrabold text-2xl">Rp. 7.500.000</div>
                    <div>Peringkat 3</div>
                    <div class="font-os text-mangga-orange-300 font-extrabold text-2xl">Rp. 5.000.000</div>
                </div>
                <div class="border border-gray-400 p-4 bg-white flex flex-col gap-2 items-center col-span-2 xl:col-span-1">
                    <div class="font-lb text-3xl text-mangga-green-500 mb-4 font-bold">Top 5</div>
                    <div>Peringkat 4</div>
                    <div class="font-os text-mangga-orange-500 font-extrabold text-2xl">Rp. 2.500.000</div>
                    <div>Peringkat 5</div>
                    <div class="font-os text-mangga-orange-500 font-extrabold text-2xl">Rp. 2.500.000</div>
                </div>
            </div>
            <div class="text-4xl text-center font-lb text-mangga-green-400">Tertarik? Daftar Sekarang.</div>
            <div class="flex flex-col md:flex-row items-center gap-x-4">
                @guest
                    <a href="{{ route('mangga_muda.register') }}"
                        class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-72 md:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                        Mangga Agrosociopreneur</a>
                    <a href="{{ route('mangga_muda.register') }}"
                        class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-72 md:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                        Mangga Creativesociopreneur</a>
                @endguest
                @auth
                    @if (Auth::user()->referral_code == 'mamud')
                        <a href="{{ route('user.form_mangga_muda') }}"
                            class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-72 md:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                            Mangga Agrosociopreneur</a>
                        <a href="{{ route('user.form_mangga_muda') }}"
                            class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-72 md:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                            Mangga Creativesociopreneur</a>
                    @else
                        <a onclick="alert('Logout dan register di website Mangga Muda untuk mengajukan Program Mangga Muda');"
                            class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-72 md:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                            Mangga Agrosociopreneur</a>
                        <a onclick="alert('Logout dan register di website Mangga Muda untuk mengajukan Program Mangga Muda');"
                            class="bg-mangga-green-300 text-white hover:bg-mangga-green-400 rounded-md text-center p-4 w-72 md:w-128 mx-auto mb-4 text-xl cursor-pointer">Daftar
                            Mangga Creativesociopreneur</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

@for ($i = 1; $i <= $member; $i++)
    <div class="font-bold text-2xl mb-4">Data Anggota - {{ $i }}</div>
    <div class="grid grid-cols-2 gap-x-8 form-step">
        <div class="">
            <input type="text" name="member_name[{{ $i }}]" class="form-pengajuan-input"
                placeholder="Nama Lengkap Sesuai KTP*" required>
            <input type="number" name="member_ktp_code[{{ $i }}]" class="form-pengajuan-input" minlength="16"
                maxlength="16" placeholder="NIK*" required>
            <input type="number" name="member_kk_code[{{ $i }}]" class="form-pengajuan-input"
                placeholder="Nomor KK*" required>
            <input type="number" name="member_phone[{{ $i }}]" class="form-pengajuan-input"
                placeholder="No. Telepon*" required>
            <input type="text" name="member_address[{{ $i }}]" class="form-pengajuan-input"
                placeholder="Alamat Domisili Lengkap*" required>
            <div class="">
                <label class="font-bold">Foto KTP*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-ktp-member-{{ $i }}">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="member_ktp[{{ $i }}]"
                            id="foto-ktp-member-{{ $i }}" class="hidden"
                            onchange="loadFile(event, 'foto-ktp-member-{{ $i }}')" accept="image/*"
                            required>
                        <label for="foto-ktp-member-{{ $i }}"
                            class="mangga-button-green cursor-pointer">Unggah Foto
                            KTP</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Foto Selfie dengan KTP*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-selfie-ktp-member-{{ $i }}">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="member_ktp_selfie[{{ $i }}]"
                            id="foto-selfie-ktp-member-{{ $i }}" class="hidden" accept="image/*"
                            onchange="loadFile(event, 'foto-selfie-ktp-member-{{ $i }}')" required>
                        <label for="foto-selfie-ktp-member-{{ $i }}"
                            class="mangga-button-green cursor-pointer">Unggah Foto
                            Selfie
                            dengan
                            KTP</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            @if ($sector == 6)
                <div class="font-bold mb-2">Data Usaha</div>
                <input type="number" name="member_income[{{ $i }}]" id="member-income-{{ $i }}"
                    class="form-pengajuan-input" placeholder="Pendapatan rata-rata (1 tahun)*"
                    onkeyup="$('#member-profit-{{ $i }}').val(parseInt($('#member-income-{{ $i }}').val())-parseInt($('#member-cost-{{ $i }}').val()))"
                    required>
                <input type="number" name="member_cost[{{ $i }}]" id="member-cost-{{ $i }}"
                    class="form-pengajuan-input" placeholder="Biaya Pemeliharaan (1 tahun)*"
                    onkeyup="$('#member-profit-{{ $i }}').val(parseInt($('#member-income-{{ $i }}').val())-parseInt($('#member-cost-{{ $i }}').val()))"
                    required>
                <input type="number" name="member_profit[{{ $i }}]" id="member-profit-{{ $i }}"
                    class="form-pengajuan-input" placeholder="Keuntungan*" readonly required>
                <input type="number" name="member_land[{{ $i }}]" class="form-pengajuan-input member-land"
                    onkeyup="sumData('land');" placeholder="Nilai Tanah*" required>
                <input type="number" name="member_building[{{ $i }}]"
                    class="form-pengajuan-input member-building" onkeyup="sumData('building');"
                    placeholder="Nilai Bangunan*" required>
                <input type="number" name="member_production_tools[{{ $i }}]"
                    class="form-pengajuan-input member-tools" onkeyup="sumData('tools');"
                    placeholder="Alat Kerja/Mesin*" required>
                <input type="number" name="member_supply[{{ $i }}]"
                    class="form-pengajuan-input member-supply" onkeyup="sumData('supply');" placeholder="Persediaan*"
                    required>
                <input type="number" name="member_loan_amount[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Pinjaman Yang Diminta*" required>
            @else
                <div class="font-bold mb-2">Data Usaha</div>
                <input type="number" name="member_income[{{ $i }}]" id="member-income-{{ $i }}"
                    class="form-pengajuan-input" placeholder="Pendapatan rata-rata (per panen)*"
                    onkeyup="$('#member-profit-{{ $i }}').val(parseInt($('#member-income-{{ $i }}').val())-parseInt($('#member-cost-{{ $i }}').val()))"
                    required>
                <input type="number" name="member_cost[{{ $i }}]" id="member-cost-{{ $i }}"
                    class="form-pengajuan-input" placeholder="Biaya Pemeliharaan (per panen)*"
                    onkeyup="$('#member-profit-{{ $i }}').val(parseInt($('#member-income-{{ $i }}').val())-parseInt($('#member-cost-{{ $i }}').val()))"
                    required>
                <input type="number" name="member_profit[{{ $i }}]" id="member-profit-{{ $i }}"
                    class="form-pengajuan-input" placeholder="Keuntungan*" readonly required>
                <input type="number" name="member_land[{{ $i }}]" class="form-pengajuan-input member-land"
                    onkeyup="sumData('land');" placeholder="Nilai Tanah*" required>
                <input type="number" name="member_building[{{ $i }}]"
                    class="form-pengajuan-input member-building" onkeyup="sumData('building');"
                    placeholder="Nilai Bangunan*" required>
                <input type="number" name="member_production_tools[{{ $i }}]"
                    class="form-pengajuan-input member-tools" onkeyup="sumData('tools');"
                    placeholder="Alat Kerja/Mesin*" required>
                <input type="number" name="member_supply[{{ $i }}]"
                    class="form-pengajuan-input member-supply" onkeyup="sumData('supply');" placeholder="Persediaan*"
                    required>
                <input type="number" name="member_loan_amount[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Pinjaman Yang Diminta*" required>
            @endif
        </div>
        <div class="">
            @if ($sector == 6)
                <div class="font-bold mb-2">Rencana Penggunaan Pinjaman</div>
                <input type="number" name="member_cow_count[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Pembelian Sapi (ekor)*" required>
                <input type="number" name="member_cow_price[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Pembelian Sapi (Rp.)*" required>
                <div class="font-bold mb-2">Biaya Perawatan</div>
                <input type="number" name="member_human_resource[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Tenaga Kerja (Rp.)*" required>
                <input type="number" name="member_medicine[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Obat-obatan (Rp.)*" required>
                <div class="font-bold mb-2">Pakan</div>
                <input type="number" name="member_concentrate[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Konsentrate (Rp.)*" required>
                <input type="number" name="member_hmt[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="HMT (Rumput, dll.) (Rp.)*" required>
                <input type="number" name="member_cultivation[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Biaya Garap (Rp.)*" required>
                <input type="number" name="member_transportation[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Transportasi (Rp.)*" required>
            @elseif ($sector == 2)
                <div class="font-bold mb-2">Lahan Yang Digarap</div>
                <select name="member_land_ownership[{{ $i }}]" id="" class="form-pengajuan-input">
                    @foreach ($establishment_statuses as $es)
                        <option value={{ $es->id }}>{{ $es->name }}</option>
                    @endforeach
                </select>
                <input type="number" name="member_land_area[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Luas Lahan (m2)*" required>
                <div class="font-bold mb-2">Rencana Penggunaan Pinjaman</div>
                <input type="number" name="member_seed[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Pembelian Bibit (Rp.)*" required>
                <input type="number" name="member_feed[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Pembelian Pakan (Rp.)*" required>
                <input type="number" name="member_medicine[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Obat-obatan (Rp.)*" required>
                <input type="number" name="member_cultivation[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Biaya Garap (Rp.)*" required>
                <input type="number" name="member_transportation[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Transportasi (Rp.)*" required>
                <input type="number" name="member_others[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Lain-lain (Rp.)*" required>
                <input type="number" name="member_period_month[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Jangka Waktu Usaha (Bulan)*" required>
            @else
                <div class="font-bold mb-2">Lahan Yang Digarap</div>
                <select name="member_land_ownership[{{ $i }}]" id="" class="form-pengajuan-input">
                    @foreach ($establishment_statuses as $es)
                        <option value={{ $es->id }}>{{ $es->name }}</option>
                    @endforeach
                </select>
                <input type="number" name="member_land_area[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Luas Lahan (m2)*" required>
                <div class="font-bold mb-2">Rencana Penggunaan Pinjaman</div>
                <input type="number" name="member_seed[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Pembelian Bibit (Rp.)*" required>
                <input type="number" name="member_fertilizer[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Pembelian Pupuk (Rp.)*" required>
                <input type="number" name="member_medicine[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Obat-obatan (Rp.)*" required>
                <input type="number" name="member_cultivation[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Biaya Garap (Rp.)*" required>
                <input type="number" name="member_transportation[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Transportasi (Rp.)*" required>
                <input type="number" name="member_others[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Lain-lain (Rp.)*" required>
                <input type="number" name="member_period_month[{{ $i }}]" class="form-pengajuan-input"
                    placeholder="Jangka Waktu Usaha (Bulan)*" required>
            @endif
            <div class="font-bold mb-2">Sertifikat Agunan (Bila Ada)</div>
            <input type="text" name="member_certificate_name[{{ $i }}]" class="form-pengajuan-input"
                placeholder="Nama Sertifikat">
            <input type="text" name="member_certificate_address[{{ $i }}]" class="form-pengajuan-input"
                placeholder="Alamat Sertifikat">
            <div class="">
                <label class="font-bold">Foto Sertifikat</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-sertifikat-member-{{ $i }}">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="member_certificate[{{ $i }}]" value=''
                            id="foto-sertifikat-member-{{ $i }}" class="hidden"
                            onchange="loadFile(event, 'foto-sertifikat-member-{{ $i }}')" accept="image/*">
                        <label for="foto-sertifikat-member-{{ $i }}"
                            class="mangga-button-green cursor-pointer">Unggah Foto
                            Sertifikat</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
            <div class="">
                <label class="font-bold">Foto Selfie dengan Sertifikat</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-selfie-sertifikat-member-{{ $i }}">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="member_certificate_selfie[{{ $i }}]" value=''
                            id="foto-selfie-sertifikat-member-{{ $i }}" class="hidden"
                            accept="image/*"
                            onchange="loadFile(event, 'foto-selfie-sertifikat-member-{{ $i }}')">
                        <label for="foto-selfie-sertifikat-member-{{ $i }}"
                            class="mangga-button-green cursor-pointer">Unggah
                            Foto
                            Selfie dengan
                            Sertifikat</label>
                        <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endfor

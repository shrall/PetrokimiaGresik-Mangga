@for ($i = 1; $i <= $member; $i++)
    <div class="grid-cols-2 gap-x-8 form-step hidden" id="data-anggota-{{ 12 + $i }}">
        <div class="">
            <input type="text" name="member_name[{{ $i }}]" class="form-pengajuan-input"
                placeholder="Nama Anggota*" required>
            <input type="number" name="member_ktp_code[{{ $i }}]" class="form-pengajuan-input" minlength="16" maxlength="16"
                placeholder="No. KTP*" required>
            <input type="number" name="member_phone[{{ $i }}]" class="form-pengajuan-input"
                placeholder="No. Telepon*" required>
            <div class="">
                <label class="font-bold">Foto KTP*</label>
                <div class="flex items-end gap-x-4">
                    <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                        id="preview-foto-ktp-member-{{ $i }}">
                    <div class="flex flex-col gap-y-2">
                        <input type="file" name="member_ktp[{{ $i }}]"
                            id="foto-ktp-member-{{ $i }}" class="hidden"
                            onchange="loadFile(event, 'foto-ktp-member-{{ $i }}')" accept="image/*" required>
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
        </div>
        <div class="">
            <input type="text" name="member_certificate_name[{{$i}}]" class="form-pengajuan-input" placeholder="Nama Sertifikat">
            <input type="text" name="member_certificate_address[{{$i}}]" class="form-pengajuan-input" placeholder="Alamat Sertifikat">
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

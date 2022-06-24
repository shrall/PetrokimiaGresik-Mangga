@extends('layouts.mhe')

@section('content')
    <div class="flex flex-col items-center mx-8 text-center py-12">
        <div class="font-lb text-5xl text-mangga-green-500 mb-24">Terima Kasih Telah Tertarik Untuk Mendaftar</div>
        <div class="text-2xl mb-4">Kode Referensi:</div>
        <div class="text-5xl mb-12 border-dashed border border-gray-400 bg-white px-4 xl:px-24 py-2" id="ref-id">012030213
        </div>
        <div>Harga Tiket (Online): Rp. 5.000/orang</div>
        <div>Harga Tiket (Offline): Rp. 50.000/orang</div>
        <div class="text-2xl xl:mx-48">
            Silahkan melakukan transfer ke rekening rekening Bank BCA 7892051065 atas nama
            <b>Edwyk Sony Udaieby</b> dan masukkan kode referensi di atas pada berita acara.
        </div>
        <div>atau melalui e-wallet</div>
        <li class="text-2xl xl:mx-48 list-none">
            <ul>Shopeepay: 081366994994 (Si Mangga)</ul>
            <ul>GoPay: 081366994994 (Si Mangga)</ul>
            <ul>OVO: 081366994994 (Si Mangga)</ul>
        </li>
    </div>
    <div class="flex flex-col items-center gap-y-4 py-12 bg-gray-200 px-4 xl:px-0">
        <div class="font-lb text-5xl text-center text-mangga-green-500">Form Pendaftaran</div>
        <div class="text-2xl text-center xl:mx-48">Silahkan masukkan data di bawah ini sebenar-benarnya, terutama data email
            dan nomor
            telepon Anda, karena kami akan mengirimkan instruksi kepada Anda mengenai akses portal MHE melalui email Anda
            setelah proses verifikasi data dan bukti transfer yang Anda masukkan. <br>Terima kasih.</div>
        <form method="POST" action="{{ route('mhe_transaction.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="reference_id" id="ref-input">
            <input type="text" name="name" class="form-pengajuan-input mb-8" placeholder="Nama Lengkap" required>
            <input type="email" name="email" class="form-pengajuan-input mb-8" placeholder="E-Mail Aktif" required>
            <input type="text" name="phone" class="form-pengajuan-input mb-8" placeholder="No. Telepon (WA)" required>
            <input type="number" name="ticket_amount" class="form-pengajuan-input mb-8"
                placeholder="Jumlah Pembelian Tiket" required>
            <select name="is_online" id="is_online" class="form-pengajuan-input mb-8">
                <option value=0>Offline</option>
                <option value=1>Online</option>
            </select>
            <label class="font-bold">Bukti Transfer</label>
            <div class="flex items-end gap-x-4 mb-4">
                <img src="{{ asset('assets/svg/empty-image.svg') }}" class="w-48 h-48 rounded-lg"
                    id="preview-bukti-transfer">
                <div class="flex flex-col gap-2">
                    <input type="file" name="evidence" id="bukti-transfer" class="invisible w-2"
                        onchange="loadFile(event, 'bukti-transfer')" accept="image/*" required>
                    <label for="bukti-transfer" class="mangga-button-green cursor-pointer">Unggah Bukti Transfer</label>
                    <span>*Ukuran File Unggahan Maksimal 2 MB</span>
                </div>
            </div>
            <button type="submit" class="mangga-button-green w-full mb-4">Daftar</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        var loadFile = function(event, id) {
            if ($('#' + id)[0].files[0].size > 2097152) {
                alert("Ukuran gambar tidak bisa melebihi 2 MB!");
                $('#' + id).val(null);
            } else {
                $('#preview-' + id).attr('src', URL.createObjectURL(event.target.files[0]));
            }
        };

        function getRandom(length) {
            return Math.floor(Math.pow(10, length - 1) + Math.random() * 9 * Math.pow(10, length - 1));
        }
    </script>
    <script>
        window.onload = (event) => {
            let ref = "MHE" + getRandom(7)
            $('#ref-id').html(ref)
            $('#ref-input').val(ref)
        };
    </script>
@endsection

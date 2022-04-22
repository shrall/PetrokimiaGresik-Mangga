
@php
function rupiah($angka)
{
    $hasil_rupiah = number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
@endphp
<table>
    <thead>
        <tr>
            <th>TAR</th>
            <th>Tanggal</th>
            <th>Pokok</th>
            <th>Jasa</th>
            <th>Total</th>
            <th>Stat</th>
        </tr>
        <tr>
            <th colspan="2">Normal</th>
            <th>Rp. {{ rupiah($utama->request_amount) }}</th>
            @php
                if ($utama->evaluation->loan_period < 12) {
                    $service = (($utama->evaluation->loan_period % 12) * 24) / 100;
                } elseif ($utama->evaluation->loan_period >= 36) {
                    $service = 981 / 100 + (($utama->evaluation->loan_period % 36) * 24) / 100;
                } elseif ($utama->evaluation->loan_period >= 24) {
                    $service = 654 / 100 + (($utama->evaluation->loan_period % 24) * 24) / 100;
                } elseif ($utama->evaluation->loan_period >= 12) {
                    $service = 327 / 100 + (($utama->evaluation->loan_period % 12) * 24) / 100;
                }
                $jasa = $utama->request_amount * $service;
                $jasa = $jasa / 100;
            @endphp
            <th>Rp. {{ rupiah($jasa) }}</th>
            <th>Rp. {{ rupiah($jasa + $utama->request_amount) }}</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 1; $i <= $utama->evaluation->loan_period; $i++)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ date('d-M-y',strtotime('+' . $i . ' month', strtotime('midnight first day of last month')) + 60 * 60 * 24 * 4) }}
                </td>
                <td>Rp. {{ rupiah($utama->request_amount / $utama->evaluation->loan_period) }}
                </td>
                <td>Rp. {{ rupiah($jasa / $utama->evaluation->loan_period) }}
                </td>
                <td>Rp. {{ rupiah(($jasa + $utama->request_amount) / $utama->evaluation->loan_period) }}
                </td>
                <td>N</td>
            </tr>
        @endfor
    </tbody>
</table>

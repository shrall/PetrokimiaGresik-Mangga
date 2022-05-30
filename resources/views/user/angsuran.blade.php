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
        </tr>
        <tr>
            <th colspan="2">Normal</th>
            <th>Rp. {{ rupiah($utama->request_amount) }}</th>
            @php
                $totalpinjam = $utama->request_amount;
                $sisa = 0;
                $angsuran = ($utama->request_amount * ($utama->service_fee / 12 / 100)) / (1 - 1 / pow(1 + $utama->service_fee / 12 / 100, $utama->evaluation->loan_period));
                $angsuran_bulet = floor($angsuran / 100) * 100;
                $totalangsuran = ceil(($angsuran_bulet * $utama->evaluation->loan_period) / 10000) * 10000;
            @endphp
            <th></th>
            <th>Rp. {{ rupiah($totalangsuran) }}</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 1; $i <= $utama->evaluation->loan_period; $i++)
            @php
                $sisa += $angsuran - $angsuran_bulet;
                $jasa = ($totalpinjam * ($utama->service_fee / 12)) / 100;
                $sisa += $jasa - round($jasa / 100) * 100;
            @endphp
            @if ($i == $utama->evaluation->loan_period)
                @php
                    $angsuran_bulet += $totalangsuran - $angsuran_bulet * $utama->evaluation->loan_period;
                @endphp
            @endif
            <tr>
                <td>{{ $i }}</td>
                <td>{{ date('d-M-y', strtotime('+' . $i . ' month', strtotime('midnight first day of last month')) + 60 * 60 * 24 * 4) }}
                </td>
                <td>Rp.
                    {{ rupiah($angsuran_bulet - round($jasa / 100) * 100) }}
                </td>
                <td>Rp. {{ rupiah(round($jasa / 100) * 100) }}
                </td>
                <td>Rp. {{ rupiah($angsuran_bulet) }}
                </td>
            </tr>
            @php
                $totalpinjam -= $angsuran_bulet - round($jasa / 100) * 100;
            @endphp
        @endfor
    </tbody>
</table>

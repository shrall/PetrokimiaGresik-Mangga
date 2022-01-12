<?php

namespace Database\Seeders;

use App\Models\Subsector;
use Illuminate\Database\Seeder;

class SubSectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subsector = new Subsector();
        $subsector->name = 'Bahan Bangunan';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kerajinan: Kayu, Kulit, Logam, Perak, Batu Mulia, Perhiasan, Keramik, Gerabah';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kimia';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Meubel & Interior';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Pakaian Jadi: Batik (Tulis, Cap, Printing), Baju Dewasa, Anak, Pria/Wanita';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Peralatan';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Energi: Listrik, Air, Gas, Tenaga Surya';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Makanan & Minuman';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Tekstil, Sprei, Taplak Meja, Gorden';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kreatif: Layanan Komputer dan Piranti Lunak';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kreatif: Musik';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kreatif: Pasar Seni dan Barang Antik';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kreatif: Penerbitan & Percetakan';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kreatif: Penerbitan Buku, Jurnal, Koran, Majalah, Tabloid dan Konten Digital';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kreatif: Permainan Interaktif';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kreatif: Televisi & Radio';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kreatif: Video, Film dan Fotografi';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Logam: Spare Part';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Logam: Rumah Tangga';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Logam: Supporting Solar Cell';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Logam: Supporting Sinyal Kereta Api';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Logam: Pengelasan';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Karet: Spare Part';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Karet: Rumah Tangga';
        $subsector->sector_id = 1;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Budidaya Air Tawar';
        $subsector->sector_id = 2;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Budidaya Laut';
        $subsector->sector_id = 2;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Budidaya Laut, Keramba, Jaring Apung';
        $subsector->sector_id = 2;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Budidaya Tambak';
        $subsector->sector_id = 2;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Tangkap Laut';
        $subsector->sector_id = 2;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Tangkap Umum';
        $subsector->sector_id = 2;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Holtikultura Buah (Alpukat, Belimbing, Duku, Jambu Biji, dll)';
        $subsector->sector_id = 3;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Holtikultura Sayuran (Bawang Merah, Kentang, Kubis, Cabe, dll)';
        $subsector->sector_id = 3;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Holtikultura Tanaman Hias (Anggrek, Gladiol, Krisan, Mawar, dll)';
        $subsector->sector_id = 3;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Holtikultura Tanaman Obat (Jahe, Lengkuas, Kencur, Kunyit, dll)';
        $subsector->sector_id = 3;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Tanaman Pangan (Padi, Jagung, Kedelai, Ubi Jalar, dll)';
        $subsector->sector_id = 3;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Arsitektur';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Desain';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Desain Fesyen';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Fotokopi';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Hiburan/Entertainment';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kesehatan';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Keuangan';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Konstruksi';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Konsultan';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Laundry';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Pendidikan';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Penyedia Layanan Website';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Percetakan';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Perhotelan & Pariwisata';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Periklanan';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Perseweaan Alat Pesta';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Perseweaan Mobil';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Persewaan Sound System';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Rias dan Kecantikan';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Riset dan Pengembangan';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Seni Pertunjukan';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Service Elektronik';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Service Kendaraan';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Tempat Kos dan Sewa Rumah';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Transportasi';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Catering';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Pengolahan Hasil Pertanian';
        $subsector->sector_id = 4;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Ekspor';
        $subsector->sector_id = 5;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Impor';
        $subsector->sector_id = 5;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Migas';
        $subsector->sector_id = 5;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Umum Non Migas';
        $subsector->sector_id = 5;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Budidaya Ternak (Sapi, Kerbau, Kambing, Domba, dll)';
        $subsector->sector_id = 6;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Pembibitan (Sapi, Kerbau, Kambing, Domba, dll)';
        $subsector->sector_id = 6;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Koperasi Konvensional';
        $subsector->sector_id = 7;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Koperasi Syariah';
        $subsector->sector_id = 7;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Cengkeh';
        $subsector->sector_id = 8;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Coklat, Kakao';
        $subsector->sector_id = 8;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Karet';
        $subsector->sector_id = 8;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kelapa';
        $subsector->sector_id = 8;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kelapa Sawit: Biji Sawit & Minyak Sawit';
        $subsector->sector_id = 8;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kina';
        $subsector->sector_id = 8;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Kopi';
        $subsector->sector_id = 8;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Tebu';
        $subsector->sector_id = 8;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Teh';
        $subsector->sector_id = 8;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Tembakau';
        $subsector->sector_id = 8;
        $subsector->save();

        $subsector = new Subsector();
        $subsector->name = 'Lada';
        $subsector->sector_id = 8;
        $subsector->save();
    }
}

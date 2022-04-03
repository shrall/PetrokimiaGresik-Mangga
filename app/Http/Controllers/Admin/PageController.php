<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Madu;
use App\Models\Muda;
use App\Models\People;
use App\Models\User;
use App\Models\Utama;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        $businesses = Business::all();
        $users = User::all();
        $madus = Madu::all();
        $mojokerto = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%mojokerto%');
        })->where('mangga_type', 1)->get();
        $pasuruan = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%pasuruan%');
        })->where('mangga_type', 1)->get();
        $surabaya = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%surabaya%');
        })->where('mangga_type', 1)->get();
        $gresik = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%gresik%');
        })->where('mangga_type', 1)->get();
        $lamongan = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%lamongan%');
        })->where('mangga_type', 1)->get();
        $sidoarjo = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%sidoarjo%');
        })->where('mangga_type', 1)->get();
        $madiun = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%madiun%');
        })->where('mangga_type', 1)->get();
        $bojonegoro = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%bojonegoro%');
        })->where('mangga_type', 1)->get();
        $jombang = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%jombang%');
        })->where('mangga_type', 1)->get();
        $magetan = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%magetan%');
        })->where('mangga_type', 1)->get();
        $nganjuk = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%nganjuk%');
        })->where('mangga_type', 1)->get();
        $ngawi = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%ngawi%');
        })->where('mangga_type', 1)->get();
        $tuban = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%tuban%');
        })->where('mangga_type', 1)->get();
        $banyuwangi = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%banyuwangi%');
        })->where('mangga_type', 1)->get();
        $bondowoso = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%bondowoso%');
        })->where('mangga_type', 1)->get();
        $jember = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%jember%');
        })->where('mangga_type', 1)->get();
        $lumajang = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%lumajang%');
        })->where('mangga_type', 1)->get();
        $probolinggo = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%probolinggo%');
        })->where('mangga_type', 1)->get();
        $situbondo = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%situbondo%');
        })->where('mangga_type', 1)->get();
        $batu = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%batu%');
        })->where('mangga_type', 1)->get();
        $blitar = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%blitar%');
        })->where('mangga_type', 1)->get();
        $kediri = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%kediri%');
        })->where('mangga_type', 1)->get();
        $malang = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%malang%');
        })->where('mangga_type', 1)->get();
        $pacitan = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%pacitan%');
        })->where('mangga_type', 1)->get();
        $ponorogo = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%ponorogo%');
        })->where('mangga_type', 1)->get();
        $trenggalek = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%trenggalek%');
        })->where('mangga_type', 1)->get();
        $tulungagung = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%tulungagung%');
        })->where('mangga_type', 1)->get();
        $bangkalan = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%bangkalan%');
        })->where('mangga_type', 1)->get();
        $pamekasan = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%pamekasan%');
        })->where('mangga_type', 1)->get();
        $sampang = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%sampang%');
        })->where('mangga_type', 1)->get();
        $sumenep = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%sumenep%');
        })->where('mangga_type', 1)->get();
        $banjarnegara = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%banjarnegara%');
        })->where('mangga_type', 1)->get();
        $banyumas = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%banyumas%');
        })->where('mangga_type', 1)->get();
        $cilacap = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%cilacap%');
        })->where('mangga_type', 1)->get();
        $purbalingga = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%purbalingga%');
        })->where('mangga_type', 1)->get();
        $kebumen = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%kebumen%');
        })->where('mangga_type', 1)->get();
        $magelang = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%magelang%');
        })->where('mangga_type', 1)->get();
        $purworejo = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%purworejo%');
        })->where('mangga_type', 1)->get();
        $temanggung = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%temanggung%');
        })->where('mangga_type', 1)->get();
        $wonosobo = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%wonosobo%');
        })->where('mangga_type', 1)->get();
        $surakarta = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%surakarta%');
        })->where('mangga_type', 1)->get();
        $boyolali = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%boyolali%');
        })->where('mangga_type', 1)->get();
        $karanganyar = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%karanganyar%');
        })->where('mangga_type', 1)->get();
        $klaten = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%klaten%');
        })->where('mangga_type', 1)->get();
        $sragen = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%sragen%');
        })->where('mangga_type', 1)->get();
        $sukoharjo = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%sukoharjo%');
        })->where('mangga_type', 1)->get();
        $wonogiri = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%wonogiri%');
        })->where('mangga_type', 1)->get();
        $batang = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%batang%');
        })->where('mangga_type', 1)->get();
        $brebes = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%brebes%');
        })->where('mangga_type', 1)->get();
        $pekalongan = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%pekalongan%');
        })->where('mangga_type', 1)->get();
        $pemalang = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%pemalang%');
        })->where('mangga_type', 1)->get();
        $tegal = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%tegal%');
        })->where('mangga_type', 1)->get();
        $salatiga = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%salatiga%');
        })->where('mangga_type', 1)->get();
        $demak = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%demak%');
        })->where('mangga_type', 1)->get();
        $grobogan = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%grobogan%');
        })->where('mangga_type', 1)->get();
        $kendal = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%kendal%');
        })->where('mangga_type', 1)->get();
        $semarang = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%semarang%');
        })->where('mangga_type', 1)->get();
        $blora = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%blora%');
        })->where('mangga_type', 1)->get();
        $jepara = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%jepara%');
        })->where('mangga_type', 1)->get();
        $kudus = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%kudus%');
        })->where('mangga_type', 1)->get();
        $pati = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%pati%');
        })->where('mangga_type', 1)->get();
        $rembang = Business::whereHas('city', function (Builder $query) {
            $query->where('name', 'like', '%rembang%');
        })->where('mangga_type', 1)->get();
        return view('admin.dashboard', compact(
            'businesses',
            'users',
            'madus',
            'rembang',
            'pati',
            'kudus',
            'jepara',
            'blora',
            'semarang',
            'kendal',
            'grobogan',
            'demak',
            'salatiga',
            'tegal',
            'pemalang',
            'pekalongan',
            'brebes',
            'batang',
            'wonogiri',
            'sukoharjo',
            'sragen',
            'klaten',
            'karanganyar',
            'boyolali',
            'surakarta',
            'wonosobo',
            'temanggung',
            'purworejo',
            'magelang',
            'kebumen',
            'purbalingga',
            'cilacap',
            'banyumas',
            'banjarnegara',
            'sumenep',
            'sampang',
            'pamekasan',
            'bangkalan',
            'tulungagung',
            'trenggalek',
            'ponorogo',
            'pacitan',
            'malang',
            'kediri',
            'blitar',
            'batu',
            'situbondo',
            'probolinggo',
            'lumajang',
            'jember',
            'bondowoso',
            'banyuwangi',
            'tuban',
            'ngawi',
            'nganjuk',
            'magetan',
            'madiun',
            'jombang',
            'bojonegoro',
            'sidoarjo',
            'pasuruan',
            'mojokerto',
            'lamongan',
            'gresik',
            'surabaya',
            'mojokerto'
        ));
    }
    public function program_map(String $map)
    {
        $businesses = Business::whereHas('city', function (Builder $query) use ($map) {
            $query->where('name', 'like', '%' . $map . '%');
        })->where('mangga_type', 1)->get();
        return view('admin.map', compact('businesses', 'map'));
    }
    public function program()
    {
        $people = People::first();
        $businesses = Business::where('registration_number', 'not like', '%-9-1%')->where('mangga_type', 1)->get();
        $madus = Madu::all();
        return view('admin.program', compact('businesses', 'people', 'madus'));
    }
    public function mangga_muda(Business $business)
    {
        $muda = $business->muda;
        return view('admin.mangga.muda', compact('muda'));
    }
    public function mangga_utama(Business $business)
    {
        $utama = $business->utama;
        return view('admin.mangga.utama', compact('utama'));
    }
}

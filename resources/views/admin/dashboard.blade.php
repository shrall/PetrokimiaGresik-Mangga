@extends('layouts.admin')

@section('content')
    <div class="grid grid-cols-3 gap-x-4">
        <div class="border-2 border-gray-400 bg-white">
            <div class="flex items-center justify-evenly gap-x-4 p-4">
                <div class="flex flex-col gap-y-2">
                    <div class="text-5xl text-mangga-green-500 font-bold">
                        {{ count($businesses) + count($madus) }}
                    </div>
                    Ajuan
                </div>
                <span class="fa fa-fw fa-clipboard-list text-gray-400 text-8xl"></span>
            </div>
            <hr>
            <a href="{{ route('admin.program') }}" class="flex justify-center hover:text-gray-700 my-4">Lihat Detail ></a>
        </div>
        <div class="border-2 border-gray-400 bg-white">
            <div class="flex items-center justify-evenly gap-x-4 p-4">
                <div class="flex flex-col gap-y-2">
                    <div class="text-5xl text-mangga-green-500 font-bold">
                        #
                    </div>
                    UMKM
                </div>
                <span class="fa fa-fw fa-store-alt text-gray-400 text-8xl"></span>
            </div>
            <hr>
            <a href="#" class="flex justify-center hover:text-gray-700 my-4">Lihat Detail ></a>
        </div>
        <div class="border-2 border-gray-400 bg-white">
            <div class="flex items-center justify-evenly gap-x-4 p-4">
                <div class="flex flex-col gap-y-2">
                    <div class="text-5xl text-mangga-green-500 font-bold">
                        {{ count($users) }}
                    </div>
                    Pengguna
                </div>
                <span class="fa fa-fw fa-users text-gray-400 text-8xl"></span>
            </div>
            <hr>
            <a href="{{ route('admin.user.index') }}" class="flex justify-center hover:text-gray-700 my-4">Lihat Detail
                ></a>
        </div>
    </div>
    <div class="text-2xl font-bold mb-8">Sebaran Mitra - Jawa Timur</div>
    <div id="chart-east"></div>
    <div class="text-2xl font-bold mb-8">Sebaran Mitra - Jawa Tengah</div>
    <div id="chart-central"></div>
@endsection

@section('head')
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script type="text/javascript"
        src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    <script src="https://unpkg.com/load-dataurl@0.0.1/dist/index.min.js"></script>
    <script type="text/javascript">
        FusionCharts.ready(function() {
            var chartObj = new FusionCharts({
                type: 'maps/eastjava',
                renderAt: 'chart-east',
                width: '100%',
                height: '100%',
                dataFormat: 'json',
                dataSource: {
                    "chart": {
                        showlegend: 0,
                        theme: "fusion",
                        "numberSuffix": " Mitra",
                        "entityFillHoverColor": "#009345",
                        showtooltip: "1",
                        showlabels: "1",
                        showentityhovereffect: "1",
                        showmarkerlabels: "1",
                        markerfontsize: "18",
                        markerfontcolor: "#0a0a0a",
                        "bgcolor": "#f8f8f8",
                    },
                    "data": [{
                        "id": "ID.JI.MJ",
                        "value": "{{ count($mojokerto) }}",
                        "displayValue": " ",
                        "color": "{{ count($mojokerto) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kota Mojokerto, {{ count($mojokerto) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PS",
                        "value": "{{ count($pasuruan) }}",
                        "displayValue": " ",
                        "color": "{{ count($pasuruan) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kota Pasuruan, {{ count($pasuruan) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SR",
                        "value": "{{ count($surabaya) }}",
                        "displayValue": "Surabaya",
                        "color": "{{ count($surabaya) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kota Surabaya, {{ count($surabaya) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.GR",
                        "value": "{{ count($gresik) }}",
                        "displayValue": "Gresik",
                        "color": "{{ count($gresik) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Gresik, {{ count($gresik) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.LA",
                        "value": "{{ count($lamongan) }}",
                        "displayValue": "Lamongan",
                        "color": "{{ count($lamongan) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Lamongan, {{ count($lamongan) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MK",
                        "value": "{{ count($mojokerto) }}",
                        "displayValue": "Mojokerto",
                        "color": "{{ count($mojokerto) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Mojokerto, {{ count($mojokerto) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PR",
                        "value": "{{ count($pasuruan) }}",
                        "displayValue": "Pasuruan",
                        "color": "{{ count($pasuruan) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Pasuruan, {{ count($pasuruan) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SD",
                        "value": "{{ count($sidoarjo) }}",
                        "displayValue": "Sidoarjo",
                        "color": "{{ count($sidoarjo) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Sidoarjo, {{ count($sidoarjo) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MD",
                        "value": "{{ count($madiun) }}",
                        "displayValue": " ",
                        "color": "{{ count($madiun) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kota Madiun, {{ count($madiun) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BJ",
                        "value": "{{ count($bojonegoro) }}",
                        "displayValue": "Bojonegoro",
                        "color": "{{ count($bojonegoro) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Bojonegoro, {{ count($bojonegoro) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.JO",
                        "value": "{{ count($jombang) }}",
                        "displayValue": "Jombang",
                        "color": "{{ count($jombang) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Jombang, {{ count($jombang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MN",
                        "value": "{{ count($madiun) }}",
                        "displayValue": "Madiun",
                        "color": "{{ count($madiun) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Madiun, {{ count($madiun) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MT",
                        "value": "{{ count($magetan) }}",
                        "displayValue": "Magetan",
                        "color": "{{ count($magetan) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Magetan, {{ count($magetan) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.NJ",
                        "value": "{{ count($nganjuk) }}",
                        "displayValue": "Nganjuk",
                        "color": "{{ count($nganjuk) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Nganjuk, {{ count($nganjuk) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.NW",
                        "value": "{{ count($ngawi) }}",
                        "displayValue": "Ngawi",
                        "color": "{{ count($ngawi) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Ngawi, {{ count($ngawi) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TB",
                        "value": "{{ count($tuban) }}",
                        "displayValue": "Tuban",
                        "color": "{{ count($tuban) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Tuban, {{ count($tuban) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PB",
                        "value": "{{ count($probolinggo) }}",
                        "displayValue": " ",
                        "color": "{{ count($probolinggo) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kota Probolinggo, {{ count($probolinggo) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BW",
                        "value": "{{ count($banyuwangi) }}",
                        "displayValue": "Banyuwangi",
                        "color": "{{ count($banyuwangi) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Banyuwangi, {{ count($banyuwangi) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BD",
                        "value": "{{ count($bondowoso) }}",
                        "displayValue": "Bondowoso",
                        "color": "{{ count($bondowoso) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Bondowoso, {{ count($bondowoso) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.JE",
                        "value": "{{ count($jember) }}",
                        "displayValue": "Jember",
                        "color": "{{ count($jember) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Jember, {{ count($jember) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.LU",
                        "value": "{{ count($lumajang) }}",
                        "displayValue": "Lumajang",
                        "color": "{{ count($lumajang) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Lumajang, {{ count($lumajang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PL",
                        "value": "{{ count($probolinggo) }}",
                        "displayValue": "Probolinggo",
                        "color": "{{ count($probolinggo) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Probolinggo, {{ count($probolinggo) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SB",
                        "value": "{{ count($situbondo) }}",
                        "displayValue": "Situbondo",
                        "color": "{{ count($situbondo) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Situbondo, {{ count($situbondo) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BA",
                        "value": "{{ count($batu) }}",
                        "displayValue": "Batu",
                        "color": "{{ count($batu) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kota Batu, {{ count($batu) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BM",
                        "value": "{{ count($blitar) }}",
                        "displayValue": " ",
                        "color": "{{ count($blitar) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kota Blitar, {{ count($blitar) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.KM",
                        "value": "{{ count($kediri) }}",
                        "displayValue": " ",
                        "color": "{{ count($kediri) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kota Kediri, {{ count($kediri) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.ML",
                        "value": "{{ count($malang) }}",
                        "displayValue": " ",
                        "color": "{{ count($malang) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kota Malang, {{ count($malang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BR",
                        "value": "{{ count($blitar) }}",
                        "displayValue": "Blitar",
                        "color": "{{ count($blitar) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Blitar, {{ count($blitar) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.KR",
                        "value": "{{ count($kediri) }}",
                        "displayValue": "Kediri",
                        "color": "{{ count($kediri) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Kediri, {{ count($kediri) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MG",
                        "value": "{{ count($malang) }}",
                        "displayValue": "Malang",
                        "color": "{{ count($malang) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Malang, {{ count($malang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PC",
                        "value": "{{ count($pacitan) }}",
                        "displayValue": "Pacitan",
                        "color": "{{ count($pacitan) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Pacitan, {{ count($pacitan) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PG",
                        "value": "{{ count($ponorogo) }}",
                        "displayValue": "Ponorogo",
                        "color": "{{ count($ponorogo) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Ponorogo, {{ count($ponorogo) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TR",
                        "value": "{{ count($trenggalek) }}",
                        "displayValue": "Trenggalek",
                        "color": "{{ count($trenggalek) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Trenggalek, {{ count($trenggalek) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TG",
                        "value": "{{ count($tulungagung) }}",
                        "displayValue": "Tulungagung",
                        "color": "{{ count($tulungagung) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Tulungagung, {{ count($tulungagung) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BK",
                        "value": "{{ count($bangkalan) }}",
                        "displayValue": "Bangkalan",
                        "color": "{{ count($bangkalan) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Bangkalan, {{ count($bangkalan) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PK",
                        "value": "{{ count($pamekasan) }}",
                        "displayValue": "Pamekasan<br><br>",
                        "color": "{{ count($pamekasan) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Pamekasan, {{ count($pamekasan) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SA",
                        "value": "{{ count($sampang) }}",
                        "displayValue": "Sampang",
                        "color": "{{ count($sampang) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Sampang, {{ count($sampang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SM",
                        "value": "{{ count($sumenep) }}",
                        "displayValue": "Sumenep",
                        "color": "{{ count($sumenep) != 0 ? '#009345' : '#ffffff' }}",
                        "toolText": "Kabupaten Sumenep, {{ count($sumenep) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, ]
                },
                events: {
                    entityClick: function(eventObj, dataObj) {
                        var url = '{{ route("admin.program.map", ":slug") }}';
                        url = url.replace(':slug', dataObj.label.substring(0, dataObj.label.indexOf(' ')));
                        window.location.href=url;
                    }
                }
            });
            chartObj.render();
        });
    </script>
    <script type="text/javascript">
        FusionCharts.ready(function() {
            var chartObj = new FusionCharts({
                type: 'maps/centraljava',
                renderAt: 'chart-central',
                width: '100%',
                height: '100%',
                dataFormat: 'json',
                dataSource: {
                    "chart": {
                        showlegend: 0,
                        theme: "fusion",
                        "numberSuffix": " Mitra",
                        "entityFillHoverColor": "#fecb00",
                        showtooltip: "1",
                        showlabels: "1",
                        showentityhovereffect: "1",
                        showmarkerlabels: "1",
                        markerfontsize: "18",
                        markerfontcolor: "#0a0a0a",
                        "bgcolor": "#f8f8f8",
                    },
                    "data": [{
                        "id": "ID.JT.BN",
                        "value": "{{ count($banjarnegara) }}",
                        "displayValue": "Banjarnegara",
                        "color": "{{ count($banjarnegara) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Banjarnegara, {{ count($banjarnegara) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.BY",
                        "value": "{{ count($banyumas) }}",
                        "displayValue": "Banyumas",
                        "color": "{{ count($banyumas) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Banyumas, {{ count($banyumas) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.CI",
                        "value": "{{ count($cilacap) }}",
                        "displayValue": "Cilacap",
                        "color": "{{ count($cilacap) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Cilacap, {{ count($cilacap) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PB",
                        "value": "{{ count($purbalingga) }}",
                        "displayValue": "Purbalingga",
                        "color": "{{ count($purbalingga) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Purbalingga, {{ count($purbalingga) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.MM",
                        "value": "{{ count($magelang) }}",
                        "displayValue": " ",
                        "color": "{{ count($magelang) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kota Magelang, {{ count($magelang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.KB",
                        "value": "{{ count($kebumen) }}",
                        "displayValue": "Kebumen",
                        "color": "{{ count($kebumen) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Kebumen, {{ count($kebumen) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.MR",
                        "value": "{{ count($magelang) }}",
                        "displayValue": "Magelang",
                        "color": "{{ count($magelang) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Magelang, {{ count($magelang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PW",
                        "value": "{{ count($purworejo) }}",
                        "displayValue": "Purworejo",
                        "color": "{{ count($purworejo) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Purworejo, {{ count($purworejo) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.TG",
                        "value": "{{ count($temanggung) }}",
                        "displayValue": "Temanggung",
                        "color": "{{ count($temanggung) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Temanggung, {{ count($temanggung) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.WS",
                        "value": "{{ count($wonosobo) }}",
                        "displayValue": "Wonosobo",
                        "color": "{{ count($wonosobo) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Wonosobo, {{ count($wonosobo) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SK",
                        "value": "{{ count($surakarta) }}",
                        "displayValue": "Surakarta",
                        "color": "{{ count($surakarta) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kota Surakarta, {{ count($surakarta) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.BO",
                        "value": "{{ count($boyolali) }}",
                        "displayValue": "Boyolali",
                        "color": "{{ count($boyolali) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Boyolali, {{ count($boyolali) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.KA",
                        "value": "{{ count($karanganyar) }}",
                        "displayValue": "Karanganyar",
                        "color": "{{ count($karanganyar) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Karanganyar, {{ count($karanganyar) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.KL",
                        "value": "{{ count($klaten) }}",
                        "displayValue": "Klaten",
                        "color": "{{ count($klaten) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Klaten, {{ count($klaten) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SG",
                        "value": "{{ count($sragen) }}",
                        "displayValue": "Sragen",
                        "color": "{{ count($sragen) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Sragen, {{ count($sragen) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SH",
                        "value": "{{ count($sukoharjo) }}",
                        "displayValue": "Sukoharjo",
                        "color": "{{ count($sukoharjo) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Sukoharjo, {{ count($sukoharjo) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.WG",
                        "value": "{{ count($wonogiri) }}",
                        "displayValue": "Wonogiri",
                        "color": "{{ count($wonogiri) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Wonogiri, {{ count($wonogiri) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PM",
                        "value": "{{ count($pekalongan) }}",
                        "displayValue": " ",
                        "color": "{{ count($pekalongan) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kota Pekalongan, {{ count($pekalongan) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.TM",
                        "value": "{{ count($tegal) }}",
                        "displayValue": " ",
                        "color": "{{ count($tegal) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kota Tegal, {{ count($tegal) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.BT",
                        "value": "{{ count($batang) }}",
                        "displayValue": "Batang",
                        "color": "{{ count($batang) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Batang, {{ count($batang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.BR",
                        "value": "{{ count($brebes) }}",
                        "displayValue": "Brebes",
                        "color": "{{ count($brebes) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Brebes, {{ count($brebes) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PR",
                        "value": "{{ count($pekalongan) }}",
                        "displayValue": "Pekalongan",
                        "color": "{{ count($pekalongan) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Pekalongan, {{ count($pekalongan) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PL",
                        "value": "{{ count($pemalang) }}",
                        "displayValue": "Pemalang",
                        "color": "{{ count($pemalang) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Pemalang, {{ count($pemalang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.TR",
                        "value": "{{ count($tegal) }}",
                        "displayValue": "Tegal",
                        "color": "{{ count($tegal) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Tegal, {{ count($tegal) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SA",
                        "value": "{{ count($salatiga) }}",
                        "displayValue": "Salatiga",
                        "color": "{{ count($salatiga) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kota Salatiga, {{ count($salatiga) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SM",
                        "value": "{{ count($semarang) }}",
                        "displayValue": " ",
                        "color": "{{ count($semarang) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kota Semarang, {{ count($semarang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.DE",
                        "value": "{{ count($demak) }}",
                        "displayValue": "Demak",
                        "color": "{{ count($demak) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Demak, {{ count($demak) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.GR",
                        "value": "{{ count($mojokerto) }}",
                        "displayValue": "Grobogan",
                        "color": "{{ count($mojokerto) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Grobogan, {{ count($surakarta) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.KN",
                        "value": "{{ count($kendal) }}",
                        "displayValue": "Kendal",
                        "color": "{{ count($kendal) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Kendal, {{ count($kendal) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SR",
                        "value": "{{ count($semarang) }}",
                        "displayValue": "Semarang",
                        "color": "{{ count($semarang) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Semarang, {{ count($semarang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.BL",
                        "value": "{{ count($blora) }}",
                        "displayValue": "Blora",
                        "color": "{{ count($blora) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Blora, {{ count($blora) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.JE",
                        "value": "{{ count($jepara) }}",
                        "displayValue": "Jepara",
                        "color": "{{ count($jepara) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Jepara, {{ count($jepara) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.KU",
                        "value": "{{ count($kudus) }}",
                        "displayValue": "Kudus",
                        "color": "{{ count($kudus) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Kudus, {{ count($kudus) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PA",
                        "value": "{{ count($pati) }}",
                        "displayValue": "Pati",
                        "color": "{{ count($pati) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Pati, {{ count($pati) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.RE",
                        "value": "{{ count($rembang) }}",
                        "displayValue": "Rembang",
                        "color": "{{ count($rembang) != 0 ? '#fecb00' : '#ffffff' }}",
                        "toolText": "Kabupaten Rembang, {{ count($rembang) }} Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, ]
                },
                events: {
                    entityClick: function(eventObj, dataObj) {
                        var url = '{{ route("admin.program.map", ":slug") }}';
                        url = url.replace(':slug', dataObj.label.substring(0, dataObj.label.indexOf(' ')));
                        window.location.href=url;
                    }
                }
            });
            chartObj.render();
        });

        function random_color() {
            var colors = document.getElementById("divDataPlotClick");
            var backColor = colors.style.color;
            colors.style.color = backColor === "black" ? "purple" : "black";
        }
    </script>
@endsection

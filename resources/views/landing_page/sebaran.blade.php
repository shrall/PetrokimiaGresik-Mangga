@extends('layouts.home')

@section('content')
    <div class="flex flex-col gap-y-4 py-4 px-8">
        <div class="text-6xl font-af text-mangga-green-400 mb-8">Sebaran Mangga</div>
        <div class="grid grid-cols-12 gap-y-4 md:gap-y-0 md:gap-12">
            <div class="col-span-12 md:col-span-3 flex items-end justify-center text-5xl font-af text-mangga-green-400">Jawa Timur</div>
            <div class="col-span-12 md:col-span-9 row">
                <div class="col-12 p-0">
                    <div id="chart-east" class="h-vh-30 md:h-vh-50"></div>
                </div>
            </div>
            <div class="hidden md:block col-span-3"></div>
            <div class="col-span-12 md:col-span-9 grid grid-cols-3 gap-x-4">
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div class="relative">
                        <img src="{{ asset('assets/svg/mangga-yellow.svg') }}" class="absolute -right-2 bottom-0 w-10">
                        <img src="{{ asset('assets/img/stock.jpg') }}" class="rounded-full w-44">
                    </div>
                    <div class="font-bold">Lorem Ipsum</div>
                    <div>Lorem Ipsum</div>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div class="relative">
                        <img src="{{ asset('assets/svg/mangga-orange.svg') }}" class="absolute -right-2 bottom-0 w-10">
                        <img src="{{ asset('assets/img/stock.jpg') }}" class="rounded-full w-44">
                    </div>
                    <div class="font-bold">Lorem Ipsum</div>
                    <div>Lorem Ipsum</div>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div class="relative">
                        <img src="{{ asset('assets/svg/mangga-green.svg') }}" class="absolute -right-2 bottom-0 w-10">
                        <img src="{{ asset('assets/img/stock.jpg') }}" class="rounded-full w-44">
                    </div>
                    <div class="font-bold">Lorem Ipsum</div>
                    <div>Lorem Ipsum</div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-3 flex md:hidden items-end justify-center text-5xl font-af text-mangga-green-400">Jawa Tengah</div>
            <div class="col-span-12 md:col-span-9 row">
                <div class="col-12 p-0">
                    <div id="chart-central" class="h-vh-30 md:h-vh-50"></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-9 grid md:hidden grid-cols-3 gap-x-4">
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div class="relative">
                        <img src="{{ asset('assets/svg/mangga-yellow.svg') }}" class="absolute -right-2 bottom-0 w-10">
                        <img src="{{ asset('assets/img/stock.jpg') }}" class="rounded-full w-44">
                    </div>
                    <div class="font-bold">Lorem Ipsum</div>
                    <div>Lorem Ipsum</div>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div class="relative">
                        <img src="{{ asset('assets/svg/mangga-orange.svg') }}" class="absolute -right-2 bottom-0 w-10">
                        <img src="{{ asset('assets/img/stock.jpg') }}" class="rounded-full w-44">
                    </div>
                    <div class="font-bold">Lorem Ipsum</div>
                    <div>Lorem Ipsum</div>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div class="relative">
                        <img src="{{ asset('assets/svg/mangga-green.svg') }}" class="absolute -right-2 bottom-0 w-10">
                        <img src="{{ asset('assets/img/stock.jpg') }}" class="rounded-full w-44">
                    </div>
                    <div class="font-bold">Lorem Ipsum</div>
                    <div>Lorem Ipsum</div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-3 flex flex-col justify-center">
                <div class="border-b-4 border-mangga-green-400 md:mt-24">
                    Mitra Kebanggaan telah tersebar di berbagai Provinsi Pulau Jawa diantaranya Provinsi Jatim terdapat
                    <span class="font-bold">499</span>
                    Mangga, Provinsi Jateng terdapat <span class="font-bold">131</span> Mangga dan Pada Provinsi D.I.Y
                    terdapat <span class="font-bold">3</span> Mangga
                </div>
                <div class="text-5xl font-af text-mangga-green-400 mt-auto hidden md:block">
                    Jawa Tengah
                </div>
            </div>
            <div class="col-span-12 md:col-span-9 hidden md:grid grid-cols-3 gap-x-4">
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div class="relative">
                        <img src="{{ asset('assets/svg/mangga-yellow.svg') }}" class="absolute -right-2 bottom-0 w-10">
                        <img src="{{ asset('assets/img/stock.jpg') }}" class="rounded-full w-44">
                    </div>
                    <div class="font-bold">Lorem Ipsum</div>
                    <div>Lorem Ipsum</div>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div class="relative">
                        <img src="{{ asset('assets/svg/mangga-orange.svg') }}" class="absolute -right-2 bottom-0 w-10">
                        <img src="{{ asset('assets/img/stock.jpg') }}" class="rounded-full w-44">
                    </div>
                    <div class="font-bold">Lorem Ipsum</div>
                    <div>Lorem Ipsum</div>
                </div>
                <div class="flex flex-col items-center justify-center gap-y-2">
                    <div class="relative">
                        <img src="{{ asset('assets/svg/mangga-green.svg') }}" class="absolute -right-2 bottom-0 w-10">
                        <img src="{{ asset('assets/img/stock.jpg') }}" class="rounded-full w-44">
                    </div>
                    <div class="font-bold">Lorem Ipsum</div>
                    <div>Lorem Ipsum</div>
                </div>
            </div>
            <div class="col-span-3"></div>
        </div>
    </div>
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
                        showtooltip: "0",
                        showlabels: "1",
                        showentityhovereffect: "0",
                        showmarkerlabels: "1",
                        markerfontsize: "18",
                        markerfontcolor: "#0a0a0a",
                        "bgcolor": "#f8f8f8",
                    },
                    "data": [{
                        "id": "ID.JI.MJ",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#009345",
                        "toolText": "Kota Mojokerto, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PS",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Pasuruan, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SR",
                        "value": "0",
                        "displayValue": "Surabaya",
                        "color": "#009345",
                        "toolText": "Kota Surabaya, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.GR",
                        "value": "52",
                        "displayValue": "Gresik",
                        "color": "#009345",
                        "toolText": "Kabupaten Gresik, 52 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.LA",
                        "value": "52",
                        "displayValue": "Lamongan",
                        "color": "#009345",
                        "toolText": "Kabupaten Lamongan, 52 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MK",
                        "value": "7",
                        "displayValue": "Mojokerto",
                        "color": "#009345",
                        "toolText": "Kabupaten Mojokerto, 7 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PR",
                        "value": "0",
                        "displayValue": "Pasuruan",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Pasuruan, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SD",
                        "value": "4",
                        "displayValue": "Sidoarjo",
                        "color": "#009345",
                        "toolText": "Kabupaten Sidoarjo, 4 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MD",
                        "value": "12",
                        "displayValue": " ",
                        "color": "#009345",
                        "toolText": "Kota Madiun, 12 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BJ",
                        "value": "80",
                        "displayValue": "Bojonegoro",
                        "color": "#009345",
                        "toolText": "Kabupaten Bojonegoro, 80 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.JO",
                        "value": "28",
                        "displayValue": "Jombang",
                        "color": "#009345",
                        "toolText": "Kabupaten Jombang, 28 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MN",
                        "value": "12",
                        "displayValue": "Madiun",
                        "color": "#009345",
                        "toolText": "Kabupaten Madiun, 12 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MT",
                        "value": "36",
                        "displayValue": "Magetan",
                        "color": "#009345",
                        "toolText": "Kabupaten Magetan, 36 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.NJ",
                        "value": "31",
                        "displayValue": "Nganjuk",
                        "color": "#009345",
                        "toolText": "Kabupaten Nganjuk, 31 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.NW",
                        "value": "17",
                        "displayValue": "Ngawi",
                        "color": "#009345",
                        "toolText": "Kabupaten Ngawi, 17 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TB",
                        "value": "39",
                        "displayValue": "Tuban",
                        "color": "#009345",
                        "toolText": "Kabupaten Tuban, 39 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PB",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Probolinggo, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BW",
                        "value": "5",
                        "displayValue": "Banyuwangi",
                        "color": "#009345",
                        "toolText": "Kabupaten Banyuwangi, 5 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BD",
                        "value": "27",
                        "displayValue": "Bondowoso",
                        "color": "#009345",
                        "toolText": "Kabupaten Bondowoso, 27 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.JE",
                        "value": "35",
                        "displayValue": "Jember",
                        "color": "#009345",
                        "toolText": "Kabupaten Jember, 35 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.LU",
                        "value": "16",
                        "displayValue": "Lumajang",
                        "color": "#009345",
                        "toolText": "Kabupaten Lumajang, 16 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PL",
                        "value": "2",
                        "displayValue": "Probolinggo",
                        "color": "#009345",
                        "toolText": "Kabupaten Probolinggo, 2 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SB",
                        "value": "3",
                        "displayValue": "Situbondo",
                        "color": "#009345",
                        "toolText": "Kabupaten Situbondo, 3 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BA",
                        "value": "0",
                        "displayValue": "Batu",
                        "color": "#ffffff",
                        "toolText": "Kota Batu, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BM",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Blitar, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.KM",
                        "value": "1",
                        "displayValue": " ",
                        "color": "#009345",
                        "toolText": "Kota Kediri, 1 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.ML",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Malang, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BR",
                        "value": "9",
                        "displayValue": "Blitar",
                        "color": "#009345",
                        "toolText": "Kabupaten Blitar, 9 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.KR",
                        "value": "3",
                        "displayValue": "Kediri",
                        "color": "#009345",
                        "toolText": "Kabupaten Kediri, 3 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MG",
                        "value": "15",
                        "displayValue": "Malang",
                        "color": "#009345",
                        "toolText": "Kabupaten Malang, 15 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PC",
                        "value": "0",
                        "displayValue": "Pacitan",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Pacitan, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PG",
                        "value": "17",
                        "displayValue": "Ponorogo",
                        "color": "#009345",
                        "toolText": "Kabupaten Ponorogo, 17 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TR",
                        "value": "1",
                        "displayValue": "Trenggalek",
                        "color": "#009345",
                        "toolText": "Kabupaten Trenggalek, 1 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TG",
                        "value": "6",
                        "displayValue": "Tulungagung",
                        "color": "#009345",
                        "toolText": "Kabupaten Tulungagung, 6 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BK",
                        "value": "6",
                        "displayValue": "Bangkalan",
                        "color": "#009345",
                        "toolText": "Kabupaten Bangkalan, 6 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PK",
                        "value": "3",
                        "displayValue": "Pamekasan<br><br>",
                        "color": "#009345",
                        "toolText": "Kabupaten Pamekasan, 3 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SA",
                        "value": "3",
                        "displayValue": "Sampang",
                        "color": "#009345",
                        "toolText": "Kabupaten Sampang, 3 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SM",
                        "value": "7",
                        "displayValue": "Sumenep",
                        "color": "#009345",
                        "toolText": "Kabupaten Sumenep, 7 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, ]
                },
                events: {
                    entityClick: function(eventObj, dataObj) {
                        console.log("event object is", eventObj);
                        console.log("data object is", dataObj);
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
                        showtooltip: "0",
                        showlabels: "1",
                        showentityhovereffect: "0",
                        showmarkerlabels: "1",
                        markerfontsize: "18",
                        markerfontcolor: "#0a0a0a",
                        "bgcolor": "#f8f8f8",
                    },
                    "data": [{
                        "id": "ID.JT.BN",
                        "value": "0",
                        "displayValue": "Banjarnegara",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Banjarnegara, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.BY",
                        "value": "0",
                        "displayValue": "Banyumas",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Banyumas, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.CI",
                        "value": "0",
                        "displayValue": "Cilacap",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Cilacap, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PB",
                        "value": "0",
                        "displayValue": "Purbalingga",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Purbalingga, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.MM",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Magelang, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.KB",
                        "value": "8",
                        "displayValue": "Kebumen",
                        "color": "#fecb00",
                        "toolText": "Kabupaten Kebumen, 8 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.MR",
                        "value": "0",
                        "displayValue": "Magelang",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Magelang, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PW",
                        "value": "0",
                        "displayValue": "Purworejo",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Purworejo, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.TG",
                        "value": "0",
                        "displayValue": "Temanggung",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Temanggung, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.WS",
                        "value": "0",
                        "displayValue": "Wonosobo",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Wonosobo, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SK",
                        "value": "0",
                        "displayValue": "Surakarta",
                        "color": "#ffffff",
                        "toolText": "Kota Surakarta, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.BO",
                        "value": "8",
                        "displayValue": "Boyolali",
                        "color": "#fecb00",
                        "toolText": "Kabupaten Boyolali, 8 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.KA",
                        "value": "0",
                        "displayValue": "Karanganyar",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Karanganyar, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.KL",
                        "value": "1",
                        "displayValue": "Klaten",
                        "color": "#fecb00",
                        "toolText": "Kabupaten Klaten, 1 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SG",
                        "value": "8",
                        "displayValue": "Sragen",
                        "color": "#fecb00",
                        "toolText": "Kabupaten Sragen, 8 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SH",
                        "value": "0",
                        "displayValue": "Sukoharjo",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Sukoharjo, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.WG",
                        "value": "0",
                        "displayValue": "Wonogiri",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Wonogiri, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PM",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Pekalongan, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.TM",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Tegal, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.BT",
                        "value": "0",
                        "displayValue": "Batang",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Batang, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.BR",
                        "value": "0",
                        "displayValue": "Brebes",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Brebes, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PR",
                        "value": "0",
                        "displayValue": "Pekalongan",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Pekalongan, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PL",
                        "value": "0",
                        "displayValue": "Pemalang",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Pemalang, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.TR",
                        "value": "0",
                        "displayValue": "Tegal",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Tegal, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SA",
                        "value": "0",
                        "displayValue": "Salatiga",
                        "color": "#ffffff",
                        "toolText": "Kota Salatiga, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SM",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Semarang, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.DE",
                        "value": "0",
                        "displayValue": "Demak",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Demak, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.GR",
                        "value": "1",
                        "displayValue": "Grobogan",
                        "color": "#fecb00",
                        "toolText": "Kabupaten Grobogan, 1 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.KN",
                        "value": "0",
                        "displayValue": "Kendal",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Kendal, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SR",
                        "value": "0",
                        "displayValue": "Semarang",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Semarang, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.BL",
                        "value": "5",
                        "displayValue": "Blora",
                        "color": "#fecb00",
                        "toolText": "Kabupaten Blora, 5 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.JE",
                        "value": "0",
                        "displayValue": "Jepara",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Jepara, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.KU",
                        "value": "0",
                        "displayValue": "Kudus",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Kudus, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.PA",
                        "value": "19",
                        "displayValue": "Pati",
                        "color": "#fecb00",
                        "toolText": "Kabupaten Pati, 19 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.RE",
                        "value": "5",
                        "displayValue": "Rembang",
                        "color": "#fecb00",
                        "toolText": "Kabupaten Rembang, 5 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, ]
                },
                events: {
                    entityClick: function(eventObj, dataObj) {
                        console.log("event object is", eventObj);
                        console.log("data object is", dataObj);
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

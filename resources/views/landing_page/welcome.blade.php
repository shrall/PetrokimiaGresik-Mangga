<html>

<head>
    <title>My first chart using FusionCharts Suite XT</title>
    {{-- Boostrap 5 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script type="text/javascript"
        src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    <script src="https://unpkg.com/load-dataurl@0.0.1/dist/index.min.js"></script>
    <script type="text/javascript">
        FusionCharts.ready(function() {
            var chartObj = new FusionCharts({
                type: 'maps/eastjava',
                renderAt: 'chart-container',
                width: '100%',
                height: '100%',
                dataFormat: 'json',
                dataSource: {
                    "chart": {
                        "caption": "Jumlah Kemitraan",
                        "formatNumberScale": "0",
                        "numberSuffix": " Mitra",
                        "showHoverEffect :": 0,
                        "entityFillHoverColor": "#ffffff",
                    },
                    "data": [{
                        "id": "ID.JI.MJ",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Mojokerto, 0 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1,
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PS",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Pasuruan, 0 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SR",
                        "value": "0",
                        "displayValue": "Surabaya",
                        "color": "#ffffff",
                        "toolText": "Kota Surabaya, 0 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.GR",
                        "value": "52",
                        "displayValue": "Gresik",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Gresik, 52 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.LA",
                        "value": "52",
                        "displayValue": "Lamongan",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Lamongan, 52 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MK",
                        "value": "7",
                        "displayValue": "Mojokerto",
                        "color": "#09a656",
                        "toolText": "Kabupaten Mojokerto, 7 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PR",
                        "value": "0",
                        "displayValue": "Pasuruan",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Pasuruan, 0 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SD",
                        "value": "4",
                        "displayValue": "Sidoarjo",
                        "color": "#fef200",
                        "toolText": "Kabupaten Sidoarjo, 4 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MD",
                        "value": "12",
                        "displayValue": " ",
                        "color": "#09a656",
                        "toolText": "Kota Madiun, 12 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BJ",
                        "value": "80",
                        "displayValue": "Bojonegoro",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Bojonegoro, 80 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.JO",
                        "value": "28",
                        "displayValue": "Jombang",
                        "color": "#09a656",
                        "toolText": "Kabupaten Jombang, 28 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MN",
                        "value": "12",
                        "displayValue": "Madiun",
                        "color": "#09a656",
                        "toolText": "Kabupaten Madiun, 12 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MT",
                        "value": "36",
                        "displayValue": "Magetan",
                        "color": "#09a656",
                        "toolText": "Kabupaten Magetan, 36 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.NJ",
                        "value": "31",
                        "displayValue": "Nganjuk",
                        "color": "#09a656",
                        "toolText": "Kabupaten Nganjuk, 31 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.NW",
                        "value": "17",
                        "displayValue": "Ngawi",
                        "color": "#09a656",
                        "toolText": "Kabupaten Ngawi, 17 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TB",
                        "value": "39",
                        "displayValue": "Tuban",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Tuban, 39 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PB",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Probolinggo, 0 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BW",
                        "value": "5",
                        "displayValue": "Banyuwangi",
                        "color": "#fef200",
                        "toolText": "Kabupaten Banyuwangi, 5 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BD",
                        "value": "27",
                        "displayValue": "Bondowoso",
                        "color": "#fef200",
                        "toolText": "Kabupaten Bondowoso, 27 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.JE",
                        "value": "35",
                        "displayValue": "Jember",
                        "color": "#fef200",
                        "toolText": "Kabupaten Jember, 35 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.LU",
                        "value": "16",
                        "displayValue": "Lumajang",
                        "color": "#fef200",
                        "toolText": "Kabupaten Lumajang, 16 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PL",
                        "value": "2",
                        "displayValue": "Probolinggo",
                        "color": "#fef200",
                        "toolText": "Kabupaten Probolinggo, 2 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SB",
                        "value": "3",
                        "displayValue": "Situbondo",
                        "color": "#fef200",
                        "toolText": "Kabupaten Situbondo, 3 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BA",
                        "value": "0",
                        "displayValue": "Batu",
                        "color": "#ffffff",
                        "toolText": "Kota Batu, 0 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BM",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Blitar, 0 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.KM",
                        "value": "1",
                        "displayValue": " ",
                        "color": "#09a656",
                        "toolText": "Kota Kediri, 1 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.ML",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
                        "toolText": "Kota Malang, 0 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BR",
                        "value": "9",
                        "displayValue": "Blitar",
                        "color": "#fef200",
                        "toolText": "Kabupaten Blitar, 9 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.KR",
                        "value": "3",
                        "displayValue": "Kediri",
                        "color": "#09a656",
                        "toolText": "Kabupaten Kediri, 3 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MG",
                        "value": "15",
                        "displayValue": "Malang",
                        "color": "#fef200",
                        "toolText": "Kabupaten Malang, 15 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PC",
                        "value": "0",
                        "displayValue": "Pacitan",
                        "color": "#ffffff",
                        "toolText": "Kabupaten Pacitan, 0 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PG",
                        "value": "17",
                        "displayValue": "Ponorogo",
                        "color": "#09a656",
                        "toolText": "Kabupaten Ponorogo, 17 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TR",
                        "value": "1",
                        "displayValue": "Trenggalek",
                        "color": "#09a656",
                        "toolText": "Kabupaten Trenggalek, 1 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TG",
                        "value": "6",
                        "displayValue": "Tulungagung",
                        "color": "#09a656",
                        "toolText": "Kabupaten Tulungagung, 6 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BK",
                        "value": "6",
                        "displayValue": "Bangkalan",
                        "color": "#ed2124",
                        "toolText": "Kabupaten Bangkalan, 6 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PK",
                        "value": "3",
                        "displayValue": "Pamekasan<br><br>",
                        "color": "#ed2124",
                        "toolText": "Kabupaten Pamekasan, 3 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SA",
                        "value": "3",
                        "displayValue": "Sampang",
                        "color": "#ed2124",
                        "toolText": "Kabupaten Sampang, 3 Mitra",
                        "fontSize": "14",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SM",
                        "value": "7",
                        "displayValue": "Sumenep",
                        "color": "#ed2124",
                        "toolText": "Kabupaten Sumenep, 7 Mitra",
                        "fontSize": "14",
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

        function random_color() {
            var colors = document.getElementById("divDataPlotClick");
            var backColor = colors.style.color;
            colors.style.color = backColor === "black" ? "purple" : "black";
        }
    </script>
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
                        "caption": "Jumlah Kemitraan Jawa Timur",
                        "formatNumberScale": "0",
                        "numberSuffix": " Mitra",
                        "showHoverEffect :": 0,
                        "entityFillHoverColor": "#ffffff",
                    },
                    "data": [{
                        "id": "ID.JI.MJ",
                        "value": "0",
                        "displayValue": " ",
                        "color": "#ffffff",
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
                        "color": "#ffffff",
                        "toolText": "Kota Surabaya, 0 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.GR",
                        "value": "52",
                        "displayValue": "Gresik",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Gresik, 52 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.LA",
                        "value": "52",
                        "displayValue": "Lamongan",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Lamongan, 52 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MK",
                        "value": "7",
                        "displayValue": "Mojokerto",
                        "color": "#0f75bd",
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
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Sidoarjo, 4 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MD",
                        "value": "12",
                        "displayValue": " ",
                        "color": "#0f75bd",
                        "toolText": "Kota Madiun, 12 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BJ",
                        "value": "80",
                        "displayValue": "Bojonegoro",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Bojonegoro, 80 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.JO",
                        "value": "28",
                        "displayValue": "Jombang",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Jombang, 28 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MN",
                        "value": "12",
                        "displayValue": "Madiun",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Madiun, 12 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MT",
                        "value": "36",
                        "displayValue": "Magetan",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Magetan, 36 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.NJ",
                        "value": "31",
                        "displayValue": "Nganjuk",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Nganjuk, 31 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.NW",
                        "value": "17",
                        "displayValue": "Ngawi",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Ngawi, 17 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TB",
                        "value": "39",
                        "displayValue": "Tuban",
                        "color": "#0f75bd",
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
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Banyuwangi, 5 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BD",
                        "value": "27",
                        "displayValue": "Bondowoso",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Bondowoso, 27 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.JE",
                        "value": "35",
                        "displayValue": "Jember",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Jember, 35 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.LU",
                        "value": "16",
                        "displayValue": "Lumajang",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Lumajang, 16 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PL",
                        "value": "2",
                        "displayValue": "Probolinggo",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Probolinggo, 2 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SB",
                        "value": "3",
                        "displayValue": "Situbondo",
                        "color": "#0f75bd",
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
                        "color": "#0f75bd",
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
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Blitar, 9 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.KR",
                        "value": "3",
                        "displayValue": "Kediri",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Kediri, 3 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.MG",
                        "value": "15",
                        "displayValue": "Malang",
                        "color": "#0f75bd",
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
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Ponorogo, 17 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TR",
                        "value": "1",
                        "displayValue": "Trenggalek",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Trenggalek, 1 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.TG",
                        "value": "6",
                        "displayValue": "Tulungagung",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Tulungagung, 6 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.BK",
                        "value": "6",
                        "displayValue": "Bangkalan",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Bangkalan, 6 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.PK",
                        "value": "3",
                        "displayValue": "Pamekasan<br><br>",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Pamekasan, 3 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SA",
                        "value": "3",
                        "displayValue": "Sampang",
                        "color": "#0f75bd",
                        "toolText": "Kabupaten Sampang, 3 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1
                    }, {
                        "id": "ID.JI.SM",
                        "value": "7",
                        "displayValue": "Sumenep",
                        "color": "#0f75bd",
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

        function random_color() {
            var colors = document.getElementById("divDataPlotClick");
            var backColor = colors.style.color;
            colors.style.color = backColor === "black" ? "purple" : "black";
        }
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
                        "caption": "Jumlah Kemitraan Jawa Tengah",
                        "formatNumberScale": "0",
                        "numberSuffix": " Mitra",
                        "showHoverEffect :": 0,
                        "entityFillHoverColor": "#ffffff",
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
                        "color": "#6ecdde",
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
                        "color": "#6ecdde",
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
                        "color": "#6ecdde",
                        "toolText": "Kabupaten Klaten, 1 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.SG",
                        "value": "8",
                        "displayValue": "Sragen",
                        "color": "#6ecdde",
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
                        "color": "#6ecdde",
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
                        "color": "#6ecdde",
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
                        "color": "#6ecdde",
                        "toolText": "Kabupaten Pati, 19 Mitra",
                        "fontSize": "12",
                        "fontColor": "#000000",
                        "fontBold": 1,
                    }, {
                        "id": "ID.JT.RE",
                        "value": "5",
                        "displayValue": "Rembang",
                        "color": "#6ecdde",
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
</head>

<body>
    <div id="chart-container">FusionCharts XT will load here!</div>
    <div class="row">
        <div class="col-6 p-0">
            <div id="chart-central"></div>
        </div>
        <div class="col-6 p-0">
            <div id="chart-east"></div>
        </div>
    </div>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        .text-center {
            text-align: center;
        }

        .text-xl {
            font-size: 1.25rem;
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .px-16 {
            padding-left: 4rem;
            padding-right: 4rem;
        }

        .border-2 {
            border-width: 2px;
        }

        .border-black {
            border-color: #000000;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .mb-12 {
            margin-bottom: 3rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .text-5xl {
            font-size: 3rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .text-4xl {
            font-size: 2.25rem;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>

<body class="" style="font-family: Arial;">
    <div class="px-16 py-14" style="height: 1220px; margin-bottom: 12rem;">
        <table style="width: 100%; margin-bottom: 12rem;">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 16rem;"></td>
                <td style="text-align: end;"><img src="{{ asset('assets/img/mangga-muda.png') }}"
                        style="width: 16rem;">
                </td>
            </tr>
        </table>
        <div class="font-bold text-center text-xl" style="margin-bottom: 3rem;">Nama Usaha: {{ $muda->business->name }}
        </div>
        <div class="text-center" style="height: 20%; margin-bottom: 7rem;">
            <img src="{{ asset('uploads/mangga/logos/' . Auth::user()->businesses[0]->logo) }}" style="height: 100%;">
        </div>
        <div style="height: 40%">
            <table style="margin-left: auto; margin-right: auto; font-size: 1.25rem;"
                class="mt-2">
                <tr>
                    <td>Judul Usaha</td>
                    <td>: {{ $muda->business_title }}</td>
                </tr>
                <tr>
                    <td>Nama / No. Mhs. Ketua Tim</td>
                    <td>: {{ $muda->leader_name }}</td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">Nama Anggota</td>
                    <td>: @foreach ($muda->members as $member)
                            @if ($loop->iteration != 1)
                                <span style="visibility: hidden;">:</span>
                            @endif{{ $member->name }}<br>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Asal Universitas</td>
                    <td>: {{ $muda->university }}</td>
                </tr>
            </table>
        </div>
        <div class="text-xl text-center">Fakultas {{ $muda->faculty }}</div>
        <div class="text-xl text-center">Universitas {{ $muda->faculty }}</div>
        <div class="text-xl text-center">{{ $muda->business->city->name }}</div>
        <div class="text-xl text-center">{{ date('Y') }}</div>
    </div>
    <div class="px-16 py-14" style="height: 1220px;">
        <table style="width: 100%;">
            <tr>
                <td><img src="{{ asset('assets/img/petrokimia-logo.png') }}" style="width: 16rem;"></td>
                <td style="text-align: end;"><img src="{{ asset('assets/img/mangga-muda.png') }}"
                        style="width: 16rem;">
                </td>
            </tr>
        </table>
        <div class="text-xl text-center">{{ date('Y') }}</div>
    </div>
</body>

</html>

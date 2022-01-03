@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        <div class="col-span-10 flex flex-col gap-y-4 py-4 px-8">
            <div class="text-6xl font-af text-mangga-green-400 mb-8">Alur dan Prosedur</div>
            <img src="{{asset('assets/svg/asset-alur.svg')}}" class="w-vw-80 mx-auto mb-8">
        </div>
    </div>
@endsection

@extends('layouts.home')

@section('content')
    <div class="grid grid-cols-10 gap-x-8 mx-8">
        @include('landing_page.inc.profil_sidebar')
        <div class="col-span-7 2xl:col-span-8 flex flex-col items-center justify-between gap-y-4 py-4 px-8">
            <div class="text-6xl font-lb text-mangga-green-400 mb-4 self-start">Program Mangga Golek</div>
            Coming Soon!
            <div></div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection

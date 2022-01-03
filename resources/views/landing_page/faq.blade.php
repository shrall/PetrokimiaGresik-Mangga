@extends('layouts.home')

@section('content')
    <div class="hidden xl:block">
        <div class="text-5xl text-center font-af text-mangga-green-400 mb-12">Ajukan Pertanyaan</div>
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-1');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-1"></span>
                    Bagaimana cara menjadi Mitra Kebanggaan Petrokimia Gresik?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-1">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-2');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-2"></span>
                    Berapa lamakah proses menjadi Mitra Kebanggan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-2">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-3');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-3"></span>
                    Apa saja Persyaratan yang perlu disiapkan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <img src="{{ asset('assets/svg/asset-home-3.svg') }}" alt="" srcset="">
        </div>
    </div>
    <div class="hidden md:block xl:hidden">
        <div class="text-5xl text-center font-af text-mangga-green-400 mb-12">Ajukan Pertanyaan</div>
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-1');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-1"></span>
                    Bagaimana cara menjadi Mitra Kebanggaan Petrokimia Gresik?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-1">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-2');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-2"></span>
                    Berapa lamakah proses menjadi Mitra Kebanggan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-2">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-3');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-xl w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron chevron-pertanyaan-3"></span>
                    Apa saja Persyaratan yang perlu disiapkan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-xl w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <img src="{{ asset('assets/svg/asset-home-3.svg') }}" alt="" srcset="">
        </div>
    </div>
    <div class="sm:block md:hidden xl:hidden">
        <div class="text-5xl text-center font-af text-mangga-green-400 mb-12">Ajukan Pertanyaan</div>
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-1');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-md w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron" id=""></span>
                    Bagaimana cara menjadi Mitra Kebanggaan Petrokimia Gresik?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-md w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-1">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-2');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-md w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron" id=""></span>
                    Berapa lamakah proses menjadi Mitra Kebanggan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-md w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-2">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mb-8">
                <div onclick="togglePertanyaanAccordion('pertanyaan-3');"
                    class="border border-mangga-green-500 bg-light-400 flex items-center gap-x-2 px-8 py-4 text-md w-vw-55 cursor-pointer">
                    <span class="fa fa-fw fa-chevron-right accordion-chevron" id=""></span>
                    Apa saja Persyaratan yang perlu disiapkan?
                </div>
                <div class="border border-mangga-green-500 px-8 py-4 text-md w-vw-55 cursor-pointer hidden accordion-pertanyaan pertanyaan-3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
            <img src="{{ asset('assets/svg/asset-home-3.svg') }}" alt="" srcset="">
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function togglePertanyaanAccordion(id) {
            $('.accordion-chevron').removeClass('fa-chevron-down').addClass('fa-chevron-right');
            $('.chevron-' + id).removeClass('fa-chevron-right').addClass('fa-chevron-down');
            $('.accordion-pertanyaan').removeClass('flex').addClass('hidden');
            $('.' + id).removeClass('hidden').addClass('flex');
        }
    </script>
@endsection

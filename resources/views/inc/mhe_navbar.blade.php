{{-- desktop --}}
<div class="items-center gap-x-4 font-pn px-8 py-4 bg-light-200 text-lg hidden xl:flex" id="navbar-desktop">
    <a href="{{ route('home') }}" class="mr-auto">
        <img src="{{ asset('assets/svg/mangga-logo-mini.svg') }}" width="30px">
    </a>
    <a href="{{ route('mhe.register') }}" class="mangga-button-green ml-auto">Daftar</a>
</div>
{{-- mobile --}}
<div class="font-pn px-8 py-4 bg-light-200 text-lg block xl:hidden" id="navbar-mobile">
    <div class="flex items-center gap-x-4 font-pn text-lg mb-4">
        <img src="{{ asset('assets/svg/mangga-logo-mini.svg') }}" width="40px" class="mr-auto">
        <a href="{{ route('mhe.register') }}" class="mangga-button-green ml-auto">Daftar</a>
    </div>
</div>

<script>
    function toggleNavbarMobile() {
        if ($('.fa-bars').length > 0) {
            $('.fa-bars').addClass('fa-times').removeClass('fa-bars');
            $('#navbar-menu-mobile').addClass('flex').removeClass('hidden');
            $('#navbar-mobile').addClass('bg-white').removeClass('bg-light-200');
        } else if ($('.fa-times').length > 0) {
            $('.fa-times').addClass('fa-bars').removeClass('fa-times');
            $('#navbar-menu-mobile').addClass('hidden').removeClass('flex');
            $('#navbar-mobile').addClass('bg-light-200').removeClass('bg-white');
        }
    }
</script>

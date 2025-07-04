<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>

    @include('layouts.sections.head')


    <script src="https://widget.galichat.com/gali-embeded.min.js" chat-hash="3sj5hrob0rrarthe1fllx" defer></script>

    @livewireStyles




</head>
<style>
    /* html{cursor: url('path-to-image.png'), url('path-to-image-2.svg'), url('path-to-image-3.jpeg'), auto;}  */
    .body-gb {
        /* background: linear-gradient(rgba(18, 18, 18, 0) 0%, rgba(18, 18, 18, 0.95) 65.1%, rgb(18, 18, 18) 100%); */
        /* background: linear-gradient(180deg, rgba(0, 0, 0, .1), transparent 20%, transparent 80%, rgba(0, 0, 0, .3)); */
    }
</style>

<body class="font-sans antialiased body-gb">

    @include('layouts.sections.body')

    {{-- <div class="fixed top-0 left-0 w-screen h-screen">
        <img src="{{ asset('images/background0.jpg') }}"
            class="object-cover w-full h-full ">
        <div class="absolute top-0 left-0 w-full h-full bode-gb"></div>
    </div> --}}

    {{-- <div id="root" class="w-screen h-screen overflow-scroll"> --}}
    {{-- @include('layouts.sections.navigation-menu') --}}
    @include('layouts.sections.navbar')
    <main id="app-main" class="w-full">
        {{ $slot }}


        @if (
            !request()->routeIs('privacy-policy') &&
                !request()->routeIs('terms-of-service') &&
                !request()->routeIs('subscription-terms'))
            @include('layouts.sections.footer')
        @endif
    </main>
    {{-- </div> --}}


    @stack('modals')
    @livewireScripts
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}

</body>

</html>

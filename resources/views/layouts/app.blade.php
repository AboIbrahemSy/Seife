<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth"

@if (request()->routeIs('checkout')) 
    dir="{{app()->getLocale() != 'ar' ?'ltr':'rtl'}}"
@endif
>

<head>

    
    @include('layouts.sections.icons')
    @include('layouts.sections.head')

    
    @vite(["resources/css/qforms/theme.css", 'resources/js/app.js',"resources/js/qforms.js",'resources/js/date-picker.js'])
    <!-- Styles -->
    @livewireStyles
    

</head>
<style>
    main {
        background: linear-gradient(rgba(18, 18, 18, 0) 0%, rgba(18, 18, 18, 0.95) 65.1%, rgb(18, 18, 18) 100%);
    }
</style>

<body class="font-sans antialiased bg-customBlack-900">
    
    
    @include('layouts.sections.body')
    
    <img src="{{ asset('images/background0.jpg') }}" alt="background image"
        class="absolute object-cover w-screen h-screen top-0 left-0 ">
    @include('layouts.sections.navigation-menu')

    <main id="app-main" class="h-screen w-screen relative z-10 overflow-y-scroll overflow-x-hidden scroll-smooth">
        {{ $slot }}
    </main>

    @stack('modals')
    @livewireScripts
</body>

</html>

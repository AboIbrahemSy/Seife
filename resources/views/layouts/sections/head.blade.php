<meta charset="utf-8">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

@include('layouts.sections.icons')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">


{{-- @include('layouts.sections.sem') --}}

@vite(["resources/css/app.css", 'resources/js/app.js'])
<wireui:scripts />

{{-- @production --}}
@include('cookie-consent::index')
{{-- @endproduction --}}


{{-- @vite(['resources/js/dev-blocker.js']) --}}

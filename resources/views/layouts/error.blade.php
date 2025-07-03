@props(['code' => null])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.sections.head')

    <link rel="stylesheet" type="text/css" href="{{asset("errors/{$code}/style.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("errors/{$code}/oxygen.fonts.css")}}">
</head>
<style>
    /* body{
        background-color: #121212
    } */
.background-img{
    position: absolute;
    object-fit: cover;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1;
}
*{
    color: #fff
}
</style>
<body>
    @include('layouts.sections.body')
    <img src="{{ asset('images/error.jpg') }}" alt="background image"
        class="background-img">
  {{ $slot }}
<script type="text/javascript" src="{{asset("errors/{$code}/script.js")}}"></script>
</body>
</html>

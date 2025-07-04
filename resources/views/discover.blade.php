<x-guest-layout>
    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="{{ __('pages.discover_title') }}" />

    <div class="container mx-auto my-24  {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">

        <h1 class="z-10 mb-4 text-5xl font-bold text-center text-brand-500 md:text-7xl drop-shadow-lg">
            {{ __('pages.discover.title') }}</h1>

        @php
            $cards = [
                [
                    'title' => __('pages.discover.section1.title'),
                    'description' => __('pages.discover.section1.paragraph'),
                    'image' => asset('images/discover1.webp'),
                ],
                [
                    'title' => __('pages.discover.section2.title'),
                    'description' => __('pages.discover.section2.paragraph'),
                    'image' => asset('images/discover2.webp'),
                ],
                [
                    'title' => __('pages.discover.section3.title'),
                    'description' => __('pages.discover.section3.paragraph'),
                    'image' => asset('images/discover3.webp'),
                ],
                [
                    'title' => __('pages.discover.section4.title'),
                    'description' => __('pages.discover.section4.paragraph'),
                    'image' => asset('images/discover4.webp'),
                ],
            ];
        @endphp

        <div class="md:max-w-[75%] mx-auto my-32">
            <x-stacking-cards :cards="$cards" />
        </div>

            <dev class="my-12 bg-white p-8 rounded-lg shadow-lg flex items-start justify-between max-w-lg mx-auto">
            {{-- <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="w-1/2 h-full rounded-md"> --}}
            <div class="{{ app()->getLocale() == 'ar' ? 'text-right rtl' : 'text-left' }}">
                <h3 class="mt-4 text-xl font-semibold text-brand-500">{{ __('pages.discover.section5.title') }}</h3>
                <p class="mt-2 text-gray-600">{!! __('pages.discover.section5.paragraph') !!}</p>
            </div>
    </dev>


        <div
            class="relative flex flex-col items-center justify-center w-3/4 mx-auto text-center h-80 text-stone-50 mt-32">
            <div class="absolute top-0 left-0 w-full py-10 mx-auto bg-fixed bg-right-bottom bg-no-repeat bg-cover artboard-horizontal artboard fixed-background h-80 md:bg-center"
                style="background-image:url('{{ asset('images/discover5.webp') }}')"></div>
        </div>

    </div>
</x-guest-layout>

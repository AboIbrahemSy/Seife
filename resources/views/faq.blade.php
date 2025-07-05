@php
    $faqsAllLang = include app_path('helper/Faq.php');
    $currentLocale = app()->getLocale(); // "ar" or "en"
    $faqsData = $faqsAllLang[$currentLocale] ?? reset($faqsAllLang); // fallback to any language if missing
    $tabTitles = array_keys($faqsData);
@endphp

<x-guest-layout>
    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="{{ __('pages.faq_title') }}" />


    <div class="container py-24 mx-auto {{ app()->getLocale() == 'ar' ? 'rtl' : '' }}">


        <div class="flex w-3/4 tab-group mx-auto" data-dui-orientation="vertical">
            <div role="tablist" class="w-1/4 relative flex flex-col {{ app()->getLocale() == 'ar' ? 'border-l' : 'border-r' }} border-stone-200">
                <div class="tab-indicator absolute left-0 w-0.5 bg-green-500 transition-transform duration-300"></div>
                @foreach ($tabTitles as $title)
                    <a href="#"
                        class="px-4 py-2 w-full text-sm tab-link {{ $loop->first ? 'active text-green-800' : 'text-green-800' }} hover:text-green-500"
                        data-dui-tab-target="faq-tab-{{ $loop->index }}">
                        {{ $title }}
                    </a>
                @endforeach
            </div>
            @foreach ($faqsData as $tabTitle => $faqs)
                <div id="faq-tab-{{ $loop->index }}"
                    class="{{ $loop->first ? 'block' : 'hidden' }} w-3/4 p-4 text-sm tab-content text-stone-500">
                    <x-faq-section :faqs="$faqs" />
                </div>
            @endforeach
        </div>










        <div data-aos="zoom-out-down"
            class="relative flex flex-col items-center justify-center w-3/4 mx-auto text-center h-80 text-stone-50 mt-32">
            <div class="absolute top-0 left-0 w-full py-10 mx-auto bg-fixed bg-right-bottom bg-no-repeat bg-cover artboard-horizontal artboard fixed-background h-80 md:bg-center"
                style="background-image:url('{{ asset('images/discover5.webp') }}')"></div>
            <div class="absolute inset-0 z-0 bg-black bg-opacity-30"></div>
            <h2 data-aos="zoom-out-left" data-aos-delay="100" data-aos-duration="700"
                class="font-sans text-2xl antialiased font-bold text-current md:text-3xl lg:text-4xl">
                {{ __('pages.home.section4.title') }}</h2>
        </div>
    </div>
</x-guest-layout>

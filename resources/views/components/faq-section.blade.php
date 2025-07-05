@props(['faqs' => []])

@php
    // Generate a unique ID prefix to avoid conflicts if component rendered more than once on page
    $accordionIdPrefix = 'faqAccordion_' . uniqid();
@endphp

<div class="">
    <div class="grid grid-cols-3 gap-2 mb-4">
        @foreach($faqs as $i => $faq)
            <button onclick="toggleAccordionById('#{{ $accordionIdPrefix }}{{ $i }}')"
                class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-2 px-4 shadow-sm hover:shadow-md bg-green-500 hover:bg-success-light relative bg-gradient-to-b from-green-500 to-green-600 border-green-600 text-stone-50 rounded-lg hover:bg-gradient-to-b hover:from-green-600 hover:to-green-600 hover:border-green-600 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.35),inset_0_-2px_0px_rgba(0,0,0,0.18)] after:pointer-events-none transition antialiased">
                {{ $faq['q'] }}
            </button>
        @endforeach
    </div>

    <!-- Accordion Component -->
    <div class="block w-full group" aria-disabled="false" data-dui-accordion-container data-dui-accordion-mode="exclusive">
        @foreach($faqs as $i => $faq)
            <div
                class="flex items-center justify-between w-full py-5 font-medium text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }} cursor-pointer dark:text-white text-stone-800"
                data-dui-accordion-toggle
                data-dui-accordion-target="#{{ $accordionIdPrefix }}{{ $i }}"
                aria-expanded="false">
                {{ $faq['q'] }}
                <svg data-dui-accordion-icon width="1.5em" height="1.5em" strokeWidth="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="w-4 h-4">
                    <path d="M6 9L12 15L18 9" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"></path>
                </svg>
            </div>
            <div id="{{ $accordionIdPrefix }}{{ $i }}" class="overflow-hidden transition-all duration-300 border-b border-stone-200 dark:border-stone-700">
                <p class="mb-5 text-sm text-stone-500 dark:text-stone-400" style="direction: {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                    {!! $faq['a'] !!}
                </p>
            </div>
        @endforeach
    </div>
</div>

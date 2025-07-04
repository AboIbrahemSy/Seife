<x-guest-layout>
    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="{{ __('pages.faq_title') }}" />


    <div class="container py-24 mx-auto">

        {{-- inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-2 px-4 shadow-sm hover:shadow-md bg-green-500 hover:bg-success-light relative bg-gradient-to-b from-green-500 to-green-600 border-green-600 text-stone-50 rounded-lg hover:bg-gradient-to-b hover:from-green-600 hover:to-green-600 hover:border-green-600 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.35),inset_0_-2px_0px_rgba(0,0,0,0.18)] after:pointer-events-none transition antialiased --}}
<div class="flex gap-2 mb-4">
  <button onclick="toggleAccordionById('#controlledAccordion1')" class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-2 px-4 shadow-sm hover:shadow-md bg-brand-800 hover:bg-brand-700 relative bg-gradient-to-b from-brand-700 to-brand-800 border-brand-900 text-brand-50 rounded-lg hover:bg-gradient-to-b hover:from-brand-800 hover:to-brand-800 hover:border-brand-900 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.25),inset_0_-2px_0px_rgba(0,0,0,0.35)] after:pointer-events-none transition antialiased">What is David UI?</button>
  <button onclick="toggleAccordionById('#controlledAccordion2')" class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-2 px-4 shadow-sm hover:shadow-md bg-brand-800 hover:bg-brand-700 relative bg-gradient-to-b from-brand-700 to-brand-800 border-brand-900 text-brand-50 rounded-lg hover:bg-gradient-to-b hover:from-brand-800 hover:to-brand-800 hover:border-brand-900 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.25),inset_0_-2px_0px_rgba(0,0,0,0.35)] after:pointer-events-none transition antialiased">Why choose David UI?</button>
</div>

<!-- Accordion Component -->
<div class="block w-full group" aria-disabled="false" data-dui-accordion-container data-dui-accordion-mode="exclusive">
  <div
    class="flex items-center justify-between w-full py-5 font-medium text-left cursor-pointer dark:text-white text-stone-800"
    data-dui-accordion-toggle
    data-dui-accordion-target="#controlledAccordion1"
    aria-expanded="false">
    What is David UI?
    <svg data-dui-accordion-icon width="1.5em" height="1.5em" strokeWidth="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="w-4 h-4 rotate-180">
      <path d="M6 9L12 15L18 9" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"></path>
    </svg>
  </div>
  <div id="controlledAccordion1" class="overflow-hidden transition-all duration-300 border-b border-stone-200 dark:border-stone-700">
    <p class="mb-5 text-sm text-stone-500 dark:text-stone-400">David UI is a comprehensive UI library built with Tailwind CSS, offering modern and customizable components for web development.</p>
  </div>

  <div
    class="flex items-center justify-between w-full py-5 font-medium text-left cursor-pointer dark:text-white text-stone-800"
    data-dui-accordion-toggle
    data-dui-accordion-target="#controlledAccordion2"
    aria-expanded="false">
    Why choose David UI?
    <svg data-dui-accordion-icon width="1.5em" height="1.5em" strokeWidth="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="w-4 h-4">
      <path d="M6 9L12 15L18 9" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"></path>
    </svg>
  </div>
  <div id="controlledAccordion2" class="overflow-hidden transition-all duration-300 border-b border-stone-200 dark:border-stone-700">
    <p class="mb-5 text-sm text-stone-500 dark:text-stone-400">David UI provides an extensive collection of ready-to-use components with seamless integration and excellent developer experience.</p>
  </div>
</div>

    </div>
</x-guest-layout>

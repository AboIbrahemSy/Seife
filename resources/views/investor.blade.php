<x-guest-layout>
    <x-hero image="{{ asset('images/investor.webp') }}" title="{{ __('pages.investor_form_title') }}" />
    <div class="container py-10 mx-auto {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
        @livewire('investor-stepper-form')
    </div>
</x-guest-layout>

<x-guest-layout>
    <x-hero image="{{ asset('images/visitor.webp') }}" title="{{ __('pages.visitor_form_title') }}" />
    <div class="container py-10 mx-auto {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
        @livewire('visitor-stepper-form')
    </div>
</x-guest-layout>

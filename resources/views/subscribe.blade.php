<x-guest-layout>
    <x-hero image="{{ asset('images/subscribe.webp') }}" title="{{ __('pages.subscribe_form_title') }}" />
    <div class="container py-10 mx-auto {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
        @livewire('participation-stepper-form')
    </div>
</x-guest-layout>

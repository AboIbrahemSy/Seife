<x-guest-layout>
    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="{{ __('pages.audio_title') }}" />

    <div class="container py-10 mx-auto {{ app()->getLocale() == 'ar' ? 'rtl text-right' : 'text-left' }}">
        @livewire('audio-list')
    </div>
</x-guest-layout>

@props([
    'image',
    'title',
    'subTitle' => null,
    'description',
    'url' => null,
])

@php
    $aosAnimations = [
        'fade-up', 'fade-down', 'fade-right', 'fade-left',
        'fade-up-right', 'fade-up-left', 'fade-down-right', 'fade-down-left',
        'flip-left', 'flip-right', 'flip-up', 'flip-down',
        'zoom-in', 'zoom-in-up', 'zoom-in-down', 'zoom-in-left', 'zoom-in-right',
        'zoom-out', 'zoom-out-up', 'zoom-out-down', 'zoom-out-right', 'zoom-out-left',
    ];
    // احصل على عشوائي
    $aos = $aosAnimations[array_rand($aosAnimations)];
@endphp


<div data-aos="{{ $aos }}" class="max-w-sm overflow-hidden border rounded-lg shadow-md border-stone-100">
    <div class="p-2 pb-4">
        <div class="h-32 overflow-hidden rounded-md">
            <img src="{{ $image }}" alt="{{ $title }} card image" class="object-cover w-full h-full">
        </div>
    </div>
    <div class="px-6 pb-6 {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
        <h3 class="mb-2 text-xl font-bold text-stone-800">{{ $title }}</h3>
        @if(!empty($subTitle))
            <p class="mb-4 font-sans text-base antialiased text-current text-stone-600">{{ $subTitle }}</p>
        @endif
        <p class="mb-4 text-sm text-stone-600">{{ $description }}</p>

        @if(!empty($url))
            <div class="flex justify-start">
                <a href="{{ $url }}"
                    class="flex {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : 'flex-row' }} items-center px-3 py-1.5 text-xs font-medium text-stone-600 hover:text-stone-800 bg-stone-100 hover:bg-stone-200 border border-stone-200 rounded-lg transition-colors">
                    عرض
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="{{ app()->getLocale() == 'ar' ? 'rotate-180 mr-1' : 'rotate-0 ml-1' }} w-3 h-3">
                        <path fill-rule="evenodd"
                            d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        @endif
    </div>
</div>

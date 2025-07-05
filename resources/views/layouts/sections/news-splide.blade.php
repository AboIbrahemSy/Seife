@php
    use App\Models\BreakingNews;
    $tickerItems = BreakingNews::where('active', true)->get();
@endphp

<div class="fixed bottom-0 z-20 flex items-center justify-end w-full bg-[#66BB6A]/80">
    <div id="news_splide" class="w-full splide !p-0" role="group" aria-label="Breaking News">
                <div class=" splide__track">
                    <div class="gap-5 splide__list">
                        @foreach ($tickerItems as $item)
                            <div
                                class="splide__slide min-w-12 p-3  flex items-center justify-around {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
                                <span><svg class="w-5 h-5 text-stone-50" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z" />
                                    </svg></span>
                                <p class="mx-3 text-sm font-medium leading-relaxed text-stone-50">
                                    {!! $item->headline !!}
                                </p>
                                <span><svg class="w-5 h-5 rotate-180 text-stone-50" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z" />
                                    </svg></span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
</div>


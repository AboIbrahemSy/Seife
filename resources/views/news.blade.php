<x-guest-layout>
    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="{{ __('pages.news_title') }}" />



    <div class="container mx-auto my-24 items-center justify-start flex flex-col gap-16">


        <div id="news1"
        data-aos="fade-right"
             data-aos-delay="100"
             data-aos-duration="700"
            class="max-w-3xl rounded-lg shadow-md border border-stone-100 overflow-hidden flex {{ app()->getLocale() == 'ar' ? '' : 'rtl' }}">
            <div class="w-1/3 p-1">
                <div class="h-full rounded-md overflow-hidden">
                    <img src="{{ asset('images/news1.webp') }}" alt="Background" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="w-2/3 px-4 py-6 flex flex-col {{ app()->getLocale() == 'ar' ? 'items-end' : '' }}">
                <h3 class="text-xl font-bold text-stone-800 mb-2 text-left">{{ __('pages.news.section1.title') }}</h3>
                <p class="text-stone-600 mb-4 text-left text-sm flex-grow">{{ __('pages.news.section1.paragraph') }}</p>
                <div class="flex justify-start mt-auto">
                    <a href="#news1"
                        class="inline-flex items-center {{ app()->getLocale() == 'ar' ? 'flex-row-reverse' : 'flex-row' }} px-3 py-1.5 text-xs font-medium text-stone-600 hover:text-stone-800 bg-stone-100 hover:bg-stone-200 border border-stone-200 rounded-lg transition-colors">
                        {{ __('pages.show') }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-3 h-3 {{ app()->getLocale() == 'ar' ? 'rotate-180 mr-1' : 'ml-1' }}">
                            <path fill-rule="evenodd"
                                d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>



                <h1 class="z-10 my-4 text-2xl font-bold text-center text-brand-500 md:text-3xl drop-shadow-lg">
            {{ __('pages.breaking_news_title') }}</h1>


        <div id="news" class="splide" role="group" aria-label="Breaking News">
            <div class="splide__track mx-auto w-2/3">
                <div class="splide__list gap-5">
                    @foreach ($tickerItems as $item)
                        <div
                            class="splide__slide mx-5 max-w-sm p-6 border shadow-xl bg-gradient-to-br from-stone-50 to-stone-200 rounded-xl border-stone-200 {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
                            <div class="flex items-center justify-end mb-4">
                                <div class="p-2 rounded-full bg-white/60">
                                    <svg class="w-5 h-5 text-stone-700" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-6 text-sm font-medium leading-relaxed text-stone-600">
                                {!! $item->headline !!}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <h1 class="z-10 mt-4 text-2xl font-bold text-center text-brand-500 md:text-3xl drop-shadow-lg">
            {{ __('pages.article_title') }}</h1>

        <div class="grid grid-cols-3 gap-6 my-24">
            @forelse ($articles as $article)
                <x-full-card image="{{ $article->image }}" title="{{ $article->title }}"
                    description="{{ $article->content }}" url="{{ $article->id }}" />
            @empty
                <div class="mb-8 font-sans text-4xl antialiased font-bold text-center md:text-5xl text-brand-200">
                    No Articles
                </div>
            @endforelse
        </div>

    </div>
</x-guest-layout>

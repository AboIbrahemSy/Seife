@php
    $links = [
        ['route' => 'home', 'label' => __('pages.links.home')],
        ['route' => 'audios', 'label' => __('pages.links.audios')],
        ['route' => 'events', 'label' => __('pages.links.events')],
        ['route' => 'book_stand', 'label' => __('pages.links.book_stand')],
        ['route' => 'gallery', 'label' => __('pages.links.gallery')],
        // ["route" => "clients",      "label" => __("pages.links.clients")],
        // ["route" => "subscribe",    "label" => __("pages.links.subscribe")],
        // ["route" => "visitor",      "label" => __("pages.links.visitor")],
        // ["route" => "investor",     "label" => __("pages.links.investor")],
        ['route' => 'discover', 'label' => __('pages.links.discover')],
        // ["route" => "news",         "label" => __("pages.links.news")],
        // ["route" => "about",        "label" => __("pages.links.about")],
        // ["route" => "faq",          "label" => __("pages.links.faq")],
        // ["route" => "contact",      "label" => __("pages.links.contact")],
        // ["route" => "staff_application",      "label" => __("pages.links.staff_application")],
    ];
    $currentLocale = app()->getLocale();
    $arrLang = config('app.locales');
@endphp

<nav id="main-navbar" class="fixed top-0 w-full p-2 mx-auto text-white bg-transparent z-70">
    <div class="flex items-center justify-between gap-8 mx-10">
        <a href="{{ route('home') }}"
            class="block py-1 ml-2 mr-2 font-sans text-sm antialiased font-semibold text-current">
            <img src="{{ asset('images/Logo.webp') }}" class="h-[80px]" alt="Logo">
        </a>

        <div class="hidden lg:block">
            <div
                class="flex gap-1 mt-4 min-w-60 lg:mt-0 lg:items-center flex-col {{ $currentLocale == 'ar' ? 'lg:flex-row-reverse' : 'lg:flex-row' }}">



                @foreach ($links as $link)
                    <a href="{{ route($link['route']) }}"
                        class="flex items-center py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in
                    aria-disabled:opacity-50 aria-disabled:pointer-events-none bg-transparent text-white hover:text-[#333]
                    hover:bg-white focus:bg-white focus:text-[#333] dark:hover:text-white">
                        <small class="font-sans text-sm antialiased text-current">{{ $link['label'] }}</small>
                    </a>
                @endforeach

                <div class="dropdown" data-dui-placement="bottom-start">
                    <div data-dui-toggle="dropdown" aria-expanded="false"
                        class="flex items-center cursor-pointer {{ $currentLocale == 'ar' ? 'flex-row-reverse' : 'flex-row' }} py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in aria-disabled:opacity-50 aria-disabled:pointer-events-none bg-transparent text-white hover:text-[#333] hover:bg-white focus:bg-white focus:text-[#333] dark:hover:text-white">
                        <small
                            class="font-sans text-sm antialiased text-current">{{ __('pages.links.clients') }}</small>
                        <span
                            class="grid place-items-center shrink-0 ms-auto {{ $currentLocale == 'ar' ? 'pr-1.5' : 'ps-1.5' }}">
                            <svg width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" color="currentColor"
                                class="h-3.5 w-3.5 group-data-[open=true]:rotate-180">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </div>
                    <div data-dui-role="menu"
                        class="z-10 hidden p-1 mt-2 bg-white border rounded-lg shadow-sm border-stone-200">
                        <a href="{{ route('subscribe') }}"
                            class="block px-4 py-2 text-sm text-center rounded-md text-stone-800 hover:bg-stone-100">{{ __('pages.links.subscribe') }}</a>
                        <a href="{{ route('visitor') }}"
                            class="block px-4 py-2 text-sm text-center rounded-md text-stone-800 hover:bg-stone-100">{{ __('pages.links.visitor') }}</a>
                        <a href="{{ route('investor') }}"
                            class="block px-4 py-2 text-sm text-center rounded-md text-stone-800 hover:bg-stone-100">{{ __('pages.links.investor') }}</a>
                    </div>
                </div>

                <div class="dropdown" data-dui-placement="bottom-start">
                    <div data-dui-toggle="dropdown" aria-expanded="false"
                        class="flex items-center {{ $currentLocale == 'ar' ? 'flex-row-reverse' : 'flex-row' }}  cursor-pointer py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in aria-disabled:opacity-50 aria-disabled:pointer-events-none bg-transparent text-white hover:text-[#333] hover:bg-white focus:bg-white focus:text-[#333] dark:hover:text-white">
                        <small
                            class="font-sans text-sm antialiased text-current">{{ __('pages.links.about') }}</small>
                        <span
                            class="grid place-items-center shrink-0 ms-auto {{ $currentLocale == 'ar' ? 'pr-1.5' : 'ps-1.5' }}">
                            <svg width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" color="currentColor"
                                class="h-3.5 w-3.5 group-data-[open=true]:rotate-180">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </div>
                    <div data-dui-role="menu"
                        class="z-10 hidden p-1 mt-2 bg-white border rounded-lg shadow-sm border-stone-200">
                        <a href="{{ route('news') }}"
                            class="block px-4 py-2 text-sm text-center rounded-md text-stone-800 hover:bg-stone-100">{{ __('pages.links.news') }}</a>
                        <a href="{{ route('about') }}"
                            class="block px-4 py-2 text-sm text-center rounded-md text-stone-800 hover:bg-stone-100">{{ __('pages.links.about') }}</a>
                        <a href="{{ route('faq') }}"
                            class="block px-4 py-2 text-sm text-center rounded-md text-stone-800 hover:bg-stone-100">{{ __('pages.links.faq') }}</a>
                        <a href="{{ route('contact') }}"
                            class="block px-4 py-2 text-sm text-center rounded-md text-stone-800 hover:bg-stone-100">{{ __('pages.links.contact') }}</a>
                        <a href="{{ route('staff_application') }}"
                            class="block px-4 py-2 text-sm text-center rounded-md text-stone-800 hover:bg-stone-100">{{ __('pages.links.staff_application') }}</a>
                    </div>
                </div>

                <div class="dropdown" data-dui-placement="bottom-start">
                    <div data-dui-toggle="dropdown" aria-expanded="false"
                        class="flex items-center cursor-pointer {{ $currentLocale == 'ar' ? 'flex-row-reverse' : 'flex-row' }} py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in aria-disabled:opacity-50 aria-disabled:pointer-events-none bg-transparent text-white hover:text-[#333] hover:bg-white focus:bg-white focus:text-[#333] dark:hover:text-white">
                        <small class="font-sans text-sm antialiased text-current">
                            {{ $arrLang[app()->getLocale()]['native'] }}
                        </small>
                        <span
                            class="grid place-items-center shrink-0 ms-auto {{ $currentLocale == 'ar' ? 'pr-1.5' : 'ps-1.5' }}"><svg
                                width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" color="currentColor"
                                class="h-3.5 w-3.5 group-data-[open=true]:rotate-180">
                                <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </div>
                    <div data-dui-role="menu"
                        class="z-10 hidden p-1 bg-white border rounded-lg shadow-sm border-stone-200">
                        @foreach ($arrLang as $localeCode => $properties)
                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                    class="block px-4 py-2 text-sm rounded-md text-stone-800 hover:bg-stone-100"
                                    href="{{ request()->fullUrlWithQuery(['lang' => $localeCode]) }}">
                                    {{ $properties['native'] }}
                                </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



        <button data-dui-toggle="collapse" data-dui-target="#navbar-with-mega-menu-collapse" aria-expanded="false"
            aria-controls="navbar-with-mega-menu-collapse"
            class="place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in
                   disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[34px] min-h-[34px]
                   rounded-md bg-transparent border-transparent text-stone-800 hover:bg-stone-200/10 hover:border-stone-600/10
                   shadow-none hover:shadow-none ml-auto mr-2 grid lg:hidden">
            <svg width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg" color="currentColor" class="w-4 h-4">
                <path d="M3 5H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M3 12H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M3 19H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>

    {{-- روابط الهاتف --}}
    <div class="overflow-scroll transition-[max-height] duration-300 ease-in-out max-h-0 lg:hidden"
        id="navbar-with-mega-menu-collapse">
        <div class="flex flex-col gap-1 mt-4 min-w-60">
            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}"
                    class="flex items-center py-1.5 px-2.5 rounded-md align-middle select-none font-sans transition-all duration-300 ease-in
                  aria-disabled:opacity-50 aria-disabled:pointer-events-none bg-transparent text-white hover:text-[#333]
                  hover:bg-white focus:bg-white focus:text-[#333] dark:hover:text-white">
                    <small class="font-sans text-sm antialiased text-current">{{ $link['label'] }}</small>
                </a>
            @endforeach
        </div>
    </div>
</nav>

@php
    $links = [
        ['route' => 'home', 'label' => __('pages.links.home')],
        ['route' => 'audios', 'label' => __('pages.links.audios')],
        ['route' => 'events', 'label' => __('pages.links.events')],
        ['route' => 'book_stand', 'label' => __('pages.links.book_stand')],
        ['route' => 'gallery', 'label' => __('pages.links.gallery')],
        // ["route" => "clients",      "label" => __("pages.links.clients")],
        ["route" => "subscribe",    "label" => __("pages.links.subscribe")],
        ["route" => "visitor",      "label" => __("pages.links.visitor")],
        ["route" => "investor",     "label" => __("pages.links.investor")],

        ['route' => 'discover', 'label' => __('pages.links.discover')],
        ["route" => "news",         "label" => __("pages.links.news")],
        ["route" => "about",        "label" => __("pages.links.about")],
        ["route" => "faq",          "label" => __("pages.links.faq")],
        ["route" => "contact",      "label" => __("pages.links.contact")],
    ];
    $currentLocale = app()->getLocale();
@endphp
<footer class="relative w-full mt-24 {{ $currentLocale == 'ar' ? 'rtl' : '' }}">
    <div class="w-full px-8 mx-auto max-w-7xl">
        <div class="grid justify-between grid-cols-1 gap-4 pb-4 border-b md:grid-cols-2 border-stone-200 ">
            <h6 class="mb-4 font-sans text-base antialiased font-bold text-current md:text-lg lg:text-xl">{{ __('pages.links.logo')}}</h6>
            <div class="grid justify-between grid-cols-3 gap-x-6 gap-y-4">
                <ul>
                    <p class="mb-2 font-sans text-base antialiased font-semibold text-current opacity-50">{{ __('pages.links.home')}}</p>
                    @for ($i=0;$i<5;$i++)
                        <li>
                            <a href="{{route($links[$i]['route'])}}"
                                class="py-1 font-sans text-base antialiased text-current hover:text-primary">{{$links[$i]['label']}}</a>
                        </li>
                    @endfor
                </ul>
                <ul>
                    <p class="mb-2 font-sans text-base antialiased font-semibold text-current opacity-50">{{__("pages.links.clients")}}</p>
                    @for ($i=5;$i<8;$i++)
                        <li>
                            <a href="{{route($links[$i]['route'])}}"
                                class="py-1 font-sans text-base antialiased text-current hover:text-primary">{{$links[$i]['label']}}</a>
                        </li>
                    @endfor
                </ul>
                <ul>
                    <p class="mb-2 font-sans text-base antialiased font-semibold text-current opacity-50">{{__("pages.links.news")}}</p>
                    @for ($i=8;$i<13;$i++)
                        <li>
                            <a href="{{route($links[$i]['route'])}}"
                                class="py-1 font-sans text-base antialiased text-current hover:text-primary">{{$links[$i]['label']}}</a>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-brand-500">
        <div
            class="flex flex-col items-center justify-center w-full gap-4 px-8 py-4 mx-auto mt-10 md:flex-row md:justify-between max-w-7xl">
            <small class="font-sans text-sm antialiased text-center text-current">© 2024
                <a href="{{route('home')}}">{{ __('pages.links.logo')}}</a>. All Rights Reserved.</small>
            <div class="flex gap-1 sm:justify-center">
                <a href="https://www.facebook.com/profile.php?id=61577839586908"
                    class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[34px] min-h-[34px] rounded-md bg-transparent border-transparent text-stone-800 hover:bg-stone-200/10 hover:border-stone-600/10 shadow-none hover:shadow-none"><svg
                        width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" color="currentColor" class="w-4 h-4">
                        <path
                            d="M17 2H14C12.6739 2 11.4021 2.52678 10.4645 3.46447C9.52678 4.40215 9 5.67392 9 7V10H6V14H9V22H13V14H16L17 10H13V7C13 6.73478 13.1054 6.48043 13.2929 6.29289C13.4804 6.10536 13.7348 6 14 6H17V2Z"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/damascus_international_fair/"
                    class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[34px] min-h-[34px] rounded-md bg-transparent border-transparent text-stone-800 hover:bg-stone-200/10 hover:border-stone-600/10 shadow-none hover:shadow-none"><svg
                        width="1.5em" height="1.5em" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" color="currentColor" class="w-4 h-4">
                        <path
                            d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16Z"
                            stroke="currentColor"></path>
                        <path d="M17.5 6.51L17.51 6.49889" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </a>
                <a href="https://x.com/FairDamascus"
                    class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[34px] min-h-[34px] rounded-md bg-transparent border-transparent text-stone-800 hover:bg-stone-200/10 hover:border-stone-600/10 shadow-none hover:shadow-none"><svg
                        width="1.5em" height="1.5em" viewBox="0 0 24 24" stroke-width="1.5" fill="none"
                        xmlns="http://www.w3.org/2000/svg" color="currentColor" class="w-4 h-4">
                        <path
                            d="M16.8198 20.7684L3.75317 3.96836C3.44664 3.57425 3.72749 3 4.22678 3H6.70655C6.8917 3 7.06649 3.08548 7.18016 3.23164L20.2468 20.0316C20.5534 20.4258 20.2725 21 19.7732 21H17.2935C17.1083 21 16.9335 20.9145 16.8198 20.7684Z"
                            stroke="currentColor"></path>
                        <path d="M20 3L4 21" stroke="currentColor" stroke-linecap="round"></path>
                    </svg>
                </a>
                <a href="https://www.tiktok.com/@fairdamascus?lang=en"
                    class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[34px] min-h-[34px] rounded-md bg-transparent border-transparent text-stone-800 hover:bg-stone-200/10 hover:border-stone-600/10 shadow-none hover:shadow-none">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                    <path d="M 9 4 C 6.2495759 4 4 6.2495759 4 9 L 4 41 C 4 43.750424 6.2495759 46 9 46 L 41 46 C 43.750424 46 46 43.750424 46 41 L 46 9 C 46 6.2495759 43.750424 4 41 4 L 9 4 z M 9 6 L 41 6 C 42.671576 6 44 7.3284241 44 9 L 44 41 C 44 42.671576 42.671576 44 41 44 L 9 44 C 7.3284241 44 6 42.671576 6 41 L 6 9 C 6 7.3284241 7.3284241 6 9 6 z M 26.042969 10 A 1.0001 1.0001 0 0 0 25.042969 10.998047 C 25.042969 10.998047 25.031984 15.873262 25.021484 20.759766 C 25.016184 23.203017 25.009799 25.64879 25.005859 27.490234 C 25.001922 29.331679 25 30.496833 25 30.59375 C 25 32.409009 23.351421 33.892578 21.472656 33.892578 C 19.608867 33.892578 18.121094 32.402853 18.121094 30.539062 C 18.121094 28.675273 19.608867 27.1875 21.472656 27.1875 C 21.535796 27.1875 21.663054 27.208245 21.880859 27.234375 A 1.0001 1.0001 0 0 0 23 26.240234 L 23 22.039062 A 1.0001 1.0001 0 0 0 22.0625 21.041016 C 21.906673 21.031216 21.710581 21.011719 21.472656 21.011719 C 16.223131 21.011719 11.945313 25.289537 11.945312 30.539062 C 11.945312 35.788589 16.223131 40.066406 21.472656 40.066406 C 26.72204 40.066409 31 35.788588 31 30.539062 L 31 21.490234 C 32.454611 22.653646 34.267517 23.390625 36.269531 23.390625 C 36.542588 23.390625 36.802305 23.374442 37.050781 23.351562 A 1.0001 1.0001 0 0 0 37.958984 22.355469 L 37.958984 17.685547 A 1.0001 1.0001 0 0 0 37.03125 16.6875 C 33.886609 16.461891 31.379838 14.012216 31.052734 10.896484 A 1.0001 1.0001 0 0 0 30.058594 10 L 26.042969 10 z M 27.041016 12 L 29.322266 12 C 30.049047 15.2987 32.626734 17.814404 35.958984 18.445312 L 35.958984 21.310547 C 33.820114 21.201935 31.941489 20.134948 30.835938 18.453125 A 1.0001 1.0001 0 0 0 29 19.003906 L 29 30.539062 C 29 34.707538 25.641273 38.066406 21.472656 38.066406 C 17.304181 38.066406 13.945312 34.707538 13.945312 30.539062 C 13.945312 26.538539 17.066083 23.363182 21 23.107422 L 21 25.283203 C 18.286416 25.535721 16.121094 27.762246 16.121094 30.539062 C 16.121094 33.483274 18.528445 35.892578 21.472656 35.892578 C 24.401892 35.892578 27 33.586491 27 30.59375 C 27 30.64267 27.001859 29.335571 27.005859 27.494141 C 27.009759 25.65271 27.016224 23.20692 27.021484 20.763672 C 27.030884 16.376775 27.039186 12.849206 27.041016 12 z"></path>
                    </svg>
                </a>
                <a href="https://www.youtube.com/@DamascusInternational-Fair"
                    class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[34px] min-h-[34px] rounded-md bg-transparent border-transparent text-stone-800 hover:bg-stone-200/10 hover:border-stone-600/10 shadow-none hover:shadow-none">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                        <path d="M 24.402344 9 C 17.800781 9 11.601563 9.5 8.300781 10.199219 C 6.101563 10.699219 4.199219 12.199219 3.800781 14.5 C 3.402344 16.898438 3 20.5 3 25 C 3 29.5 3.398438 33 3.898438 35.5 C 4.300781 37.699219 6.199219 39.300781 8.398438 39.800781 C 11.902344 40.5 17.898438 41 24.5 41 C 31.101563 41 37.097656 40.5 40.597656 39.800781 C 42.800781 39.300781 44.699219 37.800781 45.097656 35.5 C 45.5 33 46 29.402344 46.097656 24.902344 C 46.097656 20.402344 45.597656 16.800781 45.097656 14.300781 C 44.699219 12.101563 42.800781 10.5 40.597656 10 C 37.097656 9.5 31 9 24.402344 9 Z M 24.402344 11 C 31.601563 11 37.398438 11.597656 40.199219 12.097656 C 41.699219 12.5 42.898438 13.5 43.097656 14.800781 C 43.699219 18 44.097656 21.402344 44.097656 24.902344 C 44 29.199219 43.5 32.699219 43.097656 35.199219 C 42.800781 37.097656 40.800781 37.699219 40.199219 37.902344 C 36.597656 38.601563 30.597656 39.097656 24.597656 39.097656 C 18.597656 39.097656 12.5 38.699219 9 37.902344 C 7.5 37.5 6.300781 36.5 6.101563 35.199219 C 5.300781 32.398438 5 28.699219 5 25 C 5 20.398438 5.402344 17 5.800781 14.902344 C 6.101563 13 8.199219 12.398438 8.699219 12.199219 C 12 11.5 18.101563 11 24.402344 11 Z M 19 17 L 19 33 L 33 25 Z M 21 20.402344 L 29 25 L 21 29.597656 Z"></path>
                        </svg>


                </a>
            </div>
        </div>
    </div>
</footer>

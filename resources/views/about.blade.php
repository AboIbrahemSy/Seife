<x-guest-layout>
    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="{{ __('pages.about_title') }}" />

    <div class="container mx-auto my-24">

        <div class="grid grid-cols-4 gap-6 ">

            @foreach ($staff as $_staff)
                <div class="w-full text-center rounded-lg border shadow-sm overflow-hidden bg-white border-stone-200 shadow-stone-950/5 max-w-xs relative min-h-[300px]"
                    style="background-image: url('{{ asset($_staff->image) }}'); background-size: cover; background-position: center;">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div
                        class="absolute bottom-0 left-0 right-0 w-full h-max rounded px-3.5 py-4 text-center text-white">
                        <h5 class="font-sans text-lg antialiased font-bold text-current md:text-xl lg:text-2xl">
                            {{ $_staff->name }}</h5>
                        <p class="my-1 font-sans text-base antialiased text-white/90">{{ $_staff->job_title }}</p>
                        <div class="flex items-center justify-center w-full gap-1 pt-2">
                            <a href="tel:{{ $_staff->phone }}"
                                class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[34px] min-h-[34px] rounded-md bg-white/20 border-transparent text-white hover:bg-white/30 shadow-none hover:shadow-none outline-none group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>

                            </a>
                            <a href="mail:{{ $_staff->mail }}"
                                class="inline-grid place-items-center border align-middle select-none font-sans font-medium text-center transition-all duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-sm min-w-[34px] min-h-[34px] rounded-md bg-white/20 border-transparent text-white hover:bg-white/30 shadow-none hover:shadow-none outline-none group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>

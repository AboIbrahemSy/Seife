<x-guest-layout>

    <div class="relative flex flex-col items-center justify-center w-screen h-screen gap-3">
        <video id="Header_Video" autoplay="" playsinline="" muted="" loop="" preload="none"
            class="absolute top-0 inset-x-0 w-full h-screen object-cover lazy -z-[1]">
            <source src="{{ route('VideoFiles', ['title' => 'Header_Video']) }}" type="video/mp4" />
        </video>
        <div class="absolute inset-0 z-0 bg-black bg-opacity-40"></div>

        <h1 class="z-10 mb-4 text-5xl font-bold text-center text-white md:text-7xl drop-shadow-lg">
            {{ __('pages.home.hero.title') }}</h1>
        <hr class="z-10 w-1/4 bg-white rounded-full opacity-40">
        <h4 class="z-10 mt-5 mb-8 text-2xl text-center text-white">{{ __('pages.home.hero.paragraph') }}</h4>
        <a href="#content" class="absolute flex flex-col items-center mt-8 bottom-4 animate-bounce">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </a>

        <button id="video-toggle"
            class="absolute p-3 text-white transition rounded-full bottom-6 left-8 bg-black/70 hover:bg-green-600">
            <!-- الأيقونة الافتراضية: إيقاف (مربع) -->
            <svg id="icon-pause" class="w-6 h-6" fill="white" viewBox="0 0 24 24">
                <rect x="6" y="6" width="12" height="12" rx="2"></rect>
            </svg>
            <!-- أيقونة التشغيل مخفية -->
            <svg id="icon-play" class="hidden w-6 h-6" fill="white" viewBox="0 0 24 24">
                <polygon points="7,6 19,12 7,18"></polygon>
            </svg>
        </button>

    </div>
    <div id="content"
        class="container p-6 flex flex-col items-center justify-start gap-16 mx-auto my-24 {{ app()->getLocale() == 'ar' ? 'text-right rtl' : 'text-left' }}">
        <h1 data-aos="zoom-out-left"
            class="w-full font-sans text-4xl antialiased font-bold text-center md:text-5xl text-brand-500">
            {{ __('pages.home_title') }}
        </h1>

        <div class="w-3/4" data-aos="zoom-out-up">
            <iframe
                src="https://www.youtube.com/embed/IshAk6Mwlj4?start=&amp;end=&amp;autoplay=0&amp;mute=0&amp;loop=0&amp;controls=1&amp;modestBranding=0&amp;rel=0&amp;enablejsapi=1"
                class="w-full h-[75vh]" allowfullscreen="" allow="autoplay"></iframe>
        </div>

        <div class="">
            <h2 data-aos="zoom-out-left"
                class="font-sans text-2xl antialiased font-bold text-current md:text-3xl lg:text-4xl">
                {{ __('pages.home.section2.title') }}</h2>
            <p data-aos="zoom-out-down" class="mt-6 font-sans text-base antialiased text-current">
                {{ __('pages.home.section2.paragraph') }}</p>
        </div>

        <div class="">
            <h1 data-aos="zoom-out-left"
                class="w-full font-sans text-3xl antialiased font-bold md:text-4xl text-brand-500">
                {{ __('pages.home.section3.title') }}
            </h1>

            <div data-aos="zoom-out-right" class="flex justify-center my-12">
                <img src="{{ asset('images/home2.webp') }}" class="w-2/3"
                    alt="section image {{ __('pages.home.section3.title') }}">
            </div>


            <h2 data-aos="zoom-out-left"
                class="font-sans text-2xl antialiased font-bold text-current md:text-3xl lg:text-4xl">
                {{ __('pages.home.section3.title') }}</h2>
            <p data-aos="zoom-out-down" class="mt-6 font-sans text-base antialiased text-current">
                {{ __('pages.home.section3.paragraph') }}</p>
        </div>

        <div class="relative flex flex-col items-center justify-center w-2/3 mx-auto text-center h-80 text-stone-50">
            <div class="absolute top-0 left-0 w-full py-10 mx-auto bg-fixed bg-right-bottom bg-no-repeat bg-cover artboard-horizontal artboard fixed-background h-80 md:bg-center"
                style="background-image:url('{{ asset('images/home3.webp') }}')"></div>
                <div class="absolute inset-0 z-0 bg-black bg-opacity-40"></div>
            <h2 data-aos="zoom-out-left"
                class="font-sans text-2xl antialiased font-bold text-current md:text-3xl lg:text-4xl">
                {{ __('pages.home.section4.title') }}</h2>
            <p data-aos="zoom-out-down" class="mt-2 font-sans text-base antialiased text-current">
                {{ __('pages.home.section4.paragraph1') }}</p>
            <p data-aos="zoom-out-down" class="mb-2 font-sans text-base antialiased text-current">
                {{ __('pages.home.section4.paragraph2') }}</p>
            <a href="{{route('investor')}}" data-aos="zoom-out-right"
                class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-2 px-4 shadow-sm hover:shadow-md bg-green-500 hover:bg-success-light relative bg-gradient-to-b from-green-500 to-green-600 border-green-600 text-stone-50 rounded-lg hover:bg-gradient-to-b hover:from-green-600 hover:to-green-600 hover:border-green-600 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.35),inset_0_-2px_0px_rgba(0,0,0,0.18)] after:pointer-events-none transition antialiased">{{ __('pages.home.section4.btn') }}</a>

        </div>
    </div>

</x-guest-layout>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('Header_Video');
        const toggleBtn = document.getElementById('video-toggle');
        const iconPause = document.getElementById('icon-pause');
        const iconPlay = document.getElementById('icon-play');

        toggleBtn.addEventListener('click', function() {
            if (video.paused) {
                video.play();
                iconPause.classList.remove('hidden');
                iconPlay.classList.add('hidden');
            } else {
                video.pause();
                iconPause.classList.add('hidden');
                iconPlay.classList.remove('hidden');
            }
        });

        // بداية: إذا الفيديو موقوف أظهر play، إذا شغّال أظهر pause
        video.addEventListener('play', () => {
            iconPause.classList.remove('hidden');
            iconPlay.classList.add('hidden');
        });
        video.addEventListener('pause', () => {
            iconPause.classList.add('hidden');
            iconPlay.classList.remove('hidden');
        });
    });
</script>

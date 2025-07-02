<x-guest-layout>

    <div class="relative flex flex-col items-center justify-center w-screen h-screen gap-3">
        <video id="Header_Video" autoplay="" playsinline="" muted="" loop="" preload="none"
            class="absolute top-0 inset-x-0 w-full h-screen object-cover lazy -z-[1]">
            <source src="{{ route('VideoFiles', ['title' => 'Header_Video']) }}" type="video/mp4" />
        </video>
        <div class="absolute inset-0 z-0 bg-black bg-opacity-40"></div>

        <h1 class="z-10 mb-4 text-5xl font-bold text-center text-white md:text-7xl drop-shadow-lg">{{__('pages.home.hero.title')}}</h1>
        <hr class="z-10 w-1/4 bg-white rounded-full opacity-40">
        <h4 class="z-10 mt-5 mb-8 text-2xl text-center text-white">{{__('pages.home.hero.paragraph')}}</h4>
        <a href="#content" class="absolute flex flex-col items-center mt-8 bottom-4 animate-bounce">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
        </a>

        <button
  id="video-toggle"
  class="absolute p-3 text-white transition rounded-full bottom-6 left-8 bg-black/70 hover:bg-green-600"
>
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

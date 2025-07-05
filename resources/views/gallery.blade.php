@php
    // خذ كل الصور في مصفوفة، مثلاً من controller
    $allImages = $images ?? [];
    function pop_image(&$array)
    {
        return array_shift($array); // يأخذ أول صورة ويحذفها من المصفوفة
    }
@endphp
<x-guest-layout>

    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="{{ __('pages.gallery_title') }}" />


    <div class="container mx-auto my-24">

        <div class="grid grid-cols-2 gap-4 mb-6 md:grid-cols-4">
            <div class="grid gap-4">
                <div>
                    <img data-thumbnail
                    loading="lazy"
                        class="object-cover object-center h-auto max-w-full rounded-lg cursor-pointer go_to_main_image"
                        src="{{ asset(pop_image($allImages)) }}" alt="gallery-photo" />
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img data-thumbnail
                    loading="lazy"
                        class="object-cover object-center min-h-[300px] h-auto max-w-full rounded-lg cursor-pointer go_to_main_image"
                        src="{{ asset(pop_image($allImages)) }}" alt="gallery-photo" />
                </div>
            </div>
            <div class="grid gap-2 pb-6">
                <div class="h-full">
                    <img data-thumbnail
                    loading="lazy"
                        class="object-cover object-center h-full max-w-full rounded-lg cursor-pointer go_to_main_image"
                        src="{{ asset(pop_image($allImages)) }}" alt="gallery-photo" />
                </div>
                <div class="h-full">
                    <img data-thumbnail
                    loading="lazy"
                        class="h-full object-cover object-center max-w-full rounded-lg cursor-pointer go_to_main_image "
                        src="{{ asset(pop_image($allImages)) }}" alt="gallery-photo" />
                </div>
            </div>
            <div class="grid gap-4">
                {{-- <div> --}}
                <img data-thumbnail
                loading="lazy"
                    class="object-cover object-center h-full max-w-full rounded-lg cursor-pointer go_to_main_image"
                    src="{{ asset(pop_image($allImages)) }}" alt="gallery-photo" />
                {{-- </div>÷ --}}
            </div>
        </div>

        <div class="grid w-2/3 gap-4 p-6 mx-auto my-12 border-2 border-stone-200 rounded-xl">
            <div id="main-image">
                <img data-main-image loading="lazy" class="h-auto w-full max-w-full rounded-lg object-cover object-center md:h-[480px]"
                    src="{{ asset(pop_image($allImages)) }}"
                    alt="" />
            </div>
            <div class="grid w-full grid-cols-5 gap-4 p-2 overflow-x-auto h-44 soft-scrollbar">
                <div class="relative flex items-center gap-5 h-32 w-[1500px]">
                    @foreach ($allImages as $image)
                        @if (count($allImages) == 5)
                            @break
                        @endif
                            <img data-thumbnail
                                src="{{ asset(pop_image($allImages)) }}"
                                class="object-cover object-center h-20 w-28 max-w-full rounded-lg cursor-pointer"
                                alt="gallery-image"
                                loading="lazy" />
                    @endforeach
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
            <div class="grid gap-4">
                <div>
                    <img data-thumbnail
                    loading="lazy"
                        class="object-cover object-center h-full max-w-full rounded-lg cursor-pointer go_to_main_image "
                        src="{{ asset(pop_image($allImages)) }}"
                        alt="gallery-photo" />
                </div>
            </div>
            <div class="grid content-end gap-4 pt-6">
                <div>
                    <img data-thumbnail
                    loading="lazy"
                        class="object-cover object-center h-full max-w-full rounded-lg cursor-pointer go_to_main_image"
                        src="{{ asset(pop_image($allImages)) }}"
                        alt="gallery-photo" />
                </div>
                <div>
                    <img data-thumbnail class="object-cover object-center h-full max-w-full rounded-lg "
                        src="{{ asset(pop_image($allImages)) }}" alt="gallery-photo" />
                </div>
            </div>
            <div class="grid content-end gap-4">
                <div class="h-full">
                    <img data-thumbnail
                    loading="lazy"
                        class="object-cover min-h-[300px] object-center h-full max-w-full rounded-lg cursor-pointer go_to_main_image "
                        src="{{ asset(pop_image($allImages)) }}"
                        alt="gallery-photo" />
                </div>
            </div>
            <div class="grid content-end gap-4">
                {{-- <div> --}}
                    <img data-thumbnail
                    loading="lazy"
                        class="object-cover object-center h-full max-w-full rounded-lg cursor-pointer go_to_main_image"
                        src="{{ asset(pop_image($allImages)) }}"
                        alt="gallery-photo" />
                {{-- </div> --}}
            </div>
        </div>
    </div>







</x-guest-layout>


<script>
    document.querySelectorAll('img.go_to_main_image').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.getElementById('main-image');
            if (target) {
                const rect = target.getBoundingClientRect();
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const targetY = rect.top + scrollTop - (window.innerHeight / 2) + (rect.height / 2);
                window.scrollTo({
                    top: targetY,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>

<x-guest-layout>

    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="معرض الصور" />


    <div class="container mx-auto my-24">

        <div class="grid grid-cols-2 gap-4 mb-6 md:grid-cols-4">
            <div class="grid gap-4">
                <div>
                    <img data-thumbnail class="object-cover object-center h-auto max-w-full rounded-lg cursor-pointer go_to_main_image"
                        src="https://images.unsplash.com/photo-1432462770865-65b70566d673?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                        alt="gallery-photo" />
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img data-thumbnail class="object-cover object-center h-auto max-w-full rounded-lg cursor-pointer go_to_main_image"
                        src="https://images.unsplash.com/photo-1552960562-daf630e9278b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                        alt="gallery-photo" />
                </div>
            </div>
            <div class="grid gap-2">
                <div>
                    <img data-thumbnail class="object-cover object-center h-auto max-w-full rounded-lg cursor-pointer go_to_main_image"
                        src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80"
                        alt="gallery-photo" />
                </div>
                <div>
                    <img data-thumbnail class="object-cover object-center h-auto max-w-full rounded-lg cursor-pointer go_to_main_image "
                        src="https://docs.material-tailwind.com/img/team-3.jpg" alt="gallery-photo" />
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img data-thumbnail class="object-cover object-center h-auto max-w-full rounded-lg cursor-pointer go_to_main_image"
                        src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=927&q=80"
                        alt="gallery-photo" />
                </div>
            </div>
        </div>

        <div class="grid w-2/3 gap-4 p-6 mx-auto my-12 border-2 border-stone-200 rounded-xl">
            <div id="main-image">
                <img data-main-image class="h-auto w-full max-w-full rounded-lg object-cover object-center md:h-[480px]"
                    src="https://images.unsplash.com/photo-1499696010180-025ef6e1a8f9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="" />
            </div>
            <div class="grid w-full grid-cols-5 gap-4 p-2 overflow-x-auto h-44 soft-scrollbar">
                        <div class="relative flex items-center gap-5 h-32 w-[1500px]" >
                        
                <div>
                    <img data-thumbnail
                        src="https://images.unsplash.com/photo-1499696010180-025ef6e1a8f9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        class="object-cover object-center h-20 max-w-full rounded-lg cursor-pointer"
                        alt="gallery-image" />
                </div>
                <div>
                    <img data-thumbnail
                        src="https://images.unsplash.com/photo-1432462770865-65b70566d673?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                        class="object-cover object-center h-20 max-w-full rounded-lg cursor-pointer"
                        alt="gallery-image" />
                </div>
                <div>
                    <img data-thumbnail
                        src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80"
                        class="object-cover object-center h-20 max-w-full rounded-lg cursor-pointer"
                        alt="gallery-image" />
                </div>
                <div>
                    <img data-thumbnail
                        src="https://images.unsplash.com/photo-1518623489648-a173ef7824f3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2762&q=80"
                        class="object-cover object-center h-20 max-w-full rounded-lg cursor-pointer"
                        alt="gallery-image" />
                </div>
                <div>
                    <img data-thumbnail
                        src="https://images.unsplash.com/photo-1682407186023-12c70a4a35e0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
                        class="object-cover object-center h-20 max-w-full rounded-lg cursor-pointer"
                        alt="gallery-image" />
                </div>
                <div>
                    <img data-thumbnail
                        src="https://images.unsplash.com/photo-1499696010180-025ef6e1a8f9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        class="object-cover object-center h-20 max-w-full rounded-lg cursor-pointer"
                        alt="gallery-image" />
                </div>
                <div>
                    <img data-thumbnail
                        src="https://images.unsplash.com/photo-1432462770865-65b70566d673?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                        class="object-cover object-center h-20 max-w-full rounded-lg cursor-pointer"
                        alt="gallery-image" />
                </div>
                <div>
                    <img data-thumbnail
                        src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80"
                        class="object-cover object-center h-20 max-w-full rounded-lg cursor-pointer"
                        alt="gallery-image" />
                </div>
                <div>
                    <img data-thumbnail
                        src="https://images.unsplash.com/photo-1518623489648-a173ef7824f3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2762&q=80"
                        class="object-cover object-center h-20 max-w-full rounded-lg cursor-pointer"
                        alt="gallery-image" />
                </div>
                <div>
                    <img data-thumbnail
                        src="https://images.unsplash.com/photo-1682407186023-12c70a4a35e0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
                        class="object-cover object-center h-20 max-w-full rounded-lg cursor-pointer"
                        alt="gallery-image" />
                </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
            <div class="grid gap-4">
                <div>
                    <img data-thumbnail class="object-cover object-center h-auto max-w-full rounded-lg cursor-pointer go_to_main_image "
                        src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=927&q=80"
                        alt="gallery-photo" />
                </div>
            </div>
            <div class="grid content-end gap-4">
                <div>
                    <img data-thumbnail class="object-cover object-center h-auto max-w-full rounded-lg cursor-pointer go_to_main_image"
                        src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80"
                        alt="gallery-photo" />
                </div>
                <div>
                    <img data-thumbnail class="object-cover object-center h-auto max-w-full rounded-lg "
                        src="https://docs.material-tailwind.com/img/team-3.jpg" alt="gallery-photo" />
                </div>
            </div>
            <div class="grid content-end gap-4">
                <div>
                    <img data-thumbnail class="object-cover object-center h-auto max-w-full rounded-lg cursor-pointer go_to_main_image "
                        src="https://images.unsplash.com/photo-1552960562-daf630e9278b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                        alt="gallery-photo" />
                </div>
            </div>
            <div class="grid content-end gap-4">
                <div>
                    <img data-thumbnail class="object-cover object-center h-auto max-w-full rounded-lg cursor-pointer go_to_main_image"
                        src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80"
                        alt="gallery-photo" />
                </div>
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
        window.scrollTo({ top: targetY, behavior: 'smooth' });
      }
    });
  });
</script>

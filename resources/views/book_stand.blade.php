<x-guest-layout>
    <x-hero image="{{ asset('images/book_stand.webp') }}" title="{{ __('pages.book_stand_title') }}" />


    <div
        class="container p-6 flex flex-col items-center justify-start gap-6 mx-auto my-24 {{ app()->getLocale() == 'ar' ? 'text-right rtl' : 'text-left' }}">


        <div class="w-2/3 ">
            <h2 data-aos="zoom-out-left"
                class="font-sans text-2xl antialiased font-bold md:text-3xl lg:text-4xl text-brand-500">
                {{ __('pages.book_stand.section1.title') }}</h2>
            <p data-aos="zoom-out-down" class="mt-6 font-sans text-base antialiased text-current">
                {{ __('pages.book_stand.section1.paragraph') }}</p>
            <div class="mt-12 text-center">
                <a href="{{ route('investor') }}" data-aos="zoom-out-right"
                    class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-4 px-6 shadow-sm hover:shadow-md bg-green-500 hover:bg-success-light relative bg-gradient-to-b from-green-500 to-green-600 border-green-600 text-stone-50 rounded-lg hover:bg-gradient-to-b hover:from-green-600 hover:to-green-600 hover:border-green-600 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.35),inset_0_-2px_0px_rgba(0,0,0,0.18)] after:pointer-events-none transition antialiased">{{ __('pages.book_stand.section1.btn') }}</a>
            </div>
        </div>


        <div class="relative flex flex-col items-center justify-center w-2/3 mx-auto text-center h-80 text-stone-50">
            <div class="absolute top-0 left-0 w-full py-10 mx-auto bg-fixed bg-right-bottom bg-no-repeat bg-cover artboard-horizontal artboard fixed-background h-80 md:bg-center"
                style="background-image:url('{{ asset('images/book_stand1.webp') }}')"></div>
            <div class="absolute inset-0 z-0 bg-black bg-opacity-40"></div>
            <h2 data-aos="zoom-out-left"
                class="font-sans text-2xl antialiased font-bold text-current md:text-3xl lg:text-4xl">
                {{ __('pages.home.section4.title') }}</h2>


        </div>


        <div class="w-2/3 mt-10">
            <h2 data-aos="zoom-out-left"
                class="font-sans text-2xl antialiased font-bold md:text-3xl lg:text-4xl text-brand-500">
                {{ __('pages.book_stand.section2.title') }}</h2>
            <p data-aos="zoom-out-down" class="mt-6 font-sans text-base antialiased text-current">
                {{ __('pages.book_stand.section2.paragraph') }}</p>
        </div>

        <div class="w-2/3">
            <img src="{{ asset('images/book_stand2.webp') }}" class="w-full h-[75vh]"
                alt="{{ __('pages.book_stand.section2.paragraph') }}">
        </div>


        <div class="w-2/3 mt-10">
            <h2 data-aos="zoom-out-left"
                class="font-sans text-2xl antialiased font-bold md:text-3xl lg:text-4xl text-brand-500">
                {{ __('pages.book_stand.section3.title') }}</h2>
            <p data-aos="zoom-out-down" class="mt-6 font-sans text-base antialiased text-current">
                {{ __('pages.book_stand.section3.paragraph') }}</p>
        </div>

        @php
            $events = [
                [
                'image'       => asset('images/book_stand-e1.webp'),
                'title'       => 'المساحة فقط',
                'subTitle'    => null,
                'description' => 'يتــم توفيــر مســاحة الأرضيــة فقــط، وأنــت مســؤول عــن تصميــم وبنــاء جناحــك، بالاســتعانة بمقاوليــن مــن اختيــارك، وفقــاً لقواعــد ولوائــح معــرض دمشــق الدولــي.

ســتحتاج إلــى تقديــم مخططــات البنــاء الخاصــة بــك إلينــا للموافقــة عليهــا لضمــان توافقهــا مــع لوائــح المعــرض.',
                'url'         => null,
            ],
                            [
                'image'       => asset('images/book_stand-e2.webp'),
                'title'       => 'جناح غير مجهز',
                'subTitle'    => null,
                'description' => 'اختــر مــن بيــن مجموعــة متنوعــة مــن الباقــات لتتمكنــوا مــن الوصــول إلــى الموقــع مــع أثــاث وإضــاءة
مثالية.

الخيار الأمثل للعلامات التي تبحث عن الظهور الاحترافي الكامل.',
                'url'         => null,
            ],
                            [
                'image'       => asset('images/book_stand-e3.webp'),
                'title'       => 'جناح مجهز',
                'subTitle'    => null,
                'description' => 'خدمة بناء أجنحة مجهزة مصممة خصيصًا لكم، لنقدم لكم أسعاراً تنافسية وتجربة متكاملة.

مثالي للجهات التي ترغب بتجربة جاهزة ومتكاملة.',
                'url'         => null,
            ],
            ];
        @endphp
        <div class="grid grid-cols-3 gap-6 my-24">

@foreach ($events as $event)
                    <x-full-card image="{{ $event['image'] }}" title="{{ $event['title'] }}"
                        subTitle="{{ $event['subTitle'] }}" description="{{ $event['description'] }}"
                        url="{{ $event['url'] }}" />
@endforeach

        </div>


        <div class="w-2/3 mt-10">
            <h2 data-aos="zoom-out-left" class="font-sans text-2xl antialiased text-center md:text-3xl lg:text-3xl">
                {{ __('pages.book_stand.section4.paragraph') }}</h2>
        </div>


        <div class="relative flex items-center w-2/3 mx-auto text-center justify-evenly h-80 text-stone-50">
            <div class="absolute top-0 left-0 w-full py-10 mx-auto bg-fixed bg-right-bottom bg-no-repeat bg-cover artboard-horizontal artboard fixed-background h-80 md:bg-center"
                style="background-image:url('{{ asset('images/book_stand3.webp') }}')"></div>
            <div class="absolute inset-0 z-0 bg-black bg-opacity-40"></div>
            <h2 data-aos="zoom-out-left"
                class="font-sans text-2xl antialiased font-bold text-current md:text-3xl lg:text-4xl">
                {{ __('pages.home.section4.title') }}</h2>
            <a href="{{ route('investor') }}" data-aos="zoom-out-right"
                class="inline-flex items-center justify-center border align-middle select-none font-sans font-medium text-center duration-300 ease-in disabled:opacity-50 disabled:shadow-none disabled:cursor-not-allowed focus:shadow-none text-sm py-4 px-6 shadow-sm hover:shadow-md bg-green-500 hover:bg-success-light relative bg-gradient-to-b from-green-500 to-green-600 border-green-600 text-stone-50 rounded-lg hover:bg-gradient-to-b hover:from-green-600 hover:to-green-600 hover:border-green-600 after:absolute after:inset-0 after:rounded-[inherit] after:box-shadow after:shadow-[inset_0_1px_0px_rgba(255,255,255,0.35),inset_0_-2px_0px_rgba(0,0,0,0.18)] after:pointer-events-none transition antialiased">{{ __('pages.book_stand.section1.btn') }}</a>

        </div>


    </div>
    </div>
</x-guest-layout>

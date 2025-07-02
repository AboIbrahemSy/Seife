@props(['image','title'])

<div class="w-full h-[50vh] flex items-end justify-end relative text-white p-10 px-24">
    <img src="{{$image}}" alt="{{$title}} image" class="absolute top-0 left-0 -z-[1] object-cover w-full h-full">
    <div class="absolute inset-0 bg-black bg-opacity-40 -z-[1]"></div>
    <h1 class="z-10 font-sans text-2xl antialiased font-bold text-current md:text-3xl lg:text-4xl">{{$title}}</h1>
</div>

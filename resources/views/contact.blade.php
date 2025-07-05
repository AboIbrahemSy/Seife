<x-guest-layout>
    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="{{ __('pages.contact_title') }}" />

    <div class="container mx-auto my-24">


        @if (session('success'))
            <div
                class="px-4 py-3 mb-6 text-center text-green-800 border border-green-400 rounded shadow-sm bg-green-50 animate-fade-in-down">
                {{ session('success') }}
            </div>
        @endif

        <div
            class="max-w-5xl mx-auto my-8 rounded-lg overflow-hidden bg-white shadow grid grid-cols-1 md:grid-cols-2 {{ app()->getLocale() == 'ar' ? 'rtl' : '' }}">
            <!-- Left Section -->
            <div class="flex flex-col justify-center h-full p-8 bg-green-50">
                <h2 class="mb-4 text-3xl font-bold text-green-800">{{ __('contact.get_in_touch') }}</h2>
                <p class="mb-8 text-gray-600">
                    {{ __('contact.hero_paragraph') }}
                </p>
                <div class="space-y-4 text-sm text-gray-700">
                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="spl spm sqy"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z"></path></svg>
                        <div>
                            Syria, Damascus <br>
                            P.O.Box 5377
                        </div>
                    </div>
                    <a href="tel:00963984444919" class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="spl spm sqy"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path></svg>
                        <span dir="ltr">+963984444919</span>
                    </a>
                    <a href="mail:info@seife.gov.sy" class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="spl spm sqy"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"></path></svg>
                        <span>info@seife.gov.sy</span>
                    </a>
                </div>
            </div>
            <!-- Right Section (Form) -->
            <form action="{{ route('contact.send') }}" method="POST"
                class="flex flex-col justify-center p-8 space-y-6 bg-white">
                @csrf
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label
                            class="block mb-1 text-sm font-medium text-gray-700">{{ __('contact.first_name') }}</label>
                        <input name="first_name" type="text"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                            required />
                    </div>
                    <div>
                        <label
                            class="block mb-1 text-sm font-medium text-gray-700">{{ __('contact.last_name') }}</label>
                        <input name="last_name" type="text"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                            required />
                    </div>
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">{{ __('contact.email') }}</label>
                    <input name="email" type="email"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                        required />
                </div>
                <div>
                    <label
                        class="block mb-1 text-sm font-medium text-gray-700">{{ __('contact.phone_number') }}</label>
                    <input name="phone_number" type="tel" pattern="[0-9+\-() ]{7,20}"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                        required />
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">{{ __('contact.message') }}</label>
                    <textarea name="message" rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                        required></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-2 font-medium text-white transition bg-green-600 rounded hover:bg-green-700">
                        {{ __('contact.send_message') }}
                    </button>
                </div>
            </form>
        </div>

        <div
            class="relative flex flex-col items-center justify-center w-3/4 mx-auto text-center h-80 text-stone-50 mt-32">
            <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!4v1751711918326!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJREozTW1EVUE.!2m2!1d33.51320183672602!2d36.28470756962022!3f145.40654!4f0!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</x-guest-layout>

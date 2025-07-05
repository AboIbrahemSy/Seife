<div class="flex flex-col items-center justify-start p-6">
    <div class="flex flex-col w-3/4 md:w-1/2 gap-4 p-4 mb-8 space-y-3 border border-gray-200 shadow-lg md:flex-row md:items-end md:space-x-4 md:space-y-0 bg-white/80 rounded-2xl"
        >
        <div class="flex-1">
            <label for="language" class="block mb-1 text-sm font-medium text-gray-700">
                {{ __('forms.filter_by_lang') }}
            </label>
            <select id="language" wire:model.debounce="language"
                class="w-full transition-all duration-300 border-gray-300 rounded-lg shadow form-select focus:border-primary focus:ring-primary">
                <option value="">{{ __('forms.all_languages') }}</option>
                @foreach ($languages as $lang)
                    <option value="{{ $lang->id }}">{{ $lang->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- البحث --}}
        {{-- <div class="flex-1">
            <label for="search" class="block mb-1 text-sm font-medium text-gray-700">
                <span class="hidden md:inline">{{ __('forms.search_title') }}</span>
            </label>
            <input id="search" wire:model.debounce="search" type="text" placeholder="{{ __('forms.search_title') }}"
                class="w-full transition-all duration-300 border-gray-300 rounded-lg shadow form-input focus:border-primary focus:ring-primary">
        </div> --}}

        <div class="flex items-end">
            <button wire:click="applyFilter" class="flex items-center justify-center gap-2 px-8 py-2 font-semibold text-white transition-all duration-200 shadow rounded-xl bg-brand-600 hover:bg-brand-500 ">
                <svg wire:loading class="text-white size-5 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                <span>{{ __('forms.filter_apply') }}</span>
            </button>
        </div>
    </div>
    <div class="grid w-full grid-cols-3 gap-4 my-16">
        @forelse ($audios as $audio)
            <div class="mb-8 overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="relative">
                    <img src="{{ $audio->image }}" class="object-cover w-full h-48" alt="Audio Cover">
                    <div
                        class="absolute inset-0 flex flex-col justify-end p-4 text-white bg-gradient-to-b from-transparent to-gray-900/90">
                        <h3 class="text-lg font-bold">{{ $audio->title }}</h3>
                        <span class="text-sm opacity-70">{{ $audio->language->name }}</span>
                    </div>
                </div>
                <div class="px-4 py-2">
                    <audio controls class="w-full mt-2">
                        <source src="{{ asset($audio->file_name) }}" type="audio/mpeg">
                        {{__('forms.browser_no_audio')}}
                    </audio>
                    @if ($audio->description)
                        <div class="p-3 mt-2 text-sm text-gray-700 border border-gray-100 rounded-md">
                            {{ $audio->description }}
                        </div>
                    @endif
                </div>
            </div>
        @empty
            <p class="col-span-3 text-center">{{__('forms.audio_no_found')}}</p>
        @endforelse
    </div>

    {{-- Sentinel as shown above for infinite scroll --}}
    <div x-intersect.full="$wire.loadMore()" class="py-2">
        <div wire:loading wire:target="loadMore" class="text-center">
            {{__('forms.loading_more')}}
        </div>
    </div>
</div>

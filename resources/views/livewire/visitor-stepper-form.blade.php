<div
    x-data="{ step: @entangle('currentStep') }"
    class="max-w-2xl mx-auto font-sans {{ app()->getLocale() == 'ar' ? 'rtl' : '' }}"
>
    @if ($successMessage)
        <div class="px-4 py-3 mb-6 text-center text-green-800 border border-green-400 rounded shadow-sm bg-green-50 animate-fade-in-down">
            {{ $successMessage }}
        </div>
    @endif

    {{-- Stepper --}}
    <div class="flex items-center justify-between mb-10 text-center select-none">
        @foreach ([
            1 => __('forms.company_info'),
            2 => __('forms.personal_info'),
            3 => __('forms.contact_info'),
            4 => __('forms.confirm')
        ] as $stepNum => $label)
            <div class="flex flex-col items-center flex-1 group">
                <div class="w-9 h-9 rounded-full flex items-center justify-center text-lg font-bold
                    {{ $currentStep == $stepNum ? 'bg-brand-600 text-white shadow-lg' : ($currentStep > $stepNum ? 'bg-brand-200 text-brand-700' : 'bg-gray-200 text-gray-400') }}
                    transition-all duration-300 ease-in-out ring-2 {{ $currentStep == $stepNum ? 'ring-brand-400' : 'ring-transparent' }}">
                    {{ $stepNum }}
                </div>
                <div class="text-xs mt-2
                    {{ $currentStep == $stepNum ? 'text-brand-700 font-semibold' : 'text-gray-400' }}
                    transition-all duration-300 ease-in-out">
                    {{ $label }}
                </div>
            </div>
            @if ($stepNum < 4)
                <div class="flex-auto h-1 mx-2
                    {{ $currentStep > $stepNum ? 'bg-brand-400' : 'bg-gray-200' }} rounded transition-all duration-300"></div>
            @endif
        @endforeach
    </div>

    {{-- Step 1: Company Info --}}
    <div x-show="step === 1" x-cloak x-transition>
        <form wire:submit.prevent="nextStep" class="space-y-5">
            <label class="block font-medium">{{ __('forms.company') }}</label>
            <input wire:model.defer="company" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('company') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block font-medium">{{ __('forms.company_info') }}</label>
            <textarea wire:model.defer="company_info" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100"></textarea>
            @error('company_info') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block font-medium">{{ __('forms.address') }}</label>
            <input wire:model.defer="address" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('address') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <div class="flex justify-end mt-4">
                <button type="submit" class="px-8 py-2 font-semibold text-white transition-all duration-200 shadow rounded-xl bg-brand-600 hover:bg-brand-500">
                    {{ __('forms.next') }}
                </button>
            </div>
        </form>
    </div>

    {{-- Step 2: Personal Info --}}
    <div x-show="step === 2" x-cloak x-transition>
        <form wire:submit.prevent="nextStep" class="space-y-5">
            <label class="block font-medium">{{ __('forms.first_name') }}</label>
            <input wire:model.defer="first_name" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('first_name') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block font-medium">{{ __('forms.last_name') }}</label>
            <input wire:model.defer="last_name" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('last_name') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block font-medium">{{ __('forms.job_title') }}</label>
            <input wire:model.defer="job_title" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('job_title') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block font-medium">{{ __('forms.country') }}</label>
            <input wire:model.defer="country" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('country') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <div class="flex justify-between mt-4">
                <button type="button" wire:click="previousStep" class="px-8 py-2 font-semibold transition-all duration-200 bg-gray-200 shadow rounded-xl hover:bg-gray-300 text-brand-700">
                    {{ __('forms.previous') }}
                </button>
                <button type="submit" class="px-8 py-2 font-semibold text-white transition-all duration-200 shadow rounded-xl bg-brand-600 hover:bg-brand-500">
                    {{ __('forms.next') }}
                </button>
            </div>
        </form>
    </div>

    {{-- Step 3: Contact Info --}}
    <div x-show="step === 3" x-cloak x-transition>
        <form wire:submit.prevent="nextStep" class="space-y-5">
            <label class="block font-medium">{{ __('forms.phone_number') }}</label>
            <input wire:model.defer="phone_number" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('phone_number') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block font-medium">{{ __('forms.email') }}</label>
            <input wire:model.defer="email" type="email" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('email') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <div class="flex justify-between mt-4">
                <button type="button" wire:click="previousStep" class="px-8 py-2 font-semibold transition-all duration-200 bg-gray-200 shadow rounded-xl hover:bg-gray-300 text-brand-700">
                    {{ __('forms.previous') }}
                </button>
                <button type="submit" class="px-8 py-2 font-semibold text-white transition-all duration-200 shadow rounded-xl bg-brand-600 hover:bg-brand-500">
                    {{ __('forms.next') }}
                </button>
            </div>
        </form>
    </div>

    {{-- Step 4: Confirm --}}
    <div x-show="step === 4" x-cloak x-transition>
        <form wire:submit.prevent="submit" class="space-y-5">
            <div class="p-4 space-y-3 text-base leading-relaxed text-gray-800 rounded-lg shadow bg-gray-50">
                <div><strong>{{ __('forms.company') }}:</strong> {{ $company }}</div>
                <div><strong>{{ __('forms.company_info') }}:</strong> {{ $company_info }}</div>
                <div><strong>{{ __('forms.address') }}:</strong> {{ $address }}</div>
                <div><strong>{{ __('forms.first_name') }}:</strong> {{ $first_name }}</div>
                <div><strong>{{ __('forms.last_name') }}:</strong> {{ $last_name }}</div>
                <div><strong>{{ __('forms.job_title') }}:</strong> {{ $job_title }}</div>
                <div><strong>{{ __('forms.country') }}:</strong> {{ $country }}</div>
                <div><strong>{{ __('forms.phone_number') }}:</strong> {{ $phone_number }}</div>
                <div><strong>{{ __('forms.email') }}:</strong> {{ $email }}</div>
            </div>
            <div class="flex justify-between mt-4">
                <button type="button" wire:click="previousStep" class="px-8 py-2 font-semibold transition-all duration-200 bg-gray-200 shadow rounded-xl hover:bg-gray-300 text-brand-700">
                    {{ __('forms.previous') }}
                </button>
                <button type="submit" class="px-8 py-2 font-semibold text-white transition-all duration-200 shadow rounded-xl bg-brand-600 hover:bg-brand-500">
                    {{ __('forms.submit') }}
                </button>
            </div>
        </form>
    </div>
</div>

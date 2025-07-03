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
            2 => __('forms.contact_info'),
            3 => __('forms.participation_info'),
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

    {{-- Step 1 --}}
    <div
        x-show="step === 1" x-cloak
        x-transition:enter="transition-all duration-500 ease-in-out"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition-all duration-400 ease-in-out"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
    >
        <form wire:submit.prevent="nextStep" class="space-y-5">
            <label class="block font-medium">{{ __('forms.company_name') }}</label>
            <input wire:model.defer="company_name" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('company_name') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block font-medium">{{ __('forms.commercial_registration_no') }}</label>
            <input wire:model.defer="commercial_registration_no" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('commercial_registration_no') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block mb-1 font-medium">{{ __('forms.activity_type') }}</label>
            <input wire:model.defer="activity_type" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('activity_type') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block mb-1 font-medium">{{ __('forms.full_address') }}</label>
            <textarea wire:model.defer="full_address" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100"></textarea>
            @error('full_address') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <div class="flex justify-end mt-4">
                <button type="submit" class="px-8 py-2 font-semibold text-white transition-all duration-200 shadow rounded-xl bg-brand-600 hover:bg-brand-500">
                    {{ __('forms.next') }}
                </button>
            </div>
        </form>
    </div>

    {{-- Step 2 --}}
    <div
        x-show="step === 2" x-cloak
        x-transition:enter="transition-all duration-500 ease-in-out"
        x-transition:enter-start="opacity-0 translate-x-4"
        x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition-all duration-400 ease-in-out"
        x-transition:leave-start="opacity-100 translate-x-0"
        x-transition:leave-end="opacity-0 -translate-x-4"
    >
        <form wire:submit.prevent="nextStep" class="space-y-5">
            <label class="block mb-1 font-medium">{{ __('forms.responsible_person') }}</label>
            <input wire:model.defer="responsible_person" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('responsible_person') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block mb-1 font-medium">{{ __('forms.job_title') }}</label>
            <input wire:model.defer="job_title" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('job_title') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block mb-1 font-medium">{{ __('forms.nationality') }}</label>
            <input wire:model.defer="nationality" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('nationality') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block mb-1 font-medium">{{ __('forms.email') }}</label>
            <input wire:model.defer="email" type="email" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('email') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block mb-1 font-medium">{{ __('forms.phone_number') }}</label>
            <input wire:model.defer="phone_number" type="text" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('phone_number') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

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

    {{-- Step 3 --}}
    <div
        x-show="step === 3" x-cloak
        x-transition:enter="transition-all duration-500 ease-in-out"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition-all duration-400 ease-in-out"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
    >
        <form wire:submit.prevent="nextStep" class="space-y-5">
            <label class="block mb-1 font-medium">{{ __('forms.requested_area') }}</label>
            <input wire:model.defer="requested_area" type="number" min="1" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100" />
            @error('requested_area') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

            <label class="block mb-1 font-medium">{{ __('forms.setup_preference') }}</label>
            <select wire:model.defer="setup_preference" class="w-full px-3 py-2 mt-1 text-center border border-gray-300 rounded focus:border-brand-500 focus:ring focus:ring-brand-100">
                <option value="">{{ __('forms.setup_preference') }}</option>
                <option value="raw_space">{{ __('forms.setup_options.raw_space') }}</option>
                <option value="not_equipped">{{ __('forms.setup_options.not_equipped') }}</option>
                <option value="fully_equipped">{{ __('forms.setup_options.fully_equipped') }}</option>
            </select>
            @error('setup_preference') <span class="text-xs text-red-600">{{ $message }}</span> @enderror

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

    {{-- Step 4 (Confirm) --}}
    <div
        x-show="step === 4" x-cloak
        x-transition:enter="transition-all duration-500 ease-in-out"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition-all duration-400 ease-in-out"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4"
    >
        <form wire:submit.prevent="submit" class="space-y-5">
            <div class="p-4 space-y-3 text-base leading-relaxed text-gray-800 rounded-lg shadow bg-gray-50">
                <div><strong>{{ __('forms.company_name') }}:</strong> {{ $company_name }}</div>
                <div><strong>{{ __('forms.commercial_registration_no') }}:</strong> {{ $commercial_registration_no }}</div>
                <div><strong>{{ __('forms.activity_type') }}:</strong> {{ $activity_type }}</div>
                <div><strong>{{ __('forms.full_address') }}:</strong> {{ $full_address }}</div>
                <div><strong>{{ __('forms.responsible_person') }}:</strong> {{ $responsible_person }}</div>
                <div><strong>{{ __('forms.job_title') }}:</strong> {{ $job_title }}</div>
                <div><strong>{{ __('forms.nationality') }}:</strong> {{ $nationality }}</div>
                <div><strong>{{ __('forms.email') }}:</strong> {{ $email }}</div>
                <div><strong>{{ __('forms.phone_number') }}:</strong> {{ $phone_number }}</div>
                <div><strong>{{ __('forms.requested_area') }}:</strong> {{ $requested_area }}</div>
                <div><strong>{{ __('forms.setup_preference') }}:</strong>
                    @if($setup_preference)
                        {{ __('forms.setup_options.' . $setup_preference) }}
                    @endif
                </div>
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

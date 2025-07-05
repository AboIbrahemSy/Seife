<x-guest-layout>
    <x-hero image="{{ asset('images/gallery_hero.webp') }}" title="{{ __('pages.staff_application_title') }}" />
    <div class="container mx-auto my-24 {{ app()->getLocale() == 'ar' ? 'rtl' : '' }}">
        @if (session('success'))
            <div class="mb-6 text-green-800 border border-green-400 bg-green-50 rounded shadow-sm px-4 py-3 text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="max-w-xl mx-auto bg-white shadow rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-green-800 text-center">
                {{ __('staff.join_team') }}
            </h2>
            <form action="{{ route('staff.store') }}" method="POST"
      enctype="multipart/form-data"
      class="flex flex-col justify-center p-8 space-y-6 bg-white">
    @csrf

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 w-2/3 mx-auto">
        <div>
            <label class="block mb-1 text-sm font-medium text-gray-700">{{ __('staff.first_name') }}</label>
            <input name="first_name" type="text"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                required value="{{ old('first_name') }}" />
        </div>
        <div>
            <label class="block mb-1 text-sm font-medium text-gray-700">{{ __('staff.last_name') }}</label>
            <input name="last_name" type="text"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                required value="{{ old('last_name') }}" />
        </div>
    </div>
    <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">{{ __('staff.email') }}</label>
        <input name="email" type="email"
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
            required value="{{ old('email') }}" />
    </div>
    <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">{{ __('staff.phone_number') }}</label>
        <input name="phone_number" type="text"
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
            value="{{ old('phone_number') }}" />
    </div>
    <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">{{ __('staff.position') }}</label>
        <input name="position" type="text"
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
            value="{{ old('position') }}" />
    </div>
    <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">{{ __('staff.cv') }}</label>
        <input name="cv" type="file" accept=".pdf,.doc,.docx"
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400" />
    </div>
    <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">{{ __('staff.message') }}</label>
        <textarea name="message" rows="4"
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
        >{{ old('message') }}</textarea>
    </div>
    <div class="flex justify-end">
        <button type="submit"
            class="px-6 py-2 font-medium text-white transition bg-green-600 rounded hover:bg-green-700">
            {{ __('staff.send_application') }}
        </button>
    </div>
</form>

        </div>
    </div>
</x-guest-layout>

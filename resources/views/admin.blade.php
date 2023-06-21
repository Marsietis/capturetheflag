<x-guest-layout>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <!-- Titlel -->
        <div>
            <x-input-label for="title" :value="__('Task Title')" />
            <x-text-input id="title"  class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Task Description')" />
            <textarea
                name="description"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Points -->
        <div class="mt-4">
            <x-input-label for="points" :value="__('Points')" />

            <x-text-input id="points" class="block mt-1 w-full"
                          type="text"
                          name="points"
                          required />

            <x-input-error :messages="$errors->get('points')" class="mt-2" />
        </div>

        <!-- Flag -->
        <div class="mt-4">
            <x-input-label for="flag" :value="__('Flag')" />

            <x-text-input id="flag" class="block mt-1 w-full"
                          type="text"
                          name="flag" required />

            <x-input-error :messages="$errors->get('flag')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

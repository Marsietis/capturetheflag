<x-app-layout>
    <div class="text-white justify-center">
        <div>
            <h1>Task Details</h1>
            <p>ID: {{ $task->id }}</p>
            <p>Title: {{ $task->title }}</p>
            <p>Description: {{ $task->description }}</p>
            <p>Points: {{ $task->points }}</p>
            <p>Flag: {{ $task->flag }}</p>
        </div>
        <form method="POST" action="{{ route('tasks.check') }}">
            @csrf

            <div class="mt-4">
                <x-input-label for="flag" :value="__('Flag')"/>

                <x-text-input id="flag" class="block mt-1 w-full"
                              type="text"
                              name="flag" required/>

                <x-input-error :messages="$errors->get('flag')" class="mt-2"/>
            </div>

            <input type="hidden" name="task_id" value="{{ $task->id }}">

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Submit') }}
                </x-primary-button>
            </div>
        </form>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            <x-success></x-success>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
</x-app-layout>

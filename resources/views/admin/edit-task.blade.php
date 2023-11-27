<x-guest-layout>
    <div class="text-white text-xl mb-4 flex justify-center">Add a new task</div>
    <form method="POST" action="{{ route('admin.update-task', ['id' => $task->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <!-- Title -->
        <div>
            <x-input-label for="title" :value="__('Task Title')"/>
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required
                          autofocus value="{{ $task->title }}"/>
            <x-input-error :messages="$errors->get('title')" class="mt-2"/>
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Task Description')"/>
            <textarea name="description"
                      class="block w-full border-zinc-900 focus:border-red-500 focus:ring focus:ring-red-500 rounded-md shadow-sm bg-zinc-800 text-white">{{ $task->description }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2"/>
        </div>

        <div>
            <x-input-label for="category" :value="__('Category')"/>
            <select class="select w-full border-zinc-900 focus:border-red-500 focus:ring focus:ring-red-500 rounded-md shadow-sm bg-zinc-800 text-white" name="category" required id="category">
                <option selected>{{ $task->category }}</option>
                <option>General</option>
                <option>Web</option>
                <option>Forensics</option>
                <option>Reverse engineering</option>
                <option>Steganography</option>
                <option>Cryptography</option>
                <option>OSINT</option>
            </select>
            <x-input-error :messages="$errors->get('category')" class="mt-2"/>
        </div>

        <!-- Points -->
        <div class="mt-4">
            <x-input-label for="points" :value="__('Points')"/>
            <x-text-input id="points" class="block mt-1 w-full" type="text" name="points" value="{{ $task->points }}"
                          required/>
            <x-input-error :messages="$errors->get('points')" class="mt-2"/>
        </div>

        {{--Link--}}
        <div class="mt-4">
            <x-input-label for="link" :value="__('Link (if exists) (without https:// part)')"/>
            <x-text-input id="link" class="block mt-1 w-full" type="text" name="link" value="{{ $task->link }}"/>
            <x-input-error :messages="$errors->get('link')" class="mt-2"/>
        </div>

        {{--File--}}
        <div class="mt-4">
            <x-input-label for="file" :value="__('Upload file (if exists)')"/>
            @if($task->file)
                <div class="text-white">Current file: {{ $task->file }}</div>
            @endif
            <x-text-input id="file" class="block mt-1 w-full" type="file" name="file" value="{{ $task->file }}"/>
            <x-input-error :messages="$errors->get('file')" class="mt-2"/>
        </div>

        <!-- Flag -->
        <div class="mt-4">
            <x-input-label for="flag" :value="__('Flag')"/>
            <x-text-input id="flag" class="block mt-1 w-full" type="text" name="flag" value="{{ $task->flag }}"
                          required/>
            <x-input-error :messages="$errors->get('flag')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                Update task
            </x-primary-button>
        </div>
    </form>
    <div class="flex items-center justify-end mt-4">
        <form method="POST" action="{{ route('admin.destroy-task', ['id' => $task->id]) }}">
            @csrf
            @method('DELETE')
            <x-primary-button class="ml-4">
                Delete task
            </x-primary-button>
        </form>
    </div>
</x-guest-layout>

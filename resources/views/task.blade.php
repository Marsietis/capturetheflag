<x-app-layout>
    <x-slot name="header">
        <h2 class="text-4xl font-bold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task') }}
        </h2>
    </x-slot>
    @if (session('error'))
        <div class="fixed top-44 inset-x-0 flex justify-center">
            <div class="bg-red-500 border border-red-700 text-white px-4 py-3 rounded max-w-lg">
                <strong class="font-bold">{{ session()->get('error') }}</strong>
            </div>
        </div>

        <script>
            setTimeout(function () {
                document.querySelector('.bg-red-500').style.display = 'none';
            }, 3000);
        </script>
    @endif

    <div class="mx-28 mt-20 text-white bg-zinc-900 p-16 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="inline-flex items-center gap-4">
            <div class="text-7xl font-bold">{{ $task->title }}</div>
            <span class="bg-zinc-800 text-white rounded py-1 px-2">{{ __('Points') }}: {{$task->points}}</span>
        </div>

        <div class="mt-4 text-3xl">Description: {{ $task->description }}</div>
        @if($task->file)
            <div class="text-xl my-6 hover:text-red-400">
                <a href="{{ Storage::url($task->file) }}" download>
                    <span class="underline">Get the file</span>
                </a>
            </div>
        @endif
        @if($task->link)
            <div class="text-xl my-6 hover:text-red-400">
                <a href="https://{{$task->link}}" target="_blank">
                    <span class="underline">Link</span>
                </a>
            </div>
        @endif

        @if(!$completed)
            <form method="POST" action="{{ route('tasks.check') }}">
                @csrf
                <div class="text-xl mb-2 mt-6 font-bold">Enter the flag:</div>
                <div class="flex items-center">
                    <div class="flex-1 max-w-xl">
                        <x-text-input id="flag" class="block mt-1 w-full" type="text" name="flag" required/>
                        <x-input-error :messages="$errors->get('flag')" class="mt-2"/>
                    </div>
                    <input type="hidden" name="task_id" value="{{ $task->id }}">
                    <div class="ml-4">
                        <x-primary-button>
                            {{ __('Submit') }}
                        </x-primary-button>
                    </div>
                </div>
                <div class="mt-3">Flag format: CTF{Flag}</div>
            </form>


        @if (session('success'))
            <div class="mt-8 bg-green-500 text-white py-2 px-4 rounded">
                {{ session('success') }}
            </div>
            <x-success></x-success>
        @endif
        @else
            <div class="mt-8 text-white py-2 rounded text-xl">
                You have already completed this task.
            </div>
        @endif
    </div>
</x-app-layout>

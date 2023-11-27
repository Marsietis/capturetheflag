<x-app-layout>
    <x-slot name="header">
        <h2 class="text-4xl font-bold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task') }}
        </h2>
    </x-slot>
    @if (session('error'))
        <div class="alert-container">
            <div class="fixed top-44 inset-x-0 flex justify-center">
                <div class="bg-red-400 text-white px-4 py-3 rounded-lg max-w-lg shadow-xl">
                    <strong class="font-bold">{{ session()->get('error') }}</strong>
                </div>
            </div>
        </div>
        <style>
            .alert-container {
                opacity: 1;
                transition: opacity 0.3s ease-out;
            }

            .alert-container.fade-out {
                opacity: 0;
            }
        </style>

        <script>
            setTimeout(function () {
                let alertContainer = document.querySelector('.alert-container');
                alertContainer.classList.add('fade-out');

                setTimeout(function () {
                    alertContainer.style.display = 'none';
                }, 300);
            }, 2000);
        </script>
    @endif

    <div class="container mt-20 mx-auto px-4 sm:px-6 lg:px-8 text-white mb-80">
        <div class="mx-auto bg-zinc-900 p-8 sm:p-16 overflow-hidden shadow-xl sm:rounded-lg mb-40">
            <div class="text-7xl font-bold text-white mb-4">{{ $task->title }}</div>
            <div class="badge bg-zinc-800 text-white text-2xl p-4">Points: {{$task->points}}</div>

            <div class="mt-8 text-3xl text-white">{{ $task->description }}</div>
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

            @if(!$taskIsCompleted)
                <form method="POST" action="{{ route('tasks.check') }}" class="mt-8">
                    @csrf
                    <div class="text-xl mb-2 mt-6 font-bold">Enter the flag:</div>
                    <div class="flex items-center">
                        <div class="flex-1 max-w-xl">
                            <x-text-input id="flag" class="block mt-1 w-full" type="text" name="flag"
                                          value="{{ old('flag') }}" autocomplete="off" required/>
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
    </div>
</x-app-layout>

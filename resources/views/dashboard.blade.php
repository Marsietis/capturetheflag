<x-app-layout>

    @if(session()->has('success'))
        <div class="alert-container">
            <div class="flex justify-center bg-green-400 text-white px-4 py-3 rounded-lg shadow-xl relative max-w-lg mx-auto mt-6">
                <strong class="font-bold">{{ session()->get('success') }}</strong>
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
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center mb-6">
            <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg shadow-xl">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-xl">
                    Your score: {{ $score }} Tasks completed: {{ $completedTasks->count() }} / {{ $totalTaskCount }}
                </div>
            </div>
        </div>

        <div class="text-gray-50 text-xl mt-10">
            <div
                class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4 sm:px-8 md:px-16 lg:px-24">
                @foreach($tasks as $task)
                    <div class="card w-full sm:w-full md:w-96 bg-zinc-900 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">{{$task->title}}</h2>
                            <div class="badge bg-zinc-800 text-white text-lg p-4">Points: {{$task->points}}</div>
                            <div class="card-actions justify-end">
                                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
                                    <button class="btn btn-outline btn-error">Go to task</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($completedTasks as $task)
                    <div class="card w-full sm:w-full md:w-96 bg-zinc-900 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">{{$task->title}}</h2>
                            <div class="badge bg-zinc-800 text-white text-lg p-4">Points: {{$task->points}}</div>
                            <div class="card-actions justify-end">
                                <span class="text-gray-400 ml-2">Completed</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</x-app-layout>

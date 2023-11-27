<x-app-layout>

    @if(session()->has('success'))
        <div class="alert-container">
            <div
                class="flex justify-center bg-green-400 text-white px-4 py-3 rounded-lg shadow-xl relative max-w-lg mx-auto mt-6">
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
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center mb-6">
            <div class="bg-zinc-900 overflow-hidden sm:rounded-lg shadow-xl">
                <div class="p-6 text-gray-100 text-xl">
                    Your score: {{ $score }} Tasks completed: {{ count($completedTasks) }}
                    / {{ $totalTaskCount }}                </div>
            </div>
        </div>

        <div class="text-gray-50 text-xl mt-10">
            <div class="flex items-center justify-center h-full">
                <div class="">
                    @include('layouts.search')
                    @if ($tasks->isEmpty())
                        <p class="text-white text-5xl font-bold text-center mt-20">No tasks found.</p>
                    @else
                </div>
            </div>

            <div
                class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4 sm:px-8 md:px-16 lg:px-24">
                @foreach($tasks as $task)
                    <div class="card w-full sm:w-full md:w-96 bg-zinc-900 shadow-xl">
                        <div class="card-body">
                            <div class="inline-flex items-center">
                                <div class="text-gray-400 mr-2 text-lg">{{ $task->category }}</div>
                                <div class="badge border-zinc-800 bg-zinc-800 text-white text-lg p-4">{{$task->points}} points</div>
                            </div>
                            <h2 class="card-title text-2xl truncate">{{$task->title}}</h2>
                            <div class="">{{ $task->solve_count }} solves</div>
                            <div class="card-actions justify-end">
                                @if(in_array($task->id, $completedTasks))
                                    <span class="text-gray-400 ml-2">Completed</span>
                                @else
                                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
                                        <button class="btn btn-outline btn-error">Go to task</button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>


    </div>
</x-app-layout>

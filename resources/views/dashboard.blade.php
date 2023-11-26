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
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center mb-6">
            <div class="bg-white dark:bg-zinc-900 overflow-hidden sm:rounded-lg shadow-xl">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-xl">
                    Your score: {{ $score }} Tasks completed: {{ count($completedTasks) }}
                    / {{ $totalTaskCount }}                </div>
            </div>
        </div>

        <div class="text-gray-50 text-xl mt-10">
            <div class="mb-4">
                <form method="GET" action="{{ route('dashboard') }}">
                    <label for="hideCompleted" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Hide Completed Tasks
                    </label>
                    <input type="checkbox" id="hideCompleted" name="hideCompleted" class="mr-2" {{ $hideCompleted ? 'checked' : '' }}>
                    <label for="search" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Search by Task Title:</label>
                    <div class="flex mb-2">
                        <input type="text" id="search" name="search" class="mt-1 p-2 border border-gray-300 dark:border-gray-700 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md text-black" placeholder="Enter task title..." value="{{ request()->get('search') }}">
                        <button type="submit" class="ml-2 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-800 transition duration-150 ease-in-out">
                            Search
                        </button>
                        <a href="{{ route('dashboard') }}" class="ml-2 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-500 hover:bg-gray-400 focus:outline-none focus:border-gray-600 focus:shadow-outline-gray active:bg-gray-600 transition duration-150 ease-in-out">
                            Clear Filters
                        </a>
                    </div>

                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Filter by Category:</label>
                        <select id="category" name="category" class="text-black mt-1 p-2 border border-gray-300 dark:border-gray-700 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md">
                            <option value="" {{ request()->get('category') == '' ? 'selected' : '' }}>All Categories</option>
                            <option value="General" {{ request()->get('category') == 'General' ? 'selected' : '' }}>General</option>
                            <option value="Web" {{ request()->get('category') == 'Web' ? 'selected' : '' }}>Web</option>
                            <option value="Forensics" {{ request()->get('category') == 'Forensics' ? 'selected' : '' }}>Forensics</option>
                            <option value="Reverse engineering" {{ request()->get('category') == 'Reverse engineering' ? 'selected' : '' }}>Reverse engineering</option>
                            <option value="Steganography" {{ request()->get('category') == 'Steganography' ? 'selected' : '' }}>Steganography</option>
                            <option value="Cryptography" {{ request()->get('category') == 'Cryptography' ? 'selected' : '' }}>Cryptography</option>
                        </select>
                    </div>
                </form>
            </div>
            @if ($tasks->isEmpty())
                <p>No tasks found.</p>
            @else
            <div
                class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4 sm:px-8 md:px-16 lg:px-24">
                @foreach($tasks as $task)
                    <div class="card w-full sm:w-full md:w-96 bg-zinc-900 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">{{$task->title}}</h2>
                            <div class="text-gray-400">{{ $task->category }}</div>
                            <div class="badge bg-zinc-800 text-white text-lg p-4">Points: {{$task->points}}</div>
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

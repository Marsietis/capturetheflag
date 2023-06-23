<x-app-layout>

    @if(session()->has('success'))
        <div class="flex justify-center bg-green-500 border border-green-700 text-white px-4 py-3 rounded relative max-w-lg mx-auto mt-6"
             role="alert">
            <strong class="font-bold">{{ session()->get('success') }}</strong>
        </div>
        <script>
            setTimeout(function () {
                document.querySelector('.bg-green-500').style.display = 'none';
            }, 3000);
        </script>
    @endif
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center mb-6">
            <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-xl">
                    Your score: {{ $score }} Tasks completed: {{ $completedTasks->count() }} / {{ $tasks->count() }}
                </div>
            </div>
        </div>

        <div class="text-gray-50 text-xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-4 sm:px-8 md:px-16 lg:px-24">
                @foreach($tasks as $task)
                    <div class="py-8 sm:py-16 px-4 sm:px-8 flex flex-col justify-center h-full bg-zinc-900 shadow-sm sm:rounded-lg">
                        <div class="text-2xl font-bold mb-2">{{$task->title}}</div>
                        <div class="flex items-center mt-2">
                            <span class="bg-zinc-800 text-white px-2 py-1 rounded">Points: {{$task->points}}</span>
                            @if(in_array($task->id, $completedTasks->pluck('id')->toArray()))
                                <span class="text-gray-400 ml-2">Completed</span>
                            @else
                                <a href="{{ route('task', ['id' => $task->id]) }}" class="bg-zinc-800 text-white ml-2 px-2 py-1 rounded hover:bg-red-400">Go to Task</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>






    </div>
</x-app-layout>

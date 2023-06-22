<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <div class="text-gray-50 text-xl">
            @foreach($tasks as $task)
                <div class="border-t-2">
                    <a href="{{ route('task', ['id' => $task->id]) }}">
                        <tr>
                            <th>{{$task->id}}</th>
                            <br>
                            <th>{{$task->title}}</th>
                            <br>
                            <th>{{$task->description}}</th>
                            <br>
                            <th>{{$task->points}}</th>
                            <br>
                            <th>{{$task->flag}}</th>
                            <br>
                            @if(in_array($task->id, $completedTasks->pluck('id')->toArray()))
                                <th>Completed</th>
                            @endif
                        </tr>
                    </a>
                    @endforeach
                </div>
        </div>

    </div>
</x-app-layout>

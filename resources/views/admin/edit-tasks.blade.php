<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Select a task to edit
        </h2>
    </x-slot>

    <div class="py-12 min-h-screen">
        <div class="text-gray-50 text-xl mt-10">
            <div
                class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4 sm:px-8 md:px-16 lg:px-24">
                @foreach($tasks as $task)
                    <div class="card w-full sm:w-full md:w-96 bg-zinc-900 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">{{$task->title}}</h2>
                            <div class="badge bg-zinc-800 text-white text-lg p-4">Points: {{$task->points}}</div>
                            <div class="card-actions justify-end">
                                <a href="{{ route('admin.edit-task', ['id' => $task->id]) }}">
                                    <button class="btn btn-outline btn-error">Edit Task</button>
                                </a>
                                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
                                    <button class="btn btn-outline btn-error">View Task</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <footer class="footer footer-center p-4 bg-zinc-800 text-base-content">
        <div>
            <p>Copyright © 2023 Martynas Matijošius</p>
        </div>
    </footer>
</x-app-layout>

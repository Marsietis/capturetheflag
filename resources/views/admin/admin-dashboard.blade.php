<x-guest-layout>
    <div class="text-white text-2xl mb-4 flex justify-center">Admin dashboard</div>
    <div class="flex justify-center">
        <a href="{{ route('admin.add-task') }}">
            <button class="btn btn-outline btn-error m-5">Add a new task</button>
        </a>
        <a href="{{ route('admin.edit-tasks') }}">
            <button class="btn btn-outline btn-error m-5">Edit tasks</button>
        </a>
    </div>
</x-guest-layout>

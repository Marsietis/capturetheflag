<x-guest-layout>
    <div class="text-white text-2xl mb-4 flex justify-center">Admin dashboard</div>
    <div class="flex justify-center">
    <x-primary-button class="m-5">
        <a href="{{ route('admin.add-task') }}">Add a new task</a>
    </x-primary-button>
    <x-primary-button class="m-5">
        <a href="{{ route('admin.edit-tasks') }}">Edit tasks</a>
    </x-primary-button>
    </div>
</x-guest-layout>

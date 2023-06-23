<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leaderboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center mb-6">
        <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 text-xl">
                Your score: {{ $user->score }} Your position: {{ $userPosition }}/{{ $users->count() }}
            </div>
        </div>
    </div>

    <div class="text-5xl text-white m-20">
        @foreach($users as $index => $user)
            @if($user->id === Auth::user()->id)
                @php
                    $userPosition = $index + 1;
                @endphp
                <span class="bg-yellow-500">{{ $userPosition }}. {{ $user->name }} ({{ $user->score }})</span><br>
            @else
                {{ $index+1 }}. {{ $user->name }} ({{ $user->score }})<br>
            @endif
        @endforeach
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leaderboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center pt-12">
        <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 text-xl text-center">
                Your score: {{ $user->score }} Your position: {{ $userPosition }} / {{ $users->count() }}
                @if($userPosition === 1)
                    <div class="text-4xl">🏆 You are the leader 🏆</div>
                @endif
            </div>
        </div>
    </div>

    <div class="flex justify-center text-white text-7xl mt-3">Top players</div>
    <div class="flex justify-center">
        <div class="text-5xl text-white mx-20 mt-8">
            <div class="text-center">
                @foreach($users as $index => $user)
                    @if($user->id === Auth::user()->id)
                        @php
                            $userPosition = $index + 1;
                        @endphp
                        <div class="bg-zinc-900 rounded-lg p-4 mb-4 shadow-xl">{{ $userPosition }}. {{ $user->name }} ({{ $user->score }})</div>
                    @else
                        <div class="mb-3">{{ $index+1 }}. {{ $user->name }} ({{ $user->score }})</div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>



</x-app-layout>

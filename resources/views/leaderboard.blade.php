<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leaderboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center pt-12">
        <div class="bg-white dark:bg-zinc-900 overflow-hidden shadow-xl rounded-xl">
            <div class="p-6 text-gray-900 dark:text-gray-100 text-xl text-center">

                Your score: {{ $userScore }} @if($userPosition > 0 && $userScore > 0)
                    Your position: {{ $userPosition }} / {{ $users->count() }}
                @endif
                @if($userPosition === 1 && $userScore > 0)
                    <div class="text-2xl md:text:4xl lg:text-4xl">🏆 You are the leader 🏆</div>
                @endif
                @if($userScore === 0)
                    <div class="text-2xl md:text:4xl lg:text-4xl">Solve at least one task to appear in leaderboard</div>
                @endif
            </div>
        </div>
    </div>

    <div class="flex justify-center text-white text-5xl md:text-7xl lg:text-7xl mt-3">Top players</div>
    <div class="flex justify-center">
        <div class="text-3xl md:text-4xl lg:text-5xl text-white mt-8 mb-40">
            <div class="text-center">
                @if($users->count() === 0)
                    <div class="text-4xl">No entries yet</div>
                @else
                    <div class="overflow-x-auto">
                        <table class="mt-4 text-xl md:text-3xl lg:text-5xl">
                            <tr>
                                <th class="p-1 lg:p-4 md:p-3">Position</th>
                                <th class="p-1 lg:p-4 md:p-3">Name</th>
                                <th class="p-1 lg:p-4 md:p-3">Score</th>
                                <th class="p-1 lg:p-4 md:p-3">Last task solved</th>
                            </tr>
                            @foreach($users as $user)
                                @php
                                    $index = $loop->index + 1;
                                @endphp
                                <tr class="{{ $user->id === Auth::id() ? 'bg-zinc-900 rounded-xl p-4 mb-4 shadow-xl' : 'mb-2' }}">
                                    <td class="p-1 lg:p-4 md:p-3">{{ $index }}</td>
                                    <td class="p-1 lg:p-4 md:p-3 break-all">{{ $user->name }}</td>
                                    <td class="p-1 lg:p-4 md:p-3">{{ $user->leaderboard->score }}</td>
                                    <td class="p-1 lg:p-4 md:p-3">{{ $user->leaderboard->updated_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>

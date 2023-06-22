<x-app-layout>
    <div class="text-white text-xl">
        Leaderboard:<br>
    @foreach($users as $user)
        {{$user->name}} {{$user->score}}<br>
    @endforeach
    </div>
</x-app-layout>

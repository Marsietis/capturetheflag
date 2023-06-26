<?php

namespace App\Http\Controllers;

use App\Models\User;

class LeaderboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $users = User::where('score', '>', 0)->orderByDesc('score')->get();
        $userPosition = $users->pluck('id')->search($user->id) + 1;
        $userPosition = $userPosition ?: null;
        return view('leaderboard', compact('users', 'user', 'userPosition'));
    }
}

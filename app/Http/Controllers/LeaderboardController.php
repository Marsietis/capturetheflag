<?php

namespace App\Http\Controllers;

use App\Models\User;

class LeaderboardController extends Controller
{
    public function __invoke()
    {
        $users = User::orderBy('score', 'desc')->where('score', '>', 0)->get();
        $user = auth()->user();

        $userPosition = $users->pluck('id')->search($user->id);
        $userPosition = $userPosition !== false ? $userPosition + 1 : null;

        return view('leaderboard', compact('users', 'user', 'userPosition'));
    }

}

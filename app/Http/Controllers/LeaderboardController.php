<?php

namespace App\Http\Controllers;

use App\Models\Leaderboard;
use App\Models\User;

class LeaderboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        // get all users which have more than 0 score in leaderboard table
        $users = User::whereHas('leaderboard', function ($query) {
            $query->where('score', '>', 0);
        })->with('leaderboard')->get();

        // sort users by score
        $users = $users->sortByDesc(function ($user) {
            return $user->leaderboard->score;
        });

        $userPosition = $users->pluck('id')->search($user->id) + 1;
        $userPosition = $userPosition ?: null;

        $userScore = Leaderboard::where('user_id', $user->id)->first()->score;
        return view('leaderboard', compact('users', 'user', 'userPosition', 'userScore'));
    }
}

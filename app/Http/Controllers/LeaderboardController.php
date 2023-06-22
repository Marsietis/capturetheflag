<?php

namespace App\Http\Controllers;

use App\Models\User;

class LeaderboardController extends Controller
{
    public function __invoke()
    {
        $users = User::orderBy('score', 'desc')->where('score', '>', 0)->get();
        return view('leaderboard', compact('users'));
    }
}

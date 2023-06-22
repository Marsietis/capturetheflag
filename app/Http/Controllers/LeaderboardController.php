<?php

namespace App\Http\Controllers;

use App\Models\User;

class LeaderboardController extends Controller
{
    public function __invoke()
    {
        //Display all users and sort by score
        $users = User::orderBy('score', 'desc')->get();
        return view('leaderboard', compact('users'));
    }
}

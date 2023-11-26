<?php

namespace App\Http\Controllers;

use App\Models\CompletedTask;
use App\Models\Leaderboard;
use App\Models\Task;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $tasks = Task::orderBy('points')->get();
        $completedTasks = CompletedTask::where('user_id', $user->id)->pluck('task_id')->toArray();
        $totalTaskCount = $tasks->count();
        $score = Leaderboard::where('user_id', $user->id)->value('score');

        return view('dashboard', compact('tasks', 'completedTasks', 'totalTaskCount', 'score'));
    }

}

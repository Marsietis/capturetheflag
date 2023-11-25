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
        $completedTasksIds = CompletedTask::where('user_id', $user->id)->pluck('task_id');
        $tasks = Task::whereNotIn('id', $completedTasksIds)->orderBy('points')->get();
//        $tasks = Task::orderBy('points')->get();
        $completedTasks = Task::whereIn('id', $completedTasksIds)->get();
        $totalTaskCount = Task::count();
        $score = Leaderboard::where('user_id', $user->id)->first()->score;

        return view('dashboard', compact('tasks', 'completedTasks', 'totalTaskCount', 'score'));
    }
}

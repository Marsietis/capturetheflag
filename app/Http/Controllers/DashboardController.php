<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Task;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $completedTasks = Task::whereIn('id', explode(',', $user->tasks_completed))->get();
        $tasks = Task::whereNotIn('id', $completedTasks->pluck('id'))->orderBy('points')->get();
        $totalTaskCount = Task::count();
        $score = $user->score;

        return view('dashboard', compact('tasks', 'completedTasks', 'totalTaskCount', 'score'));
    }
}

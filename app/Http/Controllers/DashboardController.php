<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Task;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $completedTasks = explode(',', $user->tasks_completed);
        $tasks = Task::whereNotIn('id', $completedTasks)->orderBy('points')->get();
        $completedTasks = Task::whereIn('id', $completedTasks)->orderBy('points')->get();
        $completedTasksCount = count($completedTasks);
        $score = $user->score;
        return view('dashboard', [
            'tasks' => $tasks,
            'completedTasks' => $completedTasks,
            'completedTasksCount' => $completedTasksCount,
            'score' => $score,
        ]);
    }
}


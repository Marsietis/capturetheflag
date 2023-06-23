<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $tasks = DB::table('tasks')->get();
        $user = auth()->user();
        $completedTasks = $user->tasks_completed;
        $completedTasksCount = substr_count($completedTasks, ',');
        $score = $user->score;
        $completedTasks = explode(',', $completedTasks);
        $completedTasks = Task::whereIn('id', $completedTasks)->get();
        return view('dashboard', [
            'tasks' => $tasks,
            'completedTasks' => $completedTasks,
            'completedTasksCount' => $completedTasksCount,
            'score' => $score,
        ]);
    }
}

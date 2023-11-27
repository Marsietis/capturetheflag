<?php

namespace App\Http\Controllers;

use App\Models\CompletedTask;
use App\Models\Leaderboard;
use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        $searchQuery = $request->input('search');
        $categoryFilter = $request->input('category');
        $hideCompleted = $request->input('hideCompleted');

        // Retrieve tasks and apply search, category, and completed filters
        $tasks = Task::when($searchQuery, function ($query) use ($searchQuery) {
            return $query->where('title', 'like', '%' . $searchQuery . '%');
        })->when($categoryFilter, function ($query) use ($categoryFilter) {
            return $query->where('category', $categoryFilter);
        })->when($hideCompleted, function ($query) use ($user) {
            return $query->whereNotIn('id', CompletedTask::where('user_id', $user->id)->pluck('task_id')->toArray());
        })->orderBy('points')->get();

        $completedTasks = CompletedTask::where('user_id', $user->id)->pluck('task_id')->toArray();
        $totalTaskCount = $tasks->count();
        $score = Leaderboard::where('user_id', $user->id)->value('score');

        return view('dashboard', compact('tasks', 'completedTasks', 'totalTaskCount', 'score', 'hideCompleted'));
    }
}

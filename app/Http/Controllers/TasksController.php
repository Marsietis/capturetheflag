<?php

namespace App\Http\Controllers;

use App\Models\CompletedTask;
use App\Models\Leaderboard;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Task;

class TasksController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $task = new Task;
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->points = $request->input('points');
        $task->link = $request->input('link');
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->storeAs('public', $file->getClientOriginalName());
            $task->file = $path;
        }
        $task->flag = $request->input('flag');
        $task->save();
        return redirect('/dashboard');
    }

    public function show($id): View
    {
        $task = Task::findOrFail($id);
        $user = auth()->user();
        $completedTasks = CompletedTask::where('user_id', $user->id)->pluck('task_id');
        $taskIsCompleted = $completedTasks->contains($id);
        return view('task', compact('task', 'taskIsCompleted'));
    }

    public function check(Request $request): RedirectResponse
    {
        $taskId = $request->input('task_id');
        $inputtedFlag = $request->input('flag');
        $task = Task::findOrFail($taskId);
        $taskPoints = $task->points;
        $user = auth()->user();
        $completedTasks = CompletedTask::where('user_id', $user->id)->pluck('task_id');
        if ($completedTasks->contains($taskId)) {
            return redirect()->back()->with('error', 'You have already completed this task!')->withInput();
        }
        if ($task->flag === $inputtedFlag) {

            $leaderboard = Leaderboard::where('user_id', $user->id)->first();
            $leaderboard->score += $taskPoints;

            $completedTask = new CompletedTask;
            $completedTask->user_id = $user->id;
            $completedTask->task_id = $taskId;

            $user->save();
            $completedTask->save();
            $leaderboard->save();
            return redirect('dashboard')->with('success', 'Task completed successfully!');
        } else {
            return redirect()->back()->with('error', 'Sorry, that is not the correct flag . Please try again . ')->withInput();
        }
    }

}

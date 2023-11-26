<?php

namespace App\Http\Controllers;

use App\Models\CompletedTask;
use App\Models\Leaderboard;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Task;
use LaravelIdea\Helper\App\Models\_IH_Task_C;

class TasksController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $task = new Task;
        $this->assignTaskData($request, $task);
        return redirect('/dashboard')->with('success', 'Task added successfully!');
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

            $task->solve_count += 1;

            $user->save();
            $completedTask->save();
            $task->save();
            $leaderboard->save();
            return redirect('dashboard')->with('success', 'Task completed successfully!');
        } else {
            return redirect()->back()->with('error', 'Sorry, that is not the correct flag . Please try again . ')->withInput();
        }
    }

    public function showAllTasks(): View
    {
        $tasks = Task::all();
        return view('admin.edit-tasks', compact('tasks'));
    }

    public function edit($id): View
    {
        $task = Task::findOrFail($id);
        return view('admin.edit-task', compact('task'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $task = Task::findOrFail($id);
        $this->assignTaskData($request, $task);
        return redirect('dashboard')->with('success', 'Task updated successfully!');
    }

    public function destroy($id): RedirectResponse
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect('dashboard')->with('success', 'Task deleted successfully!');
    }


    public function assignTaskData(Request $request, array|Task|_IH_Task_C $task): void
    {
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->points = $request->input('points');
        $task->link = $request->input('link');
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->storeAs('public', $file->getClientOriginalName());
            $task->file = $path;
        }
        $task->category = $request->input('category');
        $task->flag = $request->input('flag');
        $task->save();
    }

}

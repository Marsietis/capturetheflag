<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TasksController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function store(Request $request): RedirectResponse
    {
        $task = new Task;
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->points = $request->input('points');
        $task->flag = $request->input('flag');

        $task->save();

        return redirect('/dashboard');
    }

    public function show($id): View
    {
        $task = Task::findOrFail($id);
        return view('task', compact('task'));
    }

    public function dashboard(): View
    {
        $tasks = DB::table('tasks')->get();
        return view('dashboard', ['tasks' => $tasks]);
    }

    public function admin(): View
    {
        return view('admin');
    }

    public function check(Request $request): RedirectResponse
    {
        $inputtedFlag = $request->input('flag');
        $taskId = $request->input('task_id');

        $task = Task::findOrFail($taskId);

        if ($task->flag === $inputtedFlag) {

            return redirect()->back()->with('success', 'Task completed successfully!');
        } else {
            return redirect()->back()->with('error', 'Sorry, that is not the correct flag. Please try again.');
        }
    }

}

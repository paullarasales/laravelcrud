<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function redirect() {
        return view('tasks.index');
    }

    public function store(Request $request) {
        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function destroy($id) {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }

    public function edit($id) {
        $task = DB::table('tasks')->find($id);

        return view('tasks.index', compact('task'));
    }

    public function update(Request $request, $id) {
        $task = Task::findOrFail($id);

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task update successfully');
    }
}

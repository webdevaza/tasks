<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'task' => 'required|max:60',
            'toDoDate' => 'required|date',
            'doneDate' => 'nullable|date',
        ]);        
        
        $doneDate = $validatedData['doneDate'] ?? null;

        Task::create([
            'task' => $validatedData['task'],
            'toDoDate' => $validatedData['toDoDate'],
            'doneDate' => $doneDate,
            'user_id' => Auth::id()
        ]);
        
        return redirect()->route('tasks.index');
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }


}

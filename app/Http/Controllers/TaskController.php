<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())
                ->orderBy('doneDate', 'asc')
                ->orderBy('toDoDate', 'desc')
                ->orderBy('created_at', 'desc')
                ->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'task' => 'required|max:60',
            'toDoDate' => 'nullable|date',
            'doneDate' => 'nullable|date',
            'editDate' => 'nullable|date',
        ]);        
        
        $toDoDate = $validatedData['toDoDate'] ?? null;
        $doneDate = $validatedData['doneDate'] ?? null;
        $editDate = $validatedData['editDate'] ?? null;

        Task::create([
            'task' => $validatedData['task'],
            'toDoDate' => $toDoDate,
            'doneDate' => $doneDate,
            'editDate' => $editDate,
            'user_id' => Auth::id()
        ]);
        
        return redirect()->route('tasks.index');
    }

    public function update(Request $request, Task $task)
    {
        $task->update(['task' => $request->input('task'),'editDate' => date('Y-m-d')]);
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }


}

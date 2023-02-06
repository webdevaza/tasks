<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    // showing all tasks
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())
                ->orderBy('doneDate', 'asc')
                ->orderBy('created_at', 'desc')
                ->orderBy('editDate', 'desc')
                ->orderBy('toDoDate', 'asc')
                ->get();
        return view('tasks.index', compact('tasks'));
    }

    // creating a task
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
        
        $toDoDate = $toDoDate ? date_format(date_create($toDoDate),'Y-m-d') : $toDoDate;
        
        Task::create([
            'task' => $validatedData['task'],
            'toDoDate' => $toDoDate,
            'doneDate' => $doneDate,
            'editDate' => $editDate,
            'user_id' => Auth::id()
        ]);
        
        return redirect()->route('tasks.index');
    }

    // editing a task
    public function update(Request $request, Task $task)
    {
        $toDoDateUpd = date_create($request->input('toDoDate')) ? date_format(date_create($request->input('toDoDate')),'Y-m-d') : null;
        $task->update(['task' => $request->input('task'),
                       'toDoDate' => $toDoDateUpd, 
                       'editDate' => date('Y-m-d')]);
        return redirect()->route('tasks.index');
    }

    // fulfiling a task
    public function fulfil($id)
    {
        $task = Task::find($id);
        $task->update(['doneDate' => date('Y-m-d')]);
    
        return redirect()->route('tasks.index');
    }

    // undoing a task
    public function unFulfil($id)
    {
        $task = Task::find($id);
        $task->update(['doneDate' => null]);
        return redirect()->route('tasks.index');
    }

    // deleting a task
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }


}

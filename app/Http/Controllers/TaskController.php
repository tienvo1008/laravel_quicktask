<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestTasks;
use App\Models\User;
use App\Models\Task;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $tasks = Task:: orderBy('id','DESC') -> get();

        return view('tasks.index',['tasks' => $tasks]);
    }

    public function store(Request $request)
    {

        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/tasks');
    }
    public function destroy(Task $task)
    {
        $tasks = Task:: find($task);
        $task -> delete();

        return redirect('/tasks');
    }
}

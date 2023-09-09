<?php

namespace Khairul\Fm;

use App\Http\Controllers\Controller;
use Request;
use Khairul\Fm\Task;

class TaskController extends Controller
{
    public function index()
    {
        return redirect()->route('task.create');
       // return view('fm::app');
    }

    public function create()
    {
        $tasks = Task::all();
        $submit = 'Add';
        return view('fm::list', compact('tasks', 'submit'));
    }

    public function store()
    {
        $input = Request::all();
        Task::create($input);
        return redirect()->route('task.create');
    }

    public function edit($id)
    {
        $tasks = Task::all();
        $task = $tasks->find($id);
        $submit = 'Update';
        return view('fm::list', compact('tasks', 'task', 'submit'));
    }

    public function update($id)
    {
        $input = Request::all();
        $task = Task::findOrFail($id);
        $task->update($input);
        return redirect()->route('task.create');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.create');
    }
}

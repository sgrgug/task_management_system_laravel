<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $validate = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'time'=>'required',
            'priority'=>'required',
            'photo' => 'required',
        ]);

        $tasks = new Task;
        $tasks->title = $request->title;
        $tasks->description = $request->description;
        $tasks->time = $request->time;
        $tasks->priority = $request->priority;
        
        // Get the file from the request
        $photo = $request->file('photo');

        // Generate a unique name for the file
        $filename = time() . '.' . $photo->getClientOriginalExtension();

        // Move the file to the desired location (e.g., public/uploads folder)
        $photo->move(public_path('uploads'), $filename);

        // Storing the filenam in database(photo attribute)
        $tasks->photo = $filename;

        $tasks->save();
        
        return redirect()->route('tasks.index')->with('status', 'Task Successfully Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {

        //validation
        $validate = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'time'=>'required',
            'priority'=>'required',
            'photo' => 'required',
        ]);

        $task->title = $request->title;
        $task->description = $request->description;
        $task->time = $request->time;
        $task->priority = $request->priority;
        
        // Get the file from the request
        $photo = $request->file('photo');

        // Generate a unique name for the file
        $filename = time() . '.' . $photo->getClientOriginalExtension();

        // Move the file to the desired location (e.g., public/uploads folder)
        $photo->move(public_path('uploads'), $filename);

        // Storing the filenam in database(photo attribute)
        $task->photo = $filename;

        $task->update();
        
        return redirect()->route('tasks.index')->with('status', 'Task Successfully Added!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('status', 'Post deleted successfully.');
    }
}

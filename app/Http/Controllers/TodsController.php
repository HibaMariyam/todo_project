<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tod;

class TodsController extends Controller
{
    public function index()
    {
        $tods=Tod::latest()->get();
        return view('todos.index',compact('tods'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        Tod::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('todoList')->with('success','Todo created successfully');
    }

    public function show(Request $request,Tod $todo)
    // $todo will find the todo by id
    {

        return view('todos.show',compact('todo'));
    }

    public function edit(Tod $todo)
    {
        
        return view('todos.edit',compact('todo'));
    }

    public function update(Request $request, Tod $todo)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        // $todo = Tod::find($id);
        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('todoList')->with('success','Todo updated successfully');
    }
    public function destroy(Tod $todo)
    {
        $todo->delete();
        return redirect()->route('todoList')->with('success','Todo deleted successfully');
    }
}

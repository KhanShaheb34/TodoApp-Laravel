<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        // Shows the list of todos
        return view('index', [
            'todos' => Todo::latest()->get()
        ]);
    }

    public function show($id)
    {
        // Shows a single todo

        return view('show', [
            'todo' => Todo::where('id', '=', $id)->firstOrFail()
        ]);
    }

    public function create()
    {
        // Shows a view to create todo
        return view('create');
    }

    public function store()
    {
        request()->validate(['title' => 'required']);

        // Adds new todo
        $todo = new Todo();

        $todo->title = request('title');
        $todo->description = request('description');
        $todo->save();

        return redirect('/');
    }

    public function edit($id)
    {
        // Shows a view to edit a todo
        return view('edit', [
            'todo' => Todo::where('id', '=', $id)->firstOrFail()
        ]);
    }

    public function update($id)
    {
        // Edits a todo
        $todo = Todo::where('id', '=', $id)->firstOrFail();

        $todo->title = request('title');
        $todo->description = request('description');
        $todo->save();

        return redirect($id);
    }

    public function destroy($id)
    {
        // Deletes a todo
        $res = Todo::where('id', '=', $id)->delete();
        if ($res) {
            return redirect('/');
        } else {
            abort(500, "Could not delete");
        }
    }

    public function complete($id)
    {
        $todo = Todo::where('id', '=', $id)->firstOrFail();

        $todo->completed = 1;
        $todo->save();

        return redirect('/');
    }
}

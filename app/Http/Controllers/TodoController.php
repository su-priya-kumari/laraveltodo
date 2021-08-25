<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $data['items'] = Todo::all();
        return view('home', $data);
    }
    public function create()
    {
        return view('insert');
    }

    public function store(Request $request)
    {
        $student = new Todo;
        $student->title = $request->input('title');
        $student->decription = $request->input('decription');
        $student->location = $request->input('location');
        $student->save();
        return redirect()->route('index'); 
    }
   
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $student = Todo::find($id);
        $student->title = $request->input('title');
        $student->decription = $request->input('decription');
        $student->location = $request->input('location');
        $student->update();
        return redirect()->route('index'); 
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->back()->with('status','Todo ite deleted Successfully'); 
        
    }
}
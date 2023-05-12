<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo; 

class TodoController extends Controller
{
    public function index(){

        $todo = Todo::all();
        return view('index')->with('todos', $todo);
    
    }
    public function create(){
        return view('create');
    }
    public function details(Todo $todo){
    
        return view('details')->with('todos', $todo);
    
    }
    
    public function edit(Todo $todo){
    
        return view('edit')->with('todos',$todo);
    }
    public function update($id)
    {
        $data = request()->all();

        $todo = Todo::find($id);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->update();
        echo ('<div class="alert alert-primary" role="alert">
            <strong>Updated!</strong>
        </div>'
        );
        return view('edit')->with('todos',$todo);
    }
    
    public function delete(Todo $todo){

        $todo->delete();

        return redirect('/');

    }
    public function store(){

        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo created succesfully');

        return redirect('/');

    }
    public function search(Request $request){
        $s = $request->s;
        $todo = Todo::where('name', 'LIKE', "%{$s}%")->orderBy('name')->paginate(10);
        return view('index')->with('todos', $todo);
    }
}

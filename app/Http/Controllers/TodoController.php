<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;



//use App\User; 
use App\Todoo;
use Illuminate\Support\Facades\Validator;
class TodoController extends Controller
{

  

    public function index(){
        $todo = Todoo::orderBy('completed','desc')->get();
      
        return view('todos.index')->with(['todos'=>$todo]);
    }
    public function create(){
        return view('todos.create');
    }
    public function store(TodoCreateRequest $request){
/*
        $rule = ['title'=>'required|max:255'];
        $message = ['title.max'=>'the text should not be greter than 255 chars.'];
        $validator = Validator::make($request->all(), $rule , $message);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

*/
        Todoo::create($request->all());
       return redirect()->back()->with('message','message creates successfuly');
   
   
    }

    public function edit(Todoo $todo){
       
    
        return view('todos.edite',compact('todo'));
    }

public function update( TodoCreateRequest $request , Todoo $todo){
//dd($request->all());
$todo->update(['title' => $request->title]);
return redirect(route('todo.index'))->with('message','Updated successfuly');
}

public function complete(Todoo $todo)
{
    $todo->update(['completed' => true]);
    return redirect()->back()->with('message', 'Task Marked as completed!');
}

public function incomplete(Todoo $todo)
{
    $todo->update(['completed' => false]);
    return redirect()->back()->with('message', 'Task Marked as Incompleted!');
}

public function delete(Todoo $todo)
{
    $todo->delete();
    return redirect()->back()->with('message', 'Task Marked as Deleted!');
}


}



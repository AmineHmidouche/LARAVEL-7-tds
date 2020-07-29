<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use App\Todoo;
use App\Step;
//use App\User; 

use Illuminate\Support\Facades\Validator;
class TodoController extends Controller
{

  public function __construct(){
      $this->middleware('auth');/*->except('index');*/
  }

    public function index(){
        $todos = auth()->user()->todos()->orderBy('completed')->get();
       /* return $todos;
        $todo = Todoo::orderBy('completed')->get();
      */
        return view('todos.index',compact('todos'));
    }
    public function create(){
        return view('todos.create');
    }
 /*   public function store(TodoCreateRequest $request){

        $rule = ['title'=>'required|max:255'];
        $message = ['title.max'=>'the text should not be greter than 255 chars.'];
        $validator = Validator::make($request->all(), $rule , $message);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }


       
    }*/
    public function store(TodoCreateRequest $request)
    {
        
        $todo = auth()->user()->todos()->create($request->all());
        if($request->step){
            foreach ($request->step as $step ) {
                $todo->steps()->create(['name' => $step]);
            }
        }
        return redirect(route('todo.index'))->with('message', 'Todo Created Successfully');
    }


    public function edit(Todoo $todo){
       
    
        return view('todos.edit',compact('todo'));
    }
    
    public function show(Todoo $todo)
    {
        return view('todos.show', compact('todo'));
    }
public function update( TodoCreateRequest $request , Todoo $todo){
//dd($request->all());
$todo->update(['title' => $request->title , 'description' => $request->description ,'description' => $request->description]);

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

public function destroy(Todoo $todo)
{
    $todo->steps->each->delete();
    $todo->delete();
    return redirect()->back()->with('message', 'Task Deleted!');
}


}



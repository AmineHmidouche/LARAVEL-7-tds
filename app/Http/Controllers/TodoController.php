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
        $todo = Todoo::all();
      
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

    public function edit($id){
        $todo = Todoo::find($id);
    
        return view('todos.edite',compact('todo'));
    }
}

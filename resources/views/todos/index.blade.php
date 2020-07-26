@extends('todos.layout')

@section('content')
  <div class="flex justify-center border-b pb-4">
    <h1 class="text-2xl ">All Todo List</h1>
    
    <a href="/todos/create" class="mx-5 py-1 px-1 p-7  text-blue-400 cursor-pointer text-whithe rounded"><span class="fa fa-plus-circle"  /></a>
  </div>
<x-alert  />
<ul class="my-5">
    @foreach($todos as $todo)
   <li class="flex justify-between p-2"> 
    @if ($todo->completed)
    <p class="px-4 line-through"> {{ $todo->title }} </p> 
    @else
    <p class="px-4 line-througt"> {{ $todo->title }} </p> 
    @endif
    <div>
      
    <a href="{{'/todos/'.$todo->id.'/edite'}}" class="mx-2 py-1 px-2  
      text-orange-400 cursor-pointer text-whithe rounded"><span class="fas fa-edit text-orange-400 px-2" px-2></span></a>
      @if ($todo->completed)
      
    <span  class="fas fa-check text-green-400 cursor-pointer"  
    onclick="event.preventDefault();
         
                document.getElementById('form-incomplete-{{$todo->id}}') .submit() "/>
                <form style="display:none" id="{{'form-incomplete-'.$todo->id}}" method="post" action="{{route('todo.incomplete',$todo->id)}}">
                  @csrf
                  @method('delete')
              </form>
       @else         
                <span class="fas fa-times text-red-500 px-2 cursor-pointer"  onclick="event.preventDefault();
         
                document.getElementById('form-complete-{{$todo->id}}') .submit() "/> 
    
               
           
    <form style="display:none" id="{{'form-complete-'.$todo->id}}" method="post" action="{{route('todo.complete',$todo->id)}}">
        @csrf
        @method('put')
    </form>
    @endif
    </div>
</li>

        
 @endforeach
 

            
</ul>


@endsection


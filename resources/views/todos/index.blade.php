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
     <div>
    @include('todos.complete-button')
  </div>
    @if ($todo->completed)
    <p class="px-4 line-through"> {{ $todo->title }} </p> 
    @else
    <p class="px-4 line-througt"> {{ $todo->title }} </p> 
    @endif
    <div>
      
    <a href="{{'/todos/'.$todo->id.'/edite'}}" class="mx-2 py-1 px-2  
      text-orange-400 cursor-pointer text-whithe rounded"><span class="fas fa-edit text-orange-400 px-2" px-2></span></a>
    
   
        <span class="fas fa-trash  text-red-500 px-2 cursor-pointer"  
        onclick="event.preventDefault(); if(confirm('Are you really want to delete?')){
     
        document.getElementById('form-delete-{{$todo->id}}') .submit() }" />
        <form style="display:none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todo.delete',$todo->id)}}">
          @csrf
          @method('delete')
      </form>
    

    </div>
</li>

        
 @endforeach
 

            
</ul>


@endsection


@extends('todos.layout')

@section('content')
  <div class="flex justify-center border-b pb-4">
    <h1 class="text-2xl ">All Todo List</h1>
    
    <a href="/todos/create" class="mx-5 py-1 px-1 p-4  bg-blue-400 cursor-pointer text-whithe rounded">Creat New</a>
  </div>
<x-alert  />
<ul class="my-5">
    @foreach ($todos as $todo)
   <li class="flex justify-center py-2"> <p> {{ $todo->title }} </p> <a href="{{'/todos/'.$todo->id.'/edite'}}" class="mx-5 py-1 px-1  bg-orange-400 cursor-pointer text-whithe rounded">Update</a></li>

@endforeach
</ul>


@endsection


@extends('todos.layout')

@section('content')
<h1 class=" border-b pb-4">Update title</h1>
<h2 class="mb-4 bg-yellow-300">{{$todo->title}}</h2>
<form method="post" action="{{route('todo.update',$todo->id)}}">
    @csrf
    @method('patch')
<x-alert />

    <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border-rounded" />
    <input type="submit" value="Update"  class="py-2 mb-4 px-2 border-rounded">

</form>

    <a href="/todos/index" class="py-1 mx-5  px-2 bg-blue-400 border cursor-pointer 
    text-whithe rounded">Back</a>


@endsection

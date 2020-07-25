@extends('todos.layout')

@section('content')
<h1>Update title</h1>
<h2>{{$todo->title}}</h2>
<form method="post" action="{{route('todo.update',$todo->id)}}">
    @csrf
    @method('patch')
<x-alert/>

    <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border-rounded" />
    <input type="submit" value="Update"  class="py-2 px-2 border-rounded">

</form>
    <a href="/todos/index" class="mx-5  py-1 px-1  bg-blue-400 border cursor-pointer 
    text-whithe rounded">Back</a>

@endsection

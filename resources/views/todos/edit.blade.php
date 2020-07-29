@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl pb-4">Update this todo list</h1>
    <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left" />
    </a>
</div>

<x-alert />
<form method="post" action="{{route('todo.update',$todo->id)}}">
    @csrf
    @method('patch')

<div class="py-1">
    <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded" placeholder="Title" />
</div>
<div class="py-1">
    <textarea name="description" class="p-2 rounded border" placeholder="Description">{{$todo->description}}</textarea>
</div>

    <input type="submit" value="Update"  class="py-2 mb-4 px-2 border-rounded">

</form>

    <a href="{{route('todo.index')}}" class="py-1 mx-5  px-2 bg-blue-400 border cursor-pointer 
    text-whithe rounded">Back</a>


@endsection

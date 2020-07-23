@extends('todos.layout')

@section('content')
  
    <h1 class="text-2xl">All Todo List</h1>


<ul>
    @foreach ($todos as $todo)
    <li>{{ $todo->title }}</li>

@endforeach
</ul>


@endsection


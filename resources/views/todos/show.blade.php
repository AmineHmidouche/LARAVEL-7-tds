@extends('todos.layout')

@section('content')
<div class="flex justify-center border-b pb-4 px-4">
    <h1 class="text-2xl pb-4">{{$todo->title}}</h1>
    <a href="{{route('todo.index')}}" class="mx-5 py-2 text-red-400 cursor-pointer text-white">
<span class="fas fa-arrow-left" />
</a>
</div>
    <div>
    
        <div>
        <h3 class="text-lg">Description</h3>
            <p class="border-b pb-4 px-4">{{$todo->description}}</p>
        </div>
        @if($todo->steps->count() > 0)
        <div class="py-4">
            <div class="justify-center border-b pb-4 px-4">
        <h3 class="text-lg text-blue-500">Step for this task</h3>
    </div>
        @foreach($todo->steps as $step)
    
        <p>{{$step->name}}</p>
        @endforeach
        </div>
        @else 
        <P> Sorry Thy have No Step for this task !!!</p>
        @endif
    </div>


@endsection
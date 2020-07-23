@extends('todos.layout')

@section('content')
<form method="POST" action="/todos/create">
    @csrf
<x-alert/>
<h2>Enter your information</h2>
    <input type="text" name="title" class="py-2 px-2 border-rounded" />
    <input type="submit" value="Entrer"  class="py-2 px-2 border-rounded">

</form>
    <a href="/todos/index" class="mx-5  py-1 px-1  bg-blue-400 border cursor-pointer text-whithe rounded">Back</a>
@endsection
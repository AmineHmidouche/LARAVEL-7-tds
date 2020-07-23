@extends('todos.layout')

@section('content')
<form method="POST" action="/todos/create">
    @csrf
<x-alert/>
<h2>Enter your information</h2>
    <input type="text" name="title" class="py-2 px-2 border-rounded" />
    <input type="submit" value="Entrer"  class="py-2 px-2 border-rounded">

</form>
    
@endsection
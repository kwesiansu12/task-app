@extends('layouts.app')

@section('content')
<p>Todddo</p> 
{{-- <p>{{$tasks}}</p> --}}
@foreach ($tasks as $task)
   <li> {{$task->content}} </li>
@endforeach
<form method="POST">
    @csrf
    <div>
        <input type="text" name="content" placeholder="Enter a todo item" required/>
        <input type="submit" value="Add"/>
    </div>
</form>
@endsection

@extends('layouts.app')

@section('content')
<p>Todddo</p> 

<form method="POST">
    <div>
        <input type="text" placeholder="Enter a todo item" required/>
        <input type="submit" value="Add"/>
    </div>
</form>
@endsection

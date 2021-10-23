@extends('layout')
@section('content')
<div class="container">
	<h1>Create a New Task</h1>
	<form method="POST" action="/books">
		{{csrf_field()}}
		<div>
			<input type="text" name="task" placeholder="Book Task" value="{{ old('task')}}">
		<div>
	</form>
	
@endsection


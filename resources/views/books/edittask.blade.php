@extends('layout')
@section('content')
<h1>Edit Task</h1>
	<form method="POST" action="/tasks/{task}">
		@method('PATCH')
		@csrf
		<div class="form-group">
			<label>Task</label>
			<div>
				<input type="text" name="task" placeholder="Book Task" value="{{ old('task')}}">
			<div>
		</div>
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
	<hr>
	<form method="POST" action="/books/{{$task->id}}">
	<!--{{method_field('DELETE')}}
	{{csrf_field()}}--> <!--can be written this ways as well-->	
	@method('DELETE')
	@csrf
	<button type="submit" class="btn btn-danger">Delete</button>
	</form>



@extends('layout')
@section('content')
<h2 class="title">{{$book->title}}</h2>
<div class="alert alert-danger" role="alert" style="font-style: italic">
 {{$book->description}}
</div>

	@if ($book->tasks->count())
		<div>
			@foreach ($book->tasks as $task)
				<div class="alert alert-info" role="alert" style="width:20%">
					<form method="POST" action="/tasks/{{ $task->id }}">
						@method('PATCH')
						@csrf
						<label class="checkbox {{$task->completed? 'is-complete':''}}" for="completed">
							<input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed? 'checked':''}} >
							{{$task->description}}
						</label>
					</form>
				</div>
			@endforeach
		</div>
	@endif

<!--Add a new task form-->
<form method="POST" action="/books/{{$book->id}}/tasks">
	@csrf
	<div class="form-group">
	    <label>Add New Task</label>
	    <input type="text"  name="description" class="form-control" id="exampleInputtext" aria-describedby="" value="{{ old('task')}}">
  	</div>
  	<button type="submit" class="btn btn-primary">Submit</button>
  	<button type="button" class="btn btn-danger"><a href="/books/{{$book->id}}/edit">Edit</a></button></br><br>
</form>

<div class="container">
	<div class="row">
	    <table class="table table-primary" style="margin-left:auto; margin-right:auto;">
	    	<thead>
	            <tr>
	              	<th scope="col">ID</th>
		            <th scope="col">Title</th>
					<th scope="col">Author</th>
					<th scope="col">Description</th>
		            <th scope="col">Category</th>
		            <th scope="col">ISBN</th>
		            <th scope="col">Price</th>
		            <th scope="col">Image</th>
	            </tr>
	      	</thead>
	      	<tbody>
	            @foreach ($book->tasks as $task)
	            <tr>
	            	<td>{{$book->id}}</td>
		            <td>{{$book->title}}</td>
		            <td>{{$book->author}}</td>
		            <td>{{$book->description}}</td>
		            <td>{{$book->category}}</td>
		            <td>{{$book->isbn}}</td>
		            <td>{{$book->price}}</td>
		            <td>{{$book->img}}</td>
		        </tr>
		        @endforeach
	    	</tbody>
	    </table>  
	</div>
</div>
@include('books.errors')
@endsection

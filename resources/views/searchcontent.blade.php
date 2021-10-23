@extends('layout')
@section('content')
<style type="text/css">
   
input[type=text]:focus {
	border: 2px solid black;
	border-radius: 4px;
	background-color: lightblue;
}
</style>
	<div class="row">
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
    	@if(count($books)>0)
    	@foreach($books as $book)
    	<tr>
			<td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->category}}</td>
            <td>{{$book->isbn}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->img}}</td>

            <td>
             	<button type="button" class="btn btn-danger" ><a href="/books/create">Add Books</a></button>
            </td>

            <td>
             	<button type="button" class="btn btn-secondary"><a href="/books/{{$book->id}}">Add Task</a></button>
            </td>
       </tr>
    	@endforeach
    	@endif
    </div>
@endsection



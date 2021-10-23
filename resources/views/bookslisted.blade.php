@extends('layout')
@section('content')

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
	          @foreach ($books as $book)
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
	        </tbody>
		</table><br><br>
	    <nav aria-label="Page navigation example">
			<ul class="pagination">
	    		<li class="page-item">
	      		<a class="page-link" href="#" aria-label="Previous">
	    		<span aria-hidden="true">&laquo;</span>
	      		</a>
	    		</li>
			    <li class="page-item"><a class="page-link" href="">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    		<li class="page-item">
	      		<a class="page-link" href="#" aria-label="Next">
	        	<span aria-hidden="true">&raquo;</span>
	      		</a>
	    		</li>
	  		</ul>	
		</nav>
  </div>
</div>
@endsection
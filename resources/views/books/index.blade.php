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
	<div class="col-6">
		<form method= "POST" action="/books">
	{{csrf_field()}}
  <div class="form-group">
    <label>Title</label>
    <input type="text"  name="title" class="form-control" id="exampleInputtext" aria-describedby="" value="{{ old('title')}}">

    <label>Author</label>
    <input type="text"  name="author" class="form-control" id="exampleInputtext" aria-describedby="" value="{{ old('author')}}">

    <label>Category</label>
    <input type="text"  name="category" class="form-control" id="exampleInputtext" aria-describedby="" value="{{ old('category')}}">

    <label>Description</label>
    <textarea name="description" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="4" cols="10">{{ old('description') }}</textarea>

    <label>ISBN NO</label>
    <input type="number"  name="isbnno" class="form-control" id="exampleInputtext" aria-describedby="" value="{{ old('isbnno')}}">

    <label>Price</label>
    <input type="number"  name="price" class="form-control" id="exampleInputtext" aria-describedby="" value="{{ old('price')}}">

     <label>Image</label>
     <fieldset>
        <input type="file" name="img" />
    </fieldset>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</div>
</div><br>

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
@include('books.errors')
@endsection

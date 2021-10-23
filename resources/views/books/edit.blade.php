@extends('layout')
@section('content')
<h1>Edit Book</h1>
	<form method="POST" action="/books/{{$book->id}}">
		@method('PATCH')
		@csrf
		<div class="form-group">
			<label>Book Title</label>
			<input type="text"  name="title" class="form-control" id="exampleInputtext" aria-describedby="" value="{{$book->title}}">

		 	<label>Category</label>
			<input type="text"  name="category" class="form-control" id="exampleInputtext" aria-describedby="" value="{{ old('category')}}">

		    <label>Author</label>
		    <input type="text"  name="author" class="form-control" id="exampleInputtext" aria-describedby="" value="{{ old('author')}}">

		    <label>ISBN NO</label>
		    <input type="number"  name="isbnno" class="form-control" id="exampleInputtext" aria-describedby="" value="{{ old('isbnno')}}">

		    <label>Price</label>
		    <input type="number"  name="price" class="form-control" id="exampleInputtext" aria-describedby="" value="{{ old('price')}}">
		 	<hr>
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
  <hr>
  <form method="POST" action="/books/{{$book->id}}">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-primary">Delete</button>
  </form>
@endsection


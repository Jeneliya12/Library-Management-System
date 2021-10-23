@extends('layout')
@section('content')
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
@include('books.errors')
@endsection


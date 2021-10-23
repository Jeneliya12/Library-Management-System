@extends('layout')
@section('content')
	<div class="row">
		<table class="table table-primary" style="margin-left:auto; margin-right:auto;">
	        <thead>
	         	<tr>
		            <th scope="col">Author Name</th>
	          </tr>
	        </thead>
	        <tbody>
	          @foreach ($books as $book)
		        <tr>
		            <td>{{$book->author}}</td>
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
@endsection
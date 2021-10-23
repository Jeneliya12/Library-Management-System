@extends('layout')
@section('content')
	<div class="row">
		<div class="col-3">
		<i class="fas fa-book fa-3x" style="font-size:60px;color:green"></i>
		<p><a href="/bookslisted">Available Books</a></p>	
		</div>
		<div class="col-3">
			<i class="fas fa-align-justify" style="font-size:60px;color:blue"></i>
			<p><a href="/bookissued">Book Issued Time</a></p>
		</div>
		<div class="col-3">
			<i class="fas fa-arrow-circle-right" style="font-size:60px;color:yellow"></i>
			<p><a href="">Times Books Returned</a></p>
		</div>
		<div class="col-3">
			<i class="fas fa-users" style="font-size:60px;color:red"></i>
			<p>Registered users</p>
		</div>
	</div>
	<div class="row">
		<div class="col-3">
			<i class="fas fa-book fa-3x" style="font-size:60px;color:green"></i>
			<p><a href="/author">Authors Listed</a></p>
		</div>
		<div class="col-3">
			<i class="fas fa-book fa-3x" style="font-size:60px;color:green"></i>
			<p><a href="/bookslisted">Listed Categories</a></p>
		</div>

	</div>	
		
@endsection



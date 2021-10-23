<?php

namespace App\Http\Controllers;

use App\Book;

class PagesController extends Controller
{

	public function home()
	{
		return view ('welcome', [
		'title'=> 'Welcome to my website!!'
		]);
	}
    
	public function about()
	{

		return view ('about');

	}

	public function contact()
	{

		return view ('contact');

	}
	public function admin()
	{

		return view ('admindashboard');

	}
	public function bookslisted()
	{ 
		$books= Book::where('owner_id', auth()->id())->get();

		return view('bookslisted', compact('books'));
	}
    public function bookissued()
	{ 
		$books= Book::where('owner_id', auth()->id())->get();

		return view('bookissued', compact('books'));
	}
	 public function author()
	{ 
		$books= Book::where('owner_id', auth()->id())->get();

		return view('author', compact('books'));
	}
    
}


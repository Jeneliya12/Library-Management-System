<?php

namespace App\Http\Controllers;
use App\Book;
use App\Mail\BookCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
 	}

	public function index()
	{
		//$projects= Project::all(); 
		$books= Book::where('owner_id', auth()->id())->get();

		return view('books.index', compact('books'));
	}

	public function create(Book $book)
	{
		return view('books.create');
	}

	public function store()
	{ 	//$validated= $this->validateBook();
		$validated= request()->validate([
		'title'=> ['required', 'min:3'],
		'author'=>['required', 'min:3'],
		'category'=> ['required', 'min:3'],
		'description'=>['required', 'min:3'],
		'isbnno'=>['required', 'min:3'],
		'price'=>['required', 'min:2'],
		'img'=>['required', 'min:1']
		]);
		
		$validated['owner_id']= auth()->id();
		$book= Book::create($validated);
		//Mail::to($book->owner->email)->send(
		//new BookCreated($book)

		//);

		return redirect ('/books');
	}
	
	public function edit(Book $book)
	{
		return view('books.edit', compact('book'));
	}
	
	public function update(Book $book)
	{  
		$book->update(request(['title', 'author', 'description', 'category', 'isbnno', 'price', 'img']));
		return redirect ('/books');
	}

	public function destroy(Book $book)

	{
		$book->delete();
		return redirect('/books');
	}

	public function show(Book $book)
	{
		abort_if(\Gate::denies('update', $book), 403); 
		return view('books.show', compact('book')); 
	}
	public function searchcontent()
	{
		//$books= Book::where('owner_id', auth()->id())->get();

		$searchkey=Book::get('title');
		$books= book::where('title', 'like', '%' .$searchkey. '%')->orderBy ('id')->paginate(5);

		return view('searchcontent', compact('books'));
	}
}


	


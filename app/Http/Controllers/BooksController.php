<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;

class BooksController extends Controller {

	public function index()
	{
		$books = Book::all();
		
		return view('books.index', [
			'books' => $books,
		]);
	}

	public function addPage()
	{
		$authors = Author::all();
		
		return view('books.add', [
			'authors' => $authors,
		]);
	}

	public function store() 
	{
		$date = request()->all();

		$model = new Book(); //получили модель
		$model->fill($date); // запомнили 
		$model->save(); //сохранили в базу

		

		return redirect('/books');
	}
}
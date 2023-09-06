<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    private $book;
    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function create()
    {
        $books = $this->book->all();
        return view('book')->with('books', $books);
    }
}

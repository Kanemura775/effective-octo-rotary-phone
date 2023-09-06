<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    private $author;
    public function __construct(Author $author)
    {
        $this->author = $author;
    }

    public function create()
    {
        $authors = $this->author->all();
        return view('author')->with('authors', $authors);
    }

    public function store(Request $request)
    {
        $this->author->name = $request->name;

        $this->author->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $author = $this->author->findOrFail($id);
        return view('authorEdit')->with('author', $author);
    }

    public function update(Request $request, $id)
    {
        $author = $this->author->findOrFail($id);
        $author->name = $request->name;

        $author->save();

        return redirect()->route('author.create');
    }

    public function destroy($id)
    {
        $this->author->destroy($id);
        return redirect()->back();
    }
}

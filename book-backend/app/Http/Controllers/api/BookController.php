<?php

namespace App\Http\Controllers\api;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::all();
        return response()->json($books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validation = $request->validate([
            'title' => 'required|string', 
            'author' => 'required|string',
            'published_year' => 'required|integer',
            'genre' => 'required|string',
            'description' => 'required|string',
        ]);

        $book = Book::create($validation);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $book = Book::find($id);
        return response()->json($book);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->published_year = $request->published_year;
        $book->genre = $request->genre;
        $book->description = $request->description;
        $book->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $book = Book::find($id);
        $book->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.book.index');
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $book)
    {
        //
    }
}

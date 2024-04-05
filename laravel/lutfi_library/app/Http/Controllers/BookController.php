<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Catalog;
use App\Models\Books;
use App\Models\Publisher;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publisher::all();
        $authors = Author::all();
        $catalogs = Catalog::all();
        return view('admin.book', compact('publishers','authors','catalogs'));
    }

    public function api()
    {
        $books = Books::all();


        return json_encode($books);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Validasi data yang diterima dari form
    //     $validatedData = $request->validate([
    //     'isbn' => 'required|numeric',
    //     'title' => 'required|string',
    //     'year' => 'required|numeric',
    //     'publisher_id' => 'required|exists:publishers,id',
    //     'author_id' => 'required|exists:authors,id',
    //     'catalog_id' => 'required|exists:catalogs,id',
    //     'qty' => 'required|numeric',
    //     'price' => 'required|numeric',
    // ]);

    // // Simpan data buku baru ke dalam database
    //     Books::create($validatedData);

    // // Redirect atau kirim respon sukses sesuai kebutuhan aplikasi Anda
    //     return redirect('/books');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'isbn' => 'required|numeric',
            'title' => 'required|string',
            'year' => 'required|numeric',
            'publisher_id' => 'required|exists:publishers,id',
            'author_id' => 'required|exists:authors,id',
            'catalog_id' => 'required|exists:catalogs,id',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
        ]);
    
        // Simpan data buku baru ke dalam database
            Books::create($validatedData);
    
        // Redirect atau kirim respon sukses sesuai kebutuhan aplikasi Anda
            return redirect('/books');
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
        return response()->json($book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $book)
    {
        // Validasi data yang diterima dari form
    $validatedData = $request->validate([
        'isbn' => 'required|numeric',
        'title' => 'required|string',
        'year' => 'required|numeric',
        'publisher_id' => 'required|exists:publishers,id',
        'author_id' => 'required|exists:authors,id',
        'catalog_id' => 'required|exists:catalogs,id',
        'qty' => 'required|numeric',
        'price' => 'required|numeric',
    ]);

    // Update data buku yang telah diedit
    $book->update($validatedData);

    // Redirect atau kirim respon sukses sesuai kebutuhan aplikasi Anda
    return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $book)
    {
        // $transaction=TransactionDetail::where("book_id",$book->id)->first();
        // if($transaction){
        //     throw new ("Tidak Bisa Dihapus karena Sedang Digunakan");
        // }
        $book->delete();
    }
}

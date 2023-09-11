<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Book;

class BookController extends Controller
{
    /*

        C -> Create
        R -> Read       -> Divisa in 2: read di tutte le istanze (all), read della singola istanza (single)
        U -> Update
        D -> Delete

    */

    // Read -> All
    public function index()
    {
        // Leggi tutte le istanze di Book
        $books = Book::all();   // SELECT * FROM books + Esecuzione query
        // OPPURE
        // $books = Book::get();   // SELECT * FROM books + Esecuzione query

        // $books = Book::where('id', 2)     // SELECT * FROM books WHERE id = 2
        //             ->get();              // Esegui la query

        return view('books.index', compact('books'));
    }

    // Read -> Single
    public function show($id)
    {
        // Leggi la singola istanza di Book
        $book = Book::find($id);        // SELECT * FROM books WHERE id = $id + Esecuzione query
        // OPPURE
        // $book = Book::where('id', $id)  // SELECT * FROM books WHERE id = $id
        //                 ->first();      // Esecuzione query

        return view('books.show', compact('book'));
    }

}
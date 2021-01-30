<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class BooksController
{
    public function index()
    {
        return Book::all();
    }

    public function show($id)
    {
        try {
            return Book::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Buku tidak ditemukan !'
                ]
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $book = Book::create($request->all());

        return response()->json([
            'created' => true,
            'data' => $book
        ], 201, [
            'Location' => route('books.show', ['id' => $book->id])
        ]);
    }
}

?>

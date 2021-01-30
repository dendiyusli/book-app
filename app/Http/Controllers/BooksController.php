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
        try {
            $book = Book::create($request->all());
        } catch (\Exception $e) {
            dd(get_class($e));
        }

        return response()->json([
            'created' => true
        ], 201);
    }
}

?>

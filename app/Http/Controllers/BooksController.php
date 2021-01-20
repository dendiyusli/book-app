<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class BooksController
{
    public function index()
    {
        // return [
        //     ['Judul' => 'Apa Aja'],
        //     ['Judul' => 'Boleh Aja']
        // ];
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
}

?>

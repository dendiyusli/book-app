<?php

namespace App\Http\Controllers;

class BooksController
{
    public function index()
    {
        return [
            ['Judul' => 'Apa Aja'],
            ['Judul' => 'Boleh Aja']
        ];
    }
}

?>

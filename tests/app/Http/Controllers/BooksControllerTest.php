<?php

namespace Tests\App\Http\Controllers;

use TestCase;

class BooksControllerTest extends TestCase
{
    /** @test **/
    // public function index_status_code_should_be_200()
    // {
    //     $this->get('/books')->seeStatusCode(200);
    // }

    public function index_should_return_array()
    {
        $this->get('/books')->seeJson([
            'Judul' => 'Apa Aja'
        ])->seeJson([
            'Judul' => 'Boleh Aja'
        ]);
    }
}

?>

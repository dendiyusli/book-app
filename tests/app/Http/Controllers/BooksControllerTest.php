<?php

namespace Tests\App\Http\Controllers;

use TestCase;

class BooksControllerTest extends TestCase
{
    /** @test **/
    public function index_status_code_should_be_200()
    {
        $this->get('/books')->seeStatusCode(200);
    }

    // public function index_should_return_array()
    // {
    //     $this->get('/books')->seeJson([
    //         'Judul' => 'Apa Aja'
    //     ])->seeJson([
    //         'Judul' => 'Boleh Aja'
    //     ]);
    // }
    /** @test **/
    public function show_should_return_a_valid_book()
    {
        $this->get('/books/1')->seeStatusCode(200)->seeJson([
            'id' => 1,
            'judul' => 'Menanti Fajar',
            'deskripsi' => 'afkopfjkgmealgkepkwopgjkqeogjqopg',
            'pengarang' => 'dendi yusli'
        ]);

        $data = json_decode($this->response->getContent(), true );
        $this->assertArrayHasKey('created_at', $data);
        $this->assertArrayHasKey('updated_at', $data);
    }

    /** @test **/
    public function show_should_fail_when_the_book_id_does_not_exist()
    {
        $this->get('/books/4')->seeStatusCode(404)->seeJson([
            'error' => [
                'message' => 'Buku tidak ditemukan !'
            ]
        ]);
    }

    /** @test **/
    public function show_route_should_not_match_an_invalid_route()
    {
        $this->markTestIncomplete('Pending Test');
    }
}

?>

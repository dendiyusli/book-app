<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // use DB;

    public function run()
    {
        DB::table('books')->insert([
            'judul' => 'Menanti Fajar',
            'deskripsi' => 'afkopfjkgmealgkepkwopgjkqeogjqopg',
            'pengarang' => 'dendi yusli',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('books')->insert([
            'judul' => 'Menanti Senja',
            'deskripsi' => 'afkopfjkgmealgkepkwopgjkqeogjqopg',
            'pengarang' => 'dendi aja',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

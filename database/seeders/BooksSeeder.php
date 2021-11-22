<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'judul' => 'Para Pencari Tuhan',
            'pengarang' => 'Syaikh Nadim al Jisr',
            'penerbit' => 'Pustaka Hidayah',
        ]);
    }
}

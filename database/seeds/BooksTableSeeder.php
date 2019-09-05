<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # forma automatica e randomica
        factory(Book::class, 30)->create();

        # forma hardcoded
        // Book::create([
        //     "name"=>"This book is so amazing you should buy it",
        //     "value"=>80,
        //     "author_id"=>1
        // ]);
        // Book::create([
        //     "name"=>"How to start your life with PHP",
        //     "value"=>70,
        //     "author_id"=>2
        // ]);
        // Book::create([
        //     "name"=>"Use React to cosume any API",
        //     "value"=>50,
        //     "author_id"=>1
        // ]);
        // Book::create([
        //     "name"=>"Lets talk about python today",
        //     "value"=>180,
        //     "author_id"=>3
        // ]);
        
    }
}

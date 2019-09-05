<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        #Forma automatica e randomica
        factory(Author::class, 10)->create();

        #Forma hardcoded
        // Author::create(["name"=>'Joao']);
        // Author::create(["name"=>'Lucas']);
        // Author::create(["name"=>'Felipe']);
        // Author::create(["name"=>'Marcos']);
        // Author::create(["name"=>'Daniel']);
    }
    
}

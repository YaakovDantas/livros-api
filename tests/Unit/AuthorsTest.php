<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\{Author,Book};
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorsTest extends TestCase
{   
    private $author;
    protected function setUp():void
    {
        parent::setUp();
        $author = new Author(["name" => "test1"]);
        $book1 = new Book(['name' => 'LivroTest Unit PHP 1', 'value' => 150, 'author_id' => $author->id]);
        $book2 = new Book(['name' => 'LivroTest Unit PHP 2', 'value' => 130, 'author_id' => $author->id]);
        $book3 = new Book(['name' => 'LivroTest Unit PHP 3', 'value' => 90, 'author_id' => $author->id]);
        $author->books->add($book1);
        $author->books->add($book2);
        $author->books->add($book3);
        $this->author = $author;
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testQuantidadeDeLivrosPorAutor()
    {
        

        $totalLivros = $this->author->books;
        
        $this->assertCount(3,$totalLivros);
    }
}

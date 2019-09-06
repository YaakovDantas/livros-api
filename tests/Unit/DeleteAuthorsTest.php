<?php

namespace Tests\Unit;

use App\{Author,Book};
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteAuthorsTest extends TestCase
{
    use RefreshDatabase;
    private $author;
    protected function setUp():void
    {
        parent::setUp();
        $authorCriado = Author::create(['name'=>"Teste 2"]); 
        
        $this->author = $authorCriado;
    }

    public function testDeletaAuthor()
    {
        $this->author->delete();
        $this->assertDatabaseMissing('authors',['name'=>"Teste 2"]);
    }
}

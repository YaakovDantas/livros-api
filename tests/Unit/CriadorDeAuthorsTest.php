<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\{Author,Book};
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CriadorDeAuthorsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function testCriarAuthor()
    {
        $authorCriado = Author::create(['name'=>"Teste 2"]);

        $this->assertInstanceOf(Author::class, $authorCriado);
        $this->assertDatabaseHas('authors', ['name'=>"Teste 2"]);
    }
}

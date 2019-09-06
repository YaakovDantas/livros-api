<?php
namespace App\Http\Transformer;

use App\Book;
use League\Fractal\TransformerAbstract as Transformer;

class BookTransformer extends Transformer
{
    public function transform(Book $book)
	{
	    return [
            'id'    => (int) $book->id,
            'name'  => $book->name,
            'value' => $book->value,
            'author_id' => $book->author_id,
        ];
    }   
}


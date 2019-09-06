<?php
namespace App\Http\Transformer;

use App\Author;
use League\Fractal;

class AuthorTransformer extends Fractal\TransformerAbstract
{
    protected $availableIncludes = [
        'books'
    ];

	public function transform(Author $author)
	{
	    return [
            'id' => (int) $author->id,
            'name' => $author->name,
        ];
    }

    public function includeBooks(Author $author)
    {
        return $this->collection($author->books, new BookTransformer);
    }
}

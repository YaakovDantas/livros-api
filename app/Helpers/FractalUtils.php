<?php
namespace App\Helpers;
use Spatie\Fractal\Fractal;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use App\Http\Transformer\AuthorTransformer;
use App\Http\Transformer\BookTransformer;

class FractalUtils{
    public static function genericFractal($collection, $transformer){
        $transformer ="App\Http\Transformer\\".$transformer;
        // $transformer = new $transformer();
        return Fractal::create($collection,new $transformer())->toJson();
    }
}
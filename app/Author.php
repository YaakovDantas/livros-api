<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable = ['name',];
    public $timestamps = false;

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}

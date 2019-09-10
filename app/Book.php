<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    public $timestamps = false;
    protected $fillable = ['name','value','author_id'];
    // protected $perPage = 5;  

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';
    public $timestamps = false;
    protected $fillable = ['nome','valor','autor_id'];

    public function autor()
    {
        return $this->belongsTo('App\Livro');
    }
}

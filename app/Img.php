<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    protected $table = 'img';
    protected $fillable = ['nombre','articulo_id'];

    public function articulo(){

      return $this->belongsTo('App\Articulo');
      
    }
}

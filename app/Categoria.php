<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table="categoria";
    protected $fillable = ['nombre'];

    public function articulos(){

        return $this->hasMary('App\Articulo');

    }
}

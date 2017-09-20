<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Articulo;

class Tag extends Model
{
    protected $table = 'tag';
    protected $fillable = ['nombre'];

    public function articulos(){

        return $this -> belongsToMany("App\Articulo");

    }

}

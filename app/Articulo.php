<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulo';
    protected $fillable = ['titulo','contenido','categoria_id','usuario_id'];

    public function categoria()
    {

        return $this->belongsTo('App\Categoria');


    }
    public function usuario(){

      return $this->belongsTo('App\Usuario');


    }
    public function img(){

      return $this->hasMany('App\Img');


    }
    public function tags(){

      return $this->belongsToMany('App\Tag');

    }
}

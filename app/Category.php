<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    //Relacion One to Many / de uno a muchos
    //trae todos los productos cuyo ID sea igual al ID de la categoria
    public function products(){
        return $this->hasMany('App\Product')->orderBy('id', 'desc');
    }

}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    //Relacion One to Many / de uno a muchos
    //trae todos las imagenes cuyo ID sea igual al ID del producto
    public function images(){
        return $this->hasMany('App\Image')->orderBy('id', 'desc');
    }

    public function category(){
        return $this->belongsTo('App\Category', 'id_category');
    }




}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    //Relacion Many to One / de muchos a uno
    //trae el objeto usuario cuyo ID sea igual al ID_USER de la imagen (quien la publico)
    public function product(){
        return $this->belongsTo('App\Product', 'product_id');
    }



}

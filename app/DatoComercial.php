<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoComercial extends Model
{
    protected $table = 'datosComerciales';

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoFiscal extends Model
{
    protected $table = 'datosFiscales';

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

}

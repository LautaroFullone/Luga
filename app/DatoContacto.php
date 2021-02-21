<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoContacto extends Model
{
    protected $table = 'datosContacto';

    protected $fillable = [
        'id_user','contacto','telefono','celular'
    ];
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}

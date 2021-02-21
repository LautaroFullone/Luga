<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoComercial extends Model
{
    protected $table = 'datosComerciales';

    protected $fillable=[
        'id_user','nombre_comercial','domicilio_comercial','codigo_postal','piso',
        'departamento','localidad','provincia','telefono','fax','mail','expreso_envio'
    ];
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}

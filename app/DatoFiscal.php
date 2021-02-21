<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoFiscal extends Model
{
    protected $table = 'datosFiscales';

    protected $fillable=[
        'id_user','razon_social','cuit','condicion','domicilio_fiscal',
        'codigo_postal_fiscal','piso','departamento','localidad',
        'provincia'
    ];
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

}

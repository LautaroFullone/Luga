<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //trae todos los datos de contacto cuyo ID sea igual al ID del usuario
    public function datos_contacto(){
        return $this->hasMany('App\DatoContacto');
    }

    //trae el objeto dato_comercial cuyo ID sea igual al ID_USER del usuario
    public function datos_comerciales(){
        return $this->belongsTo('App\DatoComercial', 'id_user');
    }

    //trae el objeto dato_fiscal cuyo ID sea igual al ID_USER del usuario
    public function datos_fiscales(){
        return $this->belongsTo('App\DatoFiscal', 'id_user');
    }
    public function BddCart(){
        return $this->hasMany('App\BddCart','id_user');
    }

    public function adminlte_image()
    {
        return 'https://picsum.photos/300/300';
    }


    public function adminlte_profile_url()
    {
        return 'cliente/perfil';
    }


}

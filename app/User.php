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
        'name', 'surname', 'tel', 'address', 'email', 'password',
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
        return $this->belongsTo('App\DatoComercial', 'user_id');
    }

    //trae el objeto dato_fiscal cuyo ID sea igual al ID_USER del usuario
    public function datos_fiscales(){
        return $this->belongsTo('App\DatoFiscal', 'user_id');
    }


    public function adminlte_image()
    {
        return 'https://picsum.photos/300/300';
    }

    public function adminlte_desc()
    {
        return 'Administrador';
    }

    public function adminlte_profile_url()
    {
        return 'profile/username';
    }


}

<?php

namespace App\Http\Controllers\Auth;


use App\User;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;




class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            // Datos del usuario
            'name' => [ 'required','string', 'max:255'],
            'email' => [ 'required','string', 'email', 'max:255', 'unique:users'],
            'password' => [ 'required','string', 'min:4', 'confirmed'],
            //Datos del contacto
            'contacto'=>['string','max:255'],
            'telefono_contacto'=>['string','max:255'],
            'celular_contacto'=>['string','max:255'],
            //Datos del Comercio
            'nombre_comercial'=>['string','max:255'],
            'domicilio_comercial'=>['string','max:255'],
            'codigo_postal_comercial'=>['string','max:255'],
            'piso_comercial'=>['int','max:255'],
            'departamento_comercial'=>['string','max:255'],
            'localidad_comercial'=>['string','max:255'],
            'provincia_comercial'=>['string','max:255'],
            'telefono_comercial'=>['string','max:255'],
            'fax_comercial'=>['string','max:255'],
            'email_comercial'=>['string','max:255'],
            'expreso_envio'=>['string','max:255'],
            // Datos fiscales
            'razon_social'=>['string','max:255'],
            'cuit'=>['string','max:255'],
            'condicion'=>['string','max:255'],
            'domicilio_fiscal'=>['string','max:255'],
            'codigo_postal_fiscal'=>['string','max:255'],
            'piso_fiscal'=>['int','max:255'],
            'departamento_fiscal'=>['string','max:255'],
            'localidad_fiscal'=>['string','max:255'],
            'provincia_fiscal'=>['string','max:255'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'role' => 'Cliente',
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

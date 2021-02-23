<?php

namespace App\Http\Controllers;

use App\DatoContacto;
use App\DatoFiscal;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showPedidos(){
        return view('client.pedidos');
    }

    public function showCarro(){
        return view('client.carro');
    }

    public function showPerfil()
    {
        return view('client.perfil');
    }

    public function showConfiguracion(){
        return view('client.configuracion');
    }

    public function showCtaCorriente(){
        return view('client.cuenta-corriente');
    }

    public function showPagos(){
        return view('client.pagos');
    }

    public function update(){

    }

    public function delete(){

    }
    public function store(Request $request)
    {

        $validate = $this->validate($request, array(

            'title' => 'required',
            'description' => 'required',
            'price' => 'required|integer'
        ));

        User::create(
            [
                'role' => $request->input('role'),
                'nombre'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>$request->input('password')
            ]
        );
    }
}

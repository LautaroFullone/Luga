<?php

namespace App\Http\Controllers;

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

    public function modify(){
        return view('client.modificarDatos');
    }
}

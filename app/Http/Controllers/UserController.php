<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ShowCarro(){
        return view('client.carro');
    }
    
    public function ShowPerfil()
    {
        return view('client.perfil');
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\EnviarMensaje;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;



class MailController extends Controller
{
    public function send(Request $request)
    {

        Mail::to('ropeque19@hotmail.com')->send(new EnviarMensaje($request->all()));

        return back()->with( 'mensaje','true');
    }
}

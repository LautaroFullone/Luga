<?php

namespace App\Http\Controllers;

use App\BddCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\CartCollection;

class CartBdd extends Controller
{/*

    public function get(){
        $user_id=Auth::user()->id;
        $seriable=BddCart::where('id_user',$user_id)->get();
dd($seriable->collection);
        if(empty($seriable))
            return null;
        else
            return $seriable;
    }

    public function add($carrito){

        $user_id=Auth::user()->id;
        BddCart::create([
            'id_user'=>$user_id,
            'data'=>$carrito,
        ]);
    }
    public function update($carrito){
        $seriable=serialize($carrito);
        $user_id=Auth::user()->id;
        $data=BddCart::where('id_user',$user_id)->get();
        $data->data=$seriable;
        $data->save();
    }*/

    public function has($key)
    {
        return BddCart::find($key);
    }

    public function get($key)
    {
        if($this->has($key))
        {
            return new CartCollection(BddCart::find($key)->cart_data);
        }
        else
        {
            return [];
        }
    }

    public function put($key, $value)
    {
        if($row = BddCart::find($key))
        {
            // update
            $row->cart_data = $value;
            $row->save();
        }
        else
        {
            BddCart::create([
                'id' => $key,
                'cart_data' => $value
            ]);
        }
    }
}

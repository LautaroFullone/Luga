<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartBdd;
use App\Http\Controllers\CartController;

class WebController extends Controller
{
    public function index(){

        $user_id = Auth::user()->id;
        $cartBdd= new CartBdd();
        $cartController= new CartController();
        $user_carro=$cartBdd->get($user_id);

        if(!empty($user_carro))
        {
            $cartController->addNoRequest($user_carro);
        }
        $subTotal = Cart::session($user_id)->getSubTotal();
        $cartTotalQuantity = Cart::session($user_id)->getTotalQuantity();
        return view('web.index')-> with(array('subTotal' => $subTotal,'quantity'=>$cartTotalQuantity));
    }

    public function showSingleProduct(){
        $user_id = Auth::user()->id;
        $cartTotalQuantity = Cart::session($user_id)->getTotalQuantity();
        return view('web.single-product-normal')->with(array('quantity'=>$cartTotalQuantity));
    }


    public function showContact(){
        $user_id = Auth::user()->id;
        $cartTotalQuantity = Cart::session($user_id)->getTotalQuantity();
        return view('web.contact')->with(array('quantity'=>$cartTotalQuantity));
    }


}

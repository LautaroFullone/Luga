<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function index(){

        $user_id = Auth::user()->id;
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

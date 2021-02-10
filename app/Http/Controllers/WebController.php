<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('web.index');
    }

    public function showSingleProduct(){
        return view('web.single-product-normal');
    }

    public function showShoppingCart(){
        return view('web.shopping-cart');
    }


}

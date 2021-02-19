<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function add(Request $request){
        $user_id = Auth::user()->id;
        $product = Product::find($request->input('product_id'));
        Cart::session($user_id)->add(array(
                    'id' =>$product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,
                    'attributes' => array(),
                    'associatedModel' => $product
        ));

        return redirect()->back();
    }

    public function showCart(){
        $user_id = Auth::user()->id;
        $carrito = Cart::session($user_id)->getContent();

        return view('web.shopping-cart')-> with(array('carrito' => $carrito));
    }

    public function removeItem($id){
        $user_id = Auth::user()->id;
        Cart::session($user_id)->remove(array(
                    'id' => $id
        ));

        return redirect()->back();
    }

    public function clear(){
        $user_id = Auth::user()->id;
        Cart::session($user_id)->clear();

        return redirect()->back();
    }
}

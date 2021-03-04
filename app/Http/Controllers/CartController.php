<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request){
        $user_id = Auth::user()->id;
        $product = Product::find($request->id);

        Cart::session($user_id)->add(array(
                    'id' =>$product->id,
                    'name' => $product->title,
                    'quantity' => $request->quantity,
                    'price' => $product->price,
                    'attributes' => array(),
                    'associatedModel' => $product
        ));
        return $this->showCart();
    }

    public function showCart(){
        $user_id = Auth::user()->id;
        $carrito = Cart::session($user_id)->getContent();

        $cartTotalQuantity = Cart::session($user_id)->getTotalQuantity();
        $subTotal = Cart::session($user_id)->getSubTotal();
        $total= Cart::session($user_id)->getTotal();
        return view('web.shopping-cart')-> with(array('carrito' => $carrito,'quantity'=>$cartTotalQuantity,'subTotal'=>$subTotal,'total'=>$total));
    }

    public function removeItem($id){
        $user_id = Auth::user()->id;
        Cart::session($user_id)->remove(array(
                    'id' => $id
        ));
        return redirect()->route('cart.showCart');
    }

    public function clear(){
        $user_id = Auth::user()->id;
        Cart::session($user_id)->clear();
        return redirect()->back();
    }
    public function updateup($id){
        $user_id = Auth::user()->id;
        Cart::session($user_id)->update($id,array(
            'quantity'=> +1
        ));
        return redirect()->route('cart.showCart');
    }
    public function updatedown($id){
        $user_id = Auth::user()->id;
        Cart::session($user_id)->update($id,array(
            'quantity'=> -1
        ));
        return redirect()->route('cart.showCart');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartBdd;
use App\BddCart;
use Darryldecode\Cart\CartCollection;
use Darryldecode\Cart\ItemCollection;

class CartController extends Controller
{

    private $cartBdd;

    public function __construct()
    {   $this->cartBdd= new CartBdd();
        $this->BddCart= new BddCart();
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
        if(empty($this->cartBdd->get($user_id)))
        {
            $carrito = Cart::session($user_id)->getContent();
            $this->cartBdd->put($user_id,$carrito);
        }
        return $this->showCart();
    }

    public function addNoRequest($carro)
    {   $user_id = Auth::user()->id;

        echo '<pre>';
        var_dump($carro);
        echo'</pre>';


        Cart::session($user_id)->add(array(
            'id' =>$carro[$user_id]->id,
            'name' => $carro[$user_id]->name,
            'quantity' => $carro[$user_id]->quantity,
            'price' => $carro[$user_id]->price,
            'attributes' => array(),
            'associatedModel' => $carro[$user_id]->associatedModel
        ));


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

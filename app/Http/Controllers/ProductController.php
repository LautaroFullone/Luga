<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{

    public function getAllProducts(){
        $products = Product::all();

        return view('pruebas', array('products' => $products));
    }

    public function getCategoryProducts($name){

        $categoria = Category::where('title', $name)->first();

        $products = Product::where('id_category', $categoria->id)->get();

       return view('pruebas', array('categoria' => $name, 'productos' => $products));
    }

    public function showNewProduct(){
        return view('client.producto-nuevo');
    }

    public function save(Request $request){
        //Validacion

        $validate = $this->validate($request, array(
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|integer'
        ));

        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');
        $id_category = $request->input('id_category');

        $product = new Product();

        $product->title = $title;
        $product->description = $description;
        $product->price = $price;
        $product->id_category = $id_category;

        $product->save();

        return redirect()->route('home');

    }
}

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
}

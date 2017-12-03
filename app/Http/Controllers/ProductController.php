<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){
        $producto=Product::all();

        return view('welcome',['productos'=>$producto]);
    }

    public function show($id){
        $producto=Product::all()->find($id);

        return view('detail',['productos'=>$producto]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
    public function index(){

        $products = DB::select('select * from products');
        // dd($products);

        return view('products.index',compact('products'));
    }

    public function show($id){

        $product = Products::find($id);

        return view('products.show',compact('product'));
    }

    public function buy($id){

        return view('products.buy');
    }
}

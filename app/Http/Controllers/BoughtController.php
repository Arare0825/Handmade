<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\soldOut;
use App\Models\User;

class BoughtController extends Controller
{
    public function index(){


        $user = User::find(auth()->id())->id;
        $products = soldOut::where('bought_user' , $user)->get();

        // foreach($products as $product){
        //     dd($product);
        // }

        return view('bought.index',compact('products'));
    }

    public function show($id){

        $product = soldOut::find($id);


        return view('bought.show',compact('product'));
    }
}

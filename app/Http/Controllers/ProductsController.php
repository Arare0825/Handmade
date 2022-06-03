<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Like;


class ProductsController extends Controller
{
    public function index(){

        $products = DB::select('select * from products');
        // dd($products);

        return view('products.index',compact('products'));
    }

    public function show($id){
        // dd($id);
        $product = Products::find($id);
        $comments = Products::find($id)->comments;
        $likes = Products::find($id)->like;

        $haveLike = false;
        foreach ($likes as $like){
            if($like->user_id == auth()->id()){
                $haveLike = true;
                break;
            }else{
                $haveLike = false;
            }
        }

// dd($product);


        return view('products.show',compact('product','comments','haveLike'));
    }

    public function buy($id){

        return view('products.buy');
    }

    public function redirect(){

        return view('products.redirect');
    }

    public function like(){
        return $this->hasMany(Like::class);
    }
}

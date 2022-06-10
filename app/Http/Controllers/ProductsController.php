<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Like;
use App\Models\SecondaryCategory;
use App\Models\PrimaryCategory;


class ProductsController extends Controller
{


    public function index(Request $request){

        
        $categories = SecondaryCategory::all();
        $Selectcategory = PrimaryCategory::with('secondary')->get();
        // $query = Products::query();


        if($request->category == '0' || $request->category == null){
            $products = DB::select('select * from products');
        }else{
            $products = DB::select("select * from products where secondary_category_id = $request->category");
        }

        $category = [];
        foreach($categories as $c){
            $category[] = $c->name;
        }

        if($request->word){
            $spaceConversion = mb_convert_kana($request->word,'s');

            $wordArraySearched = preg_split('/[\s,]+/',$spaceConversion,-1,PREG_SPLIT_NO_EMPTY);

            foreach($wordArraySearched as $value){
                $query = Products::where('secondary_category_id','=',"$request->category")->where('title','like','%'.$value.'%');
            }
            $products = $query->paginate(20);
        }
        // dd($query);


        return view('products.index',compact('products','category','Selectcategory'));
    }

    public function show($id){
        // dd($id);
        $product = Products::find($id);
        $comments = Products::find($id)->comments;
        $likes = Products::find($id)->like;
        $count = count($likes);

        $haveLike = false;
        foreach ($likes as $like){
            if($like->user_id == auth()->id()){
                $haveLike = true;
                break;
            }else{
                $haveLike = false;
            }
        }
        return view('products.show',compact('product','comments','haveLike','count'));
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

    public function secondary(){
        return $this->hasOne(SecondaryCategory::class);
    }
}

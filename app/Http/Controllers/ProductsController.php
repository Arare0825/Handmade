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
        $word = $request->word;
        // $query = Products::query();

        if($request->word == null && $request->category == '0' || $request->category == null){
            $products = DB::select('select * from products');

        }elseif(!$request->category == '0' && $request->word == null){
            $products = DB::select("select * from products where secondary_category_id = $request->category");
            // dd($products);

        }elseif($request->category == '0' && $request->word){
            $spaceConversion = mb_convert_kana($request->word,'s');

            $wordArraySearched = preg_split('/[\s,]+/',$spaceConversion,-1,PREG_SPLIT_NO_EMPTY);

            foreach($wordArraySearched as $value){
                $query = Products::where('title','like','%'.$value.'%');
            }
            $products = $query->paginate(20);
        }elseif(!$request->category == "0" && $request->word){
            $spaceConversion = mb_convert_kana($request->word,'s');
            $wordArraySearched = preg_split('/[\s,]+/',$spaceConversion,-1,PREG_SPLIT_NO_EMPTY);

            foreach($wordArraySearched as $value){
                $query = Products::where('secondary_category_id','=',"$request->category")->where('title','like','%'.$value.'%');
            }

            $products = $query->paginate(20);
                        // dd($products);

        }

        $category = [];
        foreach($categories as $c){
            $category[] = $c->name;
        }

        // if($request->word){
        //     $spaceConversion = mb_convert_kana($request->word,'s');

        //     $wordArraySearched = preg_split('/[\s,]+/',$spaceConversion,-1,PREG_SPLIT_NO_EMPTY);

        //     foreach($wordArraySearched as $value){
        //         $query = Products::where('title','like','%'.$value.'%')->where('secondary_category_id','=',"$request->category");
        //     }
        //     $products = $query->paginate(20);
        // }else{

        // }
        // dd($products);


        return view('products.index',compact('products','category','Selectcategory','word'));
    }

    public function show($id){
        // dd($id);
        $user = User::find(auth()->id());
        // dd($user);
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
       
        return view('products.show',compact('product','comments','haveLike','count','user'));
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

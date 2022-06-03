<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;



class FavoriteController extends Controller
{
    public function index(){
        
        $user = user::find(auth()->id());
        $like = Auth::user()->like;
        // dd($like);
        $likes = Like::where('user_id',auth()->id())->with('products')->get();
        // dd($likes);
        $likeItems = [];
        foreach($likes as $like){
            $likeItems[] = $like->products;
        }
// dd($likeItems);
        $items = [];
        foreach($likeItems as $item){
            if(isset($item->title)){
                $items[] = $item;
            }
        }

        return view('favorite.index',compact('likeItems'));
    }
}

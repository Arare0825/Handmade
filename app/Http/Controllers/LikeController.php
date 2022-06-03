<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLikeRequest;
use App\Http\Requests\UpdateLikeRequest;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function like($id)
    {
        // dd($request);
        $like = Like::create([
            'products_id' => $id,
            'user_id' => Auth::user()->id,
            'like' => 1,
            ]);

        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dislike($id)
    {
        $user=Auth::user()->id;
        $dislike = Like::where('products_id',$id)->where('user_id',$user)->first();
        $dislike->delete();

        return back();
    }

}
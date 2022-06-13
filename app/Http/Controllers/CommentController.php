<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mypage;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

     /** Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $comment_user = Auth()->id();

        $user = User::find(auth()->id())->Mypage;
        // dd($user->name);

        // dd($request);
        $comment = Comment::create([
            'comment' => $request->comment,
            'products_id' => $request->productId,
            'name' => $user->name,
            'users_id' => Auth::id(),
        ]);
        // dd($comment);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
}

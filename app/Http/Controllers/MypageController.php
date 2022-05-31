<?php

namespace App\Http\Controllers;

use App\Models\Mypage;
use App\Http\Requests\StoreMypageRequest;
use App\Http\Requests\UpdateMypageRequest;

class MypageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMypageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMypageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function show(Mypage $mypage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function edit(Mypage $mypage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMypageRequest  $request
     * @param  \App\Models\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMypageRequest $request, Mypage $mypage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mypage $mypage)
    {
        //
    }
}

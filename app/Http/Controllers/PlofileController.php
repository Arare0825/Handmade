<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mypage;
use Auth;

class PlofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function name(){
    //      $name = User::find(auth()->id())->name;
    //     //  dd($name);

    //     $plofile = Mypage::create([
    //         'name' => $name,
    //         'message' => null,
    //         'image' => null,
    //         'user_id' => auth()->id(),
    //     ]);


    //      return redirect()->route('plofile.index');
    //  }
    public function index()
    {
         if(User::find(auth()->id())->Mypage){
            $myPage = User::find(auth()->id())->Mypage;
        }else{
            $myPage = null;
        }
        // dd($myPage);

        if(isset($myPage)){
            $fileName = basename($myPage->image);
        }else{
            $fileName = Null;
        }

        return view('Plofile.myPage',compact('myPage','fileName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        return view('plofile.setting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(auth()->id())->Mypage;
        // dd($user);
        if(! $user){

            if($request->image){
                $type = $request->image->getClientOriginalExtension();
            }else{
                $type = null;
            }
            // dd($type);
            $img =null;
    
            // dd($request);
            if($request->image){
                $img = $request->file('image')->storeAs('plofile',uniqid('',true).".$type",'public');
            }else{
                $img = null;
            }
            // dd($img);
    
            $plofile = Mypage::create([
                'name' => $request->name,
                'message' => $request->message,
                'image' => $img,
                'user_id' => $request->userId
            ]);
        }else{
            if($request->image){
                $type = $request->image->getClientOriginalExtension();
            }else{
                $type = null;
            }
            // dd($type);
            $img =null;
    
            // dd($request);
            if($request->image){
                $img = $request->file('image')->storeAs('plofile',uniqid('',true).".$type",'public');
            }else{
                $img = null;
            }
            // dd($img);
    
            $plofile = User::find(auth()->id())->Mypage;
                $plofile->name = $request->name;
                $plofile->message = $request->message;
                $plofile->image = $img;
                $plofile->user_id = $request->userId;
                $plofile->save();

        }



        return redirect()->route('plofile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

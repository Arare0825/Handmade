<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use InterventionImage;


class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Products::get();
        $users = User::find(Auth()->id())->products;
        // $auth = User::find(Auth()->id());  

        // dd($users);
        return view('Sell.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(Auth()->id());
// dd($user->id);
        return view('Sell.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        // function InputImage($a){
        //     $fileName = $request->image1->getClientOriginalName();
        //     $img = $request->image1->storeAs('',uniqid('',true).$fileName,'public');
        //     }

            // for($i=1; $i<=5; $i++):
            //     dd($request->image[$i]);
            //     $img[] = $request->image->storeAs('',uniqid('',true),'public');
            // endfor;
            $img1 = '';
            $img2 = '';
            $img3 = '';
            $img4 = '';
            $img5 = '';

            if($request->image1){
                $img1 = $request->image1->storeAs('',uniqid('',true),'public');
            }if($request->image2){
                $img2 = $request->image2->storeAs('',uniqid('',true),'public');
            }if($request->image3){
                $img3 = $request->image3->storeAs('',uniqid('',true),'public');
            }if($request->image4){
                $img4 = $request->image4->storeAs('',uniqid('',true),'public');
            }if($request->image5){
                $img5 = $request->image5->storeAs('',uniqid('',true),'public');
            }

        $product = Products::create([

            'title' => $request->title,
            'user_id' => $request->user_id,
            'detail' => $request->detail,
            'image1' => $img1,
            'image2' => $img2,
            'image3' => $img3,
            'image4' => $img4,
            'image5' => $img5,
            'price' => $request->price,
        ]);

        
        return redirect(route('Sell.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function show($sell)
    {
        // dd($sell);
        $product = Products::find($sell);
        // dd($product);

        return view('Sell.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function edit(Sell $sell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sell $sell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sell $sell)
    {
        //
    }
}

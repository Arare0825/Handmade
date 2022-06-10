<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use App\Models\PrimaryCategory;
use App\Models\SecondaryCategory;
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
        $categories = PrimaryCategory::with('secondary')->get();
// dd($user->id);
        return view('Sell.create',compact('user','categories'));
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

        $request->validate([
            'title'=>'required',
            'detail'=>'required',
            'image1'=>'required',
            'price'=>'required',
            'category'=>'required',
        ]);

        // dd($request);
        // function InputImage($a){
        //     $fileName = $request->image1->getClientOriginalName();
        //     $img = $request->image1->storeAs('',uniqid('',true).$fileName,'public');
        //     }

            // for($i=1; $i<=5; $i++):
            //     dd($request->image[$i]);
            //     $img[] = $request->image->storeAs('',uniqid('',true),'public');
            // endfor;
            $img1 = null;
            $img2 = null;
            $img3 = null;
            $img4 = null;
            $img5 = null;

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
            'secondary_category_id'=>$request->category,
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
    public function edit($sell)
    {
        // dd($sell);
        $product = Products::find($sell);
        $categories = PrimaryCategory::with('secondary')->get();

        // dd($product->user_id);
        return view('sell.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$sell)
    {
        // dd($request);
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

    $user = 18;

    // $product = Products::find($request->id);
    // $product_update = new Products();
    $product = Products::findOrFail($sell);

        $product->title = $request->title;
        $product->user_id = $request->user_id;
        $product->secondary_category_id = $request->category;
        $product->detail = $request->detail;
        $product->image1 = $img1;
        $product->image2 = $img2;
        $product->image3 = $img3;
        $product->image4 = $img4;
        $product->image5 = $img5;
        $product->price = $request->price;
        $product->save();
    

    return redirect(route('Sell.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sell  $sell
     * @return \Illuminate\Http\Response
     */
    public function destroy($sell)
    {

        $product = Products::findOrFail($sell);

        $product->delete();


        return redirect()->route("Sell.index");
    }
}

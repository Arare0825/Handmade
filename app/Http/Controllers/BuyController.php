<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\soldOut;
use Auth;
use StripeCharge;
use StripeStripe;
use App\Models\Products;

class BuyController extends Controller
{

    public function index(){

        return view('buy.index');
    }
    public function checkout(Request $request){

// dd($request);
        // dd($_POST['$product->price']);
            // This is a public sample test API key.
            // Don’t submit any personally identifiable information in requests made with this key.
            // Sign in to see your own test API key embedded in code samples.
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


            $id = $request->id;
            $title = $request->title;
            $description = $request->detail;
            $amount = $request->price;
            $currency = 'jpy';


            try{
                $session = \Stripe\Checkout\Session::create([
                    'line_items' => [[
                      # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                      'amount' => $amount,
                      'quantity' => 1,
                      'currency' => $currency,
                      'name' => $title,
                      'description' => $description,
                    ]],            
                'mode' => 'payment',
                'success_url' => route('buy.complete',compact('id')),
                'cancel_url' => route('products.show',['id'=>$request->id]),
                ]);



            }
            catch(Exception $e)
            {
                return $e->getMessage();
            }

            
            return redirect($session->url,303);



    }

    public function complete($id){

            $products = Products::where('id',$id)->get();
            $user = User::find(Auth()->id());
            // dd($user->id);
            foreach($products as $product){
                // dd($product);
            }
            $soldOut = soldOut::create([
                    'title' => $product->title,
                    'user_id' => $product->user_id,
                    'bought_user' => $user->id,
                    'secondary_category_id'=>$product->secondary_category_id,
                    'detail' => $product->detail,
                    'image1' => $product->image1,
                    'image2' => $product->image2,
                    'image3' => $product->image3,
                    'image4' => $product->image4,
                    'image5' => $product->image5,
                    'price' => $product->price,
                ]);

             $products = Products::where('id',$id)->delete();
             
             return redirect(route('bought.index'));

                    }

}

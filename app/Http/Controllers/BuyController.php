<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class BuyController extends Controller
{

    public function index(){

        return view('buy.index');
    }
    public function checkout(Request $request){

        $user = User::findOrFail(Auth::id());
        // dd($request);
        $lineItems = [];

        $lineItem = [
            'title' => $request->title,
            'description' => $request->detail,
            'amount' => $request->price,
            'currency' => 'jpy',
        ];
        array_push($lineItems,$lineItem);

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        
        // dd($lineItem['title']);
        // try{
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [$lineItems],
                'mode' => 'payment',
                'success_url' => route('buy.complete'),
                'cancel_url' => route('products.index')
                ]);
                dd($session);
    
                $publickey = env('STRIPE_KEY');    
                return view('buy.checkout',compact('session','publickey'));

        // }catch(Exception $e){
        //     return $e->getMessage();
        // }


    }

    public function complete(){

        return view('buy.complete');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;

class StripeController extends Controller
{


     public function index()
    {
        
        return view('stripe.index');
    }


     public function result(Request $request)
    {
        dd($request);
    	 $custom = new Customer;
         $custom->email = $request['stripeEmail'];
          $custom->balance = 9.99;
           $custom->token = $request['_token'];
            $custom->description = $request['description'];
             $custom->currency = $request['stripeTokenType'];
        
        $custom->save();
        return view('stripe.result', compact('request'));
    }
}


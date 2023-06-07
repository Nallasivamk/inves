<?php

namespace App\Http\Controllers\Stripe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Stripe;

class StripeController extends Controller
{
    //
    public function stripePost(Request $request){
        try {
            $stripe = new \Stripe\StripeClient(
                env('STRIPE_SECRET'));
            $res = $stripe->tokens->create([
            'card' => [
                'number' => '4242424242424242',
                'exp_month' => 6,
                'exp_year' => 2024,
                'cvc' => '314',
            ],
            ]);
            Stripe/Stripe::setApiKey(env('STRIPE_SECRET'));
           // $stripe = new \Stripe\StripeClient('sk_test_4eC39HqLyjWDarjtT1zdp7dc');
            $response =  $stripe->charges->create([
                'amount' => 2000,
                'currency' => 'usd',
                'source' => 'tok_amex',
                'description' => 'My First Test Charge (created for API docs at https://www.stripe.com/docs/api)',
            ]);


            return response()->json($response->status,201);
            //code...composer request 
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['error'=>'Error'],500);
        }
    }
}

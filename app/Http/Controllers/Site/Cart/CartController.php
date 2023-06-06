<?php

namespace App\Http\Controllers\Site\Cart;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function cart(){
        return view('site.cart.cart');
    }

    public function checkout(){
        return view('site.cart.checkout');
    }

   
}

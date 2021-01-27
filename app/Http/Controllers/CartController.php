<?php

namespace App\Http\Controllers;

use \App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(){
        $user = auth()->user();
        $products = $user->cart->products;
        $cartValue = 0;
        foreach($products as $product){
            $cartValue += $product->pivot->quantity * $product->MSRP;
        }
        return view('cart', [
            'products' => $products,
            'cartValue' => $cartValue
        ]);
    }

    public function create(){

    }

    public function destroy(){

    }
}

<?php

namespace App\Http\Controllers;
use App\Models\cartItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function addCart(Request $request){
        $cart = $request->toArray();
        // $cartItem = $request->input('id');
        // // cartItem::AddItem($cart);
        // dd($cartItem);
        dd($cart);
    }
    public function viewCart(){
        
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\cartItem;
use Illuminate\Http\Request;

class cart_item extends Controller
{
    public function addCart(Request $request){
        $cart = $request->toArray();
        cartItem::AddItem($cart);
    }
    public function viewCart(){
        
    }
}

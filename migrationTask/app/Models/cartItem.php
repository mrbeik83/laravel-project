<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cartItem extends Model
{
    protected $table = 'cart_item';
    protected $fillable = ['id','user_id','product_id','quantity'];
    public static function AddItem($cart){
        self::create(
            [
                'user_id' => $cart['user_id'],
                'product_id' => $cart['product_id'],
                'quantity' => $cart['quantity']
            ]
            );
    }
    
}

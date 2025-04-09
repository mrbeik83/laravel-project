<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $fillable = ['id','type','name','number','price','size','picture'];
    public static function insertProduct($prd,$pic){
        self::create([
            'type' => $prd['type'],
            'name' => $prd['name'],
            'number' => $prd['number'],
            'price' => $prd['price'],
            'size' => $prd['size'],
            'picture' => $pic
        ]);
    }
}

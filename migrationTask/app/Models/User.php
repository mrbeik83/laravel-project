<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
class User extends Model
{

    protected $table = 'user';
    protected $fillable = ['firstName','lastName','phoneNumber','isAdmin','province','city','address','userName','email','password'];
    public static function getUserByID($id){
        // $user = self::find(id:$id);
        $user = self::find(['id' => $id])->toArray();
        dd($user);
    }
    public static function getAll(){
        $user = self::get()->toArray();
        return dd($user);

    }
    public static function insertUser($tbl){
        self::create([
            'firstName' => $tbl['firstName'],
            'lastName' => $tbl['lastName'],
            'phoneNumber' => $tbl['phoneNumber'],
            'isAdmin' => $tbl['isAdmin'],
            'province' => $tbl['province'],
            'city' => $tbl['city'],
            'address' => $tbl['address'],
            'userName' => $tbl['userName'],
            'email' => $tbl['email'],
            'password' => $tbl['password'],
        ]);
        // header("location:/php/task1-main/task8%20refactor/views/Html/");
    }
}

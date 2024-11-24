<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class User extends Model
{
    protected $table = 'user';
    public static function get_user_byId($id){
        $user = self::find(id:$id);
        dd($user);
    }
    public static function getAll(){
        $user = self::get();
        dd($user);
    }
    public static function select_firstName(){
        $users = self::select('firstName','mohammad');
        dd($users);
        // foreach($users as $user){
        //     echo $user;
        // }

    }
    public static function insertUser($table){
        $user = self::create([
            'firstName' => $table->firstName,
            'lastName' => $table->lastName,
            'phoneNumber' => $table->phoneNumber,
            'isAdmin' => $table->isAdmin,
            'province' => $table->province,
            'city' => $table->city,
            'address' => $table->address,
            'userName' => $table->userName,
            'email' => $table->email,
            'password' => $table->password,
        ]);
        $user->save();
        
    }
}

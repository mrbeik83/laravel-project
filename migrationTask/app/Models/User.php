<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class User extends Model
{
    protected $table = 'user';
    public static function getUserByID($id){
        // $user = self::find(id:$id);
        $user = self::find(['id' => $id])->first()->toArray();
    }
    public static function getAll(){
        $user = self::get();
    }
    public static function getFirstName(){
        $users = self::select('firstName')->get()->toArray();
         foreach($users as $user){
             echo $user['firstname'];
         }

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

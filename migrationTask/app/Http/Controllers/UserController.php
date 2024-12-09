<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function fetch_byId($id) {
        User::get_user_byId($id);
    }
    public static function fetchAll(){
        User::getAll();
    }
    public static function selectName(){
        User::select_firstName();
    }
    public static function insertUser(Request $request){
        $data = $request->all();
        $table = array(
            'firstName' => $data['name'],
            'lastName' => $data['family'],
            'phoneNumber' => '09155208875',
            'isAdmin' => 1,
            'province' => 'khorasan',
            'city' => 'mashhad',
            'address' => 'allah khomeini',
            'userName' => 'drby',
            'email' => 'alibeik@gmail.com',
            'password' => '09035255726',

        );
        User::create($table);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function fetchById() {
        $id = 1;
        User::getUserByID($id);
    }
    public static function fetchAll(){
        User::getAll();
    }
    public static function registerForm(){
        return view('insertUser');
    }
    public static function insertUser(Request $request){
        $data = $request->input();
        if($data['isAdmin'] == 'yes'){
            $data['isAdmin'] = 1;
        }else{
            $data['isAdmin'] = 0;
        }
        User::insertUser($data);
        
    }

}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\userRequest;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function show()
    {
        return view('insertUser');
    }
    public function register(userRequest $request)
    {
        dd($request -> validated);
    }
}


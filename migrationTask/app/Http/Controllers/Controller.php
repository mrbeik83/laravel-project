<?php

namespace App\Http\Controllers;

use App\Models\User;

abstract class Controller
{
    function get_all() {
        echo 1;
        return User::getAll();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController
{
    public function login(){
        return Users::all();
    }
}

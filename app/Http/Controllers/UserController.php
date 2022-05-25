<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController
{
    public function index(){

        $users = User::paginate(10);

        return view('users', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;   //them vao
use App\Models\User;                 //them vao

class UserController extends Controller
{
    function read() {
        $users = User::all();
        return $users;

        //vd ve one-many (tu user lay ra duoc posts)
            // $posts = User::find(1)->posts;
            // return $posts;

        //vd ve many-many
            // $roles = User::find(1)->roles;
            // return $roles;
    }


    function add() {
        return view('user.register');
    }
}

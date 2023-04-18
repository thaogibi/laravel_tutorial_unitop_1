<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;   //them vao
use App\Models\Role;                 //them vao

class RoleController extends Controller
{
    //vd ve many-many (users-roles)
    function read() {
        $users = Role::find(1)->users; //method users đã định nghĩa trong model role
        return $users;
    }
}

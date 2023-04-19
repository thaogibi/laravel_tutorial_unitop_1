<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;          //them vao

use Illuminate\Http\Request;

class HelperController extends Controller
{
    //
    function url() {
        //1. tạo url cơ bản (vd muốn tạo thaogibi.com/login)
            // $url = url('thaogibi.com/login');

        //2. tạo url qua route qua name của route
            // $url = route('posts.read');

        //3. tạo url qua action (trong controller)
            // $url = action('UserController@add');
        
        //4. lấy url hiện tại
            $url = url()->current();


            
            echo $url;

        
    }
}

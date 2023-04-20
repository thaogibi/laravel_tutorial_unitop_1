<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response; //thêm vào
use Illuminate\Http\Request;

class CookieController extends Controller
{
    //
    function set() {
        $response = new Response;  
        return $response->cookie('login_user',' thaogibi', 24*60); //bắt buộc phải có return
    } 

    function get(Request $request) {
        return $request->cookie('login_user');
    }
}

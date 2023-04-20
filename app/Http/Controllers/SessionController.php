<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function add(Request $request) {
        //c1:
            // $request->session()->put('username', 'thaogibi2');
        
        //c2: dùng helper session
            session(['username' => 'thaogibi2']);
    }

    function show(Request $request) {
        // return $request->session()->all(); 
        // return $request->session()->get('username');   //-> thaogibi

        // if($request->session()->has('username')) {          //kiểm tra sự tồn tại của session
        //     echo "Username was saved into session";
        // }

        // return $request->session()->get('status');

        
        //dùng helper session
            return session('username');
    }

    function add_flash(Request $request) {
        $request->session()->flash('status', 'Added new record success');
    }


    function delete(Request $request) {
        //xoá 1 session
            // $request->session()->forget('username');
        //xoá toàn bộ
            $request->session()->flush();
    }
}

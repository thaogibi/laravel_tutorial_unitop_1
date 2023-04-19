<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;          //them vao
use Illuminate\Support\Str;                 //them vao

use Illuminate\Http\Request;

class HelperController extends Controller
{
    //
    function url() {
        //1. tạo url cơ bản (vd muốn tạo thaogibi.com/login)
            // $url = url('thaogibi.com/login');
            // echo $url;

        //2. tạo url qua route qua name của route
            // $url = route('posts.read');
            // echo $url;

        //3. tạo url qua action (trong controller)
            // $url = action('UserController@add');
            // echo $url;

        //4. lấy url hiện tại
            // $url = url()->current();
            // echo $url;

    }

    function string() {               // nhớ thêm use Illuminate\Support\Str;
        //1. Độ dàì chuồi
            $str1 = "Meomeo";
            echo Str::length($str1).'<br>';

        //2. in hoa, in thường
            echo Str::upper($str1).'<br>';  //-> MEOMEO
            echo Str::lower($str1).'<br>';  //-> meomeo

        //3. tạo chuỗi ngẫu nhiên
            echo Str::random(18).'<br>';

        //4. loại bỏ ký tự thừa
            $str1 = Str::of('         hi        hi   ')->trim();
            echo $str1.'<br>';    //-> hi hi

        //5. tạo slug link (đường link thân thiện)
            echo $str = Str::slug('unitop.vn học web đi làm').'<br>'; //-> unitopvn-hoc-web-di-lam

        //6. lấy chuỗi con trong 1 chuỗi
            $str = "This is a cat";
            echo Str::of($str)->substr(2,4).'<br>';  //-> is i

        //7. nối chuỗi
            $str1 = 'I love';
            $str2 = 'you';
            echo Str::of($str1)->append($str2).'<br>';  //-> I loveyou

        //8. tìm và thay thế
            $str = 'Nha toi co 3 nguoi: me chong toi, vo chong toi va con trai toi';

            echo Str::of($str)->replace('toi','Thao').'<br>'; //-> Nha Thao co 3 nguoi: me chong Thao, vo chong Thao va con trai Thao

        //9. cắt chuỗi với số ký tự cho trước
            echo Str::of($str)->limit(5).'<br>';  //-> Nha t...

        //10. kiểm tra xem có chứa chuỗi con ko  //-> trả về 1 hoặc 0 (true hoặc false)
            echo Str::contains($str, 'Nha');   //-> 1



    }
}

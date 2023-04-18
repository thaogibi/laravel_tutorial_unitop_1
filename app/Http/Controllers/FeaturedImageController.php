<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;   //them vao
use App\Models\FeaturedImage;                        //them vao
class FeaturedImageController extends Controller
{
    function read() {
        $post = FeaturedImage::find(1)->post; //gọi method post đã định nghĩa trong model
        return $post;
    }
}

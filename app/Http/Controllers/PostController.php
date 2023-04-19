<?php

namespace App\Http\Controllers;

use App\Models\FeaturedImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;          //them vao
use App\Models\Post;                        //them vao
class PostController extends Controller
{
    //
    // function insert() {
    //     DB::table('posts') -> insert(
    //         [
    //             'user_id' => 1,
    //             'title' => 'sp5',
    //             'content' => 'meomeomeo'
    //         ]
    //     );
    // }

    // function index() {
    //     return DB::table('posts') -> select('title', 'content') -> get();
    // }

    // function show($id) {
    //     return DB::table('posts') -> where('id', $id) -> select('title', 'content') -> get();
    // }

    // function update($id) {
    //     $post = DB::table('posts') -> where('id', $id)
    //     -> update([
    //         'title' => 'hihi'
    //     ]);
    // }

    // function delete($id) {
    //     DB::table('posts') -> where('id', $id)
    //     -> delete();
    // }




    function read() {
        // $posts = Post::all();
        // return $posts;

        // show post theo list id 
        // $posts = Post::find([1,6]);  // = whereIn('id', [1,6])
        // return $posts;

        //orderBy
        // $posts = Post::orderBy('title', 'desc')->get();
        // return $posts;

        //groupBy
        // $posts = Post::selectRaw("COUNT('id') as number_post, user_id")
        // ->groupBy('user_id')
        // ->get();
        // return $posts;
        // // echo '<pre>';
        // // print_r($posts);
        // //echo '</pre>';




        //sau khi cài softDeletes
            // lệnh all() chỉ bao gồm những DL chưa xoá nhé
                // $posts = Post::all();
                // return $posts;

            //muốn xuất all DL (cả đã xoá)
                $posts = Post::withTrashed()->get();
                return $posts;

            // chỉ bao gồm những DL đã xoá nhé
                // $posts = Post::onlyTrashed()->get();
                // return $posts;

            //vd ve one-one (lay ra image)
                // $image = Post::find(1)->featuredImage; //gọi method featuredImage đã định nghĩa trong model
                // return $image;

            //vd ve one-many (lay ra user)
                // $user = Post::find(1)->user; //gọi method user đã định nghĩa trong model
                // return $user;


    }

    function readForEachUser($id) {
        $posts = Post::where('user_id', $id) -> get();
        return $posts;
    }

    function readWithFilter() {
        $inputToFilter = 's';
        $posts = Post::where('title', 'like', '%'.$inputToFilter.'%') -> get();
        return $posts;
    }

    //show
    function show($id) {
        //c1:
            // $post = Post::where('id', $id) -> get();
        //c2:
            $post = Post::find($id);
        return $post;
    }



    //add/create
    function add() {
        //c1:
            // $post = new Post;
            // $post->title = 'Title';
            // $post->content = 'Content';
            // $post->user_id = 1;
            // $post->save();


        //c2: dung pt create  => khi đó phải điền fillable bên model
            // $post = Post::create([
            //     'title' => 'title',
            //     'content' => 'e',
            //     'user_id' => 1
            // ]);


        //p12: FORM
            return view('post.create');

    }


    //store
    function store(Request $request) {
        $request->validate(
        [
            'title'=>'required|bail|min:3',  //rule ở đây
            'content'=>'required|bail|min:10'
        ],
        [
            'required' => ':attribute can not be blank'   // tuỳ chỉnh thông báo error <trường này có hoặc ko đều đc>
        ],
        [
            'title' => 'Tiêu đề',             // chuyển tên attribute sang tên dễ hiểu khác hoặc trong TH chuyển sang tiếng việt...  <trường này có hoặc ko đều đc>
            'content' => 'Nội dung'
        ]
    );
        return $request->input();
    }



    //update
    function update($id) {
        //c1:
            // $post = Post::find($id);
            // $post->title = 'mimiiii';
            // $post->save();
        //c2: dùng pt update <tg tự như pt create => khi đó cũng phải điền fillable bên model>
            $post = Post::find($id);
            $post -> update ([
                'title' => 'qqqq',
                'content' => 'iiiassadasi'
            ]);
    }



    //delete
    function delete($id) {
        //c1:
            // $post = Post::find($id);
            // $post -> delete();
        //c2:
            Post::destroy($id);
            
            //thậm chí có thể xoá 1 list được
            // //Post::destroy([2,5]);

        //LƯU Ý: sau khi cài SoftDeletes ->  softDelete -> xoá tạm thời

    }


    //restore
    function restore($id) {
        $post = Post::onlyTrashed()
            ->where('id', $id)          //thậm chí có thể restored 1 list được [1,2]??
            ->restore();
    }



    //permanetlyDelete: xoá vĩnh viễn (xoá cứng)
    function permanetlyDelete($id) {
        $post = Post::onlyTrashed()
            ->where('id', $id)          
            ->forceDelete();
    }
}

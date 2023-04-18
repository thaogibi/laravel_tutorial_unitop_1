<?php
use App\Models\Post;                         //them vao
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// //QUERY BUILDER
// Route::get('/posts', 'PostController@index');
// Route::get('/post/insert', 'PostController@insert');
// Route::get('/post/update/{isd}', 'PostController@update');
// Route::get('/post/delete/{isd}', 'PostController@delete');
// Route::get('/post/show/{isd}', 'PostController@show');




// //ELOQUENT ORM
// Route::get('posts/read', function() {
//     $posts = Post::all();
//     return $posts;
// });
////chuyen sang controller
Route::get('/posts/read', 'PostController@read');
Route::get('/posts/readForEachUser/{id}', 'PostController@readForEachUser');
Route::get('/posts/readWithFilter', 'PostController@readWithFilter');
Route::get('/posts/readForEach/{id}', 'PostController@readForEach');


Route::get('/post/add', 'PostController@add');
Route::get('/post/update/{id}', 'PostController@update');
Route::get('/post/delete/{id}', 'PostController@delete');
Route::get('/post/restore/{id}', 'PostController@restore');
Route::get('/post/permanetlyDelete/{id}', 'PostController@permanetlyDelete');



Route::get('images/read', 'FeaturedImageController@read');


Route::get('users/read', 'UserController@read');

Route::get('roles/read', 'RoleController@read');

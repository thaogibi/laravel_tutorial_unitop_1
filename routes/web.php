<?php
use App\Models\Post;                         //them vao
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\PostsController;

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
Route::get('/posts', 'PostController@read')->name('posts.read');
Route::get('/posts/readForEachUser/{id}', 'PostController@readForEachUser');
Route::get('/posts/readWithFilter', 'PostController@readWithFilter');
Route::get('/posts/show/{id}', 'PostController@show');


Route::get('/post/add', 'PostController@add');
Route::post('/post/store', 'PostController@store');
Route::get('/post/update/{id}', 'PostController@update');
Route::get('/post/delete/{id}', 'PostController@delete');
Route::get('/post/restore/{id}', 'PostController@restore');
Route::get('/post/permanetlyDelete/{id}', 'PostController@permanetlyDelete');


//phan11: relationship DB
Route::get('images/read', 'FeaturedImageController@read');


Route::get('users/read', 'UserController@read');

Route::get('roles/read', 'RoleController@read');





//phan12: FORM
Route::get('user/register', 'UserController@add');



//phan15: helper url
Route::get('helper/url', 'HelperController@url');


//phan16: helper string
Route::get('helper/string', 'HelperController@string');


//phan17: session & cookie
Route::get('session/add', 'SessionController@add');
Route::get('session/show', 'SessionController@show');
Route::get('session/add_flash', 'SessionController@add_flash');
Route::get('session/delete', 'SessionController@delete');
  //cookie
Route::get('cookie/set', 'CookieController@set');
Route::get('cookie/get', 'CookieController@get');

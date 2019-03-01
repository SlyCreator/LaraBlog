<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PostsController@index');
//Route::resource('/posts','PostsController');


Route::get('/dashboard','AdminController@index');
Route::get('/author/createpost','PostsController@create')->name('displayCreatePostview');
Route::get('/post/store','PostsController@store')->name('createPost');






Route::get('/single',function()
    {
        return view('layouts.frontend.post');
    });


    // Route::get('/dashboard',function()
    // {
    //     return view('layouts.admin.admin');
    // });

Route::get('/db',function(){
    $posts=DB::table('posts')->get();
            return $posts;
});
Route::get('/posts/{post}',function($id)
    {
        $post= DB::table('posts')->find($id);
        return view('posts.me',['post'=>$post]);;
    });

//SELECT post_title,body,category_name FROM posts JOIN Categories ON posts.category_Id = categories.Id (to join table) 
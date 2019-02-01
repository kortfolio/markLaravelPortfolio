<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::group(['middleware' => ['web']], function() {

    Route::get('/', [
        'uses' => 'PostController@getPostList',
        'as' => 'post.get',
    ]);
	});


Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
]);

Route::get('/dashboard', [

    'uses' => 'PostController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

Route::get('/admin', [
    'uses' => 'Admin\AdminController@getAdminPage',
    'as' => 'admin'

]);

Route::get('/about', [
    'uses' => 'AboutController@getAboutPage',
    'as' => 'admin',

]);



Route::post('/createpost', [

    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create',

]);


Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete'
]);

Route::post('/submit', function(\Illuminate\Http\Request $request){
 $content = $request['content'];
    return view('output', ['content' => $content]);

})->name('submit');

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
//Route with alias
Route::get('/', ['as'=>'home', 'uses'=>'IndexController@show' ]);

Route::get('/page/{id?}', function ($id = null) {
    echo $id;
});

Route::get('/config', function(){
    echo env('APP_ENV');
});


Route::match(['get','post'],'/comments', function() {
    print_r($_POST);
});
Route::any('/some_page', ['middleware' => 'auth', function() {
    return view('welcome');
}]);

Route::get('/number/{id?}', ['as'=>'number','middleware' => 'mymiddle',function ($id = null) {
    echo $id;
}])->where('id','[0-9]+');

Route::get('/test', "CreateFromConsole@test");



Route::group(['prefix'=>'group1'], function() {
    Route::get('/guest', function(){
        echo 'Hi guest';
    });
});

//Admins group
Route::group(['prefix'=>'admin'], function (){
    Route::get('/page/create', function () {
        echo route('home');
    });
});

Route::resource('/res', 'Resourceontroller');
//---------------------------------------------------

Route::get('/contact',['uses'=>'Admin\ContactController@show','as'=>'contact']);
Route::post('/contact', ['uses'=>"Admin\ContactController@post"]);

Route::get('/test',['uses'=>'Admin\ContactController@show']);
Route::post('/test', ['uses'=>"Admin\ContactController@post"]);

Route::get('/about', ['uses'=>'AboutController@show', 'as'=>"AboutUs"]);
//-------------------------------------------------------------------------

Route::get('/articles', ['uses'=>"Core@getArticles"]);
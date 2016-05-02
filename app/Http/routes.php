<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    $aData = array(
        'pagename' => 'Home'
    );
    return View::make('home')->with('aData', $aData);
});

Route::get('/home', 'HomeController@index');
Route::post('/home', 'HomeController@index');


/* User Authentication */
Route::get('users/login', 'Auth\AuthController@getLogin');
    Route::post('users/login', 'Auth\AuthController@postLogin');
Route::get('users/logout', 'Auth\AuthController@getLogout');

Route::get('users/register', 'Auth\AuthController@getRegister');
Route::post('users/register', 'Auth\AuthController@postRegister');

/* Authenticated users */
Route::group(['middleware' => 'auth.basic'], function()
{
    Route::get('users/dashboard', ['as'=>'dashboard', function()
    {
        return View('users.dashboard');
    }]);
});
$url = route('dashboard');



//Route::get('admin/posts', ['uses' => 'PostsController@index']);
/*Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postAuthLogin');
Route::get('logout', 'Auth\AuthController@getLogout');


Route::group(['middleware' => 'auth'], function()
{
    Route::get('dashboard', array('as'=>'dashboard', function()
    {
        return View('dashboard');
    }));
});*/

/*Route::get('login', function(){
    $aData = array(
        'pagename' => 'Login'
    );
    return View::make('login')->with('aData', $aData);

});

Route::post('login', function(){
    $aData = array(
        'pagename' => 'Login'
    );
    return View::make('login')->with('aData', $aData);

});*/

Route::get('register', function(){
    $aData = array(
        'pagename' => 'Register'
    );
    return View::make('register')->with('aData', $aData);
   //return view('register');
});

/*Route::group(['middleware' => ['web'], 'prefix' => 'api/v1'], function(){
    Route::resource('user', 'UserController', ['only' => ['index']]);
    Route::get('user/{id?}', 'UserController@index');
    Route::post('user', 'UserController@store');
    Route::post('user/{id}', 'UserController@update');
    Route::delete('user/{id}', 'UserController@destroy');
});*/

/*Route::group(['middleware' => ['web']], function () {
    Route::resource('admin/posts', 'PostsController');
});*/

/*Route::any('admin/{id?}', function($id = null){
    return 'admin '.$id;
});*/

Route::group(['prefix' => 'admin', 'as' => 'admin::'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
        return "Route named admin::dashboard";
    }]);

    Route::get('posts/{id?}', ['as' => 'posts', 'uses' => 'PostsController@showPostsList']);
    /*Route::any('posts/{id?}', ['as' => 'posts', function($id = null){
        //return 'post page '.$id;
    }]);*/
});



Route::get('user/profile', ['as' => 'profile', function () {
    return 'profile';
}]);
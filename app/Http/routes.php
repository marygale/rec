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
    return view('home');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*Route::get('users/login', 'Auth\AuthController@getLogin');
Route::post('users/login', 'Auth\AuthController@postLogin');
Route::get('users/logout', 'Auth\AuthController@getLogout');

Route::get('users/register', 'Auth\AuthController@getRegister');
Route::post('users/register', 'Auth\AuthController@postRegister');*/

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');


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

Route::group(['middleware' => ['web'], 'prefix' => 'api/v1'], function(){
    Route::resource('user', 'UserController', ['only' => ['index']]);
    Route::get('user/{id?}', 'UserController@index');
    Route::post('user', 'UserController@store');
    Route::post('user/{id}', 'UserController@update');
    Route::delete('user/{id}', 'UserController@destroy');
});

Route::group(['middleware' => ['web']], function () {
    //
});

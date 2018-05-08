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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', 'PostController');

Route::get('/phpinfo', function () {
    return view('phpinfo');
});

/*
 * Login and Logout pages
 */
Auth::routes();
//Route::get('/login', 'Auth\LoginController@showLoginForm')->name("login");
//Route::post('/login', 'Auth\LoginController@login');
//Route::post('/logout', 'Auth\LoginController@logout')->name("logout");
//Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name("register");
//Route::post('/register', 'Auth\RegisterController@register');

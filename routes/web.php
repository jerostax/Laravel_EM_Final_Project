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

// Route::get('/', function () {
//     return view('welcome');
// });
if(version_compare(PHP_VERSION, '7.2.0', '>=')) { error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); }


Auth::routes();

Route::get('/', 'FrontController@index')->name('home');
Route::post('/newsletter', 'FrontController@newsLetter');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/events', 'FrontController@showEvents')->name('events');
Route::get('/shop', 'FrontController@showShop')->name('shop');
Route::get('/event/{id}', 'FrontController@showOneEvent')->where(['id' => '[0-9]+']);
Route::get('/product/{id}', 'FrontController@showOneProduct')->where(['id' => '[0-9]+']);

Route::post('/contact',  'ContactController@mailToAdmin'); 


route::get('/adhesion', function() {
    return view('front.adhesion');
});

Route::prefix('admin')->group(function() {
   
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::resource('/event', 'EventController')->middleware('auth:admin');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    
   
});

// Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Route;

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
// Route::post('/vuelogin', 'Auth\LoginController@vuelogin');
//Route::t('/vuelogin', [ Auth\LoginRegisterController::class]);
Route::get('/vuelogin/',  'Auth\LoginController@vuelogin')->name('vuelogin');

 Route::get('/vuelogin', function () {
    return view('vuelogin');

   
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//login

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') -> middleware('auth');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});

//home klient
Route::group(['middleware' => ['auth']], function(){
Route::get('/homeclient', function () {
    return view('homeclient'); 
}) -> middleware('auth');

Route::get('/resep', function () {
    return view('resep');
});

Route::get('/bandingkan', function () {
    return view('bandingkan');
})-> middleware('auth');

Route::get('/keluhan', function () {
    return view('keluhan');
});

Route::get('/profil', function () {
    return view('profil');
});
});

//homeadmin
Route::get('/homeadmin', function () {
    return view('homeadmin');
});

//homenutsionist
Route::get('/homenutritionist', function () {
    return view('homenutritionist');
});

Route::get('/search', 'SearchController@search')->name('search');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;


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

Route::view('login', 'login');

Route::view('fetch', 'fetch');


Route::post('check', [Logincontroller::class,'getdetail']);

Route::get('fetchdetail', [Logincontroller::class,'fetchdetail']);

Route::get('edit/{id}', [Logincontroller::class,'edit']);

Route::post('/update', [Logincontroller::class,'update']);

Route::get('delete/{id}', [Logincontroller::class,'delete']);


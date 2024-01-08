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

Route::get('/', function () {
    return view('welcome');
});

// PUT Request
Route::put('/check', 'AlphabetController@check')->name('alphabet.check');


// POST Request
Route::post('/get-reward-level', 'UserController@get_reward_level')->name('user.reward-level');

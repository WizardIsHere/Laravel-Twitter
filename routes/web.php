<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tweet;
use App\Http\Controllers\TweetAPIController;

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

    // get information from database
    $tweets = Tweet::all();

    // get information from 3rd party Library


    return view('welcome', ['tweets' => $tweets]);
});

Route::resource('tweets', TweetAPIController::class);
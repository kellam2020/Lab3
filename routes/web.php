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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {


//go get information from the database called twitter
$tweets = Tweet::all();

    return view('welcome', ['tweets' => $tweets]);
})->name('welcome');

 Route::resource('tweets', TweetAPIController::class);

 

//Alternative way to connect form to database
//Use migrations to create a table in the database

/*
//get all tweets
Route::get('/tweets', function () {
    return view('tweets');
});


// show form to create tweet
Route::get('/create-tweet', function () {
    return view('create-tweet');
});

// create tweet - handle the form for creating a tweet
Route::post('tweets', function () {
     
});

//update tweet
Route::put('/tweets/{tweetId}', function ($tweetId) {

});


//delete tweet
Route::delete('/tweets/{tweetId}', function ($tweetId) {

});
 */    
     
<?php

use App\Http\Controllers\LikeController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/tweets', [TweetController::class, 'index'])->name('tweet.index');
Route::post('/tweets', [TweetController::class, 'store'])->name('tweet.store');
Route::get('/tweets/edit/{tweet}', [TweetController::class, 'edit'])->name('tweet.edit');
Route::put('/tweets/{tweet}', [TweetController::class, 'update'])->name('tweet.update');
Route::delete('/tweets/{tweet}', [TweetController::class, 'destroy'])->name('tweet.destroy');

Route::post('/tweets/likes/{tweet}', [LikeController::class, 'store'])->name('like.store');
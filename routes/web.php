<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/events', 'events');
Route::view('/teams', 'teams');
Route::view('/gallery', 'gallery');
Route::view('/donate', 'donate');
Route::view('/contact', 'contact');
Route::view('/getinvolved', 'getinvolved');
Route::view('/news', 'news');
Route::view('/eventpage','eventpage');
Route::view('/newspage','newspage');    
<?php

use Illuminate\Support\Facades\Route;


// Home Page Route 
Route::get('/', function () {
    return view('pages.home');
});
Route::get('/second', function () {
    return view('pages.second');
});
Route::get('/third', function () {
    return view('pages.third');
});

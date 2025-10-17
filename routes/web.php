<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('blade.about');
});

route::get('/contact',function(){
    return view('blade.contact');
});

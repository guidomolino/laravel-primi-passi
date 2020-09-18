<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('array', function() {
    $arr = [1, 2, 3, 4, 5, 6];
    return view('home', compact('arr'));
});

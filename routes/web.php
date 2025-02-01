<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('backend.general');
});

Route::get('/environmental', function () {
    return view('backend.environmental');
});

Route::get('/social', function () {
    return view('backend.social');
});

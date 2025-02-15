<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/view', function () {
    return view('view');
});

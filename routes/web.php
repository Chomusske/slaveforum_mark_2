<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return 'This is a test route!';
});

Route::get('/index', function () {
    return view('SlavePages.index');
});
Route::get('/create_thread', function () {
    return view('SlavePages.create_thread');
});
Route::get('/my_profile', function () {
    return view('SlavePages.my_profile');
});
Route::get('/profile', function () {
    return view('SlavePages.profile');
});
Route::get('/reg', function () {
    return view('SlavePages.reg');
});
Route::get('/change_profile', function () {
    return view('SlavePages.change_profile');
});
Route::get('/', function () {
    return view('SlavePages.index');
});


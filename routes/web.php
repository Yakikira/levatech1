<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PostController;

Route::get('/posts', 'App\Http\Controllers\PostController@index');
<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/static-form', function () {
    return view('static_form');
});

Route::resource('posts', PostController::class);

Route::get('/posts', [PostController::class, 'index']);
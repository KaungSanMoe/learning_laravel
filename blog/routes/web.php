<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('home', function () {
    return view('home');
});

// Route::get('about', function () {
//     $data = "hello";
//     return view('about', compact('data'));
// });
// Route::get('user', function () {
//     $user = "this is user page";
//     return view('user', compact('user'));
// });

// Route::get('con', [BlahController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

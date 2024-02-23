<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/landing', function () {
    return view('landing');
})->name("landing");

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get('/home', function () {
    return view('home');
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::name('services.')->group(function () {
    Route::get('/service1', function () {
       return view("service1");
    })->name('service1');
    Route::get('/service2', function () {
       return view("service2");
    })->name('service2');
    Route::get('/service3', function () {
       return view("service3");
    })->name('service3');
});

Route::name('dashboard.')->group(function () {
    Route::get('/admin', function () {
       return view("account");
    })->name('admin');
    Route::get('/user', function () {
       return view("account");
    })->name('user');
});


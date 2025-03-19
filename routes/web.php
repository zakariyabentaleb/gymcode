<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/programmes', function () {
    return view('program');
})->name('programmes');

Route::get('/programmes-details', function () {
    return view('program-details');
})->name('programmes-details');

Route::get('/coach', function () {
    return view('entraineur');
})->name('entraineur');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin-dashboard');


Route::get('/user-dashboard', function () {
    return view('user.dashboard');
})->name('user-dashboard');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
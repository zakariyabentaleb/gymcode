<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register.submit');
Route::post('/login', [UserController::class, 'login'])->name('loginn');

Route::middleware('auth')->group(function () {
    
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    
    // Route spécifique pour la mise à jour du mot de passe
    // Route::put('/users/{user}/password', [UserController::class, 'updatePassword'])->name('users.update.password');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});
<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\EntraineurController;

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


// Route::get('/program-dashboard', function () {
//     return view('admin.program');
// })->name('program-dashboard');

Route::get('/user-dashboard', function () {
    return view('user.dashboard');
})->name('user-dashboard');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route::get('/create-program', function () {
//     return view('admin.create-program');
// })->name('create-program');


Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');
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


Route::middleware(['admin'])->group(function () {
    Route::get('/admin-dashboard', function () { return view('admin.dashboard'); })->name('admin-dashboard');
    Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
    Route::get('/programs/create', [ProgramController::class, 'create'])->name('programs.create');
    Route::post('/programs', [ProgramController::class, 'store'])->name('programs.store');
    Route::get('/programs/{program}', [ProgramController::class, 'show'])->name('programs.show');
    Route::get('/programs/{program}/edit', [ProgramController::class, 'edit'])->name('programs.edit');
    Route::put('/programs/{program}', [ProgramController::class, 'update'])->name('programs.update');
    Route::delete('/programs/{program}', [ProgramController::class, 'destroy'])->name('programs.destroy');
    Route::get('/create-program', [EntraineurController::class, 'index'])->name('create-program');
    Route::get('/create-categories', [CategoryController::class, 'show'])->name('categories.create');
    Route::post('/add-categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::delete('/categories/{categorie}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

route::get('/trainers', [EntraineurController::class, 'show'])->name('trainer.show');
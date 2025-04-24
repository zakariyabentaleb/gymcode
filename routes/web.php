<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\EntraineurController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/programmes',[ProgramController::class, 'showProgram'])->name('programmes');

Route::get('/programmes-details/{id}', [ProgramController::class, 'showProgramDetails'])->name('programmes-details');

Route::get('/coach', [ReservationController::class,'showTrainer'])->name('entraineur');
Route::post('/reserver', [ReservationController::class,'store'])->name('reserver');


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
    Route::get('/my-reservations', [ReservationController ::class, 'index'])->name('reservation');
    Route::get('/my-payments', [UserController::class, 'payments'])->name('payment.show');
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
    route::get('/trainers', [EntraineurController::class, 'show'])->name('trainer.show');
Route::get('/create-trainer', function () { return view('admin.create-trainer');})->name('create-trainer');
Route::post('/add-trainer', [EntraineurController::class, 'store'])->name('trainer.store');
Route::delete('/trainers/{trainer}', [EntraineurController::class, 'destroy'])->name('trainers.destroy');
Route::get('/trainers/{trainer}/edit', [EntraineurController::class, 'edit'])->name('trainers.edit');
Route::put('/trainers/{trainer}', [EntraineurController::class, 'update'])->name('trainers.update');
Route::get('/payments', [PaymentController::class, 'showPayments'])->name('payments.index');
Route::get('/membres', [UserController::class, 'showPayingMembers'])->name('admin.members');


});

Route::post('/reservation/{id}/cancel', [ReservationController::class, 'cancel'])->name('reservation.cancel');
Route::delete('/reservation/{id}/delete', [ReservationController::class, 'destroy'])->name('reservation.destroy');
Route::get('/reservations', [ReservationController::class, 'showAllReservations'])->name('reservations.show');


Route::get('/trainer', [EntraineurController::class, 'trainerDashboard'])->name('trainer-dashboard');
Route::post('/trainer/reservations/{reservation}/confirm', [EntraineurController::class, 'confirmReservation'])->name('trainer.confirm.reservation');
Route::post('/trainer/reservations/{reservation}/cancel', [EntraineurController::class,'cancelReservation'])->name('trainer.cancel.reservation');

Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [UserController::class, 'show'])->name('profile.show');
    Route::get('/profil/modifier', [UserController::class, 'edit'])->name('profile.edit');
    Route::post('/profil/update', [UserController::class, 'update'])->name('profile.update');
});


Route::post('/checkout/{program}', [PaymentController::class, 'checkout'])->name('checkout');
Route::get('/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');


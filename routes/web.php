<?php

use App\Http\Controllers\DietController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\WorkoutProgressController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/about', function () {
    return view('about');
});
Route::get('/program', function () {
    return view('program');
});
Route::get('/connect', function () {
    return view('connect');
});
Route::get('/workout', function () {
    return view('workout');
});

Route::resource('/diet', DietController::class);
Route::resource('/workout', WorkoutController::class);


// HOW TO ADD MIDDLEWARE IN ROUTES
// Route::middleware(['auth','admin'])->group(function(){

//})

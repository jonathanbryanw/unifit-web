<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DietController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\WeightDetailController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [AccountController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AccountController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [AccountController::class, 'destroy'])->name('profile.destroy');
});

require_once __DIR__.'/auth.php';

Route::get('/about', function () {
    return view('about');
});

Route::resource('/', HomeController::class);
Route::resource('/program', WeightDetailController::class)->only(['index','store','update']);
Route::resource('/category', ProgramController::class)->only(['show','update']);
Route::resource('/diet', DietController::class);
Route::resource('/workout', WorkoutController::class);
Route::resource('/trainer', TrainerController::class);
Route::resource('/workoutprogress', WorkoutProgressController::class)->only(['update']);


// HOW TO ADD MIDDLEWARE IN ROUTES
// Route::middleware(['auth','admin'])->group(function(){

//})

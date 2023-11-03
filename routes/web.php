<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainingController;

use App\Http\Controllers\EventController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(HomeController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/home', 'show')->name('home');
    Route::get('/home/{training}', 'post')->name('create-training');
    Route::post('/calendar/create', 'create');
    Route::get('/menu/{date}/{menu}', 'menu');
});

Route::controller(TrainingController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/training/{id}', 'create')->name('create');
    Route::post('/training/{date}/store','store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';


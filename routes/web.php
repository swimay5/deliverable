<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\ConditionController;

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
    Route::post('calendar/display', 'display');
    Route::get('/menu/{date}/{menu}', 'menu');
    //Route::get('/calendar/create', 'create');
});

Route::controller(TrainingController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/training/{id}', 'create')->name('create');
    Route::post('/training/{date}/store','store');
});

Route::controller(MealController::class)->middleware(['auth', 'verified'])->group(function(){
    //Route::get('/meal/{id}', 'create')->name('create');
    Route::post('/meal/{date}/store','store');
});

Route::controller(ConditionController::class)->middleware(['auth', 'verified'])->group(function(){
    //Route::get('/condition/{id}', 'create')->name('create');
    Route::post('/condition/{date}/store','store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::post('/calendar/get',  [EventController::class, 'get'])->name("get"); // DBに登録した予定を取得

require __DIR__.'/auth.php';


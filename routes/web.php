<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TrainerController;

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
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('Aboutus.about-us');
})->name('about');

Route::get('/login', function () {
  return view('login');
})->name('Login');

Route::get('/dashboard', function () {
  return view('dashboard');
})->name('Dashboard');

Route::get('/courses', function () {
  return view('courses');
})->name('Courses');

Route::get('/plans', function () {
  return view('plans');
})->name('Plans');


Route::resource('class', TrainingController::class);
Route::resource('service', ServiceController::class);
Route::resource('trainers', TrainerController::class);

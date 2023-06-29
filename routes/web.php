<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , [HomeController::class , 'index']);

Route::get('/about', function () {
    return view('about');
})->name('basicAbout');

Route::get('/about/{id}', function ($id) {
    return $id;
});

Route::get('/contact', function () {
    // return "<a href='".route('basicAbout').">About</a>";
    return "<a href='".route('basicAbout')."'>Contact</a>";
});

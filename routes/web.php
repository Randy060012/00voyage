<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
    return view('client.tour.index');
})->name('home');

Route::get('/listes', function () {
    return view('client.tour.list');
})->name('liste');


Route::get('/details', function () {
    return view('client.tour.show');
})->name('detail');

Route::get('/contact', function () {
    return view('client.tour.contact');
})->name('contact');

Route::get('/help', function () {
    return view('client.tour.help');
})->name('help');

Route::get('/about', function () {
    return view('client.tour.about');
})->name('about');


Route::get('/gallery', function () {
    return view('client.pages.gallery');
})->name('gallery');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');


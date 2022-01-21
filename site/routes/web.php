<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apropos', [App\Http\Controllers\HomeController::class, 'about'])->name('cv.about');
Route::get('/parcours', [App\Http\Controllers\HomeController::class, 'school'])->name('cv.school');
Route::get('/projets', [App\Http\Controllers\HomeController::class, 'projet'])->name('cv.projet');
Route::get('/experience', [App\Http\Controllers\HomeController::class, 'experience'])->name('cv.experience');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('cv.contact');

Route::get('/send', [App\Http\Controllers\HomeController::class, 'mail'])->name('mail.send');


<?php

use App\Http\Controllers\ProfileController;
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

Route::view('/', 'Frontend.home')->name('home');
Route::view('/about', 'Frontend.about')->name('about');
Route::view('/services', 'Frontend.services')->name('services');
Route::view('/contact', 'Frontend.contact')->name('contact');
Route::view('/career', 'Frontend.career')->name('career');
Route::view('/thankyou', 'Frontend.thankyou')->name('thankyou');
Route::view('/privacy-policy', 'Frontend.privacy-policy')->name('privacy-policy');
Route::view('/terms-and-condition', 'Frontend.terms-and-condition')->name('terms-and-condition');
Route::view('/disclaimer', 'Frontend.disclaimer')->name('disclaimer');

Route::fallback(function () {
    return response()->view('Error.404', [], 404);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/backend.php';
require __DIR__ . '/frontend.php';

<?php

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
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/service-details', function () {
    return view('service-details');
})->name('serviceDetails');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/blog-details/{id?}', function () {
    return view('blog-details');
})->name('blogDetails');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [App\Http\Controllers\InquiryController::class, 'contactSubmit'])->name('contactSubmit');

Route::post('/submitNewsletter', [App\Http\Controllers\InquiryController::class, 'submitNewsletter'])->name('submitNewsletter');
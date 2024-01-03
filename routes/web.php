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
    return view('home');
});
Route::get('/ourwork', function () {
    return view('ourwork');
});
Route::get('/digitalmarketing', function () {
    return view('digitalmarketing');
});
Route::get('/multimediaproduction', function () {
    return view('multimediaproduction');
});
Route::get('/socialmediamarketing', function () {
    return view('socialmediamarketing');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/photography', function () {
    return view('photography');
});
Route::get('/trainingmain', function () {
    return view('trainingmain');
});
Route::get('/trainingphotography', function () {
    return view('trainingphotography');
});




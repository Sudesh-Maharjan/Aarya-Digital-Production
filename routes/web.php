<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsportalController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\YoutubeController;
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
//admin
Route::get('/admin', function () {
    return view('admin/dashboard');
});
Route::get('/admin/packagedetails', function () {
    return view('admin/packagedetails');
});
Route::get('/admin/accountdetails', function () {
    return view('admin/accountdetails');
});
Route::get('/admin/mycart', function () {
    return view('admin/mycart');
});
Route::get('/admin/mycartinside', function () {
    return view('admin/mycartinside');
});
Route::get('/admin/checkout', function () {
    return view('admin/checkout');
});



Route::get('/', function () {
    return view('homepage');
});
Route::get('/ourwork', function () {
    return view('ourwork');
});
//Production
Route::get('/multimediaproduction', function () {
    return view('multimediaproduction');
});
Route::get('/animation', function () {
    return view('animation');
    
});
Route::get('/photography', function () {
    return view('photography');
});
Route::get('/videography', function () {
    return view('videography');
});
Route::get('/jingle', function () {
    return view('jingle');
});
//Production end
//Digital Marketing
Route::get('/digitalmarketing', function () {
    return view('digitalmarketing');
});

Route::get('/socialmediamarketing', function () {
    return view('socialmediamarketing');
});
Route::get('/searchenginmarketing', function () {
    return view('searchenginmarketing');
});
Route::get('/searchenginoptimization', function () {
    return view('searchenginoptimization');
});
Route::get('/contentmarketing', function () {
    return view('contentmarketing');
});
Route::get('/emailmarketing', function () {
    return view('emailmarketing');
});
Route::get('/affiliatemarketing', function () {
    return view('affiliatemarketing');
});
Route::get('/influencermarketing', function () {
    return view('influencermarketing');
});
//Digital Marketing End

Route::get('/contactus', function () {
    return view('contactus');
});



//Trainings
Route::get('/trainingmain', function () {
    return view('trainingmain');
});
Route::get('/trainingphotography', function () {
    return view('trainingphotography');
});
//Trainings end



//suwas
Route::get('/events', [EventController::class, 'showEvents']);
Route::get('/blogs', [BlogController::class, 'showBlogs']);
Route::get('/youtubes', [YoutubeController::class, 'showYoutubes']);
Route::get('/podcasts', [PodcastController::class, 'showPodcasts']);
Route::get('/newsportals', [NewsportalController::class, 'showNewsportals']);
Route::get('/about', [TeamController::class, 'about']);
Route::get('/eventdetails', function () {
    return view('eventdetails');
});
Route::get('/blogdetails', function () {
    return view('blogsdetails');
});
Route::get('/newsportaldetails', function () {
    return view('newsportaldetails');
});

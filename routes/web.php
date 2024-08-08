<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/news', function () {
    return view('pages.blog');
});
Route::get('news/', [NewsController::class, 'index']);
Route::get('news/{slug}', [NewsController::class, 'show']);
Route::get('/contact-us', function () {
    return view('pages.contact');
});
Route::get('/gallary', function () {
    return view('pages.gallary');
});
Route::get('/terms-and-conditions', function () {
    return view('pages.termsandconditions');
});
Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
});
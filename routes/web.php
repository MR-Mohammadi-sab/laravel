<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\ResearchController;


Route::get('/', function () {
    return view('index');
});

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/features', [FeaturesController::class,'index']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/research', [ResearchController::class,'index']);

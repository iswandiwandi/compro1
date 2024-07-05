<?php

use Illuminate\Support\Facades\Route;

// Route::resource('/', function () {
//     return view('welcome');
// });
Route::resource('home', \App\Http\Controllers\HomeController::class);

Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('template', App\Http\Controllers\TemplateController::class, );
Route::resource('about', App\Http\Controllers\AboutController::class, );
Route::resource('services', App\Http\Controllers\ServicesController::class, );
Route::resource('skills', App\Http\Controllers\SkillsController::class, );
Route::resource('education', App\Http\Controllers\EducationController::class, );
Route::resource('experience', App\Http\Controllers\ExperienceController::class, );
Route::resource('work', App\Http\Controllers\WorkController::class, );
Route::resource('blog', App\Http\Controllers\BlogController::class, );
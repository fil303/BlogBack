<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
	Route::view('/dashboard','dashboard');
	Route::view('/log', 'log');
	Route::view('/payment', 'payment');
	Route::view('/newpost', 'new_post');
	Route::view('/profile', 'profile');
	// Profile Info Update
	Route::post('/profile/update',[App\Http\Controllers\UserController::class,'profile_update']);
	// Airticle  Pending/Reviewing/Draft/Publish
	Route::get('/post',[App\Http\Controllers\PostController::class,'view_page']);

	// Profile Photo Update
	Route::post('/profile/pic_update',[App\Http\Controllers\UserController::class,'profile_picUpdate']);
	// Temp Image Insert
	Route::post('/upload_image_to_temp',[App\Http\Controllers\PostController::class,'store_to_temp']);
	// Insert Post To DB
	Route::post('/upload_post_to_server',[App\Http\Controllers\PostController::class,'store_to_server']);
	// Temp Image Delete
	Route::post('/delete_temp_file',[App\Http\Controllers\PostController::class,'temp_delete']);
});




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

Route::middleware("guest")->group(function () {
    Route::get("/",[AuthController::class,"showLoginForm"])->name("login");
    Route::post("/",[AuthController::class,"login"])->name("login");
});



Route::middleware("auth")->group(function (){
    Route::get('/',[PostController::class,"index"])->name("posts.index");
    Route::get('/add',[PostController::class,"create"])->name("posts.create");
    Route::post('/',[PostController::class,"store"])->name("posts.store");
    Route::get('/post/{post}',[PostController::class,"show"])->name("posts.show");
    Route::get('/edit/{post}',[PostController::class,"edit"])->name("posts.edit");
    Route::put('/edit/{post}',[PostController::class,"update"])->name("posts.update");
    Route::delete('/{post}',[PostController::class,"destroy"])->name("posts.destroy");    

    Route::post('/logout', [AuthController::class,"logout"])->name("logout");

});



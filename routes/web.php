<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class,'index'])->name("posts.index");
Route::get('/create', [PostController::class,'create'])->name("posts.create");
Route::post('/store',[PostController::class,'store'])->name("posts.store");
Route::delete('/{id}',[PostController::class,'destroy'])->name("posts.delete");
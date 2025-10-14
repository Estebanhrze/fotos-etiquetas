<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return redirect()->route('photos.index');
});

Route::resource('photos', PhotoController::class);

Route::get('/', function () {
    return view('welcome');
});

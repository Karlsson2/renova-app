<?php

use Illuminate\Support\Facades\Route;


Route::get('/{get}', function () {
    return view('welcome');
})->where('any', '.*');
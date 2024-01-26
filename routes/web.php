<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get("{any?}", function () {
    return view('index');
})->where('any', '.*');


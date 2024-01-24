<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});

// Define the POST route for sending mail
Route::post('/send-mail', [MailController::class, 'send']);

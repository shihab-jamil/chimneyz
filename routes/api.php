<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/**
 * Authentication
 */
Route::post('/register', [AuthController::class, 'register']);
Route::post("/login", [AuthController::class, "login"]);
Route::get('/logout', [AuthController::class, "logout"]);

/**
 * Contact Us
 */
Route::get('contact-us', [ContactUsController::class, 'getContactUs']);
Route::post('contact-us', [ContactUsController::class, 'createContactUs']);
Route::put('contact-us/{contactUs}', [ContactUsController::class, 'updateContactUs']);
Route::delete('contact-us/{contactUs}', [ContactUsController::class, 'deleteContactUs']);

/**
 * Schedule
 */
Route::post('make-schedule', [ScheduleController::class, 'makeSchedule']);

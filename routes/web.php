<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use DebugBar\DebugBar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users/login', [UserController::class, 'viewLogin']);
Route::get('/users/register', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);
Route::post('/users/login/confirm', [UserController::class, 'confirmLogin']);
Route::get('/contact/contacts/create', [ContactController::class, 'create']);
Route::post('/contact/contacts/store', [ContactController::class, 'store']);
Route::post('/send-email', [MailController::class, 'sendMail']);

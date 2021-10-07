<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MeController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ViewController::class, 'viewLanding']);
Route::get('/oauth/twitch', [AuthController::class, 'getAuthenticate']);
Route::get('/dashboard', [ViewController::class, 'viewDashboard']);
Route::get('/logout', [AuthController::class, 'getLogout']);

Route::delete('/see-ya', [MeController::class, 'deleteMe'])->name('delete-user');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('Login', function () {
    return view('Layouts.login');
});

Route::get('/', function () {
    return view('StudOrg.StudOrgDashboard');
});

// Route::get('StudOrgEvents', function () {
//     return view('StudOrg.StudOrgAddEvent');
// });

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/StudOrgEvents', [EventController::class, 'showEvents'])->name('events');
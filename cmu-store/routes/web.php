<?php

use App\Http\Controllers\ProfileController;
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
// Route::get('Login', function () {
//     return view('Layouts.login');
// });

// Route::get('/homepage', function () {
//     return view('StudOrg.student_organization_dashboard');
// });

Route::get('/homepage', function () {
    return view('student_organization.student_organization_dashboard');
});

<<<<<<< HEAD
Route::get('student_organization_events', function () {
    return view('student_organization.student_organization_events');
=======

Route::get('StudOrgEvents', function () {
    return view('StudOrg.student_organization_events');
>>>>>>> d2f66e5e76ce9dd2228fcf829bff9dc4ab1f1930
});

Route::get('student_organization_attendance', function () {
    return view('student_organization.student_organization_attendance');
});

Route::get('student_organization_member_list', function () {
    return view('student_organization.student_organization_member_list');
});

Route::get('student_organization_students', function () {
    return view('student_organization.student_organization_students');
});

Route::get('student_organization_evaluation', function () {
    return view('student_organization.student_organization_evaluation');
});

Route::get('student_organization_accountabilities', function () {
    return view('student_organization.student_organization_accountabilities');
});
// Auth::routes();



#dashboard
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');;
// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout']);

#events

Route::get('/student_organization_events', [EventController::class, 'show_events'])->name('events');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');



Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

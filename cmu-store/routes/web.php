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

Route::get('/homepage', function () {
    return view('StudOrg.StudOrgDashboard');
});

Route::get('StudOrgEvents', function () {
    return view('StudOrg.StudOrgAddEvent');
});

Route::get('StudOrgAttendance', function () {
    return view('StudOrg.StudOrgAttendance');
});

Route::get('StudOrgAddMember', function () {
    return view('StudOrg.StudOrgAddMember');
});

Route::get('StudOrgListofMembers', function () {
    return view('StudOrg.StudOrgListofMembers');
});
// Auth::routes();



#dashboard
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');;
// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout']);

#events

Route::get('/student_org_events', [EventController::class, 'showEvents'])->name('events');
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

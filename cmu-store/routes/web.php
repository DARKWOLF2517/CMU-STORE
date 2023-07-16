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
return view('student_organization.student_organization_dashboard');
});

// STUDENT USER ROUTES
Route::get('student_evaluationform', function () {
    return view('student.student_evaluationform');
});
Route::get('student_dashboard', function () {
    return view('student.student_dashboard');
});

Route::get('student_home', function () {
    return view('student.student_home');
});

Route::get('student_accountabilities', function () {
    return view('student.student_accountabilities');
});

Route::get('student_event', function () {
    return view('student.student_events');
});

Route::get('student_attendance', function () {
    return view('student.student_attendance');
});


// STUDENT ORGANIZATION ROUTES
Route::get('student_organization_attendance_record', function () {
    return view('student_organization.student_organization_attendance_record');
});
Route::get('student_organization_events', function () {
    return view('student_organization.student_organization_events');
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



#DASHBOARD ROUTES
// Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [HomeController::class, 'index']);
// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout']);
Route::get('/events/count',[EventController::class, 'getEventsCount'])->name('get-events-count');

#EVENT ROUTES
Route::get('/events', [EventController::class, 'showEvents'])->name('events');
Route::get('/events/show',[EventController::class, 'getEvents'])->name('get-events');
Route::post('/events', [EventController::class, 'store'])->name('event-store');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');



Route::get('/', function () {
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

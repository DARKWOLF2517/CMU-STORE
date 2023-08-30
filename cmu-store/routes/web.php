<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;

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

// login route
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// general
Route::post('/authenticate_user', [LoginController::class, 'authenticate'])->name('authentication');
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/login', function () {
    return view('layouts.login');
})->name('login');

//get student org list
Route::get('/usercards', function () {
    return view('layouts.organization_cards');
});
Route::get('login/options', function () {
    $hideNav = true;
    return view('layouts.organization_cards',compact('hideNav'));
})->name('login_options');
Route::get('login/GetOrgList/{userOrganization}', [LoginController::class, 'GetOrganizationList'])->name('get-user-organization');

//get into organization that been choosen
Route::get('login/{org_id}/{role_id}', [LoginController::class, 'LoginOrganization'])->name('login-organization');

Route::get('/evaluation_result', function () {
    return view('student_organization.student_organization_evaluation_results');
    });
Route::get('/events/show',[EventController::class, 'getEvents'])->name('get-events');
//admin route
// Route::middleware(['auth', 'user-role:1'])->group(function(){


// });

//attendance
Route::get('/attendance/show',[AttendanceController::class, 'showAttendanceList'])->name('get-attendance');
Route::post('/attendance',[AttendanceController::class, 'store'])->name('add-attendance');

Route::middleware(['auth'])->group(function(){
    //ORG ROUTE
    Route::middleware(['user-role:1'])->group(function(){

        Route::get('/login/org_dashboard', function () {
            return view('student_organization.student_organization_dashboard');
        })->name('org_dashboard');
        // Route::get('/org_dashboard', [LoginController::class, 'LoginDashboard'])->name('org_dashboard');

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

        Route::get('student_organization_evaluation_results', function () {
            return view('student_organization.student_organization_evaluation_results');
        });

        Route::get('student_organization_evaluation', function () {
            return view('student_organization.student_organization_evaluation');
        });

        Route::get('student_organization_accountabilities', function () {
            return view('student_organization.student_organization_accountabilities');
        });

        Route::get('student_qrscanner', function () {
            return view('student_organization.student_organization_qr_scanner');
        });


        #EVENT ROUTES
        Route::get('/events', [EventController::class, 'showEvents'])->name('events');


        Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events-destroy');
        Route::post('/events', [EventController::class, 'store'])->name('event-store');
        Route::get('edit/events/{event}', [EventController::class, 'edit'])->name('events-edit');
        Route::put('/events/{event}', [EventController::class, 'update'])->name('events-update');


        Route::get('/events/count',[EventController::class, 'getEventsCount'])->name('get-events-count');
        Route::get('/user/count',[EventController::class, 'getMembersCount'])->name('get-user-count');
    });
    //STUDENT ROUTE
    Route::middleware(['user-role:2'])->group(function(){
        Route::get('/login/student_dashboard', function () {
            return view('student.student_dashboard');
        });

        Route::get('student_profile', function () {
            return view('student.student_profile');
        });
        Route::get('student_evaluationform', function () {
            return view('student.student_evaluationform');
        });

        Route::get('student_accountabilities', function () {
            return view('student.student_accountabilities');
        });

        Route::get('student_announcement', function () {
            return view('student.student_announcement');
        });

        Route::get('student_attendance', function () {
            return view('student.student_attendance');
        });

        Route::get('student_profile', function () {
            return view('student.student_profile');
        });

        //get user profile
        Route::get('user/profile/{user}',[ProfileController::class, 'getUserProfile']);

    });
});
// Route::group('user-role:1', function()
// {

// });

// Route::group('user-role:2', function() {

// });

// //STUDENT ROUTE
// Route::middleware(['auth', 'user-role:2'])->group(function(){

// });


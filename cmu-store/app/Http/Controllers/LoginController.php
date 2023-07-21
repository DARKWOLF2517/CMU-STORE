<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\UserOrganization;
class LoginController extends Controller
{
public function authenticate(Request $request): RedirectResponse
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // $student_id = Auth::id();
        // $userOrganization = UserOrganization::where('student_id', $student_id)->firstOrFail();
        // if($userOrganization->role_id == 1){
        //     return view('student_organization.student_organization_dashboard');
        // }
        // else if($userOrganization->role_id == 2){
        //     return view('student.student_dashboard');
        // }
        // else{
        //     return redirect()->back();
        // }
        
        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}
public function logout(Request $request): RedirectResponse
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}

}

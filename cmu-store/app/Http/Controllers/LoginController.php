<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Role;
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
        $student_id = Auth::id();

        //user organization count
        $userOrganizationCount = UserOrganization::where('student_id', $student_id)->count();
        
        //user organization result
        $userOrganization = UserOrganization::where('student_id', $student_id)->first();
        
        if ($userOrganizationCount > 1){
            return redirect()->intended('/login/options');
        }
        else{
            if($userOrganization->role_id == 1){
                return redirect()->intended('org_dashboard');
            }
            else if($userOrganization->role_id == 2){
                return redirect()->intended('student_dashboard');
                
            }
            else{
                return redirect()->back();
            }
        }

        // return redirect()->intended('dashboard');
    }
    else{
        dd('errror');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}

public function GetOrganizationList($userOrganization)
{   
    $userOrganizations = UserOrganization::where('student_id', $userOrganization)->get();
    // foreach ($userOrganizations as $userOrg){
    //     $userOrg->role_id = Role::select('name')->where('role_id',$userOrg->role_id)->get();
    //     $userOrg->student_org_id = Organization::select('name')-> where('org_id',$userOrg->student_org_id)->get();
    // }  
    return $userOrganizations->toJson();
}

public function LoginOrganization($org_id, $role_id)
{   
    if($role_id == 1){
        return redirect()->route('org_dashboard');
    }
    else if($role_id == 2){
        return redirect()->route('student_dashboard');
        
    }
}

public function logout(Request $request): RedirectResponse
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');

}
}

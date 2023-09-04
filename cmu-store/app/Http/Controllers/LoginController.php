<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\UserOrganization;
use Illuminate\Contracts\Session\Session;

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
            // dd(Session());
            //user organization count
            $userOrganizationCount = UserOrganization::where('student_id', $student_id)->count();
            if ($userOrganizationCount > 1){
                return redirect()->intended('/login/options');

            }
            else{
                //user organization result
                $userOrganization = UserOrganization::where('student_id', $student_id)->first();
                if($userOrganization->role_id == 1){
                    return redirect()->intended('/login/org_dashboard');
                }
                else if($userOrganization->role_id == 2){
                    return redirect()->intended('/login/student_dashboard');
                    
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
        $userOrganizations = UserOrganization::where('student_id', $userOrganization)->with(['organization','role'])->get();
        return $userOrganizations->toJson();
    }

    public function LoginOrganization($org_id, $role_id)
    {   
        $data = [
            'org_id'=> $org_id, 
            'role'=> $role_id];
        if($role_id == 1){
            // return redirect()->route('org_dashboard');
            
            return response()->json($data); 
        }
        else if($role_id == 2){
            return response()->json($data); 
            
        }
    }

    public function LoginDashboard()
    {   
        return redirect()->route('org_dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

    }

    public function doesExist(int $id)
    {
        // Logic Here
    }

    public function uploadStudents(Request $data)
    {
        //Register User Logic  
        // foreach($data as $student)
        // {
        //     if(!doesExist($student->id))
        //     {

        //     };
        // }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserOrganization;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        if(Auth::id()){
         
            $student_id = Auth::id();
    
            $userOrganization = UserOrganization::where('student_id', $student_id)->firstOrFail();
            if($userOrganization->role_id == 1){
                return view('student_organization.student_organization_dashboard');
            }
            else if($userOrganization->role_id == 2){
                return view('student.student_dashboard');
            }
            else{
                return redirect()->back();
            }
            
        }
        
 
    }
    public function logout()
    {
        Auth::logout();
    
        // Redirect the user to the desired location after logout
        return redirect('/');
    }
}

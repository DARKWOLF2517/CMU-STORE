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
    
             $student_orgs = getAllOrgs($student_id);
            // session("student_orgs",$student_orgs);
            // foreach($student_orgs as $student_org)
            // {
                if($student_org->role_id == 1)
                {
                    return view('Student.Selection');
                }
            // }
            return view('Student.StudentDashboard');
            // $userOrganization = UserOrganization::where('student_id', $student_id)->firstOrFail();
            // if($userOrganization->role_id == 1){
            //     $student_orgs = getAllOrgsAsOfficer($student_id);
            //     // if(count(getNumberOfOrgsAsOfficer($student_id) > 1))
            //     // {
            //     //     //TODO: Get the organization ID of all Student Orgs where role of student is 1
            //     //     return view('StudOrg.Selection');
            //     // }
            //     return view('StudOrg.StudOrgDashboard');
            // }
            // else if($userOrganization->role_id == 2){
            //     return view('Student.StudentDashboard');
            // }
            // else{
            //     return redirect()->back();
            // }
            
        }
        
 
    }

    //TODO: Create a function to fetch all student orgs where the role id is 1

    public function logout()
    {
        Auth::logout();
    
        // Redirect the user to the desired location after logout
        return redirect('/');
    }
}

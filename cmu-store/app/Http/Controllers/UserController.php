<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\User;
use App\Models\UserOrganization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function GetMemberList($org_id)
    {
        $memberList = UserOrganization::where([['student_org_id', $org_id],['role_id', 2]])->with(['user','organization'])->get();
        return $memberList->toJson();
    }

        //fetch user profile
        public function getUserOrganization($org_id){
            $organization = Organization::find($org_id);
            return $organization;

        }
        public function getUserProfile($student_id){
            $user_organization = UserOrganization::where('student_id',$student_id)->with(['organization','user'])->get();
                return $user_organization;

        }


        public function store(Request $request)
        {
            $org_id = Session::get('org_id');
            $data = $request->input('data');
            foreach ($data as $row) {
                $user = new UserOrganization();
                $user->student_id = $row[0];
                $user->year_level = $row[2];
                $user->student_org_id = $org_id;
                $user->role_id = '2' ;
                $user->save();

            }

            // return "Data inserted successfully!";
            // Optionally, you can return a response indicating success or redirection
            return $request;
        }
}

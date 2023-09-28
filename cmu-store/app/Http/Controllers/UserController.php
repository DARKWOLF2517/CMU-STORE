<?php

namespace App\Http\Controllers;
use App\Models\UserOrganization;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function GetMemberList($org_id)
    {   
        $memberList = UserOrganization::where([['student_org_id', $org_id],['role_id', 2]])->with(['user','organization'])->get();
        return $memberList->toJson();
    }
}

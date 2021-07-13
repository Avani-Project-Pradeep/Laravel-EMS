<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee_Professional_Detail;
use App\Models\Employee_Personal_Detail;
use App\Models\Employer_Professional_Detail;

class Employee_portalController extends Controller
{
    public function allowemployeeportal(Request $request)
    {

        //getting logged in user email

        $email = $request->session()->get('employee_email');


        //fetching professional details of the logged in user
        $professional_details=Employee_Professional_Detail::where('employee_email','=', $email)->get();



     //fetching personal  details of the logged in user


        $personal_details=Employee_Personal_Detail::where('employee_email','=', $email)->get();


        return view('employee_portal_homepage',['professional_details'=>$professional_details,'personal_details'=>$personal_details]);


    }


    public function aboutemployer(Request $request)
    {

        $employee_id=$request->session()->get('employee_id');
         $employer_name=Employee_Professional_Detail::where('employee_id','=',$employee_id)->get('employer_name');









         return view('About_Employer');
    }




}

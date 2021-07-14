<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Employee_Professional_Detail;
use App\Models\Employee_Personal_Detail;
use App\Models\Employer_Professional_Detail;
use App\Models\Employer_Personal_Detail;


class Employee_portalController extends Controller
{
    public function allowemployeeportal(Request $request)
    {

        //getting logged in user email

        $employee_id = $request->session()->get('employee_id');


        //fetching professional details of the logged in user
        $professional_details=Employee_Professional_Detail::where('employee_id','=', $employee_id)->get();



     //fetching personal  details of the logged in user


        $personal_details=Employee_Personal_Detail::where('employee_id','=', $employee_id)->get();


        return view('employee_portal_homepage',['professional_details'=>$professional_details,'personal_details'=>$personal_details]);


    }


    public function aboutemployer(Request $request)
    {

        $employee_id=$request->session()->get('employee_id');

     $email=Employee_Professional_Detail::where('employee_id','=',$employee_id)->get('employer_email');


     $professional_details=Employer_Professional_Detail::where('employer_email','=', $email)->get();

     $personal_details=Employer_Personal_Detail::where('employer_email','=', $email)->get();

     return $professional_details;


    return view('About_Employer',['professional_details'=>$professional_details,'personal_details'=>$personal_details]);
    }





    public function next_add_details(Request $request)
    {

               //getting logged in user email

               $employee_id = $request->session()->get('employee_id');


               //fetching professional details of the employee

               $professional_details=Employee_Professional_Detail::where('employee_id','=', $employee_id)->get();

               $personal_details=Employee_Personal_Detail::where('employee_id','=', $employee_id)->get();


               return view('add_details_tab1',['professional_details'=>$professional_details,'personal_details'=>$personal_details]);





    }








}

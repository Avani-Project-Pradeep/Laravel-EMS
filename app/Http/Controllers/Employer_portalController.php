<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use App\Models\Employer_Professional_Detail;
use App\Models\Employer_Personal_Detail;

class Employer_portalController extends Controller
{
    //Return employerportal home page if session is active

    public function allowemployerportal($company_name, Request $request)
    {

        //getting logged in user email

        $email = $request->session()->get('employer_email');


        //fetching professional details of the logged in user
        $professional_details=Employer_Professional_Detail::where('employer_email','=', $email)->get();



     //fetching personal  details of the logged in user


        $personal_details=Employer_Personal_Detail::where('employer_email','=', $email)->get();


        return view('employer_portal_homepage',['professional_details'=>$professional_details,'personal_details'=>$personal_details])->with('company_name', $company_name);


    }


      


    /* ADD EMPLOYEE PAGE */


    public function add_employee($company_name)
    {
        return view('employer_portal_add_employee')->with('company_name', $company_name);
    }


    /* MANAGE EMPLOYEES_VIEW ALL EMPLOYEES */

    public function manage_employee_view($company_name)
    {

        return view('manage_employee_view')->with('company_name', $company_name);
    }





    public function manage_mg($company_name)
    {


        return view('employer_portal.manage_employees_mg')->with('company_name', $company_name);
        return redirect()->route('employer_portal_login');
    }





    //Logout
    public function employer_portal_logout()
    {

        //deleting all session values

        session()->pull('employer_email');

        session()->pull('company_name');
        session()->pull('role');

        //REDIRECT TO LOGIN PAGE
        return redirect()->route('employer_login');
    }
}

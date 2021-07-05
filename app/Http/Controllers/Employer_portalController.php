<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employer_portalController extends Controller
{
    //Return employerportal home page if session is active

    public function allowemployerportal($company_name)
    {
        if (session()->has('employer')) {

   

            return view('employer_portal_homepage')->with('company_name', $company_name);
        } else {
            return redirect()->route('employer_login');
        }
    }





    /* ADD EMPLOYEE PAGE */


    public function add_employee($company_name)
    {
        if(session()->has('employer'))
        {

        return view('employer_portal_add_employee')->with('company_name',$company_name);
    }
    else
    {
     return redirect()->route('employer_portal_login');
 }

    }
    

    /* MANAGE EMPLOYEES_VIEW ALL EMPLOYEES */
    
    public function manage_employee_view($company_name)
    {
        if(session()->has('employer'))
        {


        return view('manage_employee_view')->with('company_name',$company_name);
    }
    else
    {
     return redirect()->route('employer_portal_login');
 }

    }



 public function manage_mg($company_name)
 {
     if(session()->has('employer'))
     {


     return view('employer_portal.manage_employees_mg')->with('company_name',$company_name);
 }
 else
 {
  return redirect()->route('employer_portal_login');
}



    }





    //Logout
    public function employer_portal_logout()
    { 
        //IF SESSION IS SET THEN PULL SESSION AND LOGOUT
        
        if(session()->has('employer'))
        {
    
            session()->pull('employer');
        }
    
        //REDIRECT TO LOGIN PAGE
        return redirect()->route('employer_login');
    
    }
    
    }
    


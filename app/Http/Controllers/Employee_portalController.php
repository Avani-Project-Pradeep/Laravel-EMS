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
        $professional_details = Employee_Professional_Detail::where('employee_id', '=', $employee_id)->get();



        //fetching personal  details of the logged in user


        $personal_details = Employee_Personal_Detail::where('employee_id', '=', $employee_id)->get();


        return view('employee_portal.employee_portal_homepage', ['professional_details' => $professional_details, 'personal_details' => $personal_details]);
    }


    public function aboutemployer(Request $request)
    {

        $employee_id = $request->session()->get('employee_id');

        //return $employee_id;

        $email = Employee_Professional_Detail::where('employee_id', '=', $employee_id)->get('employer_email');

        //return $email;


        $professional_details = Employer_Professional_Detail::where('employer_email', '=', $email)->get();



        $personal_details = Employer_Personal_Detail::where('employer_email', '=', $email)->get();

        return $professional_details;


        return view('About_Employer', ['professional_details' => $professional_details, 'personal_details' => $personal_details]);
    }





    public function add_details(Request $request)
    {

        //getting logged in user email

        $employee_id = $request->session()->get('employee_id');


        //fetching professional details of the employee

        $professional_details = Employee_Professional_Detail::where('employee_id', '=', $employee_id)->get();

        $personal_details = Employee_Personal_Detail::where('employee_id', '=', $employee_id)->get();



        return view('employee_portal.add_details_tab1', ['professional_details' => $professional_details, 'personal_details' => $personal_details]);
    }




    public function next_add_details(Request $request)
    {


        $employee_id = $request->input('employee_id');
        $professional_details =   $request->validate([


            'designation' => 'required|max:50',
            'department' => 'required|max:50',
            'reporting_manager' => 'required|max:50',
            'division' => 'required|max:100',
            'employee_type' => 'required|max:50',
            'employee_status' => 'required|max:50',
            'doj' => 'required',
            'employer_name' => 'required|max:100',
            'shift' => 'required|max:50',
            'employee_status' => 'required|max:50',
            'project' => 'required|max:500',
            'work_experience' => 'required'




        ]);



        $employee_id = $request->input('employee_id');

        $employee = Employee_Professional_Detail::where('employee_id', $employee_id)
            ->update(
                ['designation' => $request->designation],
                ['department' => $request->department],
                ['division' => $request->division],
                ['employee_type' => $request->employee_type],
                ['doj' => $request->joining_date],
                ['reporting_manager' => $request->reporting_manager],
                ['shift' => $request->shift],
                ['employee_status' => $request->employee_status],
                ['reporting_manager' => $request->reporting_manager],
                ['employee_type' => $request->employee_type],
                ['shift' => $request->shift],
                ['project' => $request->project],
                ['work_experience' => $request->work_experience],
                ['employer_name' => $request->employer_name],






            );

        return redirect()->route('add_details_tab2', ['id' => $employee_id]);
    }



  public  function all_add_details($id, Request $request)
    {





        $personal_details = $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'gender' => 'required',
            'dob' => 'required',
            'state' => 'required|max:50',
            'city' => 'required|max:50',
            'permanent_address' => 'required|max:200',
            'current_address'=> 'required|max:200',
            'blood_group'=> 'required',
            'phone' => 'required',
            'emergency_phone_number'=> 'required|different from:phone|digits:10',
            'pan'=> 'required|max:10',
            'aadhar' => 'required|digits:12',
            "image" => 'required|image|mimes:jpg,png,jpeg|max:5000',
            'employee_email'=> 'required',


        ]);


        return "success";
    }}

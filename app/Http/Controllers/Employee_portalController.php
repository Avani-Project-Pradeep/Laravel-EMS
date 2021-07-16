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


        $email = Employee_Professional_Detail::where('employee_id', '=', $employee_id)->value('employer_email');



        $professional_details = DB::table('employer_professional_details')->where('employer_email','=',$email)->get();




        $personal_details = Employer_Personal_Detail::where('employer_email', '=', $email)->get();



        return view('about_employer', ['professional_details' => $professional_details, 'personal_details' => $personal_details]);
    }





    public function add_details(Request $request)
    {

        //getting logged in user email

        $employee_id = $request->session()->get('employee_id');


        //fetching professional details of the employee

        $professional_details = Employee_Professional_Detail::where('employee_id', '=', $employee_id)->get();




        return view('employee_portal.add_details_tab1', ['professional_details' => $professional_details]);
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





    public  function view_tab2($employee_id)
    {

        $personal_details = Employee_Personal_Detail::where('employee_id', '=', $employee_id)->get();


        return view('employee_portal.add_details_tab2', ['personal_details' => $personal_details, 'id' => $employee_id]);
    }






    public  function all_add_details($id, Request $request)
    {



        $employee_id = session('employee_id');




        $personal_details = $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'gender' => 'required',
            'dob' => 'required',
            'state' => 'required|max:50',
            'city' => 'required|max:50',
            'current_address' => 'required|max:200',
            'blood_group' => 'required',
            'phone' => 'required',
            'emergency_phone_number' => 'required|different:phone|digits:10',
            'pan' => 'required|max:10',
            'aadhar' => 'required|digits:12',
            'employee_email' => 'required',
            'education' => 'required',
            'hobbies' => 'required'


        ]);



        $existing_phone = Employee_Personal_Detail::where('employee_id', '=', $employee_id)->value('phone');



        if ($request->input('phone') != $existing_phone) {
            $request->validate([
                'phone' => 'required|digits:10|unique:employee_personal_details,phone'
            ]);
        }





        $existing_email = Employee_Personal_Detail::where('employee_id', '=', $employee_id)->value('employee_email');





        if ($request->input('employee_email') != $existing_email) {
            $request->validate([
                'employee_email' => 'required|email|unique:employee_personal_details,employee_email'

            ]);
        }



        $updated_employee_email = $request->input('employee_email');



        Employee_Personal_Detail::where('employee_id', $employee_id)
            ->update($personal_details);







        $image = Employee_Personal_Detail::where('employee_id', $employee_id)->value('image');

        if ($image == NULL && !isset($image)) {
            if (!$request->hasFile('image')) {

                $request->validate(['image' => 'required']);
            }
        }








        if ($request->hasFile('image')) {


            $validated = $request->validate([
                "image" => 'nullable|image|mimes:jpg,png,jpeg|max:5000',
            ]);




            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('images'), $filename);
            }


            $image_db = DB::table('employee_personal_details')
                ->where('employee_id', $employee_id)
                ->update(['image' => $filename]);


            return redirect()->route('employee_portal')
                ->with('success', 'You have successfully upload image.');
        } else {
            return back()
                ->with('empty', 'Please select an image to upload');
        }
    }




}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Employee_Professional_Detail;
use App\Models\Employee_Personal_Detail;
use App\Models\Employer_Professional_Detail;
use App\Models\Employer_Personal_Detail;
use Illuminate\Validation\Rule;


class Employee_portalController extends Controller
{

    // aftetr login to employee portal
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

    //aboutemployer
    public function aboutemployer(Request $request)
    {

        $employee_id = $request->session()->get('employee_id');


        $email = Employee_Professional_Detail::where('employee_id', '=', $employee_id)->value('employer_email');



        $professional_details = DB::table('employer_professional_details')->where('employer_email', '=', $email)->get();




        $personal_details = Employer_Personal_Detail::where('employer_email', '=', $email)->get();



        return view('about_employer', ['professional_details' => $professional_details, 'personal_details' => $personal_details]);
    }



    //add details

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


            'designation' => 'required|regex:/^[A-Za-z -]+$/i|max:50',
            'department' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|max:50',
            'reporting_manager' => 'required|regex:/^[A-Za-z -]+$/i|max:50',
            'division' => 'required|regex:/^[A-Za-z0-9 ,.-]+$/i|max:50',
            'employee_type' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i|max:50',
            'employee_status' => 'required|max:50',
            'doj' => 'required',
            'shift' => 'required|max:50',
            'employee_status' => 'required|max:50',
            'project' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|max:500',
            'work_experience' => 'regex:/[a-zA-Z0-9]/|regex:/^[A-Za-z0-9 ,.-]+$/i|required|max:200',




        ]);



        $employee_id = $request->input('employee_id');

        $employee = Employee_Professional_Detail::where('employee_id', $employee_id)
            ->update(
                [
                    'designation' => $request->designation,
                    'department' => $request->department,
                    'division' => $request->division,
                    'employee_type' => $request->employee_type,
                    'doj' => $request->doj,
                    'reporting_manager' => $request->reporting_manager,
                    'shift' => $request->shift,
                    'employee_status' => $request->employee_status,
                    'reporting_manager' => $request->reporting_manager,
                    'employee_type' => $request->employee_type,
                    'shift' => $request->shift,
                    'project' => $request->project,
                    'work_experience' => $request->work_experience,
                    'skills' => $request->skills,





                ]
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
            'first_name' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i|max:50|',
            'last_name' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i|max:50',
            'gender' =>  [

                Rule::in(['male', 'female', 'Male', 'Female', 'MALE', 'FEMALE', 'other', 'OTHER', 'Other'])
            ],
            'dob' => 'required|before:-14 years',
            'state' => 'required|max:50|regex:/^[A-Za-z ]+$/i',
            'city' => 'required|max:50|regex:/^[A-Za-z ]+$/i',
            'current_address' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|max:200',
            'employee_bloodgroup' => 'required',
            'education' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.%-]+$/i|',
            'employee_hobbies' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i',
            'image' => 'required',
            'permanent_address' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|max:200',


        ]);





        $existing_pan = Employee_Personal_Detail::where('employee_id', '=', $employee_id)->value('pan');



        if ($request->input('pan') != $existing_pan) {
            $request->validate([
                'pan' => 'required|regex: /[A-Z]{5}[0-9]{4}[A-Z]{1}$/|size:10|unique:employee_personal_details,pan',
            ]);

            Employee_Personal_Detail::where('employee_id', $employee_id)->update([
                'pan' => $request->input('pan')
            ]);
        }





        $existing_pan = Employee_Personal_Detail::where('employee_id', '=', $employee_id)->value('pan');



        if ($request->input('pan') != $existing_pan) {
            $request->validate([
                'pan' => 'required|regex: /[A-Z]{5}[0-9]{4}[A-Z]{1}$/|size:10|unique:employee_personal_details,pan',
            ]);

            Employee_Personal_Detail::where('employee_id', $employee_id)->update([
                'pan' => $request->input('pan')
            ]);
        }



        $existing_aadhar = Employee_Personal_Detail::where('employee_id', '=', $employee_id)->value('aadhar');



        if ($request->input('aadhar') != $existing_aadhar) {
            $request->validate([
                'aadhar' => 'required|digits:12|unique:employee_personal_details,aadhar',
            ]);

            Employee_Personal_Detail::where('employee_id', $employee_id)->update([
                'aadhar' => $request->input('aadhar')
            ]);
        }







        $existing_phone = Employee_Personal_Detail::where('employee_id', '=', $employee_id)->value('phone');



        if ($request->input('phone') != $existing_phone) {
            $request->validate([
                'phone' => 'required|digits:10|unique:employer_personal_details,phone|unique:employee_personal_details,phone',
            ]);

            Employee_Personal_Detail::where('employee_id', $employee_id)->update([
                'phone' => $request->input('phone')
            ]);


            DB::table('employee_registration')->where('phone_number', '=', $existing_phone)->update(['phone_number' => $request->input('phone')]);
        }


        $emergency_phone_valid = $request->validate([
            'emergency_phone_number' => 'required|digits:10|different:phone'
        ]);



        if ($emergency_phone_valid) {
            Employee_Personal_Detail::where('employee_id', $employee_id)->update([
                'emergency_phone_number' => $request->input('emergency_phone_number')
            ]);
        }


        $existing_email = Employee_Personal_Detail::where('employee_id', '=', $employee_id)->value('employee_email');


        if ($request->input('employee_email') != $existing_email) {

            $request->validate([
                'employee_email' => 'required|email|unique:users,email|unique:employee_personal_details,employee_email',

            ]);

            $updated_employee_email = $request->input('employee_email');

            DB::table('users')
                ->where('email', $existing_email)
                ->update([
                    'email' => $updated_employee_email

                ]);


            Employee_Personal_Detail::where('employee_id', $employee_id)->update([
                'employee_email' => $request->input('employee_email')
            ]);




            $request->session()->put('employee_email', $updated_employee_email);
        }








        Employee_Personal_Detail::where('employee_id', $employee_id)->update($personal_details);






        $image = Employee_Personal_Detail::where('employee_id', $employee_id)->value('image');









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
                ->with('success', 'You have successfully added details');
        } else {
            return back()
                ->with('empty', 'Please select an image to upload');
        }
    }






    //Logout
    public function employee_portal_logout(Request $request)
    {

        //deleting all session values

        $request->session()->flush();

        //REDIRECT TO LOGIN PAGE
        return redirect()->route('employee_login');
        //Also there is an auto logout added if the user is inactive for more than 5 mins. This is done using  meta refresh method

    }
}

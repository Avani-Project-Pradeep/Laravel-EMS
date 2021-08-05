<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


use App\Models\User;
use App\Models\Employee_Professional_Detail;
use App\Models\Employee_Personal_Detail;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class UpdateEmployee_Controller extends Controller
{

    public function nextupdateemployee(Request $request)
    {
        //VALIDATIONS
     $professional_details=   $request->validate([


            'employee_id' => 'required|',
            'designation' => 'required|regex:/^[A-Za-z -]+$/i|max:50',
            'company_name' => 'required|max:50|regex:/^[-A-Za-z .,_!#@&$]+$/i',

            'department' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|max:50',
            'reporting_manager' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i|max:50',
            'division' => 'required|regex:/^[A-Za-z0-9 ,.-]+$/i|max:100',
            'employee_type' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i|max:50',
            'employee_status' => 'required|max:50',
            'joining_date'=>'required',
            'company_name' => 'required|max:50',
            'shift' => 'required|max:50',
             'employee_status'=>'required|max:50',



        ]);



        $employee_id= $request->input('employee_id');


            //update function

        $employee = Employee_Professional_Detail::where('employee_id',$employee_id)
                  ->update([
         'employer_email'=>$request->session()->get('employer_email'),
        'designation' => $request->designation,
        'department' => $request->department,
        'division' => $request->division,
        'employee_type' => $request->employee_type,
       'doj' => $request->joining_date,
        'company_name' => $request->company_name,
        'reporting_manager' => $request->reporting_manager,
        'shift' => $request->shift,
       'employee_status' => $request->employee_status
                   ] );




         return redirect()->route('updateemployee_tab2',['id'=>$employee_id]);





    }
    public function actionupdateemployee(Request $request)
    {


         $employee_id=$request->input('employee_id');


         $personal_details = $request->validate([
            'first_name'=>'required|max:50|regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i',
           'last_name'=>'required|max:50|regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i',
           'gender' =>  [

            Rule::in(['male', 'female','Male','Female','MALE','FEMALE','other','OTHER','Other'])
        ],
           'phone'=>'required|digits:10|unique:employee_personal_details,phone',
           'dob' => 'required|before:-14 years|nullable',
           'state'=>'max:50|regex:/^[A-Za-z ]+$/i',
           'city'=>'max:50|regex:/^[A-Za-z ]+$/i',
           'permanent_address' => 'regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|nullable|max:200',


        ]);


        $existing_email = Employee_Personal_Detail::where('employee_id', '=', $employee_id)->value('employee_email');





        if ($request->input('employee_email') != $existing_email) {
            $request->validate([
                'employee_email' => 'required|email|unique:employee_personal_details,employee_email'

            ]);
        }

        $updated_employee_email = $request->input('employee_email');






        Employee_Personal_Detail::where('employee_id', $employee_id)

            ->update([


                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'city' => $request->input('city'),
                'dob' => $request->input('dob'),
                'state' => $request->input('state'),
                'gender' => $request->input('gender'),
                'address' => $request->input('address'),
                'education' => $request->input('education'),
                'phone' => $request->input('phone'),
                'employee_email' => $request->input('employee_email')





            ]);

 DB::table('users')
 ->where('email', $existing_email)
 ->update([
     'email' => $updated_employee_email

 ]);



 return redirect()->route('manage')->with('success','All details are updated successfully');

    }
}





<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


use App\Models\User;
use App\Models\Employee_Professional_Detail;
use App\Models\Employee_Personal_Detail;
use App\Models\Employer_Personal_Detail;


class AddEmployee_Controller extends Controller
{

    public function nextaddemployee(Request $request)
    {
        //VALIDATIONS
     $professional_details=   $request->validate([


            'employee_id' => 'required|digits_between:1,10|unique:employee_professional_details,employee_id',
            'designation' => 'required|regex:/^[A-Za-z ]+$/i|max:50',
            'company_name' => 'required|max:50|regex:/[a-zA-Z]/|regex:/^[-A-Za-z .,_!#@&$]+$/i|',

            'department' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|max:50',
            'reporting_manager' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i|max:50',
            'division' => 'required|regex:/^[A-Za-z0-9 ,.-]+$/i|max:100',
            'employee_type' => 'required|regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i|max:50',
            'employee_status' => 'required|max:50',
            'joining_date'=>'required',
            'shift' => 'required|max:50',
             'employee_status'=>'required|max:50',



        ]);


        //Inserting data


        $employee_id= $request->input('employee_id');

        $employee = new Employee_Professional_Detail ;
        $employee->employer_email=$request->session()->get('employer_email');

        $employer_email=$request->session()->get('employer_email');

    $employer_firstname=Employer_Personal_Detail::where('employer_email','=',$employer_email)->value('first_name');

    $employer_lastname=Employer_Personal_Detail::where('employer_email','=',$employer_email)->value('last_name');

    $employee->employer_name=$employer_firstname." ".$employer_lastname;
        $employee->employee_id = $request->employee_id;
        $employee->designation = $request->designation;
        $employee->department = $request->department;
        $employee->division = $request->division;
        $employee->employee_type = $request->employee_type;
        $employee->doj = $request->joining_date;
        $employee->company_name = $request->company_name;
        $employee->reporting_manager = $request->reporting_manager;
        $employee->shift = $request->shift;
        $employee->employee_status = $request->employee_status;
        $employee->save();



        $employee = new Employee_Personal_Detail ;
       $employee->employee_id = $request->employee_id;
       $employee->save();







           //redirect

         return redirect()->route('addemployee_tab2',['id'=>$employee_id]);





    }


    public function actionaddemployee(Request $request)
    {


        $personal_details = $request->validate([
            'first_name'=>'required|max:50|regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i',
           'last_name'=>'required|max:50|regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i',
           'gender' =>  [

            Rule::in(['male', 'female','Male','Female','MALE','FEMALE','other','OTHER','Other'])
        ],

       'employee_email' => 'required|email|unique:employer_professional_details,employer_email|unique:employee_personal_details,employee_email',

       'phone' => 'required|digits:10|unique:employer_personal_details,phone|unique:employee_personal_details,phone',
       'dob' => 'required|before:-14 years|',
           'state'=>'max:50|regex:/^[A-Za-z ]+$/i|nullable',
           'city'=>'max:50|regex:/^[A-Za-z ]+$/i|nullable',
           'permanent_address' => 'regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|nullable|max:200',


        ]);


 $employee_id=$request->input('employee_id');


 Employee_Personal_Detail::where('employee_id', $employee_id)
 ->update($personal_details);

 return redirect()->route('manage')->with('success','Employee added successfully');

    }
}

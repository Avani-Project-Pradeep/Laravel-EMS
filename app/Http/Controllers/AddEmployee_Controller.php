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

class AddEmployee_Controller extends Controller
{
    public function nextaddemployee(Request $request)
    {
        //VALIDATIONS
     $professional_details=   $request->validate([


            'employee_id' => 'required|digits_between:1,10,',
            'designation' => 'required|max:50',
            'company_name' => 'required|max:50',
            'department' => 'required|max:50',
            'reporting_manager' => 'required|max:50',
            'division' => 'required|max:100',

            'employee_type' => 'required|max:50',
            'employee_status' => 'required|max:50',
            'joining_date'=>'required',
            'company_name' => 'required|max:50',
            'shift' => 'required|max:50',
            Rule::in(['India', 'Abroad']),
             'employee_status'=>'required|max:50',



        ]);


        $company_name = $request->session()->get('company_name');



        return view('employer_portal_addemployeetab2',['professional_details'=>$professional_details])->with('company_name', $company_name);




    }


    public function actionaddemployee(Request $request)
    {


    $employee = new Employee_Professional_Detail ;

    $employee->employee_id = $request->employee_id;
    $employee->employee_email = $request->email;
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
    $employee->employee_email = $request->email;
    $employee->first_name = $request->first_name;
    $employee->last_name = $request->last_name;
    $employee->gender = $request->gender;
    $employee->dob = $request->dob;
    $employee->phone = $request->phone;
    $employee->state = $request->state;
    $employee->city = $request->city;
    $employee->permanent_address = $request->permanent_address;
    $employee->education = $request->educational_details;
    $employee->save();



return 'success';



















    }
}

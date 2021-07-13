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


            'employee_id' => 'required|digits_between:1,10|unique:Employee_Professional_Details,Employee_id',
            'designation' => 'required|max:50',
            'company_name' => 'required|max:50|unique:Employee_Professional_Details,company_name',
            'department' => 'required|max:50',
            'reporting_manager' => 'required|max:50',
            'division' => 'required|max:100',
            'employee_type' => 'required|max:50',
            'employee_status' => 'required|max:50',
            'joining_date'=>'required',
            'company_name' => 'required|max:50',
            'shift' => 'required|max:50',
             'employee_status'=>'required|max:50',



        ]);



        $employee_id= $request->input('employee_id');

        $employee = new Employee_Professional_Detail ;
        $employee->employer_email=$request->session()->get('employer_email');
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









         return redirect()->route('addemployee_tab2',['id'=>$employee_id]);





    }


    public function actionaddemployee(Request $request)
    {


        $personal_details = $request->validate([
            'first_name'=>'required|max:50',
           'last_name'=>'required|max:50',
           'gender'=>'required',
           'employee_email' => 'required|email|unique:employee_personal_details,employee_email',
           'phone'=>'required|digits:10|unique:employee_personal_details,phone',
           'dob'=>'required',
           'state'=>'required|max:50',
           'city'=>'required|max:50',
           'permanent_address' => 'required|max:200',


        ]);


 $employee_id=$request->input('employee_id');


 Employee_Personal_Detail::where('employee_id', $employee_id)
 ->update($personal_details);


    }
}

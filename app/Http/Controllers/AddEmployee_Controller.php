<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class AddEmployee_Controller extends Controller
{
    public function nextaddemployee(Request $request)
    {
        //VALIDATIONS
        $request->validate([


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

        $employee_id = $request->input('employee_id');
        $designation = $request->input('designation');      
        $company_name=$request->input('company_name');
        $department = $request->input('department');
        $reporting_manager=$request->input('reporting_manager');
        $division =$request->input('division');
        
        $employee_type =$request->input('employee_type');
        $employee_status = $request->input('employee_status');
        $joining_date=$request->input('joining_date');
        $shift=$request->input('shift');

        $professional_details=['employee_id'=>$employee_id,'designation'=>$designation,'company_name'=>$company_name,'shift'=>$shift,'employee_status'=>$employee_status,'department'=>$department,'reporting_manager'=>$reporting_manager,'division'=>$division,'employee_type'=>$employee_type,'joining_date'=>$joining_date] ;


        return view('employer_portal_addemployeetab2',['professional_details'=>$professional_details])->with('company_name', $company_name);

        

    }


    public function actionaddemployee(Request $request)
    {

        return $request;
    }
}

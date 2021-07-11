<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee_Professional_Detail;
use App\Models\Employee_Personal_Detail;
use App\Http\Controllers\Employer_portalController;



class ManageEmployee extends Controller
{
    function show()
    {
        $employees = DB::table('employee_professional_details')
        ->join('employee_personal_details', 'employee_professional_details.employee_id', '=', 'employee_personal_details.employee_id')
        ->select('employee_professional_details.employee_id', 'employee_professional_details.designation', 'employee_professional_details.doj',  'employee_professional_details.status','employee_personal_details.first_name','employee_personal_details.last_name', 'employee_personal_details.image','employee_personal_details.employee_email')
        ->get();



        return view('manage_employee_view',['employees' => $employees]);
    }


    public function changestatus(Request $request)
    {


        $employee = Employee_Professional_Detail::find($request->employee_id);
        $employee->status = $request->status;
        $employee->save();

        return response()->json(['success'=>'Status change successfully.']);
    }





    public function home(Request $request)
    {
      $company_name=$request->session()->get('company_name');

      return redirect()->route('employer_portal', ['company_name' => $company_name]);



    }



    public function viewemployee(Request $request,$employee_id)
    {


        $professional_details=Employee_Professional_Detail::where('employee_id','=', $employee_id)->get();
        $personal_details=Employee_Personal_Detail::where('employee_id','=',$employee_id)->get();
        return view('view_employee',['professional_details'=>$professional_details,'personal_details'=>$personal_details]);


    }



    public function editemployee($employee_id)
    {
        $professional_details=Employee_Professional_Detail::where('employee_id','=', $employee_id)->get();
        $personal_details=Employee_Personal_Detail::where('employee_id','=',$employee_id)->get();
        return view('edit_employee',['professional_details'=>$professional_details,'personal_details'=>$personal_details]);



    }


    }



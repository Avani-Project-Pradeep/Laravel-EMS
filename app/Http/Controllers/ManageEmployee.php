<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee_Professional_Detail;
use App\Models\User;

use App\Models\Employee_Personal_Detail;
use App\Http\Controllers\Employer_portalController;



class ManageEmployee extends Controller
{
    function show()
    {
        $employees = DB::table('employee_professional_details')
        ->join('employee_personal_details', 'employee_professional_details.employee_id', '=', 'employee_personal_details.employee_id')
        ->select('employee_professional_details.employee_id', 'employee_professional_details.designation', 'employee_professional_details.doj',  'employee_professional_details.employee_status','employee_personal_details.first_name','employee_personal_details.last_name', 'employee_personal_details.image','employee_personal_details.employee_email')
        ->get();



        return view('manage_employee_view',['employees' => $employees]);
    }

















    public function active(Request $request,$employee_id)
    {


        $professional_details=Employee_Professional_Detail::where('employee_id','=', $employee_id)->update(['employee_status'=>1]);
        return redirect()->route('manage');


    }




    public function inactive(Request $request,$employee_id)
    {


        $professional_details=Employee_Professional_Detail::where('employee_id','=', $employee_id)->update(['employee_status'=>0]);
        return redirect()->route('manage');


    }


    public function viewemployee(Request $request,$employee_id)
    {


        $professional_details=Employee_Professional_Detail::where('employee_id','=', $employee_id)->get();
        $personal_details=Employee_Personal_Detail::where('employee_id','=',$employee_id)->get();
        return view('view_employee',['professional_details'=>$professional_details,'personal_details'=>$personal_details,'employee_id'=>$employee_id]);


    }





    public function editemployee($employee_id)
    {
        $professional_details=Employee_Professional_Detail::where('employee_id','=', $employee_id)->get();
        $personal_details=Employee_Personal_Detail::where('employee_id','=',$employee_id)->get();
        return view('edit_employee',['professional_details'=>$professional_details,'personal_details'=>$personal_details,'employee_id'=>$employee_id]);



    }




    public function editemployee_action($employee_id,Request $request)
   {



    $professional_details= $request->validate([


        'designation' => 'max:50',
        'location' =>'max:50',
        'company_name' => 'max:50',
        'department' => 'max:50',
        'division' => 'max:100',



    ]);

$designation=$request->input('designation');


    $personal_details = $request->validate([
        'first_name'=>'max:50',
       'last_name'=>'max:50',
       'state'=>'max:50',
       'city'=>'max:50',
       'educational_details' => 'max:200',


    ]);










    $existing_phone=Employee_Personal_Detail::where('employee_id','=', $employee_id)->value('phone');



    if($request->input('phone')!=$existing_phone)

    {               $request->validate([
            'phone' => 'required|digits:10|unique:employer_personal_details,phone'
        ]);


    }





    $existing_email=Employee_Personal_Detail::where('employee_id','=', $employee_id)->value('employee_email');





    if($request->input('employee_email')!=$existing_email)
    {
        $request->validate([
        'employee_email' => 'required|email|unique:employee_personal_details,employee_email'

        ]);

    }

    $updated_employee_email=$request->input('employee_email');



    Employee_Personal_Detail::where('employee_id', $employee_id)

    ->update([


        'first_name'=>$request->input('first_name'),
        'last_name'=>$request->input('last_name'),
        'city'=>$request->input('city'),
        'dob'=>$request->input('dob'),
        'state'=>$request->input('state'),
        'gender'=>$request->input('gender'),
        'address'=>$request->input('address'),
        'education'=>$request->input('education'),
        'phone'=>$request->input('phone'),
        'employee_email'=>$request->input('employee_email')





 ]);


 Employee_Professional_Detail::where('employee_id', $employee_id)

 ->update([

    'company_name'=>$request->input('company_name'),

    'designation'=>$request->input('designation'),
    'division'=>$request->input('division'),
    'doj'=>$request->input('doj'),
    'work_experience'=>$request->input('work_experience'),
    'skills'=>$request->input('skills'),


]);


DB::table('users')
->where('email',$existing_email)
->update([
        'email'=>$updated_employee_email

 ]);




 return redirect()->route('manage');





   }







    public function home(Request $request)
    {
      $company_name=$request->session()->get('company_name');

      return redirect()->route('employer_portal');



    }




    }



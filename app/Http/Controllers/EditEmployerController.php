<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employer_Professional_Detail;
use App\Models\Employee_Professional_Detail;

use App\Models\Employer_Personal_Detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;




class EditEmployerController extends Controller
{

    public function editemployer( Request $request)
    {
        //getting logged in user email

        $email = $request->session()->get('employer_email');


        //fetching professional details of the logged in user

        $professional_details=Employer_Professional_Detail::where('employer_email','=', $email)->get();

        $personal_details=Employer_Personal_Detail::where('employer_email','=', $email)->get();


    return view('employer_portal_homepage_edit',['professional_details'=>$professional_details,'personal_details'=>$personal_details]);


    }




//edits employer
public function editemployeraction(Request $request)
{


        $email = $request->session()->get('employer_email');

        $existing_phone=Employer_Personal_Detail::where('employer_email','=', $email)->value('phone');

        if($request->input('phone_number')!=$existing_phone)
        {
            $request->validate([
                'phone_number' => 'required|digits:10|unique:employer_personal_details,phone'
            ]);


        }


        $existing_email=$request->session()->get('employer_email');


        if($request->input('email')!=$existing_email)
        {
            $request->validate([
            'email' => 'required|email|unique:users,email'

            ]);

        }



        $existing_company=$request->session()->get('company_name');
        if($request->input('company_name')!=$existing_company)
        {
            $request->validate([

                'company_name' => 'required|max:50|string|regex:/[a-zA-Z]/|regex:/^[A-Za-z .,-_]+$/i|unique:employer_professional_details,company_name'

            ]);

        }








         $request->validate([


            'designation'=>'regex:/^[A-Za-z -]+$/i|nullable',
            'location'=>'regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|nullable',
            'division'=>'regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|nullable',
            'work_experience'=>'regex:/[a-zA-Z0-9]/|regex:/^[A-Za-z0-9 ,.-]+$/i|nullable',
            'skills' =>'regex:/[a-zA-Z]/|regex:/^[-A-Za-z0-9 ,._]+$/i|nullable',
            'bank_details' =>'regex:/[a-zA-Z]/|regex:/^[-A-Za-z0-9 ,._]+$/i|nullable',
            'first_name'=>'regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i|nullable',
            'last_name'=>'regex:/[a-zA-Z]/|regex:/^[A-Za-z -.]+$/i|nullable',
            'city' => 'required|max:50|regex:/^[A-Za-z ]+$/i',
            'state' => 'required|max:50|regex:/^[A-Za-z ]+$/i',
            'gender' =>  [

                Rule::in(['male', 'female','Male','Female','MALE','FEMALE','other','OTHER']),
            ],

            'address'=>'regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|nullable',
            'education'=>'regex:/[a-zA-Z]/|regex:/^[A-Za-z0-9 ,.-]+$/i|nullable',
            'dob' => 'before:-14 years|nullable',
            'doj' => 'before:tomorrow|nullable',










    ]);





          //EDIT PERSONAL DETAILS


          DB::table('employer_personal_details')
          ->where('employer_email',$email)
           ->update([


             'first_name'=>$request->input('first_name'),
             'last_name'=>$request->input('last_name'),
             'city'=>$request->input('city'),
             'dob'=>$request->input('dob'),
             'state'=>$request->input('state'),
             'gender'=>$request->input('gender'),
             'address'=>$request->input('address'),
             'education'=>$request->input('education'),
             'phone'=>$request->input('phone_number'),




      ]);

      $request->session()->put('employer_first_name', $request->input('first_name'));
      $request->session()->put('employer_last_name', $request->input('last_name'));



      //EDIT PROFESSIONAL DETAILS

     DB::table('employer_professional_details')
     ->where('employer_email',$email)
      ->update([

        'company_name'=>$request->input('company_name'),

        'designation'=>$request->input('designation'),
        'location'=>$request->input('location'),
        'division'=>$request->input('division'),
        'doj'=>$request->input('doj'),
        'work_experience'=>$request->input('work_experience'),
        'skills'=>$request->input('skills'),
        'bank_details'=>$request->input('bank_details'),


 ]);



//EDIT EMAIL ID IN USERS
 DB::table('users')
 ->where('email',$email)
 ->update([
         'email'=>$request->input('email'),

  ]);

 $check= DB::table('employee_professional_details')->where('employer_email','=', $email)->get();


 if($check!=[])
 {
    DB::table('employee_professional_details')
       ->where('employer_email','=', $email)
       ->update(['employer_email'=>$request->input('email'),
    ]);

 }


  $request->session()->put('employer_email', $request->input('email'));





  //EDIT EMAIL ID IN EMPLOYEE TABLE
  $employee=Employee_Professional_Detail::where('employer_email',$email)->first();

  if(isset($employee))
  $employee->update([
          'email'=>$request->input('email'),

   ]);



  //RETURN TO HOMEPAGE
  return redirect()->route('employer_portal')->with('success','Details edited successfully');


}

}

<?php

namespace App\Http\Controllers;

use App\Models\Employee_Personal_Detail;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Employee_LoginController extends Controller
{

    public function loginform()

    {

        return view('employee_login_form');

    }

    public function loginverify(Request $request)
    {


        $request->validate([


            'email' => 'required|email',
            'password' => 'required'

        ]);



        $user = User::where('email', $request->email)->first();

        if ($user) {
            //if user exists

            //verify password
            if (Hash::check($request->password, $user->password))
            {


                 if($user->role =='employee')
                 {


                //all inputs are valid,leads to set session

                $request->session()->put('employee_email', $request->email);
                $request->session()->put('role', 'employee');

                //check if employee added through email
                $employee_check =Employee_Personal_Detail::where('employee_email', $request->email)->first();


                //if not added return view not added
                if(!$employee_check)
                {
                    return redirect()->route('no_employee_added');
                }


                $employee_id = Employee_Personal_Detail::where('employee_email', $request->email)->value('employee_id');




                $request->session()->put('employee_id', $employee_id);



                //return the url for employee_portal
                return redirect()->route('employee_portal');
                 }
                 else
                 {
                    return back()->with('fail', 'You are not allowed to login as employee');

                 }
            }
        }

        return back()->with('fail', 'Invalid credentials,Please enter valid account details');
    }
}

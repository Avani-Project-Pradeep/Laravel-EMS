<?php

namespace App\Http\Controllers;

use App\Models\Employee_Professional_Detail;
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



                //all inputs are valid,leads to set session

                $request->session()->put('employee_email', $request->email);
                $request->session()->put('role', 'employee');

                $employee_id = Employee_Professional_Detail::where('employee_email', $request->email)->value('employee_id');
                $request->session()->put('employee_id', $employee_id);



                //return the url for employer_portal with company name
                return redirect()->route('employee_portal');
            }
        }

        return back()->with('fail', 'Invalid credentials,Please enter valid account details');
    }
}

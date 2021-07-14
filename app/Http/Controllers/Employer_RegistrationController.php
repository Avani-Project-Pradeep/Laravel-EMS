<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\employer_successfull_registration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class Employer_RegistrationController extends Controller
{
    public function registerform()
    {
        return view('employer_register_form');//returns form
    }



    //handle form action



    public function registeremployees(Request $request)    {
        //VALIDATIONS
        $request->validate([

            'company_name' => 'required|max:50|string|regex:/^([^0-9]*)$/|
            unique:employer_professional_details,company_name',

            'company_website' => 'required|url',

            'terms_and_conditions' => 'required|file|max:500|mimes:pdf',

            'company_documents' => 'required|file|max:500|mimes:pdf',

            'phone_number' => 'required|digits:10|unique:employer_personal_details,phone',

            'city' => 'required|max:50|regex:/^([^0-9]*)$/',
            'state' => 'required|max:50|regex:/^([^0-9]*)$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:8|confirmed',

            'password_confirmation' => 'required|max:8',




        ]);

        //INSERT INTO USERS TABLE
        DB::table('users')->insert([
            'email' =>$request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role'=>'employer'
        ]);

        //INSERT INTO EMPLOYER PROFESSIONAL DETAILS

        DB::table('employer_professional_details')->insert([
            'employer_email' =>$request->input('email'),
            'company_name'=>$request->input('company_name'),
            'company_website' => $request->input('company_website'),
            'tc' => $request->file('terms_and_conditions'),
            'docs' => $request->file('company_documents'),
            'location' => $request->input('city'),

        ]);


        //INSERT INTO EMPLOYER PERSONAL DETAILS

        DB::table('employer_personal_details')->insert([
            'employer_email' =>$request->input('email'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'phone'=>$request->input('phone_number'),


        ]);




              /* REGISTRATION COMPLETED */

$email_success = $request->input('email');

/* SENDING EMAIL CONFIRMATION */

return redirect()->route('success_registration', $email_success);




    }

    //SENDING CONFIRMATION SUCCESS MAIL
public function success_registration($email_success)
{
Mail::to($email_success)->send(
    new employer_successfull_registration()
);
return view('confirm_registration');
}






}

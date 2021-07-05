<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employer_Professional_Detail;
use App\Models\Employer_Personal_Detail;
use Illuminate\Support\Facades\Mail;
use App\Mail\employer_successfull_registration;
use Illuminate\Support\Facades\Hash;


class Employer_RegistrationController extends Controller
{
    public function registerform()
    {
        return view('employer_register_form');
    }

    public function registeremployees(Request $request)
    {
        //VALIDATIONS
        $request->validate([

            'company_name' => 'required|max:50|  unique:users,company_name',

            'company_website' => 'required|url',

            'terms_and_conditions' => 'required|file|max:500|mimes:pdf',

            'company_documents' => 'required|file|max:500|mimes:pdf',

            'phone_number' => 'required|digits:10|unique:employer_professional_details,phone',
            'city' => 'required|max:50|',
            'state' => 'required|max:50|',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:8||confirmed',

            'password_confirmation' => 'required|max:8',




        ]);

        //CREATING NEW  DATA OF USER MODEL
        $user = User::create([
            'company_name' => $request->input('company_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))

        ]);

        //GET THE USER ID OF THE  INSERTED RECORD  
        $user_id = User::where('email', $request->input('email'))->value('id');

        //ADDING PROFESSIONAL DETAILS OF THE USER FOR GIVEN USER ID
        $employer_professional_details = Employer_Professional_Detail::create([

                'company_website' => $request->input('company_website'),
                'tc' => $request->file('terms_and_conditions'),
                'docs' => $request->file('company_documents'),
                'phone' => $request->input('phone_number'),
                'location' => $request->input('city'),
                'user_id' => $user_id

            ]);

        //ADDING PERSONAL DETAILS OF THE USER FOR GIVEN USER ID

        $employer_personal_details = Employer_Personal_Detail::create([
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'user_id'=>$user_id
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

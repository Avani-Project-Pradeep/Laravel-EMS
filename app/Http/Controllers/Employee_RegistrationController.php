<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Mail\employee_successfull_registration;


class Employee_RegistrationController extends Controller
{
    public function registerform()
    {
        return view('employee_registration_form');

    }

    public function actionregister(Request $request )
    {

        $request->validate([

            "first_name" => 'required|max:50|string|',
            "last_name"=> 'required|max:50|string|',
            "phone_number"=>'required|digits:10|unique:employee_personal_details,phone|',
            "city"=>'required|max:50|',
            "state"=>'required|max:50|',
            "image"=>'nullable|image|mimes:jpg,png,jpeg|max:5000',
            "address"=>'required|max:200',
            "email"=>'required|email|unique:users,email',


        ]);


        $password = Str::random(5);


        //INSERT INTO USERS TABLE
        DB::table('users')->insert([
            'email' =>$request->input('email'),
            'password' => Hash::make($password),
            'role'=>'employee'
        ]);


         //INSERT INTO EMPLOYEE_REGISTRATION
         DB::table('employee_registration')->insert([
             'first_name'=>$request->input('first_name'),
             'last_name'=>$request->input('last_name'),
            'email' =>$request->input('email'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'phone_number'=>$request->input('phone_number'),
            'image' => $request->file('image'),
            'address'=> $request->input('address'),


        ]);

                 /* REGISTRATION COMPLETED */



                 /* SENDING EMAIL */


$email_success = $request->input('email');
$first_name = $request->input('first_name');
$last_name = $request->input('last_name');


/* SENDING NAME AND PASSWORD */
$name="$first_name"."$last_name";

$data=([
    'name' =>$name,
    'password'=>$password

]);


   /* SENDING SUCCESSFULL REGISTRATION MAIL */

    Mail::to($email_success,$data)->send(
        new employee_successfull_registration($data)
    );


/* RETURN RESPONSE */


return view('confirm_registration');


 }


}

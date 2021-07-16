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

      $validate=  $request->validate([

            "first_name" => 'required|max:50|string|regex:/^([^0-9]*)$/',
            "last_name"=> 'required|max:50|string|regex:/^([^0-9]*)$/',
            "phone_number"=>'required|digits:10|unique:employee_registration,phone_number',
            "city"=>'required|max:50|regex:/^([^0-9]*)$/',
            "state"=>'required|max:50|regex:/^([^0-9]*)$/',
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
            'address'=> $request->input('address'),


        ]);


           //Image registration
           if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images'),$filename);
        }


        $image_db = DB::table('employee_registration')
        ->where('email',$validate['email'])
        ->update(['image' => $filename]);








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

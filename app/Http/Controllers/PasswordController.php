<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\resetpassword;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


use App\Models\User;




class PasswordController extends Controller
{
    public function inputmailform()
    {
        return view('forgotpass');
    }


    public function inputmailcheck(Request $request)
    {
        $user = DB::table('users')->where('email', '=', $request->email)->get();

        //Check if the user exists
       if (count($user) < 1) {
    return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
       }
else
{
    //Create Password Reset Token
DB::table('password_resets')->update([
    'email' => $request->email,
    'token' => str::random(60),
    'created_at' => Carbon::now()
]);



//Get the token just created above
$tokenData = DB::table('password_resets')
    ->where('email', $request->email)->value('token');
$email=$request->email;




$name=DB::table('employee_personal_details') ->where('employee_email', $request->email)->value('first_name');
    //Generate, the password reset link. The token generated is embedded in the link


$link = '/password/reset/'.'token='.$tokenData.'?email=' .urlencode($email);

    
$data=([
    'name' =>$name,
    'link'=>$link


]);


   /* SENDING MAIL */ 

   Mail::to($email,$data)->send(
    new resetpassword($data)
);


return "Please check your mail";


    }

 
    }


    public function resetcheck(Request $request)
    {
            //Validate input
            $validator = Validator::make($request->all(), [
                'password' => 'required|confirmed|max:8',
             ]);
        
            //check if payload is valid before moving on
            if ($validator->fails()) {
                return redirect()->back()->withErrors(['email' => 'Please complete the form']);
            }
        
            $password = $request->password;
        // Validate the token
            $tokenData = DB::table('password_resets')
            ->where('token', $request->token)->first();
        // Redirect the user back to the password reset request form if the token is invalid
        
            $user = User::where('email', $tokenData->email)->first();
        // Redirect the user back if the email is invalid
            if (!$user) return redirect()->back()->withErrors(['email' => 'Email not found']);
        //Hash and update the new password
            $user->password = Hash::make($password);
            $user->update(); //or $user->save();
        
        
            //Delete the token
            DB::table('password_resets')->where('email', $user->email)
            ->delete();
        
            
          
        
            }


       





}



    





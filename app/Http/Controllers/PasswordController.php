<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\resetpassword;
use App\Mail\success_reset;
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
DB::table('password_resets')->insert([
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


$link = '/password/reset/'.$tokenData.'?email=' .urlencode($email);


$data=([
    'name' =>$name,
    'link'=>$link


]);


   /* SENDING MAIL */

   Mail::to($email,$data)->send(
    new resetpassword($data)
);


return view('reset_link_msg');

    }


    }


    public function resetcheck(Request $request)
    {
//Validate input
$request->validate([
    'password' => 'required|confirmed|max:8',
    'password_confirmation'=>'required|'
 ]);
$tokenData=$request->token;
$password = $request->input('password');
// Validate the token
// Redirect the user back to the password reset request form if the token is invalid




 $user=DB::table('password_resets')->where('token','=',$tokenData)->value('email');

if(!$user)
{
    if (!$user) return redirect()->back()->withErrors(['email' => 'Email not found']);

}

$password = Hash::make($password);


User::where('email', $user)
      ->update(['password' => $password]);



//Delete the token
DB::table('password_resets')->where('email', $user)
->delete();




   /* SENDING SUCCESSFULL REGISTRATION MAIL */

   Mail::to($user)->send(
    new success_reset()
);

return view('confirm_reset');

}








}









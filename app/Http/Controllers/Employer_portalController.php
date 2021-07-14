<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\User;
use App\Models\Employer_Professional_Detail;
use App\Models\Employer_Personal_Detail;

class Employer_portalController extends Controller
{
    //Return employerportal home page if session is active

    public function allowemployerportal(Request $request)
    {

        //getting logged in user email

        $email = $request->session()->get('employer_email');


        //fetching professional details of the logged in user
        $professional_details=Employer_Professional_Detail::where('employer_email','=', $email)->get();



     //fetching personal  details of the logged in user


        $personal_details=Employer_Personal_Detail::where('employer_email','=', $email)->get();


        return view('employer_portal_homepage',['professional_details'=>$professional_details,'personal_details'=>$personal_details]);


    }





//image section
   public function image(Request $request)
   {
    $email=$request->session()->get('email');



    if ($request->hasFile('image')) {


    $validated=$request->validate([
        "image"=>'nullable|image|mimes:jpg,png,jpeg|max:5000',
    ]);


    $image = file($validated['image']);
    $image_name = rand(1000,9999).'.'.$validated['image']->extension();
    $validated['image']->move(public_path('images'),$image_name);
    $validated['image']=$image_name;








   $image_db = DB::table('employer_personal_details')
              ->where('employer_email', $email)
              ->update(['image' => $image_name]);





    /*   $employer_image= Employer_Personal_Detail::where('employer_email', '=', $email)->first();
      $employer_image->image = $image_name;
      $employer_image->save();

 */
            return back()
            ->with('success','You have successfully upload image.');


   }
   else{
       return back()
       ->with('empty','Please select an image to upload');

   }




   }



    /* ADD EMPLOYEE PAGE */


    public function add_employee()
    {
        return view('employer_portal_add_employee');
    }


    /* MANAGE EMPLOYEES_VIEW ALL EMPLOYEES */

    public function manage_employee_view()
    {

        return view('manage_employee_view');
    }







    //Logout
    public function employer_portal_logout()
    {

        //deleting all session values

        session()->pull('employer_email');

        session()->pull('company_name');
        session()->pull('role');

        //REDIRECT TO LOGIN PAGE
        return redirect()->route('employer_login');
    }
}

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
        $professional_details = Employer_Professional_Detail::where('employer_email', '=', $email)->get();



        //fetching personal  details of the logged in user


        $personal_details = Employer_Personal_Detail::where('employer_email', '=', $email)->get();


        return view('employer_portal_homepage', ['professional_details' => $professional_details, 'personal_details' => $personal_details]);
    }





    //image section
    public function image(Request $request)
    {
        $email = $request->session()->get('email');


        if ($request->hasFile('image')) {


            $validated = $request->validate([
                "image" => 'nullable|image|mimes:jpg,png,jpeg|max:5000',
            ]);




            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('images'),$filename);
            }

            $email = $request->session()->get('employer_email');

            $image_db = DB::table('employer_personal_details')
              ->where('employer_email', $email)
              ->update(['image' => $filename]);


            return back()
                ->with('success', 'You have successfully upload image.');
        } else {
            return back()
                ->with('empty', 'Please select an image to upload');
        }
    }


  //delete image
    public function delete_image(Request $request,$email)
    {


        $image=DB::table('employer_personal_details')
        ->where('employer_email',$email)->value('image');


        if($image)
        {

        $image_db = DB::table('employer_personal_details')
        ->where('employer_email','=', $email)
        ->update(['image' => NULL]);

        return back()
        ->with('success', 'You have successfully removed image.');

        }

        else
        {
            return back()
            ->with('empty', 'No image uploaded to remove');

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
    public function employer_portal_logout(Request $request)
    {

        $request->session()->flush();

        //REDIRECT TO LOGIN PAGE
        return redirect()->route('employer_login');


        //Also there is an auto logout added if the user is inactive for more than 5 mins. This is done using  meta refresh method
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Employee_Professional_Detail;
use App\Models\User;

use App\Models\Employee_Personal_Detail;
use App\Http\Controllers\Employer_portalController;
use EmployeePersonalDetails;


class EmployeeImage_Controller extends Controller
{
    //image section
    public function upload_employee_image(Request $request,$employee_id)
    {


        if ($request->hasFile('image')) {

               //validation
            $validated = $request->validate([
                "image" => 'nullable|image|mimes:jpg,png,jpeg|max:5000',
            ]);


                //generate file name

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('images'),$filename); //move to public/images
            }

            //upload in db

            $image_db = DB::table('employee_personal_details')
              ->where('employee_id', $employee_id)
              ->update(['image' => $filename]);


            return back()
                ->with('success', 'You have successfully upload image.');
        } else {
            return back()
                ->with('empty', 'Please select an image to upload');
        }
    }



    //Removing Image

    public function delete_employee_image(Request $request,$employee_id)
    {


        $image=DB::table('employee_personal_details')
        ->where('employee_id',$employee_id)->value('image');


        if($image)
        {

        $image_db = DB::table('employee_personal_details')
        ->where('employee_id','=', $employee_id)
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



}

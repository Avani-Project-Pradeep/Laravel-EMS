<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employer_Professional_Detail;
use App\Models\Employer_Personal_Detail;
use Illuminate\Foundation\Http\FormRequest;


class EditEmployerController extends Controller
{
            
    public function editemployer($company_name, Request $request)
    {
        //getting logged in id 

        $id = $request->session()->get('employer');


        //fetching professional details of the logged in id
        $professional_details=Employer_Professional_Detail::where('user_id','=', $id)->get();
        $personal_details=Employer_Personal_Detail::where('user_id','=', $id)->get();


        return view('employer_portal_homepage_edit',['professional_details'=>$professional_details,'personal_details'=>$personal_details])->with('company_name', $company_name);


    }

    



public function editemployeraction(Request $request)
{

        //getting logged in id 

        $id = $request->session()->get('employer');

        $existing_phone=Employer_Professional_Detail::where('user_id','=', $id)->value('phone');
    

          
        if($request->input('phone_number')!=$existing_phone)
        {
            $request->validate([
                'phone_number' => 'required|digits:10|unique:employer_professional_details,phone'
            ]);    
        
        
        }


        $existing_email=$request->session()->get('employer_email');
        

        if($request->input('email')!=$existing_email)
        {
            $request->validate([
            'email' => 'required|email|unique:users,email'
           
            ]);    
        
        }


         $request->validate([ 'city' => 'required|max:50|',
         'state' => 'required|max:50|',
    ]);


          //EDIT LOGIC
}



}
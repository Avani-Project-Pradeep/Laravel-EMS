<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employer_Professional_Detail;
use App\Models\Employer_Personal_Detail;
use Illuminate\Support\Facades\Hash;



class Employer_LoginController extends Controller
{
    public function loginform()
    {
        return view('employer_login_form');
    }

    public function loginverify(Request $request)
    {

                //validation
                $request->validate([

                    'company_name' => 'required',
                    'email' => 'required|email',
                    'password' => 'required'
        
                ]);
        
        
        
                //VERIFICATION OF REQUESTED DATA
                //check if email id exists

                $user = User::where('email', $request->email)->first();

                if ($user) {
                    //if user exists
        
        
                    //verify company name for given email id
        
                    $companydb = User::where('email', $request->email)->value('company_name');
             
                    
                    if ($companydb == ($request->company_name)) {
        
                        //verify password 
                        if (Hash::check($request->password, $user->password)) {
                              
                            $logged_user_id=User::where('email', $request->email)->value('id');


                            
        
                            //go to function session for generating session
                    $request->session()->put('employer', $logged_user_id);
             $request->session()->put('employer_email',$request->email);
             $request->session()->put('company_name',$companydb);


                            
        
        
        
                            //return the url for employer_portal with company name
                            return redirect()->route('employer_portal', $request->company_name);

        
                        }
        
                    }
                }
        
                //If login verification fails,return back with  message
        
                return back()->with('fail', 'Invalid credentials,Please enter valid account details');
        
        
    }




}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employee_LoginController extends Controller
{

    public function loginform()
    {
        return view('employee_login_form');
    }

}

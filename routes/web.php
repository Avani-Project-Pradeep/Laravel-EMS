<?php

use Illuminate\Http\Request;


use App\Http\Controllers\Employer_RegistrationController;
use App\Http\Controllers\Employer_LoginController;
use App\Http\Controllers\Employer_portalController;
use App\Http\Controllers\EditEmployerController;
use App\Http\Controllers\AddEmployee_Controller;
use App\Http\Controllers\UpdateEmployee_Controller;
use App\Http\Controllers\EmployeeImage_Controller;


use App\Http\Controllers\Employee_RegistrationController;
use App\Http\Controllers\Employee_LoginController;
use App\Http\Controllers\ManageEmployee;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Employee_PortalController;
use App\Http\Controllers\PasswordController;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



 /* ---------------------EMPLOYER REGISTRATION ------------------ */


 //landing page
Route::get('/', function () {
    return view('welcome');
});



Route::get('ems', function () {
    return view('welcome');
});


//View Employer Registration form
Route::get('/Employer/register',[Employer_RegistrationController::class,'registerform']);

Route::get('/register', function()
{
    return abort('404');
});


//Action of Registration Employees
Route::post('/Employer/Create',[Employer_RegistrationController::class,'registeremployees']);



// EMPLOYER REGISTRATION SUCCESSFUL MAIL
Route::get('/success_register/{email_success}',[Employer_RegistrationController::class,'success_registration'])->name('success_registration');





/* ---------------------EMPLOYER LOGIN------------------ */

Route::get('/Employer/login',[Employer_LoginController::class,'loginform'])->name('employer_login');

Route::post('/Employer/loginverify',[Employer_LoginController::class,'loginverify']);


Route::get('/login', function()
{
    return abort('404');
});

Route::get('/dashboard', function()
{
    return abort('404');

});





/* ---------------- FORGOT PASSWORD------------------------ */
//forgot password form - input mail
Route::get('/newforgotpassword', [PasswordController::class, 'inputmailform']);


//send mail for reset link
Route::post('/resetpasswordmail', [PasswordController::class, 'inputmailcheck']);






//resetting new password

Route::get('password/reset/{token}', function ($token) {
    return view('reset_password',['token' => $token]);
})->name('password_reset');

Route::post('/newpassword', [PasswordController::class, 'resetcheck']);






 /* --------EMPLOYER PORTAL ROUTES---------------------------------------------------- */



 Route::group(['middleware'=>['EmployerCheck']],function()
 {
     //Home page
Route::get('/employer_portal/Home',[Employer_portalController::class,'allowemployerportal'])->name('employer_portal');


//Edit Employer Page

Route::get('/employer_portal/edit',[EditEmployerController::class,'editemployer']);


//Employer Image

Route::post('employer_portal/image',[Employer_portalController::class,'image']);

Route::get('/delete_image/{email}',[Employer_portalController::class,'delete_image']);


Route::POST('editemployeraction',[EditEmployerController::class,'editemployeraction']);



//add employee
Route::get('/employer_portal/add_employee',[Employer_portalController::class,'add_employee'])->name('addemployee_tab1');


Route::POST('nextaddemployee',[AddEmployee_Controller::class,'nextaddemployee']);



Route::get('/employer_portal/add_employee/tab2/{id}', function($id)
{
return view('employer_portal_addemployeetab2',['id'=>$id]);
})->name('addemployee_tab2');



Route::POST('/actionaddemployee',[AddEmployee_Controller::class,'actionaddemployee']);


//Home page

Route::get('/home',[ManageEmployee::class,'home'] );



//Manage Employees
Route::get('/employer_portal/manage_employees/view',[ManageEmployee::class,'show'])->name('manage');

/* --------------------------MANAGE EMPLOYEES--------------------------------------- */

//change status of employee

Route::get('/statustoactive/{id}', [ManageEmployee::class,'active']);


Route::get('/statustoinactive/{id}', [ManageEmployee::class,'inactive']);




//edit employee

Route::get('/editemployee/{id}', [ManageEmployee::class,'editemployee']);

Route::post('/editemployeeaction/{id}', [ManageEmployee::class,'editemployee_action']);



//view employee
Route::get('/viewemployee/{id}', [ManageEmployee::class,'viewemployee']);





//update employee


Route::get("employer_portal/edit_employee",function()
{
    return view('Update_Employees');
});



Route::POST('/nextupdateemployee',[UpdateEmployee_Controller::class,'nextupdateemployee']);



Route::get('/employer_portal/update_employee/tab2/{id}', function($id)
{
return view('employer_portal_updateemployeetab2',['id'=>$id]);
})->name('updateemployee_tab2');




Route::POST('/actionupdateemployee',[UpdateEmployee_Controller::class,'actionupdateemployee']);





//search employee
Route::get('/search_employee', function()
{
    return view('search');
});


Route::post('searchresults',[ManageEmployee::class,'searchresults']);

Route::get('/delete/{id}',[ManageEmployee::class,'deleteemployee']);



    //employee registration
 Route::get('/Employee/register', [Employee_RegistrationController::class, 'registerform'])->name('employee_register');

 Route::POST('/Employee/registeremployee', [Employee_RegistrationController::class, 'actionregister']);




//employee image action
Route::post('/employee/image/edit/{id}',[EmployeeImage_Controller::class,'upload_employee_image']);



Route::get('/delete/employee_image/{id}',[EmployeeImage_Controller::class,'delete_employee_image']);







//Logout

Route::get('employer_portal/logout',[Employer_portalController::class,'employer_portal_logout'])->name('employer_logout');



 }
);


/* ------------------------------------------------EMPLOYEE PORTAL-------------------- */






    //employee login
    Route::get('/Employee/login', [Employee_LoginController::class, 'loginform'])->name('employee_login');

    Route::post('/Employee/loginverify',[Employee_LoginController::class,'loginverify']);


    //if employee not added yet,but registered first
    Route::get('/employee_portal_notadded',function () {
        return view('employee_not_added');
    })->name('no_employee_added');


    Route::group(['middleware'=>['EmployeeCheck']],function()
 {


    //employee home
    Route::get('/employee_portal/Home',[Employee_portalController::class,'allowemployeeportal'])->name('employee_portal');


    //about employer
    Route::get('/About_Employer',[Employee_portalController::class,'aboutemployer']);


    //add details
    Route::get('/employee_portal/add_details',[Employee_portalController::class,'add_details']);

    Route::post('/nextadddetails',[Employee_portalController::class,'next_add_details']);

    Route::get('/employee_portal/add_details/tab2/{id}',[Employee_portalController::class,'view_tab2'])->name('add_details_tab2');


    Route::post('/add_details_all/{id}',[Employee_portalController::class,'all_add_details']);



//logout

Route::get('employee_portal/logout',[Employee_portalController::class,'employee_portal_logout'])->name('employee_logout');



 });












Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

<?php

use App\Http\Controllers\Employer_RegistrationController;
use App\Http\Controllers\Employer_LoginController;
use App\Http\Controllers\Employer_portalController;
use App\Http\Controllers\EditEmployerController;
use App\Http\Controllers\AddEmployee_Controller;
use App\Http\Controllers\Employee_RegistrationController;
use App\Http\Controllers\Employee_LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\uploadcontroller;
use Illuminate\Support\Facades\Mail;
use App\Mail\employer_successfull_registration;
use App\Mail\employee_successfull_registration;
use Illuminate\Support\Facades\Hash;

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

Route::get('/', function () {
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



/* -------------------------------------------------------------------- */


/* ---------------------EMPLOYER LOGIN------------------ */

Route::get('/Employer/login',[Employer_LoginController::class,'loginform'])->name('employer_login');

Route::post('/Employer/loginverify',[Employer_LoginController::class,'loginverify']);


Route::get('/login', function()
{
    return abort('404');
});

 /* ------------------EMPLOYER FORGOT PASSWORD------------------------ */




 /* --------EMPLOYER PORTAL ROUTES------------------------ */


 Route::group(['middleware'=>['EmployerCheck']],function()
 {
     //Home page
Route::get('{company_name}/employer_portal/Home',[Employer_portalController::class,'allowemployerportal'])->name('employer_portal');


//Edit Employer Page

Route::get('{company_name}/employer_portal/edit',[EditEmployerController::class,'editemployer']);


//Employer Image

Route::post('{company_name}/employer_portal/image',[Employer_portalController::class,'image']);



//edit action

Route::POST('editemployeraction',[EditEmployerController::class,'editemployeraction']);




//Add Employee
Route::get('/{company_name}/employer_portal/add_employee',[Employer_portalController::class,'add_employee'])->name('addemployee_tab1');



//Add Employee Next
Route::POST('nextaddemployee',[AddEmployee_Controller::class,'nextaddemployee']);






//Add Employee Final Action
Route::POST('actionaddemployee',[AddEmployee_Controller::class,'actionaddemployee']);







//Manage Employee_view page
Route::get('/{company_name}/employer_portal/manage_employees/view',[Employer_portalController::class,'manage_employee_view']);




//Logout

Route::get('{company_name}/employer_portal/logout',[Employer_portalController::class,'employer_portal_logout'])->name('employer_logout');



 }
);







    Route::get('{company_name}/employee/register', [Employee_RegistrationController::class, 'registerform']);

    Route::POST('/registeremployee', [Employee_RegistrationController::class, 'actionregister']);

    Route::get('/Employee/login', [Employee_LoginController::class, 'loginform']);











Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

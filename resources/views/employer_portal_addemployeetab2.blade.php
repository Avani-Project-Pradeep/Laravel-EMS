{{-- LAYOUT OF PORTAL --}}
@extends('layouts.portal_layout')


{{-- NAVIGATION OPTIONS --}}
@section('options')
    <a href="http://127.0.0.1:8000/{{ $company_name }}/employer_portal/Home"><i class="fa fa-home"></i> Home</a>
    <a href="http://127.0.0.1:8000/{{ $company_name }}/employer_portal/manage_employees/view"><i class="fa fa-users	"></i>
        Manage Employees</a>
    <a href="http://127.0.0.1:8000/{{ $company_name }}/employer_portal/logout"><i class="fa fa-power-off
                             "></i> Logout</a> </nav>

@endsection

{{-- CONTENT --}}
@section('content')
    <!--EXTERNAL CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/add_employee.css') }}">

</head>
<body>
        <br>
<h2 style="margin-left:20px; color: white">Add Employee</h2>
<hr style="border: solid green;">
        
<form method="POST" action="/actionaddemployee">
      @csrf
 
    <ul class="tab-wrap">
         <li>
    <input type="radio" id="tab-1" name="tab" />
         <label for="tab-1">Tab1</label>
                    
<div class="tab-content">
    <div id="container">
    <div class="one">
    <div style="margin-left:20px">
        <br><br>

    <span> Employee_id: </span>

    <input type="text" name="employee_id" value={{$professional_details["employee_id"]}} >
    <span style="color:red; font-size:12px;">
     <br>

     @error('employee_id')
     {{ '*' . $message }}
     @enderror
      </span>
     
      <br>

      <span>Designation:<span>
      <br>

     <input type="text" name="designation" value="{{$professional_details["designation"]}}">





     

                                            <div style="color:red; font-size:12px;">

                                                @error('designation')
                                                    {{ '*' . $message }}



                                                @enderror
                                            </div>

                                            <br>

                    <span>Department:<span>

       
                        <input type="text" name="department"
                        value="{{$professional_details["department"]}}">
  <div style="color:red; font-size:12px;">

@error('department')
{{ '*' . $message }}



@enderror
</div>


<br>

 <span>Division:<span>


<input type="text" name="division"
value="{{$professional_details["division"]}}">
<div style="color:red; font-size:12px;">

@error('division')
{{ '*' . $message }}



@enderror
</div>

<br>
<span>Employee type:<span>
                                                                    <br>

<input type="text" name="employee_type" 
value="{{$professional_details["employee_type"]}}">

                                                             <br>
<div style="color:red; font-size:12px;">

@error('employee_type')
                                                                            {{ '*' . $message }}

                                                                            <br>

@enderror
</div>




</div>






</div>

<div class="two">
<div style="margin-left:50px">
<br><br>

                                    <span> Joining Date:<span><br>
              <input style="width: 150px;" type="date" name="joining_date"
              value="{{$professional_details["joining_date"]}}">
                                            <div style="color:red; font-size:12px;">

                                                @error('joining_date')
                                                    {{ '*' . $message }}

                                                    <br>

                                                @enderror
                                            </div>


                                            <br>

<span>Company Name:<span>

<input type="text" name="company_name" 
value="{{$professional_details["company_name"]}}">
                                                    <br>
<div style="color:red; font-size:12px;">

@error('company_name')
{{ '*' . $message }}



@enderror
</div>


<br>



<span>Reporting Manager:<span>

<input type="text" name="reporting_manager" 
value="{{$professional_details["reporting_manager"]}}">
<br>
<div style="color:red; font-size:12px;">

@error('reporting_manager')
{{ '*' . $message }}
        
@enderror
</div>
        
        
<br>


<span>Shift:<span>
<br>

<input type="text" name="shift" 
value="{{$professional_details["shift"]}}">


<div style="color:red; font-size:12px;" >

@error('shift')
{{ '*' . $message }}
                
                
                
@enderror
</div>
                
                
<br>
                


<span>Employee Status:<span>

                                                                            <input type="text" name="employee_status" 
                                                                            value="{{$professional_details["employee_status"]}}">
                                                                            <div style="color:red; font-size:12px;">

                                                                                @error('employee_status')
                                                                                    {{ '*' . $message }}
                        
                        
                        
                                                                                @enderror
                                                                            </div>
                        
                        
                                                                            <br>                                                                        <br>





                                                                            <input type="radio" >

                                                                            <label
                                                                            style="background-color: #4CAF50;
                                                                                        border: none;
                                                                                        color: white;
                                                                                        padding: 15px 32px;
                                                                                        text-align: center;
     text-decoration: none;
                                                                                        display: inline-block;
                                                                                        font-size: 16px;
                                                                                        margin: 4px 2px;
                                                                                        cursor: pointer;
            
            width:150px"                                                                         
                                                                                    for="tab-2" >
                                                                                        Next
                                                                                        </label>
                                                                
                                </div>
                            </div>
                        </div>
                    </div>
                </li>




        <li>
            <input type="radio" id="tab-2" name="tab" checked="checked" />
            <label for="tab-2">
                Tab 2
            </label>





        <div class="tab-content">
            <div id="container">
                <div>
                    <div class="one">

                        <br><br>
                        <section style="margin-left: 20px">
                            {{-- IMAGE SECTION --}}
                            <img src="https://i.ibb.co/yNGW4gg/avatar.png" id="blah" alt="Avatar">
                            {{ session('employer_email') }}
                            <br><br>
                            <button class="btn" style="width:80px;">UPLOAD</button>

                        </section>


                    </div>

                    <div class="two">
                        <br><br>
                        <div>
                            <span>
                                <span>First Name: </span>
                                <input type="text" style="width:200px;" name="First Name">
                                <span>Last Name: </span>
                                <input type="text" style="width:200px;" name="Last Name">

                            </span>
                        </div>

                        <div>
                            <br><br>

                            <span>
                                <span>Gender: </span>
                                <input type="text" style="width:200px;" name="gender">

                                <span>DOB: </span>
                                <input type="date" style="width:200px;" name="Last Name">

                            </span>

                            <br><br>
                        </div>

                        <div>
                            <span>Email ID:<span>
                                    <br>

                                    <input type="email" name="email">
                                    <br><br>

                        </div>

                        <div>
                            <span>Contact Number:<span>
                                    <br>

                                    <input type="text" name="contact_number">
                                    <br><br>

                        </div>

                        <div>
                            <span>
                                <span>State: </span>
                                <input type="text" style="width:200px;" name="State">
                                <span>City: </span>
                                <input type="text" style="width:200px;" name="City">

                            </span>
                        </div>
                        <br>



                        <div>
                            <span>Permanent Address:<span>

                                    <input type="text" name="permanent_address">
                                    <br><br>

                        </div>
                        <div>
                            <span>Educational Details:<span>
                                    <br>

                                    <input type="text" name="educational details">
                                    <br><br><br>


                           

                                  <input type="radio" id="tab-4" name="tab"  value=""
                                  
                                  

                                  />
                                  <label 
                                  style="background-color: #4CAF50;
                                  border: none;
                                  color: white;
                                  padding: 15px 32px;
                                  text-align: center;
                                 text-decoration: none;
                                  display: inline-block;
                                  font-size: 16px;
                                  margin: 4px 2px;
                                  cursor: pointer;

                                  width:150px"                                                                         
 
                                  
                                  for="tab-1">
                                        Previous
                                    </label>
                                    <br><br>

                             

                                    <input type="submit" style="background-color: #4CAF50;
                                              border: none;
                                              color: white;
                                              padding: 15px 32px;
                                              text-align: center;
                                              text-decoration: none;
                                              display: inline-block;
                                              font-size: 16px;
                                              margin: 4px 2px;
                                              cursor: pointer;
                                              width:150px;
                                              " value="Save">


                                    <input type="submit" style="background-color: #4CAF50;
                                              border: none;
                                              color: white;
                                              padding: 15px 32px;
                                              text-align: center;
                                              text-decoration: none;
                                              display: inline-block;
                                              font-size: 16px;
                                              margin: 4px 2px;
                                              cursor: pointer;
                                              width:150px;
                                              
                            " value="Update">









                        </div>


                    </div>
                </div>
            </div>
        </div>
        </li>

        </ul>
        </form>


    </body>

    </html>




    </div>


    </div>
    </body>
@endsection

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
        <form method="POST" action="/nextaddemployee">
            @csrf


            <ul class="tab-wrap">
                <li>
                    <input type="radio" id="tab-1" name="tab" checked="checked" />
                    <label for="tab-1">
                        Tab 1
                    </label>
                    <div class="tab-content">
                        <div id="container">
                            <div class="one">
                                <div style="margin-left:20px">
                                    <br><br>

                                    <span> Employee_id: </span>

                                    <input type="text" name="employee_id">
                                    <span style="color:red; font-size:12px;">
                                        <br>

                                        @error('employee_id')
                                            {{ '*' . $message }}


                                        @enderror
                                    </span>

                                    <br><br>

                                    <span>Designation:<span>
                                            <br>

                                            <input type="text" name="designation">

                                            <div style="color:red; font-size:12px;">

                                                @error('designation')
                                                    {{ '*' . $message }}



                                                @enderror
                                            </div>

                                            <br>

                    <span>Department:<span>


                      <input type="text" name="department">
  <div style="color:red; font-size:12px;">

@error('department')
{{ '*' . $message }}

@enderror
                                                    </div>


                                                    <br>

                                                    <span>Division:<span>


                                                            <input type="text" name="division">
                                                            <div style="color:red; font-size:12px;">

                                                                @error('division')
                                                                    {{ '*' . $message }}



                                                                @enderror
                                                            </div>

                                                            <br>
                                                            <span>Employee type</Em>:<span>
                                                                    <br>

                                                                    <input type="text" name="employee_type">

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

                                    <span> Joining Date:<span>
              <input style="width: 150px;" type="date" name="joining_date">
                                            <div style="color:red; font-size:12px;">

                                                @error('joining_date')
                                                    {{ '*' . $message }}

                                                    <br>

                                                @enderror
                                            </div>


                                            <br><br>

                                            <span>Company Name:<span>

                                                    <input type="text" name="company_name">
                                                    <br><br>
                                                    <div style="color:red; font-size:12px;">

                                                        @error('company_name')
                                                            {{ '*' . $message }}



                                                        @enderror
                                                    </div>


                                                    <br>



                                                    <span>Reporting Manager:<span>

                                                            <input type="text" name="reporting_manager">
                                                            <br>
                                                            <div style="color:red; font-size:12px;">

                                                                @error('reporting_manager')
                                                                    {{ '*' . $message }}
        
        
        
                                                                @enderror
                                                            </div>
        
        
                                                            <br>
        

                                                            <span>Shift:<span>
                                                                <br>

                                                                    <input type="text" name="shift">
                                                                    <div style="color:red; font-size:12px;">

                                                                        @error('shift')
                                                                            {{ '*' . $message }}
                
                
                
                                                                        @enderror
                                                                    </div>
                
                
                                                                    <br>
                


                                                                    <span>Employee Status:<span>

                                                                            <input type="text" name="employee_status">
                                                                            <div style="color:red; font-size:12px;">

                                                                                @error('employee_status')
                                                                                    {{ '*' . $message }}
                        
                        
                        
                                                                                @enderror
                                                                            </div>
                        
                        
                                                                            <br>
                        



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
                                                                                        
                                                                      " value="next">


                                </div>
                            </div>
                        </div>
                    </div>
                </li>
           
                <li>
                    <input type="radio" id="tab-2" name="tab"  />
                    <label for="tab-2">
                        Tab 2
                    </label>
                    <div style="color:red; font-size:12px; background-color:pink">

                          <br>
                          <br>
                        {{ "*Please  Fill all mandatory fields,and  then click next" }}

                    </div>

                    

        </form>





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

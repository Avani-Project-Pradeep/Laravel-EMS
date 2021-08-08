@include('layouts.manage_layout')
<meta http-equiv="refresh" content="300;url='/employer_portal/logout'" />

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:400px; margin-right:200px;   margin-top:80px;">

    <body>
        <br><br>
        <button type="button" class="btn btn-light">EMPLOYEE ID -  {{$employee_id}}</button>
<br><br>
        <table cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <section>
                        <form action="/employee/image/edit/{{$employee_id}}"  enctype="multipart/form-data"  method="POST" >
                         @csrf
                        <br><br><br>

                        @if ($message = Session::get('success'))

                        <div style="color:green; font-size:15px;">

                            {{ $message }}
                        </div>

                        @endif

                        @if ($message = Session::get('empty'))
                        <div style="color:red; font-size:15px;">

                            {{ $message}}
                        </div>

                        @endif




                            {{-- IMAGE SECTION --}}

                            @foreach ($personal_details as $per )

                            @if( $per->image==NULL)
                            <img  style="height:200px; width:200px" src="{{asset("images")}}/{{"blank.png"}}">
                            @else
                            <img src= "{{asset("images")}}/{{$per->image}}"
                            >
                            @endif



                            <br>
                            <div class="input_field">

                                <div style="color:red; font-size:12px;">

                                    @error('image')

                                    {{ "*".$message }}
                                    <br>

                                    @enderror
                                </div>





                    </section>
                    <br><br><br>

                    <span>

                    <input type="file" name="image">


                    <button type="submit" class="class=btn btn-primary btn-sm"
                     style="width:120px;">UPLOAD IMAGE</button>


                    </span>


                    <a href="/delete/employee_image/{{$employee_id}}" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">REMOVE IMAGE</a>

                    </form>
                  </td>
        </table>




        <ul>
            <form action="/editemployeeaction/{{$employee_id}}" method="POST">
                @csrf


                {{-- PROFESSIONAL DETAILS --}}
                <h2> PROFESSIONAL DETAILS</h2>

                <hr style="border: solid black;">





                @foreach ($professional_details as $pd )




                <div>

                    <label>Designation: </label>


                    <input style="width: 200px;" type="text" placeholder="Designation" name="designation" value="{{ $pd->designation }}">
                    <span style="color:red; font-size:12px;" >
                        @error('designation')
                        {{ '*' . $message }}<br>
                        @enderror
                    </span>


                    &nbsp;&nbsp;



                    <label>Company Name:</label>
                    <input style="width: 200px;" name="company_name" value="{{$pd->company_name}}" type="text" placeholder="Company Name">
                    <span style="color:red; font-size:12px;" >
                        @error('company_name')
                        {{ '*' . $message }}<br>
                        @enderror
                    </span>




                </div>

                <br><br>



                <div>
                    <label>Division: </label>
                    <input style="width: 200px;" type="text" placeholder="Division"  name="division" value="{{ $pd->division }}">
                    <span style="color:red; font-size:12px;" >
                        @error('division')
                        {{ '*' . $message }}<br>
                        @enderror
                    </span>


                    &nbsp;&nbsp;

                    <label>Date_Of_Joining: </label>
                    <input style="width: 200px;" type="date" name="doj" value="{{ $pd->doj }}">


                    &nbsp;&nbsp;&nbsp;

                    <label>Work_Experience: </label>
                    <input style="width: 100px;" type="text" name="work_experience" placeholder="Work"
                        value="{{ $pd->work_experience }}">
                        <span style="color:red; font-size:12px;" >
                            @error('work_experience')
                            {{ '*' . $message }}<br>
                            @enderror
                        </span>


                </div>

                <br><br>



                <div>
                    <label>Skills: </label>
                    <input style="width: 250px;" type="text" name="skills" placeholder="Skills" value="{{ $pd->skills }}">
                    <span style="color:red; font-size:12px;" >
                        @error('skills')
                        {{ '*' . $message }}<br>
                        @enderror
                    </span>


                    &nbsp;&nbsp;

                    <label>Department: </label>
                    <input style="width: 250px;" type="text" name="department" placeholder="Department" value="{{ $pd->department }}">
                    <span style="color:red; font-size:12px;" >
                        @error('department')
                        {{ '*' . $message }}<br>
                        @enderror
                    </span>


                </div>

                <br><br>


        </ul>


        <td class="section2">
            <ul>





                {{-- PERSONAL DETAILS --}}
                <h2>PERSONAL DETAILS</h2>
                <hr style="border: solid black;">
                <ul>

                    <table>
                        <div>
                            <label>First Name: </label>
                            <input style="width: 300;" type="text" name="first_name" placeholder="First Name"
                                value="{{ $per->first_name }}">
                                <span style="color:red; font-size:12px;" >
                                    @error('first_name')
                                    {{ '*' . $message }}<br>
                                    @enderror
                                </span>


                            &nbsp;&nbsp;

                            <label>Last Name: </label>
                            <input style="width: 300;" type="text"  name="last_name" placeholder="Last Name" value="{{ $per->last_name }}">
                            <span style="color:red; font-size:12px;" >
                                @error('last_name')
                                {{ '*' . $message }}<br>
                                @enderror
                            </span>



                            &nbsp;&nbsp;
                            &nbsp;&nbsp;



                            <label>DOB:</label>
                            <input style="width: 300;" name="dob" type="date" value="{{ $per->dob }}">
                            <span style="color:red; font-size:12px;" >
                                @error('dob')
                                {{ '*' . $message }}<br>
                                @enderror
                            </span>



                        </div>

                        <br><br>



                        <div>

                            <label>Email: </label>
                            <input type="email" placeholder="Email" name="employee_email" value="{{$per->employee_email}}">
                            <span style="color:red; font-size:12px;" >
                                @error('employee_email')
                                {{ '*' . $message }}<br>
                                @enderror
                            </span>


                            &nbsp;&nbsp;

                            <label>Phone Number: </label>
                            <input type="text" placeholder="Phone Number" name="phone" value="{{ $per->phone }}">
                            <span style="color:red; font-size:12px;" >
                                @error('phone')
                                {{ '*' . $message }}<br>
                                @enderror
                            </span>

                            &nbsp;&nbsp;

                            <label>City: </label>
                            <input type="text" name="city" placeholder="City" value="{{ $per->city }}">
                            <span style="color:red; font-size:12px;" >
                                @error('city')
                                {{ '*' . $message }}<br>
                                @enderror
                            </span>

                            &nbsp;&nbsp;



                        </div>

                        <br><br>
                        <div>

                            <label>State: </label>
                            <input type="text" name="state" placeholder="State" value="{{ $per->state }}">
                            <span style="color:red; font-size:12px;" >
                                @error('state')
                                {{ '*' . $message }}<br>
                                @enderror
                            </span>


                            &nbsp;&nbsp;


                            <label>Gender:</label>
                            <input type="text"  name="gender" placeholder="Gender" value="{{ $per->gender }}">
                            <span style="color:red; font-size:12px;" >
                                @error('gender')
                                {{ '*' . $message }}<br>
                                @enderror
                            </span>


                            <br><br>
                            <label>Address: </label>
                            <input type="text" placeholder="Address" name="address" value="{{ $per->address }}" style="width:500px">
                            <span style="color:red; font-size:12px;" >
                                @error('address')
                                {{ '*' . $message }}<br>
                                @enderror
                            </span>



                        </div>

                        <br><br>


                        <label> Educational Details:</label>
                        <input type="text" style="width:500px" placeholder="Educational Details" name="educational_details" value="{{ $per->education }}">
                        <span style="color:red; font-size:12px;" >
                            @error('educational_details')
                            {{ '*' . $message }}<br>
                            @enderror
                        </span>


                        <br><br>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </table>

                    </form>




                    @endforeach
                    @endforeach


    </body>

    </html>

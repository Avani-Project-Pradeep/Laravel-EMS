@extends('layouts.forms_layout')

@section('content')

<meta http-equiv="refresh" content="300;url='/employer_portal/logout'" />


<title>Employee Registration Form</title>
    <div class="form_wrapper">
        <div class="form_container">

            {{-- TITLE --}}

            <div class="title_container">
                <h2>Employee Registration Form</h2>
            </div>


     {{-- FORM --}}

     <form action="registeremployee" enctype="multipart/form-data" method='post'>
     @csrf

      <div class="input_field">


        <div class="input_field">
            <span><i aria-hidden="true" class="fa fa-user"></i></span>

            <input type="text" placeholder="Enter First Name" name="first_name">



    <br>
    <div style="color:red; font-size:12px;">

                @error('first_name')

                {{ "*".$message }}
                <br>

                @enderror
    </div>

        </div>



        <div class="input_field">


            <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-user"></i></span>

                <input type="text" placeholder="Enter Last Name" name="last_name">


    <br>
    <div style="color:red; font-size:12px;">

                @error('last_name')

                {{ "*".$message }}
                <br>

                @enderror
    </div>

            </div>

            <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-phone-square"></i></span>

                <input type="text" name="phone_number" placeholder="Enter Phone Number" />



    <br>
    <div style="color:red; font-size:12px;">

                @error('phone_number')

                {{ "*".$message }}
                <br>

                @enderror
    </div>
            </div>

                            {{-- CITY --}}

                            <div class="input_field">
                                <span><i aria-hidden="true" class="fa fa-location-arrow"></i></span>

                                <input type="text" name="city" placeholder="City" />


    <br>
    <div style="color:red; font-size:12px;">

                @error('city')

                {{ "*".$message }}
                <br>

                @enderror
    </div>

                            </div>




                            {{-- STATE --}}

                            <div class="input_field">
                                <span><i aria-hidden="true" class="fa fa-location-arrow"></i></span>

                                <input type="text" name="state" placeholder="State" />


    <br>
    <div style="color:red; font-size:12px;">

                @error('state')

                {{ "*".$message }}
                <br>

                @enderror
    </div>
                            </div>



                            <div class="container">

                                <div class="input-group shadow">

                                    <input type="file" name="image">
                                    <br>
                                    <div class="input_field">

                                        <span><i aria-hidden="true" class="fa fa-file-image-o"></i></span>

                                        <input type="text" class="form-control form-control-lg" placeholder="Upload Image"
                                            x-model="fileName" name="image" readonly>



    <br>
    <div style="color:red; font-size:12px;">

                @error('image')

                {{ "*".$message }}
                <br>

                @enderror
    </div>



                                    </div>
                                </div>
                            </div>



                            <div class="input_field">
                                <span><i aria-hidden="true" class="fa fa-home"></i></span>

                                <input type="text" name="address" placeholder="Enter Address" />



    <br>
    <div style="color:red; font-size:12px;">

                @error('address')

                {{ "*".$message }}
                <br>

                @enderror
    </div>

                            </div>

                            <div class="input_field">

                                <span><i aria-hidden="true" class="fa fa-envelope"></i></span>

                                <input type="email" name="email" placeholder=" Enter Email"  />



    <br>
    <div style="color:red; font-size:12px;">

                @error('email')

                {{ "*".$message }}
                <br>

                @enderror
    </div>

                            </div>

                                            {{-- REGISTER BUTTON --}}

                <input class="button" type="submit" value="Register" />
            </form>

            <a href="/employer_portal/manage_employees/view" class="w3-bar-item w3-button w3-padding">Back to Dashboard</a><br>

            <a href="/employer_portal/Home" class="w3-bar-item w3-button w3-padding">Back to Employer Portal-Home</a><br>










@endsection

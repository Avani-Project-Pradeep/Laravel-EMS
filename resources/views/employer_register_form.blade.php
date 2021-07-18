{{-- LAYOUT --}}
@extends('layouts.forms_layout')


{{-- FORM START --}}

@section('content')


{{-- TITLE AND HEADING --}}


<title>Employer Registration Form</title>
<div class="form_wrapper">
    <div class="form_container">


        <div class="title_container">
            <h2><u>Employer Registration</u></h2>
        </div>
        <br>


        <form action="/Employer/Create" enctype="multipart/form-data" method='post'>
            @csrf

            <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-building"></i></span>

                {{-- COMPANY NAME --}}

                <input type="text" placeholder="Enter Company Name*" name="company_name" value="{{old('company_name')}}">


                <br>
                <div style="color:red; font-size:12px;">

                    @error('company_name')

                    {{ "*".$message }}
                    <br>

                    @enderror
                </div>


            </div>


            {{-- COMPANY WEBSITE --}}


            <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-globe"></i></span>

                <input type="text" placeholder="Enter Company Website* " name="company_website"
                    value="{{old('company_website')}}">


                <br>
                <div style="color:red; font-size:12px;">

                    @error('company_website')

                    {{ "*".$message }}
                    <br>

                    @enderror
                </div>



            </div>



            {{-- TERMS AND CONDITIONS --}}


            <div class="container">

                <div class="input-group shadow">

                    <input type="file" name="terms_and_conditions">
                    <div class="input_field" value={{old('terms_and_conditions')}}>

                        <span><i aria-hidden="true" class="fa fa-upload"></i></span>

                        <input type="text" class="form-control form-control-lg"
                            placeholder="Upload Terms and Conditions*" x-model="fileName" readonly>

                        <div style="color:red; font-size:12px;">

                            @error('terms_and_conditions')

                            {{ "*".$message }}
                            <br>

                            @enderror
                        </div>

                    </div>

                </div>

            </div>



            {{-- COMPANY DOCUMENTS --}}

            <div class="container">

                <div class="input-group shadow">

                    <input type="file" name="company_documents" value={{old('company_documents')}}>
                    <br>
                    <div class="input_field">

                        <span><i aria-hidden="true" class="fa fa-upload"></i></span>

                        <input type="text" class="form-control form-control-lg" placeholder="Upload Company Documents*"
                            x-model="fileName" readonly>
                        <div style="color:red; font-size:12px;">

                            @error('company_documents')

                            {{ "*".$message }}
                            <br>

                            @enderror
                        </div>


                    </div>
                </div>
            </div>


            {{-- PHONE NUMBER --}}


            <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-phone-square"></i></span>

                <input type="text" name="phone_number" placeholder="Enter Phone Number*" value="{{old('phone_number')}}">

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

                <input type="text" name="city" placeholder="City*" value="{{old('city')}}" >
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

                <input type="text" name="state" placeholder="State*" value="{{old('state')}}">

                <div style="color:red; font-size:12px;">

                    @error('state')

                    {{ "*".$message }}
                    <br>

                    @enderror
                </div>


            </div>


            {{-- EMAIL --}}

            <div class="input_field">

                <span><i aria-hidden="true" class="fa fa-envelope"></i></span>

                <input type="email" name="email" placeholder=" Enter Email*" value="{{old('email')}}">

                <div style="color:red; font-size:12px;">

                    @error('email')

                    {{ "*".$message }}
                    <br>

                    @enderror
                </div>

            </div>



            {{-- PASSWORD --}}

            <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-lock"></i></span>

                <input type="password" name="password" placeholder=" Enter Password*" >

                <div style="color:red; font-size:12px;">

                    @error('password')

                    {{ "*".$message }}
                    <br>

                    @enderror
                </div>


            </div>


            {{-- CONFIRM PASSWORD --}}

            <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-lock"></i></span>

                <input type="password" name="password_confirmation" placeholder="Confirm Password*"  >

                <div style="color:red; font-size:12px;">

                    @error('password_confirmation')
                    {{ "*".$message }}

                    <br>

                    @enderror
                </div>


            </div>



            {{-- REGISTER BUTTON --}}

            <input class="button" type="submit" value="Register" />
        </form>

        <br>


        {{-- LOGIN LINK --}}

        <a href="\Employer\login" style="color:green">Already Registered? Click here to Login</a>

        <br><br>

        {{-- HOME PAGE  LINK --}}

        <a href="\" style="color:green">Back to Home Page</a>





        {{-- FORM END --}}
        @endsection

{{-- LAYOUT  --}}

@extends('layouts.forms_layout')
{{-- SECTION STARTED --}}
@section('content')



{{-- TITLE --}}


<title>Employer Login Form</title>
<div class="form_wrapper">
    <div class="form_container">



        <div class="title_container">
            <h2><u>Employer Login </u></h2>
        </div>


        {{-- FORM --}}
        <form action="/Employer/loginverify" method='post'>
            @csrf

            <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-building"></i></span>

                {{-- COMPANY NAME --}}

                <input type="text" placeholder="Enter Company name" name="company_name">
                <div style="color:red; font-size:12px;">

                    @error('company_name')

                    {{ "*".$message }}
                    <br>

                    @enderror
                </div>


            </div>

            {{-- EMAIL --}}
            <div class="input_field">

                <span><i aria-hidden="true" class="fa fa-envelope"></i></span>

                <input type="email" name="email" placeholder=" Enter Email" />
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

                <input type="password" name="password" placeholder=" Enter Password" />
                <div style="color:red; font-size:12px;">

                    @error('password')

                    {{ "*".$message }}
                    <br>

                    @enderror
                </div>


            </div>

            {{-- LOGIN BUTTON --}}

            <input class="button" type="submit" value="Login" />

            <br><br>

            <a href="/newforgotpassword" style="color:green;">Forgot Password</a>


            <br><br>




            <a href="/Employer/register" style="color:green;">Not Registered? Click Here to register</a>

            <br><br>



            <a href="/" style="color:green;"> Back to Home Page </a>

        </form>
        <br>



        {{-- IF VALIDATION FAILS MESSAGE DISPLAYS --}}
        @if(Session::get('fail'))
        <div style="color:red; font-size:15px;">
            {{ Session::get('fail') }}
        </div>
        @endif





    </div>

</div>
</div>




@endsection

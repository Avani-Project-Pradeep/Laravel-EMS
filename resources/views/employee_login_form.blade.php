@extends('layouts.forms_layout')

@section('content')


<title>Employee Login Form</title>
    <div class="form_wrapper">
        <div class="form_container">

            {{-- TITLE --}}

            <div class="title_container">
                <h2>Employee Login</h2>
            </div>



    <form action ="" method = "post">


              {{-- EMAIL --}}

        <div class="input_field">

            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>

            <input type="email" name="email" placeholder=" Enter Email" required />

        </div>


                        {{-- PASSWORD --}}

                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-lock"></i></span>
        
                            <input type="password" name="password" placeholder=" Enter Password" />
        
                        </div>

                                        {{-- LOGIN BUTTON --}}

                <input class="button" type="submit" value="Login" />
            </form>

        
            <br><br>
            <a class="forgot" href="#" >Forgot Password?</a>

@endsection
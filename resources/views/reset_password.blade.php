{{-- LAYOUT  --}}
@extends('layouts.forms_layout')


 {{-- SECTION STARTED --}}
@section('content')



            {{-- TITLE --}}


<title>Reset Password</title>
    <div class="form_wrapper">
        <div class="form_container">


            <div class="title_container">
                <h2>Reset Password</h2>
            </div>


     {{-- FORM --}}
     <form action="/newpassword" method='post'>
        @csrf




                       <input type="hidden" name="token" value="{{$token}}" >
                        {{-- PASSWORD --}}

                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-lock"></i></span>

                            <input type="password" name="password" placeholder=" Enter  New Password" />
                            <div style="color:red; font-size:12px;">

                                @error('password')

                                {{ "*".$message }}
                                <br>

                                @enderror
                    </div>


                        </div>



                            {{--CONFIRM  PASSWORD --}}

                            <div class="input_field">
                                <span><i aria-hidden="true" class="fa fa-lock"></i></span>

                                <input type="password" name="password_confirmation" placeholder=" Confirm Password" />
                                <div style="color:red; font-size:12px;">

                                    @error('password_confirmation')

                                    {{ "*".$message }}
                                    <br>

                                    @enderror
                        </div>


                            </div>



                                        {{-- RESET BUTTON --}}

                <input class="button" type="submit" value="Reset" />
            </form>

@endsection

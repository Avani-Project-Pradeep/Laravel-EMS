{{-- LAYOUT --}}
@extends('layouts.forms_layout')


{{-- SECTION --}}
@section('content')

<title>Reset Password</title>
    <div class="form_wrapper">
        <div class="form_container">


       <form method="post" action="/resetpasswordmail">
        @csrf
        <div class="input_field">

    <span><i aria-hidden="true" class="fa fa-envelope"></i></span>

    <input type="email" name="email" placeholder=" Enter Email" required />

    <div style="color:red; font-size:12px;">

        @error('email')

        {{ "*".$message }}
        <br>

        @enderror
</div>


</div>
                {{-- REGISTER BUTTON --}}

                <input class="button" type="submit" value="Submit" />
                <br><br>
                <em style="font-size:15px; color:blue" >*Link to reset your password will be sent to your registered Email*</em>

                <br><br>


                <a href="/" style="color:green;">Cancel</a>

</div>
            </form>
        </div>

@endsection

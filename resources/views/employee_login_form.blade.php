{{-- LAYOUT  --}}

@extends('layouts.forms_layout')
 {{-- SECTION STARTED --}}
 @section('content')



 {{-- TITLE --}}


<title>Employee Login Form</title>
<div class="form_wrapper">
<div class="form_container">


 <div class="title_container">
     <h2>Employee Login</h2>
 </div>


{{-- FORM --}}
<form action="/Employee/loginverify" method='post'>
@csrf


{{-- EMAIL --}}
<div class="input_field">

 <span><i aria-hidden="true" class="fa fa-envelope"></i></span>

 <input type="email" name="email" placeholder=" Enter Email"  />
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
     <div class="flex items-center justify-end mt-4">
         @if (Route::has('password.request'))
             <a  style="color:green;" class=underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                 {{ __('Forgot your password?') }}
             </a>
         @endif

     </div>
     </form>
<br>
<br>


{{-- IF VALIDATION FAILS MESSAGE DISPLAYS --}}
 @if(Session::get('fail'))
<div style="color:red; font-size:12px;">
 {{ Session::get('fail') }}
</div>
@endif





</div>

</div></div>




@endsection


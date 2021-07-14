@extends('layouts.portal_layout')
{{-- NAVIGATION OPTIONS --}}
@section('options')
<a href="/employer_portal/Home"><i class="fa fa-home"></i> Home</a>
<a href="/employer_portal/add_employee"><i class="fa fa-user-plus"></i> Add Employees </a>
<a href="/employer_portal/manage_employees/view"><i class="fa fa-users	"></i> Manage Employees</a>
<a href="/employer_portal/logout"><i class="fa fa-power-off
 "></i> Logout</a>     </nav>

@endsection
{{-- CONTENT --}}

@section('content')


<!--EXTERNAL CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('styles/body.css') }}" >

</head>


<body>



  <div class="nonav">

<div class="container">

 <table cellspacing="0" cellpadding="0" >
    <tr>
<td>
<section>
  <br><br><br>


<br><br>
<form action="/employer_portal/employer_image"  enctype="multipart/form-data"  method="POST" >
  @csrf

  {{-- IMAGE SECTION --}}

  @foreach ($personal_details as $per )

  <br>
  <div class="input_field">

    <div style="color:red; font-size:12px;">

      @error('image')

      {{ "*".$message }}
      <br>

      @enderror
</div>





</section>
{{ session('employer_email') }}

</section>
<br><br><br><br><br><br>


<button class="btn" style="width:100px;">UPLOAD</button>
<button class="btn" style="width:100px;">EDIT</button>

</td>
</form>
<td>
<ul>
  {{-- PROFESSIONAL DETAILS --}}
 <h2> PROFESSIONAL DETAILS</h2>
 <hr style="border: solid black;">


 <form action="/editemployeraction"  method="POST">
  @csrf
   <table>
     <tr>
       <td>
       </td>

       @foreach ($professional_details as $pd )

       <td style="width: 100px;">
        <label >Designation: </label>


        <input  style="width: 100px;" type="text"  name="designation" placeholder="Designation " value="{{ $pd->designation }}">
      </td>
      <td style="width: 100px;">
        <label >Location: </label>
        <input  style="width: 100px;" type="text" placeholder="Location" name="location"  value="{{$pd->location}}">
      </td>
      <td style="width: 150px;">
        <label>Company Name:</label>
        <input style="width: 150px;" value="{{$pd->company_name}}" type="text"
          name= "company_name"placeholder="Company Name" >
      </td>
      <td style="width: 100px;">
        <label>Division: </label>
        <input  style="width: 100px;"type="text"  name="division" placeholder="Division" value="{{ $pd->division }}" >
      </td>
     </tr>
     <tr>
       <td>
       </td>
       <td>
        <label >Date_Of_Joining: </label>
       <input type="date"  name="doj" value="{{ $pd->doj }}"  >
       </td>

      <td colspan="3">
        <label >Work_Experience: </label>
        <input type="text" placeholder="Work Experience" name="work_experience" value="{{ $pd->work_experience }}" >
       </td>
<td>
</tr>
<tr>
  <td></td>
  <td colspan="4">
      <label >Skills: </label>
      <br>
      <input  type="text" placeholder="Skills" name="skills" value=
      "{{ $pd->skills }}" >
     </td>
</tr>

<tr>
  <td></td>
  <td colspan="4">
      <label >Bank Details: </label>
      <input type="text" placeholder="Bank Details" name="bank"  value="{{ $pd->bank_details  }}"  >
     </td>
</tr>


   </table>
</ul>
</td>
</tr>


@endforeach

<tr>
  <td class="section2">
  <ul>
  </ul>
  </td>
  <td>
    <ul>





      {{-- PERSONAL DETAILS --}}
  <h2>PERSONAL DETAILS</h2>
  <hr style="border: solid black;">
  <ul>

      <table>
        <tr>
          <td>
          </td>
          <td style="width: 150px;">
           <label >First Name: </label>



           <input  style="width: 150px;" type="text" name="first_name" placeholder="First Name"  value="{{ $per->first_name }}" >
         </td>
         <td style="width: 150px;">

           <label >Last Name: </label>
           <input  style="width: 150px;" type="text"  name="last_name" placeholder="Last Name"
            value="{{ $per->last_name }}" >
         </td>
         <td>
           <label>DOB:</label>
           <input  type="date" name="dob"   value="{{ $per->dob }}">
         </td>
          </tr>
        <tr>
          <td>
          </td>
          <td colspan="2">
           <label >Email: </label>
          <input type="email" placeholder="Email" name="email"
           value="{{ session('employer_email') }}" >
           <span style="color:red; font-size:12px;">

            @error('email')

            {{ "*".$message }}
            <br>

            @enderror
           </span>
          </td>

         <td>
           <label >Phone Number: </label>
           <input type="text"     name="phone_number"  placeholder="Phone Number"   value="{{ $per->phone }}" >
           <span style="color:red; font-size:12px;">

            @error('phone_number')

            {{ "*".$message }}
            <br>

            @enderror
           </span>

          </td>
   <td>
   </tr>
   <tr>
    <td>
    </td>
    <td style="width: 150px;">
     <label >City: </label>



     <input  style="width: 150px;" type="text" placeholder="City" name="city"   value="{{ $per->city }}">
   </td>
   <td style="width: 150px;">

     <label >State: </label>
     <input  style="width: 150px;" type="text" placeholder="State"  name="state"  value="{{ $per->state }}">
   </td>
   <td>
     <label>Gender:</label>
     <input  type="text" placeholder="Gender"  name="gender"   value=
     "{{ $per->gender }}">
   </td>
    </tr>


   <tr>
     <td></td>
     <td colspan="2">
         <label >Address: </label>
         <input type="text" placeholder="Address" name="address"  value="{{ $per->address }}" >
        </td>
        <td colspan="2">
          <label> Educational Details:</label>
          <input type="text" placeholder="Educational Details" name="education"
           value="{{ $per->education }}"  >
         </td>

   </tr>


      </table>
<input type="submit"
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
"  value="edit">
    </form>

    </ul>
  </td>
  </tr>
  </table>

  </div>
    </div>


@endforeach


</body>
</html>
@endsection

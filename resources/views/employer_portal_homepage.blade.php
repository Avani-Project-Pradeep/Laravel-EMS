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

  <a href="/employer_portal/edit"> <i class="fa fa-edit" style="font-size:48px">EDIT</a></i>
<br><br>



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










<form action="image"  enctype="multipart/form-data"  method="POST" >
  @csrf

  {{-- IMAGE SECTION --}}

  @foreach ($personal_details as $per )
  <img src= "C:\xamppp\htdocs\Laravel project\ems\public\images\{{$per->image}}
  ">


  <br>
  <div class="input_field">

    <div style="color:red; font-size:12px;">

      @error('image')

      {{ "*".$message }}
      <br>

      @enderror
</div>





</section>
<br><br><br><br><br><br>


<input type="file" name="image">

<span>

<button type="submit" class="btn"
 style="width:100px;">UPLOAD IMAGE</button>


<button class="btn" style="width:100px;">REMOVE IMAGE</button>
</span>





</form>
</td>
<td>
<ul><form>
  {{-- PROFESSIONAL DETAILS --}}
 <h2> PROFESSIONAL DETAILS</h2>
 <hr style="border: solid black;">


   <table>
     <tr>
       <td>
       </td>

       @foreach ($professional_details as $pd )

       <td style="width: 100px;">
        <label >Designation: </label>


        <input  style="width: 100px;" type="text"  readonly placeholder="Designation " value="{{ $pd->designation }}">
      </td>
      <td style="width: 100px;">
        <label >Location: </label>
        <input  style="width: 150px;" type="text" placeholder="Location" readonly value="{{$pd->location}}">
      </td>
      <td style="width: 150px;">
        <label>Company Name:</label>
        <input style="width: 150px;" value={{$pd->company_name}} type="text" placeholder="Company Name" readonly>
      </td>
      <td style="width: 100px;">
        <label>Division: </label>
        <input  style="width: 100px;"type="text" placeholder="Division" value="{{ $pd->division }}" readonly>
      </td>
     </tr>
     <tr>
       <td>
       </td>
       <td>
        <label >Date_Of_Joining: </label>
       <input type="date" value="{{ $pd->doj }}" readonly>
       </td>

      <td colspan="3">
        <label >Work_Experience: </label>
        <input type="text" placeholder="Work Experience" value="{{ $pd->work_experience }}" readonly>
       </td>
<td>
</tr>
<tr>
  <td></td>
  <td colspan="4">
      <label >Skills: </label>
      <br>
      <input  type="text" placeholder="Skills" value="{{ $pd->skills }}" readonly>
     </td>
</tr>

<tr>
  <td></td>
  <td colspan="4">
      <label >Bank Details: </label>
      <input type="text" placeholder="Bank Details"  readonly value="{{ $pd->bank_details  }}"  >
     </td>
</tr>


   </table>

</ul>
</td>
</tr>




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



           <input  style="width: 150px;" type="text" placeholder="First Name" readonly value="{{ $per->first_name }}" >
         </td>
         <td style="width: 150px;">

           <label >Last Name: </label>
           <input  style="width: 150px;" type="text" placeholder="Last Name"
           readonly value="{{ $per->last_name }}" >
         </td>
         <td>
           <label>DOB:</label>
           <input  type="date"  readonly value="{{ $per->dob }}">
         </td>
          </tr>
        <tr>
          <td>
          </td>
          <td colspan="2">
           <label >Email: </label>
          <input type="email" placeholder="Email" readonly
           value="{{ session('employer_email') }}" >
          </td>

         <td>
           <label >Phone Number: </label>
           <input type="text" placeholder="Phone Number"readonly  value="{{ $pd->phone }}" >
          </td>
   <td>
   </tr>
   <tr>
    <td>
    </td>
    <td style="width: 150px;">
     <label >City: </label>



     <input  style="width: 150px;" type="text" placeholder="City"  readonly value="{{ $per->city }}">
   </td>
   <td style="width: 150px;">

     <label >State: </label>
     <input  style="width: 150px;" type="text" placeholder="State"  readonly value="{{ $per->state }}">
   </td>
   <td>
     <label>Gender:</label>
     <input  type="text" placeholder="Gender"  readonly value="{{ $per->gender }}">
   </td>
    </tr>

   <tr>
     <td></td>
     <td colspan="2">
         <label >Address: </label>
         <input type="text" placeholder="Address" readonly  value="{{ $per->address }}" >
        </td>
        <td colspan="2">
          <label> Educational Details:</label>
          <input type="text" placeholder="Educational Details" readonly
           value="{{ $per->education }}"  >
         </td>

   </tr>


      </table>

    </form>

    </ul>
  </td>
  </tr>
  </table>
  </div>
    </div>


@endforeach
@endforeach


</body>
</html>
@endsection

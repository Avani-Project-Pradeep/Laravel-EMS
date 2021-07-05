@extends('layouts.portal_layout')
{{-- NAVIGATION OPTIONS --}}
@section('options')
<a href="/{{ $company_name }}/employer_portal/Home"><i class="fa fa-home"></i> Home</a>
<a href="/{{ $company_name }}/employer_portal/add_employee"><i class="fa fa-user-plus"></i> Add Employees </a>
<a href="/{{ $company_name }}/employer_portal/manage_employees/view"><i class="fa fa-users	"></i> Manage Employees</a>
<a href="/{{ $company_name }}/employer_portal/logout"><i class="fa fa-power-off
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
  {{-- IMAGE SECTION --}}
<img src="https://i.ibb.co/yNGW4gg/avatar.png" id="blah" alt="Avatar">
{{ session('employer_email') }}

</section>
<button class="btn" style="width:100px;">UPLOAD</button>
<button class="btn" style="width:100px;">EDIT</button>

</td>
<td>
<ul>
  {{-- PROFESSIONAL DETAILS --}}
 <h2> PROFESSIONAL DETAILS</h2>
 <hr style="border: solid black;">

 <form>
   <table>
     <tr>
       <td>
       </td>
       <td style="width: 100px;">
        <label >Designation: </label>
      


        <input  style="width: 100px;" type="text" placeholder="Name">
      </td>
      <td style="width: 100px;">
        <label >Location: </label>
        <input  style="width: 100px;" type="text" placeholder="Location">
      </td>
      <td style="width: 150px;">
        <label>Company Name:</label>
        <input style="width: 150px;" type="text" placeholder="Company Name">
      </td>
      <td style="width: 100px;">
        <label>Division: </label>
        <input  style="width: 100px;"type="text" placeholder="Division">
      </td>
     </tr>
     <tr>
       <td>
       </td>
       <td>
        <label >Date_Of_Joining: </label>
       <input type="date">
       </td>

      <td colspan="3">
        <label >Work_Experience: </label>
        <input type="text" placeholder="Work Experience">
       </td>
<td>
</tr>
<tr>
  <td></td>
  <td colspan="4">
      <label >Skills: </label>
      <br>
      <input  type="text" placeholder="Skills">
     </td>
</tr>

<tr>
  <td></td>
  <td colspan="4">
      <label >Bank Details: </label>
      <input type="text" placeholder="Bank Details" >
     </td>
</tr>


   </table>

 </form>
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
  <form>
    <table>
      <tr>
        <td>
        </td>
        <td style="width: 150px;">
         <label >First Name: </label>
       
 
 
         <input  style="width: 150px;" type="text" placeholder="First Name">
       </td>
       <td style="width: 150px;">

         <label >Last Name: </label>
         <input  style="width: 150px;" type="text" placeholder="Last Name">
       </td>
       <td>
         <label>DOB:</label>
         <input  type="date">
       </td>
        </tr>
      <tr>
        <td>
        </td>
        <td colspan="2">
         <label >Email: </label>
        <input type="email" placeholder="Email">
        </td>
 
       <td>
         <label >Phone Number: </label>
         <input type="text" placeholder="Phone Number">
        </td>
 <td>
 </tr>
 <tr>
  <td>
  </td>
  <td style="width: 150px;">
   <label >City: </label>
 


   <input  style="width: 150px;" type="text" placeholder="City">
 </td>
 <td style="width: 150px;">

   <label >State: </label>
   <input  style="width: 150px;" type="text" placeholder="State">
 </td>
 <td>
   <label>Gender:</label>
   <input  type="text" placeholder="Gender">
 </td>
  </tr>

 <tr>
   <td></td>
   <td colspan="2">
       <label >Address: </label>
       <input type="text" placeholder="Address" >
      </td>
      <td colspan="2">
        <label> Educational Details:</label>
        <input type="text" placeholder="Educational Details" >
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


</body>
</html>
@endsection
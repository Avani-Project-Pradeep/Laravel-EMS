{{-- LAYOUT OF PORTAL --}}
@extends('layouts.portal_layout')
 

{{-- NAVIGATION OPTIONS --}}
@section('options')
<a href="http://127.0.0.1:8000/{{$company_name}}/employer_portal/Home"><i class="fa fa-home"></i> Home</a>
<a href="http://127.0.0.1:8000/{{$company_name}}/employer_portal/manage_employees/view"><i class="fa fa-users	"></i> Manage Employees</a>
<a href="http://127.0.0.1:8000/{{$company_name}}/employer_portal/logout"><i class="fa fa-power-off
 "></i> Logout</a>     </nav>

@endsection


{{-- CONTENT --}}
@section('content')
<!--EXTERNAL CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('styles/add_employee.css') }}" >

</head>


<body>
  <br>
  <h2 style="margin-left:20px; color: white">Add Employee</h2>
  <hr style="border: solid green;">
  <form >


  <ul class="tab-wrap">
    <li>
        <input type="radio" id="tab-1" name="tab" checked />
        <label for="tab-1">
            Tab 1
        </label>

        <div class="tab-content">
      <div id="container">
      <div class="one"> 
        <div style="margin-left:20px">
          <br><br><br>
         <span> Employee_id:<span>
          <br>
          <input type="text"  name="employee_id" >
          <br><br><br>

          <span>Designation:<span>
           <br>

           <input type="text"  name="designation" >

           <br><br><br>

           <span>Department:<span>
            <br>
 
            <input type="text"  name="department" >

  <br><br><br>

          <span>Division:<span>
           <br>

           <input type="text"  name="division" >
           <br><br><br>

           <span>Employee type</Em>:<span>
            <br>
 
            <input type="text"  name="employee_type" >
 
            <br><br><br>

 

</div>






       </div>
        
      <div class="two" >
        <div style="margin-left:50px">
             <br><br><br>

         <span> Joining Date:<span>
          <br>
          <input style="width: 150px;"type="date"  name="joining_date" >
          <br><br><br>

          <span>Company Name:<span>
           <br>

           <input type="text"  name="company_name" >
           <br><br><br>

           <span>Reporting Manager:<span>
            <br>
 
            <input type="text"  name="reporting_manager" >
            <br><br><br>
      
            <span>Division:<span>
              <br>
   
              <input type="text"  name="division" >
              <br><br><br>
              <span>Employer Status:<span>
                <br>
     
                <input type="text"  name="employer_status" >
      
                

                <br><br><br>





                <input type="radio" id="tab-3" name="tab"  checked="checked" />
                <label for="tab-2">
                  Next>>
                </label>
          


       </div>
        </div>  
    </div>
    </div>
    </li>







    <li>
      <input type="radio" id="tab-2" name="tab" />
      <label for="tab-2">
          Tab 2
      </label>
      <div class="tab-content">
          <div id="container">
          <div>
        <div class="one">
  
          <br><br><br>
          <section style="margin-left: 20px">
            {{-- IMAGE SECTION --}}
          <img src="https://i.ibb.co/yNGW4gg/avatar.png" id="blah" alt="Avatar">
          {{ session('employer_email') }}
          <br><br><br>
          <button class="btn" style="width:80px;">UPLOAD</button>

          </section>

           
         </div>
          
        <div class="two" >
          <br><br><br>
          <div>
          <span>
         <span >First Name: </span>
         <input type="text" style="width:200px;"name="First Name">
         <span >Last Name: </span>
         <input type="text"style="width:200px;"  name="Last Name">

          </span>
          </div>

          <div>
            <br><br>

            <span>
           <span >Gender: </span>
           <input type="text"style="width:200px;"  name="gender">

             <span >DOB: </span>
           <input type="date"style="width:200px;"  name="Last Name">
  
            </span>

            <br><br><br>
          </div>

          <div>
            <span>Email ID:<span>
             <br>
  
             <input type="email"  name="email" >
             <br><br><br>
  
            </div>
  
            <div>
              <span>Contact Number:<span>
               <br>
    
               <input type="text"  name="contact_number" >
               <br><br><br>
    
              </div>
  
<div>
              <span>
                <span >State: </span>
                <input type="text" style="width:200px;"name="State">
                <span >City: </span>
                <input type="text"style="width:200px;"  name="City">
       
                 </span>
</div>
<br><br><br>



              <div>
                <span>Permanent Address:<span>
                 <br>
      
                 <input type="text"  name="permanent_address" >
                 <br><br><br>
      
                </div>
                <div>
                  <span>Educational Details:<span>
                   <br>
        
                   <input type="text"  name="educational details" >
                   <br><br><br>
        
                  </div>
            

         </div>
          </div>  
      </div>
      </div>
      </li>
  
  </ul>
</form>

        
      </body>
        
    </html>
  
  
  
  
  </div>

    
</div>
</body>
@endsection






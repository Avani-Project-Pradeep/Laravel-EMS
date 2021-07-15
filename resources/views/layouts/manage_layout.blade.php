<!DOCTYPE html>
<html>
<title>Manage Employees</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
table {
       counter-reset: tableCount;
   }
   .counterCell:before {
       content: counter(tableCount);
       counter-increment: tableCount;
   }


   .w-5{
       display: none;
   }


</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <!-- As a heading -->

    <span class="w3-bar-item w3-left">DASHBOARD</span>



  <span class="w3-bar-item w3-right"><a href="/employer_portal/logout">Logout</a></span>
  <span class="w3-bar-item w3-right"><a href="/home">Home</a></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:265px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">

    </div>
    <div class="w3-col s8 w3-bar">
        <br>

      <a href="#" class="w3-bar-item w3-button">
      <i class="fa fa-user-circle" style="font-size:20px;"> Welcome</i><br><br>

      {{session('employer_first_name')." ".session('employer_last_name')}}

        <button type="button" class="btn btn-outline-primary">
         Email ID :<br> {{session('employer_email')}}
        </button>



       </a>

    </div>
  </div>
  <hr>

  <div class="w3-bar-block" style="font-size:15px; width:200px">

    <a href="/employer_portal/manage_employees/view" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> View all Employees</a><br>
    <a href="/employer_portal/add_employee" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-square"></i> Add Employees</a><br>

    <a href="/Employee/register" class="w3-bar-item w3-button w3-padding"><i class="fa fa-check-circle"></i> Register Employees</a><br>


    <a href="/employer_portal/edit_employee" class="w3-bar-item w3-button w3-padding"><i class="fa fa-edit"></i> Update Employee <br>All Details </a><br>

    <a href="/search_employee" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search"></i>Search Employees</a>

  </div>
</nav>




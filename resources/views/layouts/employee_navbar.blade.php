<!-- NAVIGATION BAR -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/nav.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/card.css') }}" >


</head>
<body>
<nav >

       <div>
       <!-- LOGO -->
           <h1><img src="https://cdn1.vectorstock.com/i/1000x1000/50/80/st-letter-logo-design-s-t-logo-design-st-vector-28025080.jpg" style="width: 80px; ; height:80px;" alt="logo"></a></h1>

       </div>

     <em>  <a  style="font-size:20px;color:white" href="/About_Employer"><i class="fa fa-user"></i> About Employer</a></em>

       <!-- HEADING -->
       <h1 style="color: whitesmoke; font-size: 30px">EMPLOYEE PORTAL </h1>


                {{-- USER ICON --}}






<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

                <?php $image_db = DB::table('employee_personal_details')
                  ->where('employee_id',session('employee_id'))->value('image');?>


                @if( $image_db==NULL)
                <img id="myImg"  src="{{asset("images")}}/{{"blank.png"}}" alt="profile" style="height:80px; width:80px">

                @else
                <img id="myImg"  src="{{asset("images")}}/{{$image_db}}" alt="profile" style="height:80px; width:80px">

                @endif




                {{-- OPTIONS --}}

                <a href="/employee_portal/Home"  style="font-size:25px;color:white"><i class="fa fa-home"></i> Home</a>

                <a href="/employee_portal/add_details" style="color:white"><i class="fa fa-user-plus"></i> Add Details </a>


       <a href="/employee_portal/logout" style="color:white"><i class="fa fa-power-off
        "></i> Logout</a>     </nav>

</nav>

@extends('layouts.employee_portal')


{{-- CONTENT --}}

@section('content')
<meta http-equiv="refresh" content="300;url='/employee_portal/logout'" />


<!--EXTERNAL CSS-->

<style>


    html {
    scroll-behavior: smooth;
    }
    :root{
    scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
    scrollbar-width: thin !important;
    }
    ::-webkit-scrollbar {
    height: 12px;
    width: 8px;
    background:gray;
    }
    ::-webkit-scrollbar-thumb {
    background:#1e1e1e;
    }
    ::-webkit-scrollbar-corner {
    background: gray;
    }












   body{
    margin-top:80px;
    margin-right: -80px;
    margin-left: -80px;


    background:gray;
    font-family: 'Oswald', sans-serif;
    }



    ul{
    position:relative;
    left:-20px;
    }

    ul li{
    padding:20px 0;
    color:whitesmoke;
    }

    b{
    color:#fff;
    }

    .btn{
    background:#7ed321;
    padding:10px;
    border:0;
    outline:none;
    color:#000;
    display:block;
    width:60px;
    margin:10px 0;
    text-align:Center;
    border-radius:5px;
    cursor:pointer;
    }


    .fa{
    color:#7ed321;
    cursor:pointer;
    }




    .nonav
    {
       margin-right: auto;
       margin-left: auto;
       margin-bottom: auto;
       margin-top:-20px;
      width:60%;

      }

    .container{
    margin:10vh auto;
    }

    .container table{
    width:60%;
    margin-left: -80px;
    margin-right:-50px;
    }

    .container table td{
    margin:30px;
    padding:30px;
    background-color:whitesmoke;
    color:#000;
    vertical-align:top;
    }

    .container table td:nth-child(1){
    text-align:Center;
    }

    .container table td:nth-child(2) .fa{
    float:right;
    }

    .container table td:nth-child(2) input{
    background:none;
    outline:none;
    border-right:hidden;
    border-left:hidden;
    border-top:hidden;
    border-bottom:groove;
    border-color:#7ed321;

    color:black;
    width:100%;
    }

    .container table td:nth-child(1) section{
    position:relative;
    width:200px;
    height:200px;
    margin:10vh auto;
    }


    .container table td:nth-child(1) .fa{
    position:absolute;
    right:25px;
    top:25px;
    font-size:2em;
    }



   .img{

    margin: top 200px; ;
   }


    .container table td img{
    width:200px;
    height:200px;
    border-radius:50%;
    }

    .container table td h3{
    color:whitesmoke;
    font-weight:normal;
    }

    .container table .section2{
    text-align:left;
    }

    .container table .section2 label{
    display:block;
    margin:20px 0;
    text-align:left;
    }

    .container table .section2 select{
    background:#1e1e1e;
    width:100%;
    border:0;
    outline:none;
    color:gray;
    }

    .container table .section2 input{
    background:#1e1e1e;
    width:100%;
    padding:20px;
    color:gray;
    border:0;
    outline:none;
    }


    .container table .section2 .quantityselector section{
    display:inline-block !important;
    width:45%;
    margin:0 20px;
    }

    .container table textarea{
    width:90%;
    resize:none;
    outline:none;
    border:0;
    background:gray;
    color:gray;
    padding:20px;
    }



    .container .inframe {
    width:100%;
    height:40vh;
    position:relative;
    overflow:hidden;
    display:block;
    margin:20px 0;

    }

    .container .inframe .img{
    width:100%;
    height:40vh;
    border:none;
    }





    @media (max-width:820px){
    .container{
    width:100%;
    }
    .container table td{
    display:block;
    width:90%;
    margin:60px;
    }
    .container table .section2 .quantityselector section{
    width:41%;
    margin:0px 10px;
    }
    .container table .section2 ul{
    position:relative;
    left:-40px;
    }
    .table
    {  overflow: hidden;}


    }
    .collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 80%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    margin-top: 400px;
  }

  .active, .collapsible:hover {
    background-color: #555;
  }

  .content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
  }

    </style>













</head>


<body>



  <div class="nonav">

<div class="container">

 <table cellspacing="0" cellpadding="0" >
    <tr>
<td>
    <section>
        <form action="/employee/image/edit/{{session('employee_id')}}"  enctype="multipart/form-data"  method="POST" >
         @csrf
        <br><br><br>

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




            {{-- IMAGE SECTION --}}

            @foreach ($personal_details as $per )

            @if( $per->image==NULL)
            <img  style="height:200px; width:200px" src="{{asset("images")}}/{{"blank.png"}}">
            @else
            <img src= "{{asset("images")}}/{{$per->image}}"
            >
            @endif

            {{$per->first_name." ".$per->last_name}}

            <br>
            <div class="input_field">

                <div style="color:red; font-size:12px;">

                    @error('image')

                    {{ "*".$message }}
                    <br>

                    @enderror
                </div>


<br><br>

<button type="button" class="collapsible">Open Message Box</button>
<div class="content">
  <p>This message Box Displays Important Information</p>
</div>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
    </script>



    </section>
    <br><br><br>
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


        <input  style="width: 100px;" type="text"  readonly placeholder="Designation"
         value="{{ $pd->designation }}">
      </td>
      <td style="width: 100px;">
        <label >Location: </label>
        <input  style="width: 100px;" type="text" placeholder="Location" readonly
        value="{{$pd->location}}">
      </td>
      <td style="width: 150px;">
        <label>Company Name:</label>
        <input style="width: 150px;" value="{{$pd->ompany_name}}" type="text" placeholder="Company Name" readonly>
      </td>
      <td style="width: 100px;">
        <label>Division: </label>
        <input  style="width: 100px;"type="text" placeholder="Division"
         value="{{ $pd->division }}" readonly>
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
      <input type="text" placeholder="Bank Details"  readonly value="{{ $pd->bank_details}}"  >
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



           <input  style="width: 150px;" type="text" placeholder="First Name" readonly
            value="{{ $per->first_name }}" >
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
           value={{ session('employee_email') }} >
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

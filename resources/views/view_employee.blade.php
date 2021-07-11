@include('layouts.manage_layout')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:400px; margin-right:200px;   margin-top:80px;">

    <body>
        <table cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <section>
                        <br><br><br>

                        <a href='/editemployee/{id}'> <i class="fa fa-edit" style="font-size:48px">EDIT</a></i>
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



                        <form action="image" enctype="multipart/form-data" method="POST">
                            @csrf

                            {{-- IMAGE SECTION --}}

                            @foreach ($personal_details as $per )
                            <img src="C:\xamppp\htdocs\Laravel project\ems\public\images\{{$per->image}}
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
                    <br><br><br>


                    <input type="file" name="image">

                    <span>

                        <button type="submit" class="btn" style="width:100px;">UPLOAD IMAGE</button>

                        <br>

                        <button class="btn" style="width:100px;">REMOVE IMAGE</button>
                    </span>





                    </form>
                </td>
            </table>




        <ul>
            <form>
                {{-- PROFESSIONAL DETAILS --}}
                <h2> PROFESSIONAL DETAILS</h2>
                <hr style="border: solid black;">





                @foreach ($professional_details as $pd )

                <div>

                    <label>Designation: </label>


                    <input style="width: 200px;" type="text" readonly placeholder="Designation "
                        value={{ $pd->designation }}>


                    &nbsp;&nbsp;


                    <label>Location: </label>
                    <input style="width: 200px;" type="text" placeholder="Location" readonly value={{$pd->location}}>


                    &nbsp;&nbsp;

                    <label>Company Name:</label>
                    <input style="width: 200px;" value={{$pd->company_name}} type="text" placeholder="Company Name"
                        readonly>



                </div>

                <br><br>



                <div>
                    <label>Division: </label>
                    <input style="width: 200px;" type="text" placeholder="Division" value={{ $pd->division }} readonly>

                    &nbsp;&nbsp;

                    <label>Date_Of_Joining: </label>
                    <input style="width: 200px;" type="date" value={{ $pd->doj }} readonly>

                    &nbsp;&nbsp;&nbsp;

                    <label>Work_Experience: </label>
                    <input style="width: 200px;" type="text" placeholder="Work Experience"
                        value={{ $pd->work_experience }} readonly>

                </div>

                <br><br>



                <div>
                    <label>Skills: </label>
                    <input style="width: 250px;" type="text" placeholder="Skills" value={{ $pd->skills }} readonly>

                    &nbsp;&nbsp;

                    <label>Bank Details: </label>
                    <input style="width: 250px;" type="text" placeholder="Bank Details" readonly
                        value={{ $pd->bank_details  }}>

                </div>

                <br><br>


        </ul>


    <td class="section2">
         <ul>




                   <form>


                {{-- PERSONAL DETAILS --}}
                <h2>PERSONAL DETAILS</h2>
                <hr style="border: solid black;">
                <ul>

                    <table>
                     <div>
                      <label>First Name: </label>
                      <input style="width: 300;" type="text" placeholder="First Name" readonly
                                    value={{ $per->first_name }}>

                                       &nbsp;&nbsp;

                                <label>Last Name: </label>
                                <input style="width: 300;" type="text" placeholder="Last Name" readonly
                                    value={{ $per->last_name }}>


                                    &nbsp;&nbsp;
                                    &nbsp;&nbsp;



                                <label>DOB:</label>
                                <input  style="width: 300;" type="date" readonly value={{ $per->dob }}>

                                  </div>

                                  <br><br>



                                  <div>

                                <label>Email: </label>
                                <input type="email" placeholder="Email" readonly value={{ session('employer_email') }}>

                                   &nbsp;&nbsp;

                                <label>Phone Number: </label>
                                <input type="text" placeholder="Phone Number" readonly value={{ $pd->phone }}>
                                &nbsp;&nbsp;

                                <label>City: </label>
                                <input  type="text" placeholder="City" readonly
                                    value={{ $per->city }}>
                                    &nbsp;&nbsp;



                                  </div>

                                   <br><br>
                                  <div>

                                    <label>State: </label>
                                    <input  type="text" placeholder="State" readonly
                                        value={{ $per->state }}>

                                        &nbsp;&nbsp;


                                <label>Gender:</label>
                                <input type="text" placeholder="Gender" readonly value={{ $per->gender }}>

                                    &nbsp;&nbsp;

                                <label>Address: </label>
                                <input type="text" placeholder="Address" readonly value={{ $per->address }}>


                                  </div>

                                  <br><br>


                                <label> Educational Details:</label>
                                <input type="text" placeholder="Educational Details" readonly
                                    value={{ $per->education }}>





                    </table>

                    </form>




@endforeach
@endforeach


</body>

</html>
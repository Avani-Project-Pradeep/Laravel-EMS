{{-- portal layout --}}
@extends('layouts.employee_portal')


{{-- tab headers --}}
@include('add_employee_tabs_header')
<meta http-equiv="refresh" content="300;url='/employee_portal/logout'" />

<body>
    <br>
    <em><span style="margin-left:50px; font-size:30px;color: white">Update Employee Details</span></em>

    <hr style="border: solid green;">

    <ul class="tab-wrap">
        <li>
            <input type="radio" id="tab-1" name="tab" disabled />
            <label for="tab-1">
                Tab 1
            </label>

        <li>
            <input type="radio" id="tab-2" name="tab" checked="checked" />
            <label for="tab-2">
                Tab 2
            </label>

            <div class="tab-content">
                <div id="container">
                    <div>

                        <br><br>
                        <section>
                            <form action="/add_details_all/{{session('employee_id')}}" enctype="multipart/form-data" method="POST">
                                @foreach ($personal_details as $per)

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

                        <img style="height:200px; width:200px" src="{{asset("images")}}/{{"blank.png"}}">






                                <br>
                                <div class="input_field">

                                    <div style="color:red; font-size:12px;">

                                        @error('image')

                                        {{ "*".$message }}
                                        <br>

                                        @enderror
                                    </div>


                                    <span>
                                        <input type="file" name="image" id="change">
                                        <br>


                                    </span>


                        </section>


                        @include('employee_portal.tab2_form1')





                        <div class="two">
                            @include('employee_portal.tab2form2_employee')

                        </div>

                        <a href='/employee_portal/add_details' id='change'>Back</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="submit" id="change" value="Update">

                    </div>
                </div>
            </div>
        </li>

    </ul>
    </form>

    @endforeach

</body>

</html>
@endsection
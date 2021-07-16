{{-- portal layout --}}
@extends('layouts.portal_layout')


{{-- tab headers --}}
@include('add_employee_tabs_header')

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
                        <div class="one">

                            <br><br>
                            <section>
                                <form action="/employee/image/edit/{{$id}}" enctype="multipart/form-data" method="POST">
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


                                    <img style="height:300px; width:300px margin-left:20px"
                                        src="{{asset("images")}}/{{"blank.png"}}">



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

                                            <button type="submit" id="change" style="width:120px;">UPLOAD IMAGE</button>

                                        </span>

                                </form>

                            </section>





                            <form method="POST" action="/actionupdateemployee">
                                @csrf

                        </div>

                        <div class="two">
                            <br><br>

                            @include('tab2form')



                            <input type="hidden" value={{$id}} name='employee_id'>

                            <br><br><br>

                            <a href='/employer_portal/add_employee' id='change'>Back</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="submit" id="change" value="Update">








                        </div>

                    </div>
                </div>
            </div>
        </li>

    </ul>
    </form>


</body>

</html>
@endsection

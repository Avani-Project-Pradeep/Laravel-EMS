{{-- portal layout --}}
@extends('layouts.portal_layout')


{{-- tab headers --}}
@include('add_employee_tabs_header')

<body>
    <br>
    <h2 style="margin-left:20px; color: white">Add Employee</h2>
    <hr style="border: solid green;">
    <form method="POST" action="/actionaddemployee">
        @csrf

        <ul class="tab-wrap">
            <li>
                <input type="radio" id="tab-1" name="tab" checked="checked" />
                <label for="tab-1">
                    Tab 1
                </label>
                {{-- tab1 --}}
                <div class="tab-content">
                    <div id="container">
                        {{-- tab1-form.part1 --}}
                        @include('tab1form1prefilled')


                        <div class="two">
                            <div style="margin-left:50px">
                                <br><br>
                                @include('tab1form2prefilled')
                                <input type="radio">
                                <label id="change" for="tab-2">Next</label>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

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
                                <section style="margin-left: 20px">
                                    {{-- IMAGE SECTION --}}
                                    <img src="https://i.ibb.co/yNGW4gg/avatar.png" id="blah" alt="Avatar">
                                    {{ session('employer_email') }}
                                    <br><br>
                                    <button class="btn" style="width:80px;">UPLOAD</button>

                                </section>


                            </div>

                            <div class="two">
                                <br><br>

                                @include('tab2form')

                                <br>

                                <input type="radio" id="tab-4" name="tab" value="" />
                                <label id="change" style="background-color: #4CAF50;" for="tab-1">
                                    Previous
                                </label>

                                <br>



                                <input type="submit" id="change" value= "Save">


                                <input type="submit" id="change" value=" Update">






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
@endsection

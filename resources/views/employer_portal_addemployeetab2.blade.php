{{-- portal layout --}}
@extends('layouts.portal_layout')


{{-- tab headers --}}
@include('add_employee_tabs_header')

<body>
    <br>
    <h2 style="margin-left:20px; color: white">Add Employee</h2>
    <hr style="border: solid green;">

        <ul class="tab-wrap">
            <li>
                <input type="radio" id="tab-1" name="tab" disabled/>
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
                                <section style="margin-left: 20px">
                                    {{-- IMAGE SECTION --}}
                                    <img src="https://i.ibb.co/yNGW4gg/avatar.png" id="blah" alt="Avatar">
                                    {{ session('employer_email') }}
                                    <br><br>
                                    <button class="btn" style="width:80px;">UPLOAD</button>

                                </section>

                                <form method="POST" action="/actionaddemployee">
                                    @csrf

                            </div>

                            <div class="two">
                                <br><br>

                                @include('tab2form')

                                <br>

                                <input type="hidden" value={{$id}} name='employee_id'>

                                <a href='/employer_portal/add_employee' id='change'>Back</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <input type="submit" id="change" value= "Save">








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

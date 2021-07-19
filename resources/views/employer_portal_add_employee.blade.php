{{-- portal layout --}}
@extends('layouts.add_employee')


{{-- tab headers --}}
@include('add_employee_tabs_header')

<body>
    <br>
    <meta http-equiv="refresh" content="300;url='/employer_portal/logout'" />


    {{-- heading and employee registration link --}}
   <em><span style="margin-left:50px; font-size:30px;color: white">Add Employee</span></em>
    <em><a  style="margin-left:800px; font-size:30px;color:white" href="/Employee/register">Click here to Register Employees </a></em>

    <hr style="border: solid green;">


    {{-- form started --}}
    <form method="POST" action="/nextaddemployee">
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
                        @include('tab1form1')

                        <div class="two">
                            <div style="margin-left:50px">
                                <br><br>
                                {{-- tab1-form.part2 --}}
                                @include('tab1form2')

                                {{-- next button --}}


                              <input id="change" type="submit"   value="Next">
                            </div>
                        </div>
                    </div>
                </div>

            </li>
            {{-- tab1 end --}}

            {{-- tab2 --}}
            <li>
                <input type="radio" id="tab-2" name="tab" disabled />
                <label for="tab-2" disabled>
                    Tab 2
                </label>
            </li>


        </ul>
    </form>
    {{-- form end --}}
</body>

</html>
@endsection

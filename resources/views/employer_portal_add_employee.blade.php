{{-- portal layout --}}
@extends('layouts.portal_layout')


{{-- tab headers --}}
@include('add_employee_tabs_header')

<body>
    <br>
    <h2 style="margin-left:20px; color: white">Add Employee</h2>
    <hr style="border: solid green;">
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
</body>

</html>
@endsection

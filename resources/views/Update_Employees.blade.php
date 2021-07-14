{{-- portal layout --}}
@extends('layouts.portal_layout')


{{-- tab headers --}}
@include('add_employee_tabs_header')

<body>
    <br>
    <h2 style="margin-left:20px; color: white">Update Employees Details</h2>
    <hr style="border: solid green;">





    <form method="POST" action="/nextupdateemployee">
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
                        <div class="one">
                            <div style="margin-left:20px">
                                <br><br>


                                <span> Employee_id: </span>
                                <select name="employee_id" id="employee_id">
                                 <option value="">Employee_id</option>

                                 {{ $ids = DB::table('Employee_Professional_Details')->pluck('Employee_id');
                                }}


                                 @foreach ($ids as $id)

                                <option value={{$id}}>{{$id}}</option>

                                @endforeach
                                  </select>


                                  <br><br>

                                <span>Designation:</span> <br>
                                <input type="text" name="designation">
                                <div style="color:red; font-size:12px;">
                                    @error('designation')
                                    {{ '*' . $message }}
                                    @enderror
                                </div>
                                <br>


                                <span>Department:</span>
                                <input type="text" name="department">
                                <div style="color:red; font-size:12px;">
                                    @error('department')
                                    {{ '*' . $message }}
                                    @enderror
                                </div>
                                <br>

                                <span>Division:</span>
                                <input type="text" name="division">
                                <div style="color:red; font-size:12px;">
                                    @error('division')
                                    {{ '*' . $message }}
                                    @enderror
                                </div>
                                <br>


                                <span>Employee type:</span> <br>
                                <input type="text" name="employee_type"><br>
                                <div style="color:red; font-size:12px;">
                                    @error('employee_type')
                                    {{ '*' . $message }}<br>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="two">
                            <div style="margin-left:50px">
                                <br><br>
                                {{-- tab1-form.part2 --}}
                                @include('tab1form2')

                                {{-- next button --}}


                                <input id="change" type="submit" value="Next">
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

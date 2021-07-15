@foreach ($professional_details as $pro)

<span> Joining Date:</span><br>
<input style="width: 150px;" type="date" name="doj" value="{{ $pro->doj }}">
<div style="color:red; font-size:12px;">
    @error('doj')
    {{ '*' . $message }}
    @enderror
</div>
<br>

<span>Employer Name:<span>
        <input type="text"  name="employer_name" value="{{$pro->employer_name}}">
        <br>

        <div style="color:red; font-size:12px;">
            @error('employer_name')
            {{ '*' . $message }}
            @enderror
        </div>
        <br>

        <span>Reporting Manager:<span>
                <input type="text" name="reporting_manager" value="{{$pro->reporting_manager}}">
                <br>
                <div style="color:red; font-size:12px;">
                    @error('reporting_manager')
                    {{ '*' . $message }}
                    @enderror
                </div>
                <br>

                <span>Shift:<span>
                        <br>
                        <input type="text" name="shift" value="{{$pro->shift}}">

                        <div style="color:red; font-size:12px;">
                            @error('shift')
                            {{ '*' . $message }}
                            @enderror
                        </div>
                        <br>


                        <span>Work Experience:<span>
                                <br>
                                <input type="text" name="work_experience" value="{{$pro->work_experience}}">

                                <div style="color:red; font-size:12px;">
                                    @error('work_experience')
                                    {{ '*' . $message }}
                                    @enderror
                                </div>
                                <br>







                                <span>Employee Status:<span>
                                        <input type="text" name="employee_status" @if($pro->employee_status==1)

                                        value="Active"
                                        @else
                                        value="Inactive"

                                        @endif
                                        >




                                        <div style="color:red; font-size:12px;">
                                            @error('employee_status')
                                            {{ '*' . $message }}
                                            @enderror
                                        </div>
                                        <br><br>






                                        @endforeach

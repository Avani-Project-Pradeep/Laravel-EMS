@foreach ($professional_details as $pro)

<span> Joining Date:</span><br>
<input style="width: 150px;" type="date" name="doj" value="{{ $pro->doj }}">
<div style="color:red; font-size:12px;">
    @error('doj')
    {{ '*' . $message }}
    @enderror
</div>
<br><br>

<span>Employer Name:<span>
    <br>
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
                                         @if($pro->employee_status==1)
                                           <select name="employee_status">
                                            <option value="1" Selected>Active</option>
                                            <option value="0">Inactive</option>
                                           </select>

                                        @else
                                        <select name="employee_status">
                                            <option value="1" >Active</option>
                                            <option value="0" Selected>Inactive</option>
                                           </select>


                                        @endif





                                        <div style="color:red; font-size:12px;">
                                            @error('employee_status')
                                            {{ '*' . $message }}
                                            @enderror
                                        </div>
                                        <br><br>






                                        @endforeach

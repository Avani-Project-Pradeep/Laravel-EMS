<span> Joining Date:</span>
<input style="width: 150px;" type="date" name="joining_date">
<div style="color:red; font-size:12px;">
    @error('joining_date')
    {{ '*' . $message }}<br>
    @enderror
</div>
<br><br>

@foreach ($professional_details as $pro )


<span>Employer Name:<span>
        <input type="text" name="employer_name">
        <br><br>
        <div style="color:red; font-size:12px;">
            @error('company_name')
            {{ '*' . $message }}
            @enderror
        </div>
        <br>

        <span>Reporting Manager:<span>
                <input type="text" name="reporting_manager">
                <br>
                <div style="color:red; font-size:12px;">
                    @error('reporting_manager')
                    {{ '*' . $message }}
                    @enderror
                </div>
                <br><br>

                <span>Shift:<span>
                    <br>
                    <input type="text" name="employee_status" value={{$pro->shift}}>

                        <div style="color:red; font-size:12px;">
                            @error('shift')
                            {{ '*' . $message }}
                            @enderror
                        </div>
                        <br><br>

                     <span>Employee Status:<span>
                     <input type="text" name="employee_status"
                     @if($pro->employee_status==1)
                     {
                         value='Active';
                     }
                     else
                     {
                         value="Inactive";
                     }
                      @endif
                     >

                                <div style="color:red; font-size:12px;">
                                    @error('employee_status')
                                    {{ '*' . $message }}
                                    @enderror
                                </div>
                                <br><br>
@endforeach

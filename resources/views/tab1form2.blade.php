<span> Joining Date:</span>
<input style="width: 150px;" type="date" name="joining_date" value="{{old('joining_date')}}">
<div style="color:red; font-size:12px;">
    @error('joining_date')
    {{ '*' . $message }}<br>
    @enderror
</div>
<br><br>


<span>Company Name:<span>
        <input type="text" name="company_name" value="{{old('company_name')}}">
        <br><br>
        <div style="color:red; font-size:12px;">
            @error('company_name')
            {{ '*' . $message }}
            @enderror
        </div>
        <br>

        <span>Reporting Manager:<span>
                <input type="text" name="reporting_manager" value="{{old('reporting_manager')}}">
                <br>
                <div style="color:red; font-size:12px;">
                    @error('reporting_manager')
                    {{ '*' . $message }}
                    @enderror
                </div>
                <br>

                <span>Shift:<span>
                        <select name="shift" id="shift" value="{{old('shift')}}">
                            <option value="">Choose Shift</option>
                            <option value="India">India</option>
                            <option value="Abroad">Abroad</option>
                        </select>

                        <div style="color:red; font-size:12px;">
                            @error('shift')
                            {{ '*' . $message }}
                            @enderror
                        </div>
                        <br>
                        <br>
                        <span>Employee Status:<span>
                                <select id="employee_status" name="employee_status" value="{{old('employee_status')}}">
                                    <option value="">Choose Status</option>

                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <div style="color:red; font-size:12px;">
                                    @error('employee_status')
                                    {{ '*' . $message }}
                                    @enderror
                                </div>
                                <br><br>

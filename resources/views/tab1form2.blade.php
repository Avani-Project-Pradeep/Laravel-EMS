
 <span> Joining Date:</span>
<input style="width: 150px;" type="date" name="joining_date">
<div style="color:red; font-size:12px;">
    @error('joining_date')
    {{ '*' . $message }}<br>
    @enderror
</div>
<br><br>


<span>Company Name:<span>
<input type="text" name="company_name">
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
<br>

 <span>Shift:<span>
 <br>
 <input type="text" name="shift">
 <div style="color:red; font-size:12px;">
      @error('shift')
      {{ '*' . $message }}
      @enderror
 </div>

 <br>
 <span>Employee Status:<span>
 <input type="text" name="employee_status">
<div style="color:red; font-size:12px;">
   @error('employee_status')
    {{ '*' . $message }}
    @enderror
</div>
<br>
<br><br>





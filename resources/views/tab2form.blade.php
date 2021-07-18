<div>
    <span>First Name: </span>

    <input type="text" style="width:300px;" name="first_name" value="{{old('first_name')}}"><span style="color: red;">@error('first_name'){{"*".$message}}@enderror</span>

</div>

    <br>

    <div>

    <span>Last Name: </span>
    <input type="text" style="width:300px;" name="last_name"  value="{{old('last_name')}}"><span style="color: red;">@error('last_name'){{"*".$message}}@enderror</span>


    </div>
<br>

<div>
    <span>
        <span>Gender: </span>
        <input type="text" style="width:100px;" name="gender" value="{{old('gender')}}"><span style="color: red;">@error('gender'){{"*".$message}}@enderror</span>
         <br><br>
        <span>DOB: </span>
        <input type="date" style="width:200px;" name="dob" value="{{old('dob')}}"><span style="color: red;">@error('dob'){{"*".$message}}@enderror</span>


    </span>

</div>

<br><br>

<div>
    <span>Email ID:<span>

            <input type="text" name="employee_email" value="{{old('email')}}"><br><span style="color: red;">@error('employee_email'){{"*".$message}}@enderror</span>



</div>


<br>
<div>
    <span>Contact Number:</span>

            <input type="text" name="phone" value="{{old('phone')}}"><br><span style="color: red;">@error('phone'){{"*".$message}}@enderror</span>


</div>


<br>

<div>
    <span>
        <span>State: </span>
        <input type="text" style="width:100px;" name="state" value="{{old('state')}}"><span style="color: red;">@error('state'){{"*".$message}}@enderror</span>


&nbsp;&nbsp;
        <span>City: </span>
        <input type="text" style="width:100px;" name="city" value="{{old('city')}}"><span style="color: red;">@error('city'){{"*".$message}}@enderror</span>


    </span>
</div>


<br><br>

<div>
    <span>Permanent Address:</span>

            <input type="text" name="permanent_address" value="{{old('permanent_address')}}"><br><span style="color: red;">@error('permanent_address'){{"*".$message}}@enderror</span>



</div>




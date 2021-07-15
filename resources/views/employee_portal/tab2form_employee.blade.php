<div>
    <span>First Name: </span>

    <input type="text" style="width:400px;" name="first_name">
  <span style="color: red;">@error('first_name'){{"*".$message}}@enderror</span>

  <br><br><br>
    <span>Last Name: </span>
    <input type="text" style="width:400px;" name="last_name">
  <span style="color: red;">@error('last_name'){{"*".$message}}@enderror</span>


</div>
<br>

<div>
    <span>
        <span>Gender: </span>
        <input type="text" style="width:80px;" name="gender"><span style="color: red;">@error('gender'){{"*".$message}}@enderror<br></span>
        <span>DOB: </span>
        <input type="date" style="width:150px;" name="dob"><span style="color: red;">@error('dob'){{"*".$message}}@enderror</span>
        <br><br>
        <span>Blood Group: </span>
        <select name="blood_group" >
            <option value="">Choose Blood Group</option>

            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>


          </select>


          <br><br>

    </span>

</div>

<div>
    <span>Email ID:<span>

            <input type="email" style="width:200px;" name="employee_email"><br>
            <span style="color: red;">@error('employee_email'){{"*".$message}}@enderror</span>

<br>


    <span>Contact Number:</span>

            <input type="text"  style="width:200px;" name="phone"><br><span style="color: red;">@error('phone'){{"*".$message}}@enderror</span>


</div>
<br>


<div>

<span>Aadhar Number:</span>

<input type="text"  style="width:150px;" name="aadhar"><br><span style="color: red;">@error('aadhar'){{"*".$message}}@enderror</span>
<br>


<span>PAN Card :</span>

<input type="text"  style="width:150px;" name="pan"><br><span style="color: red;">@error('pan'){{"*".$message}}@enderror</span>


<br>







    <span> Emergency Contact Number:</span>

            <input type="text" style="width:100px;" name="emergency_phone_number"><br><span style="color: red;">@error('emergency_phone_number'){{"*".$message}}@enderror</span>



        </div>

<br>

<div>
    <span>
        <span>State: </span>
        <input type="text" style="width:100px;" name="state"><span style="color: red;">@error('state'){{"*".$message}}@enderror</span>


&nbsp;&nbsp;
        <span>City: </span>
        <input type="text" style="width:100px;" name="city"><span style="color: red;">@error('city'){{"*".$message}}@enderror</span>


    </span>
</div>

<div>
    <br>
    <span>Current Address:</span>

            <input type="text" name="current_address"><br><span style="color: red;">@error('current_address'){{"*".$message}}@enderror</span>



</div>


<br>

<div>
    <span>Hobbies:</span>

            <input type="text" name="hobbies"><br><span style="color: red;">@error('hobbies'){{"*".$message}}@enderror</span>



</div>



<br>
<div>
    <span>Educational Details:</span>

            <input type="text" name="education"><br><span style="color: red;">@error('education'){{"*".$message}}@enderror</span>

</div>






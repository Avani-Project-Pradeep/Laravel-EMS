<div style="margin-left:20px">

<br>
<span>PAN Card :</span>

<input type="text"  style="width:200;" name="pan"><br><span style="color: red;">@error('pan'){{"*".$message}}@enderror</span>


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






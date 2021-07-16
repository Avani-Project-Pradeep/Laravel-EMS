<div style="margin-left:30px">



    <br>
    <span>PAN Card :</span>

    <input type="text" style="width:300px;" name="pan" value="{{$per->pan}}"><br><span
        style="color: red;">@error('pan'){{"*".$message}}@enderror</span>


      <br><br>


    <span> Emergency Contact Number:</span>

    <input type="text" style="width:300px;" name="emergency_phone_number" value="{{$per->phone}}"><br><span
        style="color: red;">@error('emergency_phone_number'){{"*".$message}}@enderror</span>




        <br><br>

    <span>
        <span>State: </span>
        <input type="text" style="width:200px;" name="state" value="{{$per->state}}"><br><span
            style="color: red;">@error('state'){{"*".$message}}@enderror</span>

<br><br>
        <span>City: </span>
        <input type="text" style="width:200px;" name="city" value="{{$per->city}}"><br><span
            style="color: red;">@error('city'){{"*".$message}}@enderror</span>


    </span>

    <br><br>
    <span>Current Address:</span>
     <br>
    <input type="text" style="width:200;" name="current_address" value="{{$per->current_address}}"><br><span
        style="color: red;">@error('current_address'){{"*".$message}}@enderror</span>





        <br><br>

    <span>Hobbies:</span>

     <br>
    <input type="text" style="width:200;" name="hobbies"  value="{{$per->hobbies}}"><br><span
        style="color: red;">@error('hobbies'){{"*".$message}}@enderror</span>






        <br><br>
        <span>Educational Details:</span>

    <input type="text" style="width:200;" name="education" value="{{$per->education}}"><br><span
        style="color: red;">@error('education'){{"*".$message}}@enderror</span>



        <a href='/employee_portal/add_details' id='change'>Back</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <input type="submit" id="change" value="Update">

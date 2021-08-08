
<div class="one">
    <br>

    <div style="margin-left:20px">
        <span>First Name: </span>

        <input type="text" style="width:200px;" name="first_name"   value="{{$per->first_name}}">
        <br>   <span style="color: red;">@error ('first_name'){{"*".$message}}@enderror</span>

        <br><br>
        <span>Last Name: </span>
        <input type="text" style="width:200px;" name="last_name"     value="{{$per->last_name}}">
        <br> <span style="color: red;">@error('last_name'){{"*".$message}}@enderror</span>

        <br><br>

           <span>Gender: </span>
        <input type="text"  style="width:200px;" name="gender" value="{{$per->gender}}">
        <br>   <span style="color: red;">@error('gender'){{"*".$message}}@enderror
        </span>
        <br>

        <span>DOB: </span>
      <br>  <input type="date" name="dob" style="width:200px;"   value="{{$per->dob}}">
      <br><span style="color: red;">@error('dob'){{"*".$message}}@enderror</span>

        <br><br>


        <span>Blood Group: </span>
        <select name="blood_group" >
            <option value=" ">Choose Blood Group</option>
             <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>


        </select>


        <span style="color: red;">@error('blood_group'){{"*".$message}}@enderror</span>


        <br><br>



        <span>Email ID:<span>

                <input type="email"  style="width:200px;" name="employee_email" value="{{$per->employee_email}}"><br>
                <span style="color: red;">@error('employee_email'){{"*".$message}}@enderror</span>

                <br><br>


                <span>Contact Number:</span>

                <input type="text"  style="width:200px;" name="phone" value="{{$per->phone}}"><br><span
                    style="color: red;">@error('phone'){{"*".$message}}@enderror</span>


                <br><br>



                <span>Aadhar Number:</span>

                <input type="text"  style="width:200px;" name="aadhar" value="{{$per->aadhar}}"><br><span
                    style="color: red;">@error('aadhar'){{"*".$message}}@enderror</span>
                <br><br>




    </div>
</div>

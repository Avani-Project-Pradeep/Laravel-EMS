<div class="one">
    <br>

    <div style="margin-left:20px">
        <span>First Name: </span>

        <input type="text" style="width:300px;" name="first_name">
        <span style="color: red;">@error('first_name'){{"*".$message}}@enderror</span>

        <br><br>
        <span>Last Name: </span>
        <input type="text" style="width:300px;" name="last_name">
        <span style="color: red;">@error('last_name'){{"*".$message}}@enderror</span>

        <br><br>

           <span>Gender: </span>
        <input type="text"  style="width:300px;" name="gender">
        <span style="color: red;">@error('gender'){{"*".$message}}@enderror
        </span>
        <br><br>

        <span>DOB: </span>
        <input type="date" name="dob"><span style="color: red;">@error('dob'){{"*".$message}}@enderror</span>

        <br><br>


        <span>Blood Group: </span>
        <select name="blood_group">
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



        <span>Email ID:<span>

                <input type="email" name="employee_email"><br>
                <span style="color: red;">@error('employee_email'){{"*".$message}}@enderror</span>

                <br><br>


                <span>Contact Number:</span>

                <input type="text" name="phone"><br><span
                    style="color: red;">@error('phone'){{"*".$message}}@enderror</span>


                <br><br>



                <span>Aadhar Number:</span>

                <input type="text"  name="aadhar"><br><span
                    style="color: red;">@error('aadhar'){{"*".$message}}@enderror</span>
                <br>



    </div>
</div>

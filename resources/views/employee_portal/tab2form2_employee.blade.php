
                <br>


                <span>PAN Card :</span>

                <input type="text" style="width:200px;" name="pan" value="{{$per->pan}}"><br><span
                    style="color: red;">@error('pan'){{"*".$message}}@enderror</span>




                <br><br>

                <span> Emergency Contact Number:</span>

                <input type="text" style="width:200px;" name="emergency_phone_number" value="{{$per->emergency_phone_number}}"><br><span
                    style="color: red;">@error('emergency_phone_number'){{"*".$message}}@enderror</span>




                <br><br>

                <span>
                    <span>State: </span>
                    <input type="text" style="width:200px;" name="state" value="{{$per->state}}"><span
                        style="color: red;">@error('state'){{"*".$message}}@enderror</span>

                        <br><br>

                    <span>City: </span>
                    <input type="text" style="width:200px;" name="city" value="{{$per->city}}"><span
                        style="color: red;">@error('city'){{"*".$message}}@enderror</span>


                </span>

                <br><br>
                <span>Current Address:</span>
                <br>
                <input type="text" style="width:300px;" name="current_address" value="{{$per->current_address}}"><br><span
                    style="color: red;">@error('current_address'){{"*".$message}}@enderror</span>



                <br><br>


                <span>Permanent Address:</span>
                <br>
                <input type="text" style="width:300px;" name="permanent_address" value="{{$per->permanent_address}}"><br><span
                    style="color: red;">@error('permanent_address'){{"*".$message}}@enderror</span>





                <br><br>

                <span>Hobbies:</span>


                <input type="text" style="width:200;" name="employee_hobbies" value="{{$per->employee_hobbies}}"><br><span
                    style="color: red;">@error('employee_hobbies'){{"*".$message}}@enderror</span>






                <br><br>
                <span>Educational Details:</span>

                <input type="text" style="width:200;" name="education" value="{{$per->education}}"><br><span
                    style="color: red;">@error('education'){{"*".$message}}@enderror</span>

<div class="one">
    <div style="margin-left:20px">
        <br><br>


        <span> Employee_id: </span>
        <input type="text" name="employee_id"  >
        <span style="color:red; font-size:12px;"><br>
            @error('employee_id')
            {{ '*' . $message }}
            @enderror
        </span> <br><br>


        <span>Designation:</span> <br>
        <input type="text" name="designation" >
        <div style="color:red; font-size:12px;" >
            @error('designation')
            {{ '*' . $message }}
            @enderror
        </div>
        <br>


        <span>Department:</span>
        <input type="text" name="department" >
        <div style="color:red; font-size:12px;" >
                    @error('department')
                    {{ '*' . $message }}
                    @enderror
        </div>
        <br>

         <span>Division:</span>
        <input type="text" name="division" >
        <div style="color:red; font-size:12px;" >
                    @error('division')
                    {{ '*' . $message }}
                    @enderror
        </div>
        <br>


        <span>Employee type:</span> <br>
        <input type="text" name="employee_type" ><br>
        <div style="color:red; font-size:12px;" >
                    @error('employee_type')
                    {{ '*' . $message }}<br>
                    @enderror
        </div>
    </div>
</div>

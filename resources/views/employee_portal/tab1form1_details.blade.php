<div class="one">
    <div style="margin-left:20px">
        <br><br>


        @foreach ($professional_details as $pro)




        <span> Employee_id: </span>
        <input type="text" name="employee_id" readonly  value="{{session('employee_id'); }}"  >
        <span style="color:red; font-size:12px;"><br>
            @error('employee_id')
            {{ '*' . $message }}
            @enderror
        </span> <br><br>


        <span>Designation:</span> <br>
        <input type="text" name="designation" value="{{$pro->designation}}"      >
        <div style="color:red; font-size:12px;" >
            @error('designation')
            {{ '*' . $message }}
            @enderror
        </div>
        <br>


        <span>Department:</span>
        <input type="text" name="department"  value="{{$pro->department}}" >
        <div style="color:red; font-size:12px;" >
                    @error('department')
                    {{ '*' . $message }}
                    @enderror
        </div>
        <br>

         <span>Division:</span>
        <input type="text" name="division"   value="{{$pro->division}}">
        <div style="color:red; font-size:12px;" >
                    @error('division')
                    {{ '*' . $message }}
                    @enderror
        </div>
        <br>


        <span>Employee type:</span> <br>
        <input type="text" name="employee_type"   value="{{$pro->employee_type}}"><br>
        <div style="color:red; font-size:12px;" >
                    @error('employee_type')
                    {{ '*' . $message }}<br>
                    @enderror
        </div>



        <br>


        <span>Ongoing Project Details:</span> <br>
        <input type="text" name="project"   value="{{$pro->project}}"><br>
        <div style="color:red; font-size:12px;" >
                    @error('project')
                    {{ '*' . $message }}<br>
                    @enderror


                    @endforeach




        </div>
    </div>
</div>

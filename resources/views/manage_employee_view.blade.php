@include('layouts.manage_layout')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px; margin-right:400px;  margin-top:80px;">




    @if ($message = Session::get('fail'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif




    <table class="table table-striped table-hover" >


            <thead>

          <tr>
            <th scope="col">Sr.number</th>

            <th scope="col">Employee ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Image</th>
            <th scope="col">Email</th>
            <th scope="col">Designation</th>
            <th scope="col">DOJ</th>


            <th colspan="2">Status</th>

          <th colspan="2">Change  Status</th>
          <th colspan="3" style="text-align:center">Actions</th>


          </tr>

        </thead>
                @foreach ($employees as $employee)

        <tbody>

          <tr>
            <td class=counterCell> </td>

            <td>{{$employee->employee_id}}</td>
           <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td>
            <td>{{$employee->image}}</td>
            <td>{{$employee->employee_email}}</td>
            <td>{{$employee->designation}}</td>
            <td colspan="2">{{$employee->doj}}</td>
            <td>
                @if($employee->employee_status==1)
             <button type="button" class="btn btn-success">{{"Active"}}</button>
              @else
              <button type="button" class="btn btn-danger">{{"Inactive"}}</button>

                 @endif

            </td>
                <td><a href="/statustoactive/{{$employee->employee_id}}"><i class="fa fa-user-plus" style="font-size:24px;color:green"></i>Active</a>
                </td>
                <td><a href="/statustoinactive/{{$employee->employee_id}}"><i class="fa fa-user-times" style="font-size:24px;color:red"></i>Inactive</a></td>

            <td><a href="/viewemployee/{{$employee->employee_id}}"><i class="fa fa-eye" style="font-size:24px;color:black"></i>View
            </a></td>

            <td><a href="/editemployee/{{$employee->employee_id}}"><i class="fa fa-edit" style="font-size:24px;color:blue"></i>Edit
            </a></td>
            <td><a href="/delete/{{$employee->employee_id}}"><i class="fa fa-times-rectangle" style="font-size:24px;color:red"></i>Delete
            </a></td>


          </tr>
          @endforeach
        </tbody>
    </table>

    <br><br>
    <div>{{$employees->links()}}<br></div>



</body>
</html>

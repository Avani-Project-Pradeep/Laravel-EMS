@include('layouts.manage_layout')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:400px; margin-right:200px;   margin-top:80px;">

    <table class="table table-striped">


            <thead>

          <tr>
            <th scope="col">Employee ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Image</th>
            <th scope="col">Email</th>
            <th scope="col">Designation</th>
            <th colspan="2">DOJ</th>


            <th scope="col">Status</th>

            <th colspan="2">ChangeStatus</th>


            <th scope="col">View</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)

          <tr>
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
                <td><a href="/statustoactive/{{$employee->employee_id}}"><i class="fa fa-user-plus" style="font-size:24px;color:green"></i></a>
                </td>
                <td><a href="/statustoinactive/{{$employee->employee_id}}"><i class="fa fa-user-times" style="font-size:24px;color:red"></i></a></td>

            <td><a href="/viewemployee/{{$employee->employee_id}}"><i class="fa fa-eye" style="font-size:24px"></i>
            </a></td>

            <td><a href="/editemployee/{{$employee->employee_id}}"><i class="fa fa-edit" style="font-size:24px"></i>
            </a></td>
            <td><a href="/delete/{{$employee->employee_id}}"><i class="fa fa-times-rectangle" style="font-size:24px;color:red"></i>
            </a></td>


          </tr>
          @endforeach
        </tbody>
    </table>

</body>
</html>

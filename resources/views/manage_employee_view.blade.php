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
            <th scope="col">DOJ</th>
            <th scope="col">Status</th>
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
            <td>{{$employee->doj}}</td>
                 <td>
                    <input data-id="{{$employee->employee_id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $employee->status ? 'checked' : '' }}

                    >
                    </td>

            <td><a href="/viewemployee/{{$employee->employee_id}}">View</a></td>

            <td><a href="/editemployee/{{$employee->employee_id}}">Edit</a></td>
            <td><a href="#">Delete</a></td>


          </tr>
          @endforeach
        </tbody>
    </table>

</body>
<script>
    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 0;
          var employee_id = $(this).data('employee_id');


          $.ajax({
              type: "GET",
              dataType: "json",
              url:'{{ route('changestatus')}}',
              data: {'status': status, 'employee_id': employee_id},
              success: function(data){
                console.log(data.success)
              }
          });
      })
    })
  </script>
</html>

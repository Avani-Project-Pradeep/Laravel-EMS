{{-- NAVIGATION OPTIONS --}}
@section('options')
<a href="http://127.0.0.1:8000/{{ $company_name }}/employer_portal/Home"><i class="fa fa-home"></i> Home</a>
<a href="/employer_portal/manage_employees/view"><i class="fa fa-users	"></i>
    Manage Employees</a>
<a href="http://127.0.0.1:8000/{{ $company_name }}/employer_portal/logout"><i class="fa fa-power-off
                             "></i> Logout</a> </nav>

@endsection


{{-- CONTENT --}}
@section('content')
<!--EXTERNAL CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('styles/add_employee.css') }}">

</head>

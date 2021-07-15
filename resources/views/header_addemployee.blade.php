{{-- NAVIGATION OPTIONS --}}
@section('options')
<a href="/{{ $company_name }}/employer_portal/Home"><i class="fa fa-home"></i> Home</a>
<a href="/{{ $company_name }}/employer_portal/manage_employees/view"><i class="fa fa-users	"></i>
    Manage Employees</a>
<a href="/{{ $company_name }}/employer_portal/logout"><i class="fa fa-power-off
                             "></i> Logout</a> </nav>

@endsection

{{-- CONTENT --}}
@section('content')
<!--EXTERNAL CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('styles/add_employee.css') }}">

</head>

<body>
    <br>
    <em><span style="margin-left:50px; font-size:30px;color: white">Add Employee</span></em>
    <em><a  style="margin-left:800px; font-size:30px;color:white" href="/Employee/register">Click here to Register Employees </a></em>


    <ul class="tab-wrap">
        <li>
            <input type="radio" id="tab-1" name="tab" />
            <label for="tab-1">Tab1</label>
            <div class="tab-content">
                <div id="container">
                    <div class="one">
                        <div style="margin-left:20px">
                            <br><br>

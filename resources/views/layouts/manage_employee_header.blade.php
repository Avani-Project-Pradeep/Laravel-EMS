
    {{-- LAYOUT OF PORTAL --}}
    @extends('layouts.portal_layout')
 

    {{-- NAVIGATION OPTIONS --}}
    @section('options')
    
    <span class="open" style="font-size:20px;cursor:pointer; color:green" onclick="openSide()">&#9776;<a>Options</a>
    </span>
    
    <a href="http://127.0.0.1:8000/{{$company_name}}/employer_portal/Home"><i class="fa fa-home"></i> Home</a>
    <a href="http://127.0.0.1:8000/{{$company_name}}/employer_portal/add_employee"><i class="fa fa-user-plus"></i> Add Employees </a>
    <a href="http://127.0.0.1:8000/{{$company_name}}/employer_portal/logout"><i class="fa fa-power-off
     "></i> Logout</a>  
    </nav>
    
    @endsection
    
    
    {{-- CONTENT --}}
    
    @section('content')
    
      <title>Home</title>
    
    <div>
    <!--EXTERNAL CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/mgmt_home.css') }}" >
    <script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    </head>
    {{-- ELEMENTS OF PAGE --}}
    @include('layouts.manage_elements')
    @yield('body')
    @endsection
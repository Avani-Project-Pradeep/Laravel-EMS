<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <meta http-equiv="refresh" content="300;url='/employee_portal/logout'" />


<div>
    @foreach ($personal_details as $per )

    <h1>{{$per->first_name}}</h1>

</div>


    @endforeach


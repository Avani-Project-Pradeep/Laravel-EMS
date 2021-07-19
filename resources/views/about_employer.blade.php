<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta http-equiv="refresh" content="300;url='/employee_portal/logout'" />


<title>About Employer</title>
</head>

<body>
<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
<a class="btn btn-primary" href="/employee_portal/Home" role="button">Back to Employee Portal</a>


<h2 style="text-align:center">About Employer</h2>

<div class="card">
    @foreach ($personal_details as $per )
    @foreach ($professional_details as $pro )

    @if( $per->image==NULL)
    <img  style="height:200px; width:200px" src="{{asset("images")}}/{{"blank.png"}}">
    @else
    <img src= "{{asset("images")}}/{{$per->image}}"
    >
    @endif

  <h1>{{$per->first_name}}.{{$per->last_name}}</h1>
  <h3 >{{$pro->designation}}</h3>
  <h3 >{{$pro->designation}}</h3>
    <h3>{{$pro->company_name}}</h3>
  <div style="margin: 24px 0;">
<h4>Email:{{$pro->employer_email}}
  </div>
  <p><button></button></p>
</div>
@endforeach
@endforeach

</body>
</html>

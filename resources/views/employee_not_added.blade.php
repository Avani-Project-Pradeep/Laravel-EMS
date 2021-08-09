
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Portal</title>
    <style>
body, body * {box-sizing: border-box;}
body{
	margin: 0;
	padding: 0;
	font-size:18px;
	font-family: Verdana, sans-serif;
}
h1,h3,p{
	font-family: 'Major Mono Display', monospace;
	text-align: center;
	background-color: rgba(0,0,0,0.50);
	color: #FFF;
	font-size: 2em;
	line-height: 3em;
	margin: 0 auto;
	padding: 0;
}
footer{
	background: black;
	color:white;
	position: fixed;
	bottom: 0;
	line-height: 1.4em;
	font-size: .7em;
	width: 100vw;
	padding: 0 2em;
}
.bg_animation{
	min-width: 100vw;
	min-height: 100vh;
	background-size:cover;
	background-attachment: fixed;
	background-image:
		url(https://cdn.pixabay.com/photo/2016/03/26/13/09/workspace-1280538_1280.jpg)
}

    </style>

</head>
<body>
    <header class="bg_animation">
        <h1>Welcome to Employee Portal</h1>
        <h3>Employee has been registered successfully to use Employee Portal!</h3>
           <p>All the required details of the employee has not been added by employer. <br> Please contact to the employer to  add all the required details so that employee can use employee portal.</p>
           <h3>
            <a href="/Employee/login" style="color:white"><i class="fa fa-power-off"></i>Exit</a>
        </h3>





      </header>

      <footer>
      </footer>

</body>
</html>

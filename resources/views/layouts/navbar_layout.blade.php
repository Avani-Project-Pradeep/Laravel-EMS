<!-- NAVIGATION BAR -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body, html{
        font-size: 100%;
    }
    body,html{
        margin-top: -80px;
        padding: 0;
    }

    a{
        color:white;
        font-size: 20px;
        text-decoration: none;


    }
    nav ul{
        list-style: none;
        padding:0;
        background:#444;
    }

    nav ul li a{
        color:#ddd;
        text-decoration: none;
        padding: .6rem 1rem;
        display: block;
    }
    nav ul li{
        border-bottom: 1px dotted #ddd;
    }
    /*styling logo*/

    nav div:first-child{
        background:#222;
    }
    nav div:first-child h1{
        line-height: 0;
        padding: .8rem 0rem;
        text-align: center;
    }


    nav div:first-child h1, nav ul{
        margin:0;
    }

    /*Styling for larger devices*/

    @media only screen and (min-width: 30em){
        nav{
            display: flex;
            justify-content:space-evenly;
            background: #222;
            align-items: center;
        }

        nav ul{
            display: flex;
            align-items: center;
            background:none;
            flex-wrap: wrap;
        }
        nav div:first-child h1{
            padding: 0;
            margin:0 1rem;
        }
        nav div:first-child img{
            height: 40px;

        }

        a:hover {

        font-size: 150%;

          }


    a:active{ color:green;}

    .navbar-nav > .active > a {
        background-color: red ;
    }


    }
    .current_page_item {
        text-decoration:solid;
        color:green;
      }
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<nav >

       <div>
       <!-- LOGO -->
           <h1><img src="https://cdn1.vectorstock.com/i/1000x1000/50/80/st-letter-logo-design-s-t-logo-design-st-vector-28025080.jpg" style="width: 80px; ; height:80px;" alt="logo"></a></h1>

       </div>
       <!-- HEADING -->
       <h1 style="color: whitesmoke;">EMPLOYER PORTAL </h1>

       @yield('options')

</nav>

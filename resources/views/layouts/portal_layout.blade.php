{{-- MASTER PAGE --}}

@include('layouts.navbar_layout')
@include('layouts.header_layout')
 <style>
html {
    scroll-behavior: smooth;
    }
    :root{
    scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
    scrollbar-width: thin !important;
    }
    ::-webkit-scrollbar {
    height: 12px;
    width: 8px;
    background:gray;
    }
    ::-webkit-scrollbar-thumb {
    background:#1e1e1e;
    }
    ::-webkit-scrollbar-corner {
    background: gray;
    }



   body{
    margin-top:80px;
    margin-right: -80px;
    margin-left: -80px;


    background:gray;
    font-family: 'Oswald', sans-serif;
    }



    ul{
    position:relative;
    left:-20px;
    }

    ul li{
    padding:20px 0;
    color:whitesmoke;
    }

    b{
    color:#fff;
    }

    .btn{
    background:#7ed321;
    padding:10px;
    border:0;
    outline:none;
    color:#000;
    display:block;
    width:60px;
    margin:10px 0;
    text-align:Center;
    border-radius:5px;
    cursor:pointer;
    }

    .fa{
    color:#7ed321;
    cursor:pointer;
    }

    .nonav
    {
       margin-right: auto;
       margin-left: auto;
       margin-bottom: auto;
       margin-top:-20px;
      width:60%;

      }

    .container{
    margin:10vh auto;
    }

    .container table{
    width:60%;
    margin-left: -80px;
    margin-right:-50px;
    }

    .container table td{
    margin:30px;
    padding:30px;
    background-color:whitesmoke;
    color:#000;
    vertical-align:top;
    }

    .container table td:nth-child(1){
    text-align:Center;
    }

    .container table td:nth-child(2) .fa{
    float:right;
    }

    .container table td:nth-child(2) input{
    background:none;
    outline:none;
    border-right:hidden;
    border-left:hidden;
    border-top:hidden;
    border-bottom:groove;
    border-color:#7ed321;

    color:black;
    width:100%;
    }

    .container table td:nth-child(1) section{
    position:relative;
    width:200px;
    height:200px;
    margin:10vh auto;
    }


    .container table td:nth-child(1) .fa{
    position:absolute;
    right:25px;
    top:25px;
    font-size:2em;
    }

   .img{

    margin: top 200px; ;
   }

    .container table td img{
    width:200px;
    height:200px;
    border-radius:50%;
    }

    .container table td h3{
    color:whitesmoke;
    font-weight:normal;
    }

    .container table .section2{
    text-align:left;
    }

    .container table .section2 label{
    display:block;
    margin:20px 0;
    text-align:left;
    }

    .container table .section2 select{
    background:#1e1e1e;
    width:100%;
    border:0;
    outline:none;
    color:gray;
    }

    .container table .section2 input{
    background:#1e1e1e;
    width:100%;
    padding:20px;
    color:gray;
    border:0;
    outline:none;
    }


    .container table .section2 .quantityselector section{
    display:inline-block !important;
    width:45%;
    margin:0 20px;
    }

    .container table textarea{
    width:90%;
    resize:none;
    outline:none;
    border:0;
    background:gray;
    color:gray;
    padding:20px;
    }



    .container .inframe {
    width:100%;
    height:40vh;
    position:relative;
    overflow:hidden;
    display:block;
    margin:20px 0;

    }

    .container .inframe .img{
    width:100%;
    height:40vh;
    border:none;
    }





    @media (max-width:820px){
    .container{
    width:100%;
    }
    .container table td{
    display:block;
    width:90%;
    margin:60px;
    }
    .container table .section2 .quantityselector section{
    width:41%;
    margin:0px 10px;
    }
    .container table .section2 ul{
    position:relative;
    left:-40px;
    }
    .table
    {  overflow: hidden;}


    }
    </style>
@yield('content')

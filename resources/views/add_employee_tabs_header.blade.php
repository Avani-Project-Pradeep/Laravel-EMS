
@section('options')
<a href="/employer_portal/Home"><i class="fa fa-home"></i> Home</a>
<a href="/employer_portal/manage_employees/view"><i class="fa fa-users	"></i>
    Manage Employees</a>
<a href="/employer_portal/logout"><i class="fa fa-power-off
                             "></i> Logout</a> </nav>

@endsection


{{-- CONTENT --}}
@section('content')
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

    html, body {
        left: 0;
        margin: 0;
        background:gray;
        height:100%;
        font-family: 'Oswald', sans-serif;

      }


      p{
        font-family:calibri;
        padding-left:10px;
      }

      #container{
        margin: 0 auto;
        margin-left: 50px;
        width:1100px;
        height:1400px;

        padding-top:50px;
      }

      .one{
        background:white;
        width:500px;
        height:700px;
        float:left;
      }
      .two{
        width:600px;
        height:700px;
        background:white;
        overflow:hidden;
        float:right;
        border-right: #ccc;
      }

.tab-wrap
{
  list-style: none;

  min-height: 100px;
  margin: 20px 0;
  width: 100%;
  display: flex;
  /* allows for tabs to be next to each other */
  position: relative;
  /* relative here contains the width of the content */
}

.tab-wrap input[type="radio"]
{
  display:none;
}

.tab-wrap li{
float: left;
display: block;
}


.tab-wrap label
{  padding: 5px 10px;
  border: 1px solid #ccc;
  cursor: pointer;
  border-radius: 10px 10px 0 0;
  margin: 0 500px 0 0;
  background-color: #ccc;
}

.tab-wrap label:hover
 {
  background-color: #8BC34A ;
}

.tab-wrap .tab-content
{  background-color:gray;
  display:none;
  padding-right: 20px;
  padding-left: 20px;
  height:800px;
  position: absolute;
  left: 0;

}




.tab-wrap [id^="tab"]:checked+label{
background-color:white;
border:solid 2px blue;
}

.tab-wrap [id^="tab"]:checked ~.tab-content{
display: block;}


.fa{
  color:#7ed321;
  cursor:pointer;
  }

  input:not(#change )
{
  border: none;
  border-bottom: solid 2px green;
  width:450px;
}

#change {
    background-color: #4CAF50;
border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;

    width: 150px"

}


</style>

</head>

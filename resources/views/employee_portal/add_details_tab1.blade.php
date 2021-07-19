
@extends('layouts.employee_portal')

{{-- CONTENT --}}
@section('content')
<meta http-equiv="refresh" content="300;url='/employee_portal/logout'" />

<!--EXTERNAL CSS-->
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

<body>
    <br>
    <h2 style="margin-left:20px; color: white">Add Details</h2>
    <hr style="border: solid green;">
    <form method="POST" action="/nextadddetails">
        @csrf

        <ul class="tab-wrap">
            <li>
              <input type="radio" id="tab-1" name="tab" checked="checked" />
                <label for="tab-1">
                    Tab 1
                </label>
                {{-- tab1 --}}
                <div class="tab-content">
                    <div id="container">
                        {{-- tab1-form.part1 --}}
                        @include('employee_portal.tab1form1_details')

                        <div class="two">
                            <div style="margin-left:50px">
                                <br><br>
                                {{-- tab1-form.part2 --}}
                                @include('employee_portal.tab1_form2_adddetails')

                                {{-- next button --}}



                                <br><br>
                              <input id="change" type="submit"   value="Next">
                            </div>
                        </div>
                    </div>
                </div>

            </li>
            {{-- tab1 end --}}

            {{-- tab2 --}}
            <li>
                <input type="radio" id="tab-2" name="tab" disabled />
                <label for="tab-2" disabled>
                    Tab 2
                </label>
            </li>


        </ul>
    </form>
</body>

</html>
@endsection

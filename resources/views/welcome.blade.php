<!DOCTYPE html>
<html>
<title>Employee Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="/" class="w3-button w3-block" style="background-color:lavender">Home</a>
    </div>
        <div class="w3-col s3">
            <a href="/Employer/register"  class="w3-button w3-block">Employer Registration</a>
          </div>

          <div class="w3-col s3">
            <a href="/Employer/login" class="w3-button w3-block">Employer Login</a>
          </div>

          <div class="w3-col s3">
            <a href="/Employee/login" class="w3-button w3-block">Employee Login</a>
          </div>
        </div>
      </div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>EMPLOYEE MANAGEMENT SYSTEM</b></h1>
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="https://grosum.com/blog/wp-content/uploads/2019/05/6-Ways-to-Cut-Down-Costs-Save-Time-for-Employee-Management.jpg" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
      </div>
    </div>
    <div class="w3-row-padding" id="about">
        <br><br><br>
        <div class="w3-center w3-padding-64">
          <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">About EMS</span>
        </div>

     <h1> WHAT IS EMPLOYEE MANAGEMENT SYSTEM</h1>


      An employee management system is aimed at helping you and your organization to manage admin activities easily and efficiently.
      Typical employee management systems combine all work-related and other important personal information of employees onto one centralized platform.

      <h1>WHY IS EMS NECESSARY FOR YOUR BUSINESS?</h1>
  Picture a situation in which any piece of critical data related to the most valuable assets, i.e. workers, is available through a centralized database on a single dashboard and is usable 24 x 7 at lightning speed. This is basically what a successful employee management system provides – a centralized hub for all your vital payroll data and HR.






      </div>




  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">What We Offer</span>
    </div>
    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>Easy to use</h3>
    </div>

    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>Saves Time</h3>
    </div>

    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>Data Management</h3>

    </div>

    <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
      <h3> Productivity</h3>

    </div>
  </div>

  <!-- Grid -->
<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by record management </p>
</footer>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap/css/bootstrap.min.css">
    <!--css link-->
    <!-- <link rel="stylesheet" type="text/css" href="CSS/style1.css">
    <link rel="stylesheet" type="text/css" href="CSS/w3.css"> -->
    <!--bootstrap js-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
  <title>E health Care</title>
  <style>
    .navbar {
     top : 0;
  background-color: #333;
      position :  sticky;

  width: 100%;
}
.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  
  color: black;
}
    .dropdown:hover .dropdown-menu{
        display: block;
        
    }
    .dropdown-menu{
        margin-top: 0;
    }
</style>
<script>
$(document).ready(function(){
    $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
});     
</script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark "id="myNavbar" >
  <img id= "img"src="Images/logo.png" alt="website logo" width="55 " height="50" >
  <a class="navbar-brand"  href="index.php">E Health Care</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          COVID-19
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Know about COVID-19</a>
        <a class="dropdown-item" href="#">Book COVID-19 RT-PCR Test</a>
        <a class="dropdown-item" href="#">Book Antibody Tests</a>
        <a class="dropdown-item" href="#">FAQs</a>
        <a class="dropdown-item" href="#">Blogs / Videos</a>
        <a class="dropdown-item" href="#">Clinical Research</a>
      </div>
  	</li>
  	 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="hover" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Patients
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Book A Test</a>
        <a class="dropdown-item" href="#">Find A Lab</a>
        <a class="dropdown-item" href="#">Query / Enqury Form</a>
        <a class="dropdown-item" href="#">FAQs</a>
        <a class="dropdown-item" href="#">Blogs</a>
        <a class="dropdown-item" href="#">Heslth Tips</a>
        <a class="dropdown-item" href="#">Events</a>
      </div>
  	</li>
  	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Doctors
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Tests Offered</a>
        <a class="dropdown-item" href="#">Doctors Event</a>
        <a class="dropdown-item" href="#">Doctors Blogs</a>
      
      </div>
  	</li>
  	 <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact US</a>
      </li>

      </li>

      </li>
  	 <li class="nav-item">
     <i class="fa-solid fa-arrow-right-to-bracket"></i>
        <a class="nav-link" href="login.php">Login</a>
      </li>

      </li>
      
    
   
    </ul>
  </div>
</nav>



  

<!-- for header position fixed   -->
  <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html>

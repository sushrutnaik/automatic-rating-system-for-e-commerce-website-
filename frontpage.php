<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
 <?php

session_start();

if(@$_POST['submit1'])

{
	$con=mysqli_connect("localhost","root","","fp");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
 $username = trim($_POST['username']);
 $password = trim($_POST['password']);
 $mobileno=	 trim($_POST['username']);

 $sql = 'SELECT * FROM sellers WHERE name ="'.$username.'" OR mobile="'.$mobileno.'" AND password ="'.$password.'"';
 $result = $con->query($sql);
	if ($result->num_rows > 0) 

	{

	$_SESSION['luser'] = $username;


	// ending a session in 5  minutes from the starting time
	echo "<script>
	window.open('http://localhost/finalproject/seller1.php');
	</script>";

	}

	else

	{

	$err= "<font color='red'>Invalid user login </font>";

	}

}

?>
<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #95d097;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.place{
  background-color: #4CAF50;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
}

</style>
<body style="background-color:powderblue;">
<div class="slideshow-container">

<div class="mySlides">
  <q>You can’t wait for customers to come to you. You have to figure out where they are, go there and drag them back to your store.</q>
  <p class="author">- Paul Graham</p>
</div>

<div class="mySlides">
  <q>Communication is at the heart of e-commerce and community</q>
  <p class="author">- Meg Whitman</p>
</div>

<div class="mySlides">
  <q>Always deliver more than expected</q>
  <p class="author">- Larry Page</p>
</div>

<a class="prev" onclick="plusSlides(-1)"><</a>
<a class="next" onclick="plusSlides(1)">></a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


    <div class="text-center">
    <button class="button button1" onclick="window.location.href='signup.php'">SIGN UP</button><br>
    <button class="button11 button1" id="mybtn">LOGIN</button>
    </div>  

    <div id="myModal" class="modal">
    	<div class="modal-content">
    		<span class="close">&times;
    		</span>
    		<div class="modal-body">
    			<form method="post">
    			USERNAME:
    			<input type="text" name="username" placeholder=""required class="place">
    			<a href="signup.php">NEW SELLER?</a>
    			<br><br>
    			PASSWORD:
    			<input type="password" name="password" placeholder="" required class="place">
    			<br><br>
    			<input type="submit" name="submit1" class="button11 button1">

    		</form>
    		</div>
    	</div>

    </div>  
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

var modal = document.getElementById("myModal");


var btn = document.getElementById("mybtn");


var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
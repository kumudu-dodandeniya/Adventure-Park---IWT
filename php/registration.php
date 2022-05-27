<DOCTYPE html>
<html>
<head>
	<title> GREEN CITY ADVENTURE PARK</title>
	<link rel="stylesheet" type ="text/css" href ="../css/registration.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src = "../js/registration.js"></script>
	
	
</head>
 
<!--check the connection-->
<?php 

 require 'config.php';
?>


<body>
<!--header section-->

	<div class = "head">
		<header>
			<div class = "button">
			<a href="login.php"><button class = "button1">  LOGIN </button></a>
			<a href = "registration.php"><button class = "button1">  REGISTER </button></a>
			</div>
			
			<h1> GREEN CITY</h1>
			<h2>ADVENTURE PARK</h2>
			
		</header>
			
	<!--navigation bar-->

		<nav>
		
			<ul class = "menu">
			
			    <li class = "menu"><a href = "HOME_PAGE.php"> <b>HOME</b> </a></li>
				<li class = "menu"><a href = "GALLERY.php"><b>GALLERY</b></a></li>
				<li class = "menu"><a href = "SPORTS.php"><b>ADVENTURE SPORTS</b></a></li>
				<li class = "menu"><a href = "ABOUT US.php"><b>ABOUT US</b></a></li>
				<li class = "menu"><a href = "TESTIMONIALS.php"><b>TESTIMONIALS</b></a></li>
				<li class = "menu"><a href = "BOOKING.php"><b>BOOKING</b></a></li>
				<li class = "menu"><a href = "CONTACT US.php"><b>CONTACT US</b></a></li>
			</ul>
		</nav>
	</div>
	
	<br><br>

	<!--registration form-->
	<div class="form">

		<form id = "form"  action = " <?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method = post onsubmit = "return checkPassword()" >
		<h2>REGISTER</h2>
		<h3>Create Your Account.</h3><br>
		
			<input   type = "text"  id = "Fname"  name = "First_name" placeholder=" First Name"  required ><br><br>
			<input   type = "text"  id = "Lname"  name = "Last_name" placeholder=" Last Name" required > <br><br>
	
			<input  type = "radio"  id = "gender"  name = "gender" > Male
			<input  type = "radio"  id = "gender"  name = "gender"> Female<br><br>
		
			
			<input type = "text"   pattern = "[0-9]{10}" name = "Mobile_number"placeholder="Mobile Number"  required><br><br>
	
			<input  type = "email"  id = "email"  name = "Email"  pattern = "[a-zA-z0-9._%+-#*]+@[a-z0-9]+\.[a-z]{2,3}" placeholder=" Email Address"  required><br><br>
			
		
			<input  type = "text"  id = "user_name"  name = "Username" placeholder="Username"  required><br><br>
		
			<input  type = "password"  id = "pwd"  name = "Password" placeholder=" Password"  required><br><br>
			<input  type = "password"  id = "rpwd"  name = "R_password" placeholder="Re-enter password"  required><br><br>

			<input type = "checkbox"  id = "check"  name = "check" required >
			<label>I Accepy The Terms Of Use & Privacy Policy</label><br><br>
			
			<input class = "sub"type = "submit" id = "btn1" name = "submit" value = "Register Now" ><br>
			<div class = "sing_in">
				<h3>Already On Register?<a href = "login.php">Login</a></h3>
			</div>
		</form>
		
	</div>	


	<!--footer-->

<div class = "footer">
	<div class = "footer-bottom">
		<div class = "row">
			<div class = "payment">
			
					<img class = "img" src = "../image/Header/index.jpg"  >
					<img class = "img" src = "../image/Header/mastercard.png"  >
					<img class = "img" src = "../image/Header/paypal_PNG1.png" >
					<img class = "img"src = "../image/Header/discover.jpg"  >
			</div>
			
			<div  class= "social">
					<a href = "#"><i class = "fab fa-facebook-f "></i></a>
					<a href = "#"><i class = "fab fa-twitter "></i></a>
					<a href = "#"><i class = "fab fa-instagram "></i></a>
					<a href = "#"><i class = "fab fa-youtube "></i></a>
					<a href = "#"><i class = "fab fa-google-plus "></i></a>
			</div>
		</div>
	</div>
	<div class = "About">
				<h5 style = "font-size:20px">ABOUT</h5>
			<p>The Green city <br>Adventure Park was founded<br> in 2010</p>
			<br>
			
			</div>
			
			<div class = "open">
				<h5 style = "font-size:20px"> OPENING HOURS </h5>
				<p> Mon - Sun: 9 am to 6 pm</p>
			</div>
			
			<div class = "link">
				<h5 style = "font-size:20px">QUICK LINK </h5>
				<div style = "float:left">
					<a class = "link" href = "HOME_PAGE.php">> HOME </a><br>
					<a class = "link" href = "SPORTS.php">> ADVENTURE SPORTS</a><br>
					<a class = "link" href = "GALLERY.php">> GALLERY</a><br>
					<a  class = "link"href = "ABOUT US.php">> ABOUT US</a><br>
					<a  class = "link"href = "TESTIMONIALS.php">> TESTIMONIALS</a><br>
					<a class = "link" href = "GET A QUOTE.php">> BOOKING</a><br>
					<a  class = "link"href = "CONTACT US.php">> CONTACT US</a><br>
				</div>
			</div>
			
			<div class = "Contact">  
				<h5 style = "font-size:20px">CONTACT US </h5>
			
				<i class = "fas fa-map-marker-alt"></i>
				<i  class = "text"> 172,Richmond Hill Road,
				Colombo,Sri Lanka </i><br><br>
			
				<i class = "fas fa-envelope-open"></i>
				<i class = "text" > info@greencitypark.com</i><br><br>
			
				<i class = "fas fa-phone"></i>
				<i class = "text"> +94117729729</i>
			</div>
			
			<div class = "map">
				<h5 style = "font-size:20px"> MAP</h5>
				<img src = "../image/Header/map.jpg" width = "350" height = "250" >
				<br>
			</div>
	</div>
	
</div>
	



<?php

if(isset($_POST["submit"])){
	
$first_name = $_POST["First_name"];
$last_name = $_POST["Last_name"];
$email = $_POST["Email"];
$mobile_number = $_POST["Mobile_number"];
$username = $_POST["Username"];
$password = $_POST["Password"];


//to create data and insert in database
$sql = "INSERT INTO customer(first_name,last_name,email,mobile,username,password)VALUES('$first_name','$last_name', '$email', '$mobile_number', '$username','$password' )";

//execute the query
	//if query is  successful 
	if ($con->query($sql)){


   		//get from stackoverflow.com
   
  			echo '<script type="text/javascript">'; 
   			echo 'alert("Your registration is successful");'; 
   			echo 'window.location.href = "login.php";';
   			echo '</script>';

	}
	//if query is not successful 
		else{
    		echo "Error".$con->error;
		}

//close the connection
$con->close();

}

?>	
</body>
</html>
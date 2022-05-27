<?php  session_start(); 
if (! empty($_SESSION["user_name"])) {
	$username= $_SESSION["user_name"];

	}
	else{
		header("Location: login.php"); 
	}

?>
<!--check the connection-->
<?php 

require 'config.php';
//get from www.allphptricks.com

$query = "SELECT * from customer where username= '".$username."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

<!--html code-->

<DOCTYPE html>
<html>
<head>
	<title> GREEN CITY ADVENTURE PARK</title>
	<link rel="stylesheet" type ="text/css" href ="../css/pofile.css"> 
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
	
</head>
 
<!--check the connection-->



<body>
<!--header section-->

	<div class = "head">
		<header>
			<div class = "button">
			<a href="logout.php"><button class = "button1">  LOGOUT </button></a>
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

	<!--costomer pofile form-->
	<div class="form">

		<form id = "form"  action = " <?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method = post onsubmit = "return checkPassword()" >
		<h2>WELCOME</h2>
		
			<lable> First Name </lable>
			<input   type = "text"  id = "Fname"  name = "First_name"  value = "<?= $row["first_name"]?>"><br><br>
			
			<lable> Last Name </lable><br>
			<input   type = "text"  id = "Lname"  name = "Last_name"  value = "<?= $row["last_name"]?>"> <br><br>


			 <lable> Email Address </lable><br>
			<input  type = "email"  id = "email"  name = "Email" value = "<?= $row["email"]?>" ><br><br>


			<lable> Mobile Number </lable><br>
		   <input type = "text" value = "<?= $row["mobile"]?>" name = "Mobile"   pattern = "[0-9]{10}" ><br>

			<lable> Username</lable><br>
			<input  type = "text"  id = "user_name"  name = "Username"   value = "<?= $row["username"]?>"><br><br>

			<lable>  Password </lable><br>
			<input  type = "password"  id = "pwd"  name = "Password"   value = "<?= $row["password"]?>"><br><br>
			
			
			
			<a href = "edit_profile.php"><input class = "edit" type = "button" id = "btn1" name = "edit" value = "Edit Pofile"/></a> 
			<a href = "delete_profile.php"><input class = "delete" type = "button" id = "btn1" name = "delete"  value = "Delete" ></a>
			<a href = "staff.php"><input class = "submit" type = "button"  value = "<< Back"/></a>
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
			
		<!-- use W3 school-->
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

	

</body>
</html>
<DOCTYPE html>
<html>
<head>
	<title> GREEN CITY ADVENTURE PARK</title>
	<link rel="stylesheet" type ="text/css" href ="../css/gallery.css"> 
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src = "Js\pictures.js"> </script>
		
	
</head>

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


<div class="rows">
	<div class="column">
		<div class="container">
			<h1> ACCOMADATION </h1>  
			<img id="img1" src="../image/Accommodation/C.jpg" alt="ACCOMADATION" width = "300px " height = "300px" >
			 <input  type = "button" class="btn"   onclick ="location.href= 'accommadation.php';" value = "VIEW PICTURES"/> 
			
			

			
			
		</div>
	</div>

	<div class="column">
		<div class="container">
			<h1> FOOD </h1>
			<img src="../image/Food/N.jpg" alt="FOOD" width = "300px " height = "300px">
			 <input  type = "button" class="btn"   onclick ="location.href= 'food.php';" value = "VIEW PICTURES"/> 
			
		</div>
	</div>

	<div class="column">
		<div class="container">
			<h1> SAFETY </h1>
			<img src="../image/Safety/3.jpg" alt="SAFETY" width = "300px " height = "300px">
			 <input  type = "button" class="btn"   onclick ="location.href= 'safety.php';" value = "VIEW PICTURES"/> 
			
		</div>
	</div>

	<div class="column">
		<div class="container">
			<h1> HAPPY PARTICIPANTS </h1>
			<img src="../image/Happy Participants/Q.png" alt="Happy Participants" width = "300px " height = "300px">
			 <input  type = "button" class="btn"   onclick ="location.href= 'participants.php';" value = "VIEW PICTURES"/> 
			
		</div>
	</div>

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

	
	
</body>
</html>
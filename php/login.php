<DOCTYPE html>
<html>
<head>
	<title> GREEN CITY ADVENTURE PARK</title>
	<link rel="stylesheet" type ="text/css" href ="../css/about_login.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
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
			
	
		<nav>
		
	<!--navigation bar-->

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
	

<br>
<br>

<!--check the connection-->
<?php 

require 'config.php';
?>

<body>  
      
	<b><h1><center><font color="white"> LOGIN</h1></b></center></font>
      
    <div class="box">
    	<form  action="" method="POST">  

			<img src= "../image/logo.jpg" width = "30%" height = "30%" style= "margin-left: 150px">
			<br><br>
			<h4 id="text">User name </h4>
			<input type="text" name="user"  placeholder="Enter username" required ><br />
			   
			<h4 id="text">Password</h4>
			<input type="password" name="pass" placeholder="Enter password" required ><br /> 
			
			<input type="checkbox">Accept privasy policy terms<br><br>  
			<input class = "btn" type="submit" value="Login"   name="submit">  

		
			<br><br>

			Not Register:<a href="registration.php">Create account</a>
			<br>
			<br>

   		 </form>


<?php  
    if(isset($_POST["submit"])){  
      
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];  
      
       
        $query = "SELECT * FROM customer WHERE username='".$user."' AND password='".$pass."'";
        $result = mysqli_query($con, $query) or die ( mysqli_error());
        $row = mysqli_fetch_assoc($result);


		$is_admin=$row['is_admin'];
        $dbusername=$row['username'];  
        $dbpassword=$row['password'];  
        
      //if username and password are valid
        if($user == $dbusername && $pass == $dbpassword)  
        {  
        session_start();  
		$_SESSION['user_name']=$user;  
			//if user is a admin
	  		if($is_admin==1){
				header("Location: staff.php"); 
			  }
			  //if user is a customer
	  		else{
				header("Location: user.php");
			  }
    
        
		}  
		//if username and password are invalid
         else {  
        echo '<p class = "error">Invalid username or password!</p>';  
        }  
    }
    } 
    

 ?>  
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
			
			<img class = "fas fa-map-marker-alt"></i>
			<img  class = "text"> 172,Richmond Hill Road,
			Colombo,Sri Lanka </i><br><br>
			
			<img class = "fas fa-envelope-open"></i>
			<img class = "text" > info@greencitypark.com</i><br><br>
			
			<img class = "fas fa-phone"></i>
			<img class = "text"> +94117729729</i>
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


































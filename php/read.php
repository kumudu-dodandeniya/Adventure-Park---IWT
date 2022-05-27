<?php  session_start(); 
if (! empty($_SESSION["user_name"])) {
	$username= $_SESSION["user_name"];

	}
	else{
		header("Location: login.php"); 
	}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add user</title>
    <link rel="stylesheet" type ="text/css" href ="../css/read.css"> 
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>


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
				<li class = "menu"><a href = "ABOUT US.php"><b>ABOUT</b></a></li>
				<li class = "menu"><a href = "TESTIMONIALS.php"><b>TESTIMONIALS</b></a></li>
				<li class = "menu"><a href = "BOOKING.php"><b>BOOKING</b></a></li>
				<li class = "menu"><a href = "CONTACT US.php"><b>CONTACT US</b></a></li>
			</ul>
		</nav>
    </div>
	
 <!--check the connection-->
<?php 

require 'config.php';


readData();
function readData(){
   global $con;
   $sql = "SELECT* FROM customer where is_admin = 0 ";  //retrieve data from database

   $result = $con->query($sql);
?>
  
<!--table name and add user link-->
   <div class="user">
   <h1>User 
   <a href="add_user.php"><button class = "submit">  + Add </button></a>
   <a href="staff.php"><button class = "submit">  << Back </button></a></h1>

<!--creat table-->
<?php

    echo "<table><tr style='border:1px solid black;background-color:#4CC417; font-size:20px; '>";
    
         
           echo "<td>First Name</td>";
           echo "<td>Last Name</td>";
           echo "<td>Email</td>";
           echo "<td>Mobile Number</td>";
           echo "<td>Edit</td>";
           echo "<td>Delete</td>";
    echo "</tr>";
      
       
//read data
   if($result->num_rows>0){
       while($row = $result->fetch_assoc()){ 
		  // output data of each row
			echo"<tr>";
          		echo "<td>".$row["first_name"]."</td>";
           		echo "<td>".$row["last_name"]."</td>";
           		echo "<td>".$row["email"]."</td>";
		  		echo "<td>".$row["mobile"]."</td>";
		  
          		echo ("<td><a href=\"edit_user.php?id=$row[id]\" class = 'edit'>Edit</a></td>");
		 		echo ("<td><a href=\"delete_user.php?id=$row[id]\" onclick =\"return confirm('Are you sure');\" class = 'delete'>Delete</a></td>");
       }
 	echo"<tr>";
    echo "</table>" ;
     
   }
   else{
       echo "no result";
   }
?>
</div>
  
<?php
}
//close connection
$con->close();

?>


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
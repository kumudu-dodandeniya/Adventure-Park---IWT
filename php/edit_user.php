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
$id=$_REQUEST['id'];
$query = "SELECT * from customer where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add user</title>
    <link rel="stylesheet" type ="text/css" href ="../css/user.css"> 
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src = "../js/registration.js"></script>

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
				<li class = "menu"><a href = "ABOUT US.php"><b>ABOUT US</b></a></li>
				<li class = "menu"><a href = "TESTIMONIALS.php"><b>TESTIMONIALS</b></a></li>
				<li class = "menu"><a href = "BOOKING.php"><b>BOOKING</b></a></li>
				<li class = "menu"><a href = "CONTACT US.php"><b>CONTACT US</b></a></li>
			</ul>
		</nav>
    </div>
 


<div class="add_user">
   <h1>Update User Details </h1>
   <span><a href = "read.php"> << Back to user list </a></span>

    <form   action = " <?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method = post >
<br>
        <lable> First Name </lable><br>
        <input type = "text" value = "<?= $row["first_name"]?>" name = "First_name" required><br>

        <lable> Last Name </lable><br>
        <input type = "text" value = "<?= $row["last_name"]?>" name = "Last_name" required><br>

        <lable> Email Address </lable><br>
        <input type = "text" value = "<?= $row["email"]?>" name = "Email"  pattern = "[a-zA-z0-9._%+-#*]+@[a-z0-9]+\.[a-z]{2,3}" required><br>

		<lable> Mobile Number </lable><br>
		<input type = "text" value = "<?= $row["mobile"]?>" name = "Mobile"   pattern = "[0-9]{10}" required><br>
		
        <lable> New Password </lable><br>
		<input type = "text"  value = "<?= $row["password"]?>" name = "Password" required><br>
		
		<input type="submit" class = "submit" name = "save" value = "Save Change">

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
            
            <!--use W3 School-->
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

<!--php code-->

<?php 



if(isset($_POST["save"])){


$id = $_REQUEST['id'];
$first_name = $_POST["First_name"];
$last_name = $_POST["Last_name"];
$email = $_POST["Email"];
$mobile = $_POST["Mobile"];
$password = $_POST["Password"];

//to create data and insert in database
$sql = "UPDATE customer SET First_name='$first_name', Last_name = '$last_name', Mobile='$mobile',Email='$email',Password='$password' WHERE id ='$id' ";

//execute the query
if ($con->query($sql)){
   
//if qurey is successful

 //get from stackoverflow.com
   echo '<script type="text/javascript">'; 
   echo 'alert("Your updating is successful");'; 
   echo 'window.location.href = "read.php";';
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


<?php 
include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM orderpage WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$firstName = $n['firstName'];
			$lastName = $n['lastName'];
			$date = $n['date'];
			$packages = $n['packages'];
			$address1 = $n['address1'];
			$phone = $n['phone'];
			$email = $n['email'];
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>package: CReate, Update, Delete PHP MySQL </title>
	<link rel="stylesheet" type="text/css" href="../css/booking.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
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

<h1 style="text-align:center;">Manage Booking Data</h1>

	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM orderpage"); ?>

<table>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Date</th>
			<th>Package</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Email</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['firstName']; ?></td>
			<td><?php echo $row['lastName']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['packages']; ?></td>
			<td><?php echo $row['address1']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td>
				<a href="view_booking.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	


<form method="post" action="server.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="input-group">
		<label>First Name</label>
		<input type="text" name="firstName" value="<?php echo $firstName; ?>">
	</div>
	<div class="input-group">
		<label>Last Name</label>
		<input type="text" name="lastName" value="<?php echo $lastName; ?>">
	</div>
	<div class="input-group">
		<label>Date</label>
		<input type="text" name="date" value="<?php echo $date; ?>">
	</div>
	<div class="input-group">
		<label>Packages</label>
		<input type="text" name="packages" value="<?php echo $packages; ?>">
	</div>
	<div class="input-group">
		<label>Address</label>
		<input type="text" name="address1" value="<?php echo $address1; ?>">
	</div>
	<div class="input-group">
		<label>Phone</label>
		<input type="text" name="phone" value="<?php echo $phone; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">

		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >UPDATE</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>
	</div>
</form>


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
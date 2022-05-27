<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'user');

	// initialize variables
	$firstName = "";
	$lastName = "";
	$date = "";
	$packages = "";
	$address1 = "";
	$phone = "";
	$email = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$date = $_POST['date'];
		$packages = $_POST['packages'];
		$address1 = $_POST['address1'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];

		mysqli_query($db, "INSERT INTO orderpage (firstName, lastName, date, packages, address1, phone, email ) VALUES ('$firstName', '$lastName', '$date', '$packages', '$address1', '$phone', '$email')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: booking.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$date = $_POST['date'];
		$packages = $_POST['packages'];
		$address1 = $_POST['address1'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];

		mysqli_query($db, "UPDATE orderpage SET firstName='$firstName', lastName='$lastName', date='$date', packages='$packages', address1='$address1', phone='$phone', email='$email' WHERE id=$id");
		$_SESSION['message'] = "Data updated!"; 
		header('location: booking.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM orderpage WHERE id=$id");
	$_SESSION['message'] = "Data deleted!"; 
	header('location: booking.php');
}


	$results = mysqli_query($db, "SELECT * FROM orderpage");


?>
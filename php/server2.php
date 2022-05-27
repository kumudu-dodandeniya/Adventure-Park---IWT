<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'user');

	// initialize variables
	$packageName = "";
	$description = "";
	$price = "";
	$id2 = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$packageName = $_POST['packageName'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		

		mysqli_query($db, "INSERT INTO facility (packageName, description, price ) VALUES ('$packageName', '$description', '$price')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: facility.php');
	}


	if (isset($_POST['update'])) {
		$id2 = $_POST['id2'];
		$packageName = $_POST['packageName'];
		$description = $_POST['description'];
		$price = $_POST['price'];
	

		mysqli_query($db, "UPDATE facility SET packageName='$packageName', description='$description', price='$price' WHERE id2=$id2");
		$_SESSION['message'] = "Data updated!"; 
		header('location: facility.php');
	}

if (isset($_GET['del'])) {
	$id2 = $_GET['del'];
	mysqli_query($db, "DELETE FROM facility WHERE id2=$id2");
	$_SESSION['message'] = "Data deleted!"; 
	header('location: facility.php');
}


	$results = mysqli_query($db, "SELECT * FROM facility");


?>
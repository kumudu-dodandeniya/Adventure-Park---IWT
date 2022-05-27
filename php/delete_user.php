<?php  session_start(); 
if (! empty($_SESSION["user_name"])) {
	$username= $_SESSION["user_name"];

	}
	else{
		header("Location: login.php"); 
	}

?>

<?php
require 'config.php';


//get from www.allphptricks.com
$id=$_REQUEST['id'];
$query = "SELECT * from customer where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);





//to create data and insert in database
$sql = "DELETE FROM customer WHERE id = $id";

//execute the query
//if qurey is successful
if ($con->query($sql) === TRUE) {
    header ("Location: read.php?msg=user_deleted"); 
  } 
  
//if query is not successful  
else {
    header ("Location: read.php?err=delete_faild");
  }

//close the connection
$con->close();

?>	


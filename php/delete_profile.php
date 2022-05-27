
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

$query = "SELECT * from customer where username='".$username."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);






//to create data and insert in database
$sql = "DELETE FROM customer Where username= '".$username."'";

//execute the query
//if qurey is successful
if ($con->query($sql) === TRUE) {
    header ("Location: registration.php?msg=user_deleted"); 
  } 
  
//if query is not successful  
else {
    header ("Location: home_page.php?err=delete_faild");
  }

//close the connection
$con->close();

?>	

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
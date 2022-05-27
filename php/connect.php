<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "", "user");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstName = mysqli_real_escape_string($link, $_REQUEST['firstName']);
$lastName = mysqli_real_escape_string($link, $_REQUEST['lastName']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$packages = mysqli_real_escape_string($link, $_REQUEST['package']);
$address1 = mysqli_real_escape_string($link, $_REQUEST['address1']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO orderpage (firstName,lastName,date,packages,address1,phone,email) VALUES ('$firstName','$lastName','$date','$packages','$address1','$phone','$email')";
if(mysqli_query($link, $sql)){
  
    echo '<script type="text/javascript">'; 
   			echo 'alert("Thank You For Booking Our Services. You will Receive A Confirmation Call From Our Staff Soon. Have A Nice Day !");'; 
   			echo 'window.location.href = "home_page.php";';
   			echo '</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<?php
   // Create connection
    $con=new mysqli("localhost","root","","user");

    //check the connection

    if($con->connect_error){
        die("Connection faild".$con->connect_error);
    }

?>
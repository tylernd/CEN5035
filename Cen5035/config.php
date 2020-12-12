<?php

$servername = "aws-db.cxkf7z19c3td.us-east-2.rds.amazonaws.com";

$username = "admin";

$password = "airplane1";

$db = "SchoolDB";



// Create connection

$link = mysqli_connect($servername, $username, $password,$db);



// Check connection

if (!$link) {

   die("Connection failed: " . mysqli_connect_error());

}


?>

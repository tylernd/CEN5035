<?php

$servername = "aws-db.cxkf7z19c3td.us-east-2.rds.amazonaws.com";

$username = "admin";

$password = "airplane1";

$db = "SchoolDB";

//Get our two GET parameters.
$id = false;
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$class = false;
if(isset($_GET['class'])){
    $class = $_GET['class'];
}

// Create connection
$link = mysqli_connect($servername, $username, $password,$db);

echo "The current id is: " . $id;
echo "The current class is: " . $class;
// Check connection
if (!$link) {

   die("Connection failed: " . mysqli_connect_error());

}

$query = mysqli_query($link,"INSERT INTO Student_Log (class_id, student_id, RFID_timestamp) VALUES ($class, $id, NOW())");

if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error ";
}

$toggle = 0;
$sql = "SELECT in_class FROM In_Class WHERE class_id= '$class' and student_id = '$id'";
$result = mysqli_query($link, $sql);

if(mysqli_num_rows($result) == 1){

  // Store data in session variables
  $row = mysqli_fetch_assoc($result);

  $toggle = $row['in_class'];
  echo "Toggle is now: " . $toggle;
  if ($toggle == 1)
    $toggle = 0;
  elseif ($toggle == 0)
    $toggle = 1;
  echo "Toggle is now: " . $toggle;

  // Redirect user to welcome pag

}
else{
  echo "Error";
}

$query2 = mysqli_query($link,"UPDATE In_Class SET in_class = '$toggle' WHERE student_id = '$id'");

if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error ";
}

?>

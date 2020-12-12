<?php
  include('session.php');

  if($_SERVER["REQUEST_METHOD"] == "POST") {

     $student_id = trim($_POST["student_id"]);
     $balanceadd = trim($_POST["balanceadd"]);
     $balancerem = trim($_POST["balancerem"]);

     $sql = "SELECT * FROM Student WHERE student_id = '$student_id'";
     $verify = mysqli_query($link, $sql);

     if(mysqli_num_rows($verify) == 1){
       $sql = "UPDATE Student SET balance = balance + $balanceadd WHERE student_id = '$student_id'";
       $result1 = mysqli_query($link, $sql);

       $sql = "UPDATE Student SET balance = balance - $balancerem WHERE student_id = '$student_id'";
       $result2 = mysqli_query($link, $sql);

       if($result1){
         echo "Successfully added " . $balanceadd;
       }
       if($result2){
         echo "Successfully removed " . $balancerem;
       }

     }
     else{
       echo "Unsuccessful update";
     }

   }
   mysqli_close($link);

?>

<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

li {
  border-right: 1px solid #bbb;
}

li:last-child {
  border-right: none;
}

</style>
</head>
<body>

<ul>
  <li><a href="admin_index.php">Home</a></li>
  <li><a href="admin_info.php">View Admin Information</a></li>
  <li><a href="admin_lookup.php">Lookup Student Info</a></li>
  <li><a href="admin_attendance.php">Lookup Student Attendance</a></li>
  <li><a href="admin_addbal.php">Add Student Balance</a></li>
  <li><a href="admin_class1.php">Class 1</a></li>
  <li><a href="admin_logout.php">Log out</a></li>
</ul>


<div align = "center">


      <div style = "margin:40px">

         <form action = "" method = "POST">
            <label>Student ID:</label><input type = "text" name = "student_id" class = "box"/><br /><br />
            <label>Balance to Add:</label><input type = "text" name = "balanceadd" class = "box" /><br/><br />
            <label>Balance to Remove:</label><input type = "text" name = "balancerem" class = "box" /><br/><br />
            <input type = "submit" value = " Submit "/><br />
         </form>

         <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>






       </div>

</body>
</html>

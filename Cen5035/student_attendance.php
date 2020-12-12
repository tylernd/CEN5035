<?php
  include('session.php');

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
  <li><a href="student_index.php">Home</a></li>
  <li><a href="student_info.php">View Information</a></li>
  <li><a class="active" href="#">View Attendance</a></li>
  <li><a href="student_logout.php">Log out</a></li>
</ul
<h1 align="center">  </h1>

<?php
$query = mysqli_query($link,"select * from Student_Log WHERE student_id = $session_id");



echo '<h1 align="center">Student Attendance</h1>';
echo '<table border="1" align="center" style="line-height:25px;">';
echo '<tr>';
echo '<th>Student ID</th>';
echo '<th>Class ID</th>';
echo '<th>Date and Time</th>';
echo '</tr>';

//Fetch Data form database
 while($row = mysqli_fetch_array($query)){

 echo '<tr>';
 echo "<td>" . $row['student_id'] . "</td>";
 echo "<td>" . $row['class_id'] . "</td>";
 echo "<td>" . $row['RFID_timestamp'] . "</td>";
 echo '</tr>';

 }
echo '</table>';
?>
</body>
</html>

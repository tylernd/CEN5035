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
  <li><a href="admin_index.php">Home</a></li>
  <li><a href="admin_info.php">View Admin Information</a></li>
  <li><a href="admin_lookup.php">Lookup Student Info</a></li>
  <li><a href="admin_attendance.php">Lookup Student Attendance</a></li>
  <li><a href="admin_addbal.php">Add Student Balance</a></li>
  <li><a href="admin_class1.php">Class 1</a></li>
  <li><a href="admin_logout.php">Log out</a></li>
</ul>



 <?php

 echo '<h1 align="center">Admin Information</h1>';
 echo '<table border="1" align="center" style="line-height:25px;">';
 echo '<tr>';
 echo '<th>Admin ID</th>';
 echo '<th>First Name</th>';
 echo '<th>Last Name</th>';
 echo '<th>Email</th>';
 echo '<th>Status</th>';
 echo '</tr>';
  echo '<tr>';
  echo "<td>" . $session_id . "</td>";
  echo "<td>" .  $session_firstname . "</td>";
  echo "<td>" .  $session_lastname . "</td>";
  echo "<td>" .  $session_email . "</td>";
  echo "<td>" . $_SESSION['status'] . "</td>";
  echo '</tr>';

 echo '</table>';
 ?>

</body>
</html>

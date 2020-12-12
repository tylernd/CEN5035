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
  <li><a class="active" href="#">Home</a></li>
  <li><a href="student_info.php">View Information</a></li>
  <li><a href="student_attendance.php">View Attendance</a></li>
  <li><a href="student_logout.php">Log out</a></li>
</ul>

 <h1>Welcome, <?php echo $session_firstname . " " . $session_lastname ?></h1>
</body>
</html>

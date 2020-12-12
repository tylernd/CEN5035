<?php
   include('config.php');
   session_start();

   if ($_SESSION['status'] == 'student') {
     $user_check = $_SESSION['student_id'];

     $ses_sql = mysqli_query($link,"select * from Student where student_id = '$user_check' ");
    }

    elseif ($_SESSION['status'] == 'admin') {
      $user_check = $_SESSION['admin_id'];

      $ses_sql = mysqli_query($link,"select * from Admin where admin_id = '$user_check' ");
     }


   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   //$login_session = $row['firstname'] + $row['lastname'];
   if ($_SESSION['status'] == 'student') {
     $session_id = $_SESSION['student_id'];
     $session_bal = $row['balance'];
    }
   elseif ($_SESSION['status'] == 'admin') {
      $session_id = $_SESSION['admin_id'];
     }

   $session_firstname = $row['firstname'];
   $session_lastname = $row['lastname'];
   $session_email = $row['email'];

   if($_SESSION['status'] == 'password' && !isset($_SESSION['student_id'])){
      header("location: student_login.php");
      die();
   }

   if($_SESSION['status'] == 'admin' && !isset($_SESSION['admin_id'])){
      header("location: admin_login.php");
      die();
   }
?>

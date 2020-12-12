<?php
   include("config.php");
   session_start();


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $email = trim($_POST["email"]);
      $password = trim($_POST["password"]);

      $sql = "SELECT * FROM Admin WHERE email = '$email' and pass_word = '$password'";
      $result = mysqli_query($link, $sql);

      if(mysqli_num_rows($result) == 1){

        // Store data in session variables
        $row = mysqli_fetch_assoc($result);

        $_SESSION["loggedin"] = true;
        $_SESSION["status"] = 'admin';
        $_SESSION["admin_id"] = $row['admin_id'];


        // Redirect user to welcome page
        header("location: admin_index.php");
      }
      else{
        echo "You have entered incorrect password";
      }
    }
    mysqli_close($link);
?>
<html>

   <head>
      <title>Login Page</title>

      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>

   </head>

   <body bgcolor = "#FFFFFF">

      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Admin Login</b></div>

            <div style = "margin:40px">

               <form action = "" method = "POST">
                  <label>Email     :</label><input type = "text" name = "email" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>


               Not an admin? <a href="index.html">Return</a>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>


            </div>

         </div>

      </div>

   </body>
</html>

<?php
   require 'config.php';
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form
      $myemail = mysqli_real_escape_string($db, $_POST['email']);
      $mypassword = mysqli_real_escape_string($db, $_POST['password']);
      $sql = "SELECT user_name FROM user WHERE email = '$myemail' and password = '$mypassword'";

      $result = mysqli_query($db, $sql);
      $count = mysqli_num_rows($result);
    

      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count === 1) {
         $row = mysqli_fetch_assoc($result);
         $myname = $row['user_name'];
         $_SESSION['login_user'] = $myname;
         $_SESSION['loggedin'] = true;
         header("Location: ../../welcome.php");
      }else {
         header("Location: ../loginErr.html");
      }
      $result->close();
   } 
   $db->close();
?>


<?php
    session_start();

   include("config.php");
   
       
       $formEmail = $_POST['email']; 
       $formPassword = $_POST['password']; 
      // echo "'$email','$password','$fullname'";
       $query = "select id from users where email='$formEmail' and password='$formPassword'";
       $data = mysql_query ($query) or die(mysql_error());
        if($data) {
         $_SESSION['email']= $formEmail;
         header('Location: index.php');
         }

     
?>
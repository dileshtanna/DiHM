<?php
   include("config.php");
   // error_reporting(0);
   //if(!empty($_POST['Submit'])) { 
        // echo "working";
       SignUp();
      //}   
      

      function NewUser() {
       $fullname = $_POST['name']; 
       $email = $_POST['email']; 
       $password = $_POST['password']; 
      // echo "'$email','$password','$fullname'";
       $query = "INSERT INTO users (email,password,name) VALUES ('$email','$password','$fullname')"; 
       $data = mysql_query ($query) or die(mysql_error());
        if($data) {
         header('Location: login.html');
         }
      }


       function SignUp() { 
       if(!empty($_POST['email'])) { 
         $query = mysql_query("SELECT * FROM users WHERE email = '$_POST[email]' AND password = '$_POST[password]'") or die(mysql_error());

          if(!$row = mysql_fetch_array($query) or die(mysql_error())) {
           NewUser(); 
        }
           else { 
            echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
            } 
         } 
      } 

     
?>
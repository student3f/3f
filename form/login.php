<?php
 $pass = htmlspecialchars(basename($_POST['pass']));
 if($pass == 'iamthe3flover'){
   header("Location: index-login.php");
 }
 else{
   header("Location: body.php");
 }
?>

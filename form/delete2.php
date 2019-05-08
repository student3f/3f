<?php
  require('lib/function.php');
  unlink("inform/".$_POST['link'].'/'.$_POST['name']);
  header("Location: index-login.php?e=2");
?>

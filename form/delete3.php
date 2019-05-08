<?php
  $vb = $_POST['x'];
  unlink('image/'.$_POST['x'].'/'.$_POST['y']);
  header('Location: index-login.php?e=3');
?>

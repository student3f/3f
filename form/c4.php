<?php
 $link = "image/".$_POST['o'].'/'.basename($_FILES['file']['name']);
 move_uploaded_file($_FILES['file']['tmp_name'],$link);
 header("Location: index-login.php?e=3");
?>

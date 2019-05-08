<?php
 $link = "lib/file/".$_POST['ly'].'/'.basename($_FILES['file']['name']);
 file_put_contents('folder/'.$_POST['ly'].'/'.$_POST['tx'],$_POST['ds']);
 move_uploaded_file($_FILES['file']['tmp_name'],$link);
 rename($link,"lib/file/".$_POST['ly'].'/'.$_POST['tx'].".".pathinfo($link,PATHINFO_EXTENSION));
 header("Location: index-login.php?e=1");
?>

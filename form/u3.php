<?php
 rename("inform/".$_POST['lo'].'/'.$_POST['old'],"inform/".$_POST['lo'].'/'.$_POST['new']);
 file_put_contents("inform/".$_POST['lo'].'/'.$_POST['new'],$_POST['d']);
 header("Location: index-login.php?e=2");
?>

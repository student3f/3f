<?php
 file_put_contents('inform/'.$_POST['o'].'/'.$_POST['t'],$_POST['d']);
 header("Location: index-login.php?e=2");
?>

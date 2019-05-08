<?php
 require('lib/function.php');
 file_del($_POST['oldlink']);
 unlink("folder/".$_POST['oldlink'].'/'.$_POST['old']);
 header("Location: index-login.php?e=1");
?>

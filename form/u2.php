<?php
 rename("folder/".$_POST['le'].'/'.$_POST['o'],"folder/".$_POST['le'].'/'.$_POST['n']);
 file_put_contents("folder/".$_POST['le'].'/'.$_POST['n'],$_POST['de']);
 header("Location: index-login.php?e=1");
?>

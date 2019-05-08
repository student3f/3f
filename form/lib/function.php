<?php
function heading($h){
  if(isset($_GET['v'])){
   echo htmlspecialchars($_GET['v']);
  }
  else{
   echo $h;
  }
}
function description($d){
  if(isset($_GET['v'])){
    $_b = basename($_GET['v']);
    $y = $_GET['vw'];
    echo htmlspecialchars(file_get_contents("folder/".$y."/".$_b));
  }
  else{
    echo $d;
  }
}
function description2($d){
  if(isset($_GET['v'])){
    $_b = basename($_GET['v']);
    $y = $_GET['vw'];
    echo htmlspecialchars(file_get_contents("inform/".$y."/".$_b));
  }
  else{
    echo $d;
  }
}
function yc($n, $c){
  echo "<style>
   $n {
     background-color: $c;
   }
    #year li a :hover:not($n){
      background-color: $c;
    }
  </style>";
}
function yc2($n, $c){
  echo "<style>
   $n {
     background-color: $c;
   }
    #class li a :hover:not($n){
      background-color: $c;
    }
  </style>";
}
function yc3(){
  $cn = array('2018' => 'a', '2019' => 'b', '2020' => 'c', '2021' => 'd', '2022' => 'e', '2023' => 'f', '2024' => 'g', '2025' => 'h',
   "2026" => "i", "2027" => "j");
  if(isset($_GET['vw'])){
    yc('#'.$cn[$_GET['vw']], 'darkgray');
  }
}
 function acla($dir,$y){
   $fl = scandir($dir);
   $t = 0;
   while ($t < count($fl)) {
     $filter = htmlspecialchars($fl[$t]);
     if($fl[$t] != '.'){
       if($fl[$t] != '..'){
         echo "<li><a href=\"body.php?e=1&&vw=$y&&v=$filter\" id=\"$filter\">$filter</a></li>";
       }
     }
     $t = $t + 1;
   }
}
function acla4($dir,$y){
  $fl = scandir($dir);
  $t = 0;
  while ($t < count($fl)) {
    $filter = htmlspecialchars($fl[$t]);
    if($fl[$t] != '.'){
      if($fl[$t] != '..'){
        echo "<li><a href=\"body.php?e=2&&vw=$y&&v=$filter\" id=\"$filter\">$filter</a></li>";
      }
    }
    $t = $t + 1;
  }
}
function acla2($dir,$y){
  $fl = scandir($dir);
  $t = 0;
  while ($t < count($fl)) {
    $filter = htmlspecialchars($fl[$t]);
    if($fl[$t] != '.'){
      if($fl[$t] != '..'){
        echo "<li><a href=\"index-login.php?e=1&&vw=$y&&v=$filter\" id=\"$filter\">$filter</a></li>";
      }
    }
    $t = $t + 1;
  }
}
function acla3($dir,$y){
  $fl = scandir($dir);
  $t = 0;
  while ($t < count($fl)) {
    $filter = htmlspecialchars($fl[$t]);
    if($fl[$t] != '.'){
      if($fl[$t] != '..'){
        echo "<li><a href=\"index-login.php?e=2&&vw=$y&&v=$filter\" id=\"$filter\">$filter</a></li>";
      }
    }
    $t = $t + 1;
  }
}
function acla5($dir,$y){
  $fl = scandir($dir);
  $t = 0;
  while ($t < count($fl)) {
    $filter = htmlspecialchars($fl[$t]);
    if($fl[$t] != '.'){
      if($fl[$t] != '..'){
        echo "<li><a href=\"index-login.php?e=3&&vw=$y&&v=$filter\" id=\"$filter\">$filter</a></li>";
      }
    }
    $t = $t + 1;
  }
}
function image($folder){
  $url = scandir($folder);
  for($i = 0; $i < count($url); $i++){
    $i_n = $url[$i];
    $exe = array('png','jpg','jpeg');
    $in = strtolower(pathinfo($i_n, PATHINFO_EXTENSION));
    if(in_array($in, $exe)){
      echo "<a href=\"$folder/$i_n\" download><img src=\"$folder/$i_n\" width=\"400px\" height=\"350px\" style=\" margin-left: 110px;\"></a>";
    }
    else{
      contnue;
    }
  }
}
function image2($folder){
  $url = scandir($folder);
  for($i = 0; $i < count($url); $i++){
    $i_n = $url[$i];
    $vw = $_GET['vw'];
    $exe = array('png','jpg','jpeg');
    echo "<script>
    function con(){
    var con = confirm('삭제하실건가요?');
    return con;
    if(con){
      location.href='delete3.php';
    }
    else{}
    }
    </script>";
    $in = strtolower(pathinfo($i_n, PATHINFO_EXTENSION));
    if(in_array($in, $exe)){
      echo "
      <form class=\"form\" action=\"delete3.php\" method=\"post\" onsubmit=\"return con();\">
      <input type=\"hidden\" name=\"x\" value=\"$vw\">
      <input type=\"hidden\" name=\"y\" value=\"$i_n\">
      <button type=\"submit\"><img src=\"$folder/$i_n\" width=\"400px\" height=\"350px\" style=\" margin-left: 80px;\" class=\"$i_n\"></button>
      </form>";
    }
    else{
      contnue;
    }
  }
}
function down_image($folder){
  $url = scandir($folder);
  for($i = 0; $i < count($url); $i++){
    $i_n = $url[$i];
    $exe = array('png','jpg','jpeg');
    $in = strtolower(pathinfo($i_n, PATHINFO_EXTENSION));
    $im = pathinfo($i_n, PATHINFO_FILENAME);
    if($im == $_GET['v']){
     if(in_array($in, $exe)){
      echo "<a href=\"$folder/$i_n\" download><img src=\"$folder/$i_n\"></a><br>";
     }
     else{
      contnue;
     }
   }
   else{
     contnue;
   }
  }
}
 function file_down($y){
   if(isset($_GET['v'])){
    $ary = array('.txt', '.hwp', '.zip', '.pptx', '.png');
    if(file_exists("lib/file/".$y."/".$_GET['v'].'.show')){
      echo "<a href=\"lib/file/".$_GET['v'].".show\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.SHOW')){
      echo "<a href=\"lib/file/".$_GET['v'].".SHOW\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.pdf')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".pdf\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.PDF')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".PDF\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.zip')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".zip\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.ZIP')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".ZIP\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.pptx')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".pptx\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.PPTX')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".PPTX\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.png')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".png\" download>download</a><br>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.PNG')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".PNG\" download>download</a><br>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.exe')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".exe\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.EXE')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".EXE\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.hwp')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".hwp\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.docx')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".docx\" download>download</a>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.jpg')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".jpg\" download>download</a><br>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.JPG')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".JPG\" download>download</a><br>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.jpeg')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".jpeg\" download>download</a><br>";
    }
    else if(file_exists("lib/file/".$y."/".$_GET['v'].'.JPEG')){
      echo "<a href=\"lib/file/".$y."/".$_GET['v'].".JPEG\" download>download</a><br>";
    }
  }
 }
 function file_del($y){
    if(file_exists("lib/file/".$y."/".$_POST['old'].'.show')){
      unlink("lib/file/".$y."/".$_POST['old'].".show");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.pdf')){
      unlink("lib/file/".$y."/".$_POST['old'].".pdf");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.zip')){
      unlink("lib/file/".$y."/".$_POST['old'].".zip");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.pptx')){
      unlink("lib/file/".$y."/".$_POST['old'].".pptx");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.png')){
      unlink("lib/file/".$y."/".$_POST['old'].".png");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.PNG')){
      unlink("lib/file/".$y."/".$_POST['old'].".PNG");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.exe')){
      unlink("lib/file/".$y."/".$_POST['old'].".exe");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.jpg')){
      unlink("lib/file/".$y."/".$_POST['old'].".jpg");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.JPG')){
      unlink("lib/file/".$y."/".$_POST['old'].".JPG");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.jpeg')){
      unlink("lib/file/".$y."/".$_POST['old'].".jpeg");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.docx')){
      unlink("lib/file/".$y."/".$_POST['old'].".docx");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.hwp')){
      unlink("lib/file/".$y."/".$_POST['old'].".hwp");
    }
    else if(file_exists("lib/file/".$y."/".$_POST['old'].'.JPEG')){
      unlink("lib/file/".$y."/".$_POST['old'].".JPEG");
    }
  }
?>

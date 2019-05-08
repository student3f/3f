<?php
 require_once('lib/function.php');
?>
<!DOCTYPE HTML>
<html>
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php
     heading("3F");
    ?></title>
  <link rel="stylesheet" href="lib/style.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/hanna.css">
 </head>
  <body>
    <div id="main"><h1><a href="index-login.php"><img src="4.png" class="nmv"></a></h1>  <h6>이메일 주소: researchingforensicscience@gmail.com <br>관리자: President of 3F, made by Developer</h6></div>
    <div class="main_bottom"></div>
    <div class="bar">
      <?php
       if(isset($_GET['e'])){
         if($_GET['e'] == '1'){
      ?>
       <style>
         #o{
           background-color: #FFC700;
           color: black;
         }
         .bar li a:hover:not(#o) {
           background-color: #FFC700;
           color: black;
         }
       </style>
      <?php
         }
       }
       if(isset($_GET['e'])){
         if($_GET['e'] == '2'){
      ?>
      <style>
        #t{
          background-color: #FFC700;
          color: black;
        }
        .bar li a:hover:not(#t) {
          background-color: #FFC700;
          color: black;
        }
      </style>
      <?php
         }
       }
       if(isset($_GET['e'])){
         if($_GET['e'] == '3'){
      ?>
      <style>
        #th{
          background-color: #FFC700;
          color: black;
        }
        .bar li a:hover:not(#th) {
          background-color: #FFC700;
          color: black;
        }
      </style>
      <?php
    }
  }
      ?>
      <h2>
      <ol>
        <li><a href="index-login.php?e=1" id="o">수업내용</a></li>
        <li><a href="index-login.php?e=2" id="t">공지사항</a></li>
        <li><a href="index-login.php?e=3" id="th">사진첩</a></li>
        <li><a href="communication.html" target="_blank">커뮤니케이션</a></li>
      </ol>
    </h2>
    </div>

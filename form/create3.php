<?php
 require_once('lib/function.php');
 require('lib/head2.php');
?>
<div class="big_screen">
<?php
 if(isset($_GET['e'])){
   if($_GET['e'] == '3'){
?>
<div id="include">
<div id="drop">
<div id="year">
  <ol>
    <li><a href="index-login.php?e=3&&vw=2018" id="a">2018</a></li>
    <li><a href="index-login.php?e=3&&vw=2019" id="b">2019</a></li>
    <li><a href="index-login.php?e=3&&vw=2020" id="c">2020</a></li>
    <li><a href="index-login.php?e=3&&vw=2021" id="d">2021</a></li>
    <li><a href="index-login.php?e=3&&vw=2022" id="e">2022</a></li>
    <li><a href="index-login.php?e=3&&vw=2023" id="f">2023</a></li>
    <li><a href="index-login.php?e=3&&vw=2024" id="g">2024</a></li>
    <li><a href="index-login.php?e=3&&vw=2025" id="h">2025</a></li>
    <li><a href="index-login.php?e=3&&vw=2026" id="i">2026</a></li>
    <li><a href="index-login.php?e=3&&vw=2027" id="j">2027</a></li>
  </ol>
  <?php
   yc3();
  ?>
</div>
<div id="class">
  <ol>
<?php
 if($_GET['vw'] == '2018'){
   acla5("./image/2018","2018");
   /*yc("#8"."dimgray");*/
 }
 else if($_GET['vw'] == '2019'){
   acla5("./image/2019","2019");
   /*yc("#9"."dimgray");*/
 }
 else if($_GET['vw'] == '2020'){
   acla5("./image/2020","2020");
   /*yc("#y","#0"."dimgray");*/
 }
 else if($_GET['vw'] == '2021'){
   acla5("./image/2021","2021");
   /*yc("#y","#1"."dimgray");*/
 }
 else if($_GET['vw'] == '2022'){
   acla5("./image/2022","2022");
   /*yc("#y","#2"."dimgray");*/
 }
 else if($_GET['vw'] == '2023'){
   acla5("./image/2023","2023");
   /*yc("#y","#3"."dimgray");*/
 }
 else if($_GET['vw'] == '2024'){
   acla5("./image/2024","2024");
   /*yc("#y","#4"."dimgray");*/
 }
 else if($_GET['vw'] == '2025'){
   acla5("./image/2025","2025");
   /*yc("#y","#5"."dimgray");*/
 }
 else if($_GET['vw'] == '2026'){
   acla5("./image/2026","2026");
   /*yc("#y","#6"."dimgray");*/
 }
 else if($_GET['vw'] == '2027'){
   acla5("./image/2027","2027");
   /*yc("#y","#7"."dimgray");*/
 }
?>
</ol>
</div>
</div>
<div id="m">
  <form id="form" action="c4.php" method="post" enctype="multipart/form-data">
  <div id="tb" style="text-align: center;">
  <p>사진첩에 추가하기</p>
 </div>
 <div id="bt">
   <p><input type="hidden" name="o" value="<?= $_GET['vw'];?>"></p>
   <p>파일첨부하기 : <input type="file" name="file"></p>
   <p><input type="submit"></p>
</div>
  </form>
</div>
</div>
<?php
   }
 }
?>
</div>
</div>
<h6><footer>이메일 주소: researchingforensicscience@gmail.com<br> 관리자: President of 3F, made by Developer</footer></h6>
</body>
</html>

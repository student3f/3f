<?php
 require_once('lib/function.php');
 require('lib/head.php');
?>

  </div>
  <div class="big_screen">
  <?php
   if(isset($_GET['e'])){
     if($_GET['e'] == '1'){
  ?>
  <div id="include">
  <div id="drop">
  <div id="year">
    <ol>
      <li><a href="body.php?e=1&&vw=2018" id="a">2018</a></li>
      <li><a href="body.php?e=1&&vw=2019" id="b">2019</a></li>
      <li><a href="body.php?e=1&&vw=2020" id="c">2020</a></li>
      <li><a href="body.php?e=1&&vw=2021" id="d">2021</a></li>
      <li><a href="body.php?e=1&&vw=2022" id="e">2022</a></li>
      <li><a href="body.php?e=1&&vw=2023" id="f">2023</a></li>
      <li><a href="body.php?e=1&&vw=2024" id="g">2024</a></li>
      <li><a href="body.php?e=1&&vw=2025" id="h">2025</a></li>
      <li><a href="body.php?e=1&&vw=2026" id="i">2026</a></li>
      <li><a href="body.php?e=1&&vw=2027" id="j">2027</a></li>
    </ol>
  </div>
  <div id="class">
    <ol>
  <?php
   if($_GET['vw'] == '2018'){
     acla("./folder/2018","2018");
     yc('#a','dimgray');
   }
   else if($_GET['vw'] == '2019'){
     acla("./folder/2019","2019");
     yc('#b','dimgray');
   }
   else if($_GET['vw'] == '2020'){
     acla("./folder/2020","2020");
     yc('#c','dimgray');
   }
   else if($_GET['vw'] == '2021'){
     acla("./folder/2021","2021");
     yc('#d','dimgray');
   }
   else if($_GET['vw'] == '2022'){
     acla("./folder/2022","2022");
     yc('#e','dimgray');
   }
   else if($_GET['vw'] == '2023'){
     acla("./folder/2023","2023");
     yc('#f','dimgray');
   }
   else if($_GET['vw'] == '2024'){
     acla("./folder/2024","2024");
     yc('#g','dimgray');
   }
   else if($_GET['vw'] == '2025'){
     acla("./folder/2025","2025");
     yc('#h','dimgray');
   }
   else if($_GET['vw'] == '2026'){
     acla("./folder/2026","2026");
     yc('#i','dimgray');
   }
   else if($_GET['vw'] == '2027'){
     acla("./folder/2027","2027");
     yc('#j','dimgray');
   }
  ?>
  <?php
  if(isset($_GET['v'])){
   $js = $_GET['v'];
   yc2('[id="'.$js.'"]','darkgray');
 }
  ?>
</ol>
  </div>
</div>
  <div id="m">
    <div id="tb">
    <?php
     heading("title");
    ?>
   </div>
   <div id="bt">
   <pre>
   <?php
     description("body");
     $ul = "./lib/file".$_GET['vw'];
     down_image($ul);
   ?>
 </pre>
   <div id="file">
     <?php file_down($_GET['vw']); ?>
   </div>
  </div>
  </div>
</div>
  <?php
     }
   }
  ?>
  <?php
   if(isset($_GET['e'])){
     if($_GET['e'] == '2'){
  ?>
  <div id="include">
  <div id="drop">
  <div id="year">
    <ol>
      <li><a href="body.php?e=2&&vw=2018" id="a">2018</a></li>
      <li><a href="body.php?e=2&&vw=2019" id="b">2019</a></li>
      <li><a href="body.php?e=2&&vw=2020" id="c">2020</a></li>
      <li><a href="body.php?e=2&&vw=2021" id="d">2021</a></li>
      <li><a href="body.php?e=2&&vw=2022" id="e">2022</a></li>
      <li><a href="body.php?e=2&&vw=2023" id="f">2023</a></li>
      <li><a href="body.php?e=2&&vw=2024" id="g">2024</a></li>
      <li><a href="body.php?e=2&&vw=2025" id="h">2025</a></li>
      <li><a href="body.php?e=2&&vw=2026" id="i">2026</a></li>
      <li><a href="body.php?e=2&&vw=2027" id="j">2027</a></li>
    </ol>
  </div>
  <div id="class">
    <ol>
  <?php
   if($_GET['vw'] == '2018'){
     acla4("./inform/2018","2018");
     yc('#a','dimgray');
   }
   else if($_GET['vw'] == '2019'){
     acla4("./inform/2019","2019");
     yc('#b','dimgray');
   }
   else if($_GET['vw'] == '2020'){
     acla4("./inform/2020","2020");
     yc('#c','dimgray');
   }
   else if($_GET['vw'] == '2021'){
     acla4("./inform/2021","2021");
     yc('#d','dimgray');
   }
   else if($_GET['vw'] == '2022'){
     acla4("./inform/2022","2022");
     yc('#e','dimgray');
   }
   else if($_GET['vw'] == '2023'){
     acla4("./inform/2023","2023");
     yc('#f','dimgray');
   }
   else if($_GET['vw'] == '2024'){
     acla4("./inform/2024","2024");
     yc('#g','dimgray');
   }
   else if($_GET['vw'] == '2025'){
     acla4("./inform/2025","2025");
     yc('#h','dimgray');
   }
   else if($_GET['vw'] == '2026'){
     acla4("./inform/2026","2026");
     yc('#i','dimgray');
   }
   else if($_GET['vw'] == '2027'){
     acla4("./inform/2027","2027");
     yc('#j','dimgray');
   }
  ?>
  <?php
  if(isset($_GET['v'])){
   $js = $_GET['v'];
   yc2('[id="'.$js.'"]','darkgray');
 }
  ?>
</ol>
  </div>
</div>
  <div id="m">
    <div id="tb">
    <?php
     heading("title");
    ?>
   </div>
   <div id="bt">
     <pre>
   <?php
     description2("body");
   ?>
 </pre>
  </div>
  </div>
</div>
  <?php
     }
   }
  ?>
  <?php
   if(isset($_GET['e'])){
     if($_GET['e'] == '3'){
  ?>
  <div id="include">
  <div id="drop">
  <div id="year">
    <ol>
      <li><a href="body.php?e=3&&vw=2018" id="a">2018</a></li>
      <li><a href="body.php?e=3&&vw=2019" id="b">2019</a></li>
      <li><a href="body.php?e=3&&vw=2020" id="c">2020</a></li>
      <li><a href="body.php?e=3&&vw=2021" id="d">2021</a></li>
      <li><a href="body.php?e=3&&vw=2022" id="e">2022</a></li>
      <li><a href="body.php?e=3&&vw=2023" id="f">2023</a></li>
      <li><a href="body.php?e=3&&vw=2024" id="g">2024</a></li>
      <li><a href="body.php?e=3&&vw=2025" id="h">2025</a></li>
      <li><a href="body.php?e=3&&vw=2026" id="i">2026</a></li>
      <li><a href="body.php?e=3&&vw=2027" id="j">2027</a></li>
    </ol>
    <?php
     yc3();
    ?>
  </div>
</div>
 <div id="m2">
   <?php
    $ul = "./image/".$_GET['vw'];
    image($ul);
   ?>
</div>
</div>
  <?php
     }
   }
  ?>
    <div class="hidden" width="100px" height="100px" onclick="
     var film = confirm('WARNING');
     film;
     if(film){
      location.href='secret.php';
    }else{}
    "></div>
</div>
</div>
  <div id="pass">
   <form action="login.php" method="post">
    <input type="password" name="pass">
    <input type="submit">
  </form>
  </div>
<h6><footer>이메일 주소: researchingforensicscience@gmail.com <br>관리자: President of 3F, made by Developer</footer></h6>
  </body>
 </html>

<?php
 require_once('lib/function.php');
 require('lib/head2.php');
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
      <li><a href="index-login.php?e=1&&vw=2018" id="a">2018</a></li>
      <li><a href="index-login.php?e=1&&vw=2019" id="b">2019</a></li>
      <li><a href="index-login.php?e=1&&vw=2020" id="c">2020</a></li>
      <li><a href="index-login.php?e=1&&vw=2021" id="d">2021</a></li>
      <li><a href="index-login.php?e=1&&vw=2022" id="e">2022</a></li>
      <li><a href="index-login.php?e=1&&vw=2023" id="f">2023</a></li>
      <li><a href="index-login.php?e=1&&vw=2024" id="g">2024</a></li>
      <li><a href="index-login.php?e=1&&vw=2025" id="h">2025</a></li>
      <li><a href="index-login.php?e=1&&vw=2026" id="i">2026</a></li>
      <li><a href="index-login.php?e=1&&vw=2027" id="j">2027</a></li>
    </ol>
  </div>
  <div id="class">
    <ol>
      <?php
       if($_GET['vw'] == '2018'){
         acla2("./folder/2018","2018");
         yc('#a','dimgray');
       }
       else if($_GET['vw'] == '2019'){
         acla2("./folder/2019","2019");
         yc('#b','dimgray');
       }
       else if($_GET['vw'] == '2020'){
         acla2("./folder/2020","2020");
         yc('#c','dimgray');
       }
       else if($_GET['vw'] == '2021'){
         acla2("./folder/2021","2021");
         yc('#d','dimgray');
       }
       else if($_GET['vw'] == '2022'){
         acla2("./folder/2022","2022");
         yc('#e','dimgray');
       }
       else if($_GET['vw'] == '2023'){
         acla2("./folder/2023","2023");
         yc('#f','dimgray');
       }
       else if($_GET['vw'] == '2024'){
         acla2("./folder/2024","2024");
         yc('#g','dimgray');
       }
       else if($_GET['vw'] == '2025'){
         acla2("./folder/2025","2025");
         yc('#h','dimgray');
       }
       else if($_GET['vw'] == '2026'){
         acla2("./folder/2026","2026");
         yc('#i','dimgray');
       }
       else if($_GET['vw'] == '2027'){
         acla2("./folder/2027","2027");
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
    <form id="form" action="c2.php" method="post" enctype="multipart/form-data">
    <div id="tb" style="text-align: center;">
    <p><input type="text" placeholder="title" id="ti" name="tx"></p>
   </div>
   <div id="bt">
     <p><input type="hidden" name="ly" value="<?= $_GET['vw'];?>">
     <p><textarea placeholder="description" id="ta" name="ds" rows="30" cols="30"></textarea></p>
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
<h6><footer>이메일 주소: researchingforensicscience@gmail.com <br>관리자: President of 3F, made by Developer</footer></h6>
</body>
</html>

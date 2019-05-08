<?php
   require_once('lib/function.php');
   require('lib/head2.php');

   function getT(){
     if(isset($_GET['v'])){
       echo htmlspecialchars($_GET['v']);
     }
   }
   function getB(){
     if(isset($_GET['v'])){
       $bn = basename($_GET['v']);
       echo file_get_contents('inform/'.$_GET['vw'].'/'.$bn);
     }
   }
  ?>
</div>
<div class="big_screen">
<?php
 if(isset($_GET['e'])){
   if($_GET['e'] == '2'){
?>
<div id="include">
<div id="drop">
<div id="year">
  <ol>
    <li><a href="index-login.php?e=2&&vw=2018" id="a">2018</a></li>
    <li><a href="index-login.php?e=2&&vw=2019" id="b">2019</a></li>
    <li><a href="index-login.php?e=2&&vw=2020" id="c">2020</a></li>
    <li><a href="index-login.php?e=2&&vw=2021" id="d">2021</a></li>
    <li><a href="index-login.php?e=2&&vw=2022" id="e">2022</a></li>
    <li><a href="index-login.php?e=2&&vw=2023" id="f">2023</a></li>
    <li><a href="index-login.php?e=2&&vw=2024" id="g">2024</a></li>
    <li><a href="index-login.php?e=2&&vw=2025" id="h">2025</a></li>
    <li><a href="index-login.php?e=2&&vw=2026" id="i">2026</a></li>
    <li><a href="index-login.php?e=2&&vw=2027" id="j">2027</a></li>
  </ol>
</div>
<div id="class">
  <ol>
    <?php
     if($_GET['vw'] == '2018'){
       acla3("./inform/2018","2018");
       yc('#a','dimgray');
     }
     else if($_GET['vw'] == '2019'){
       acla3("./inform/2019","2019");
       yc('#b','dimgray');
     }
     else if($_GET['vw'] == '2020'){
       acla3("./inform/2020","2020");
       yc('#c','dimgray');
     }
     else if($_GET['vw'] == '2021'){
       acla3("./inform/2021","2021");
       yc('#d','dimgray');
     }
     else if($_GET['vw'] == '2022'){
       acla3("./inform/2022","2022");
       yc('#e','dimgray');
     }
     else if($_GET['vw'] == '2023'){
       acla3("./inform/2023","2023");
       yc('#f','dimgray');
     }
     else if($_GET['vw'] == '2024'){
       acla3("./inform/2024","2024");
       yc('#g','dimgray');
     }
     else if($_GET['vw'] == '2025'){
       acla3("./inform/2025","2025");
       yc('#h','dimgray');
     }
     else if($_GET['vw'] == '2026'){
       acla3("./inform/2026","2026");
       yc('#i','dimgray');
     }
     else if($_GET['vw'] == '2027'){
       acla3("./inform/2027","2027");
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
  <form id="form" action="u3.php" method="post" enctype="multipart/form-data">
  <div id="tb" style="text-align: center;">
  <p><input type="text" placeholder="title" name="new" id="ti" value="<?= getT(); ?>"></p>
 </div>
 <div id="bt">
   <p><input type="hidden" name="old" value="<?= $_GET['v'] ?>"></p>
   <p><input type="hidden" name="lo" value="<?= $_GET['vw'] ?>"></p>
   <p><textarea placeholder="description" name="d" id="ta" rows="30" cols="30"><?= getB(); ?></textarea></p>
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
</div>
<h6><footer>이메일 주소: researchingforensicscience@gmail.com<br> 관리자: President of 3F, made by Developer</footer></h6>
</body>
</html>

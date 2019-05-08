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
    <?php if($_GET['e'] == '1'&&isset($_GET['vw'])){ ?>
    <form action="create.php?e=1&&vw=<?= $_GET['vw'];?>" method="post">
      <input type="submit" value="글쓰기">
    </form>
    <?php if($_GET['e'] == '1'&&isset($_GET['v'])){ ?>
    <form action="update.php?v=<?= $_GET['v']?>&&e=1&&vw=<?= $_GET['vw'];?>" method="post">
      <input type="submit" value="글수정">
    </form>
    <form action="delete.php" method="post">
      <input type="hidden" name="old" value="<?= $_GET['v']; ?>">
      <input type="hidden" name="oldlink" value="<?= $_GET['vw']; ?>">
      <input type="submit" value="글삭제">
    </form>
    <?php } ?>
    <?php } ?>
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
    <div id="tb">
    <?php
     heading("title");
    ?>
   </div>
   <div id="bt">
  <pre>
   <?php
     description("body");
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
    <?php if($_GET['e'] == '2'&&isset($_GET['vw'])){ ?>
    <form action="create2.php?e=2&&vw=<?= $_GET['vw']; ?>" method="post">
      <input type="submit" value="공지사항 쓰기">
    </form>
  <?php } ?>
    <?php if($_GET['e'] == '2'&&isset($_GET['v'])){ ?>
    <form action="update2.php?e=2&&vw=<?= $_GET['vw'];?>&&v=<?= $_GET['v'];?>" method="post">
      <input type="submit" value="공지사항 수정">
    </form>
    <form action="delete2.php" method="post">
      <input type="hidden" name="name" value="<?= $_GET['v']; ?>">
      <input type="hidden" name="link" value="<?= $_GET['vw']; ?>">
      <input type="submit" value="공지사항 삭제">
    </form>
    <?php } ?>
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
    <?php
     if($_GET['e'] == '3'&&isset($_GET['vw'])){
    ?>
    <form action="create3.php?e=3&&vw=<?= $_GET['vw']; ?>" method="post">
      <input type="submit" value="사진 넣기">
    </form>
  <?php } ?>
  </div>
</div>
  <div id="m2">
   <?php
    $l = "./image/".$_GET['vw'];
    image2($l);
   ?>
  </div>
</div>
  <?php
     }
   }
  ?>
</div>
</div>
  </div>
  </body>
 </html>

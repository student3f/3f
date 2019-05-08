<?php
 require_once('lib/function.php');
 require('lib/head.php');
?>

    <form action="create.php" method="post">
      <input type="submit" value="Create">
    </form>
    <?php if(isset($_GET['v'])){ ?>
    <form action="update.php?v=<?= $_GET['v']?>" method="post">
      <input type="submit" value="Update">
    </form>
    <form action="delete.php" method="post">
      <input type="hidden" name="old" value="<?= $_GET['v']; ?>">
      <input type="submit" value="Delete">
    </form>
    <?php } ?>
    <form action="create2.php" method="post">
      <input type="submit" value="공지사항 쓰기">
    </form>
    <?php if(isset($_GET['v'])){ ?>
    <form action="delete2.php" method="post">
      <input type="hidden" name="old" value="<?= $_GET['v']; ?>">
      <input type="submit" value="공지사항 삭제">
    </form>
    <?php } ?>
  </div>
    <div id="body">
    <h1><?php
      heading("3F");
    ?></h1>
    <div>
      <pre>
      <?php
        description("3F home page");
      ?>
    </pre>
    </div>
    <div>
      <?php
       file_down();
      ?>
    </div>
   </div>
  </div>
  <h6><footer>이메일 주소: researchingforensicscience@gmail.com <br>관리자: President of 3F, made by Developer</footer></h6>
  </body>
 </html>

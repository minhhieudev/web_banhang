<?php 
  /*check dang nhap */
  if( isset($_POST["butdn"])){
       $tk=$_POST["txttk"];
       $mk=trim($_POST["txtmk"]);
       $mk=md5($mk);
       $mk=substr($mk,0,20);
       $M_home->CheckUser($tk,$mk);
       
  }
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Trang chủ</title>
        <link href="customer/views/css/StyleHome.css" rel="stylesheet">
        <script src="https://www.gstatic.com/firebasejs/5.7.2/firebase.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.7.2/firebase-database.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type=”text/javascript” src=”http://code.jquery.com/jquery-2.0.3.min.js”></script>
        <script type="text/javascript" language=”JavaScript” src="public/js/javascript.js"></script>
</head>
<body>
  <!--wrapper-->
  <div id="wraper">
      <!--blocks lien he-->
        <?php require "V_lien_he.php" ?>
      <!--///lien he-->

    <!--block header-->
       <?php  require "V_header.php" ?>
    <!--////block header-->

    <!--block main-->
        <div id="bandner">
          <div id="slider">
             <!--blocks slide-->
             <?php require "V_slider.php" ?>
          </div>

          <div id="thongbao">
             <!--blocks thong bao-->
             <?php require "V_thong_bao.php" ?>
          </div>
        </div>

    <div id="nganhhang">
      <!--blocks các ngành hàng-->
      <?php require "V_nganh_hang.php" ?>
    </div>

    <div id="loc-sp">
      <!--blocks lọc sp-->
      <?php require "sanpham/V_loc_sp.php" ?>
    </div>
    <div id="listsp">
      <!--blocks list san pham -->
      <?php require "sanpham/V_san_pham.php" ?>
    </div>
    <!--/////block main-->

    <!--blocks footer-->
        <?php require "V_footer.php" ?>
     <!--//////blocks footer-->

  </div>
  <!--/////wrapper-->

</body>
</html>
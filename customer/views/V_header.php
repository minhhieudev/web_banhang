<div id="header">
    <a style="background-image: url(public/images/logoweb.jpg );" href="index.php" id="logoweb"></a>
       <div id="form-search">
        <input type="text" name="tukhoa" id="txtinput" placeholder="Tìm sản phẩm......">
        <input  style="background-image: url(public/images/imgsearch.png);"  onclick="butTimKiem();" type="submit" id="butsubmit" name="seach" value="">
      </div>
    <a style="background-image: url(public/images/icongiohang.png);" href="index.php?c=giohang"  id="butgiohang"></a>
    <?php
             if(isset($_SESSION["idUser"])){
echo '<div class="log">
<div class="tentk">

<p>chào:</p> <input id="txtname" type="submit" value="'.$_SESSION["tk"].' " >
</div>
<form class="formlogout" method="POST" action="index.php">
<input  type="hidden" name="c" value="home">
<input  type="hidden" name="a" value="logout">
       <input class="butlogout" name="logout" id="logout" type="submit" value="logout">
</form>
</div>';
             }else{
               require_once "customer/views/V_dn_dk.php" ;
             }
    ?>
</div>


<center>
<table style="margin-bottom:30px" class="tablesp" border="1px" cellpadding="5px" cellspacing="0px">
<tr >
  <font color="red" size="5"> Quản lí danh sách sản phẩm</font>
</tr>
<tr class="row1">
    <td>Id Sản phẩm</td>
    <td>Tên sản phẩm</td>
    <td>Giá gốc</td>
    <td>Giá Sale</td>
    <td>Ảnh sản phẩm</td>
    <td>Nhóm hàng</td>
   
    <td><a href="index.php?admin=&c=sanpham&themsanpham=">Thêm</a></td>
</tr>
<?php 
//get list option nganh hang
$sOptionNH='';
foreach($M_sanpham->GetListNganhHang() as $rowNH){
   $sOptionNH=$sOptionNH.'<option value="'. $rowNH["value"].'">'.$rowNH["tenNH"] .'</option>';
}
// them row add san pham 
if(isset($_GET["themsanpham"])){
  echo '
  <tr>
  <form method="get" action="index.php">
  <td align="center">idSp</td>
  <td><input type="text" name="tenSp" placeholder="Tên sản phẩm"></td>
  <td><input type="text" name="gia" placeholder="Giá gốc"></td>
  <td class="giasale"><input type="text" name="giaSale" placeholder="Giá Sale"></td>
  <td align="center"><input type="file" name="urlHinh"></td>
  <td align="center">
  <select  name="loaiHang">
    <option  value="khac">Ngành hàng</option>
   '.$sOptionNH.' 
    </select>
  </td>
  <input type="hidden" name="admin" value="admin">
  <input type="hidden" name="c" value="sanpham">
  <input type="hidden" name="a" value="themsanpham">
  <td><input type="submit" value="Thêm"> </td>
  </form>
  </tr>
  ';
}

 $listSp=$M_sanpham->GetListSanPham();
    foreach($listSp as $row){
        ob_start();
        if(isset($_GET["idSp"])&&$_GET["idSp"]==$row["idSp"]){
           
            
            echo '
            <tr>
            <form method="get" action="index.php">
            <td align="center">{idSp}</td>
            <td><input name="tenSp" type="text" value="{tenSp}" ></td>
            <td><input name="gia" type="text" value="{gia}" ></td>
            <td class="giasale"><input name="giaSale" type="text" value="{giaSale}" ></td>
            <td align="center"><input name="urlHinh" type="text" value="{urlHinh}" ></td>
            <td align="center">
            <select value="{loaiHang}" name="loaiHang">
            <option  value="{loaiHang}">{loaiHang}</option>
              <option  value="khac">Ngành hàng</option>
             '.$sOptionNH.' 
              </select>
            </td>
                <input type="hidden" name="admin" value="admin">
                <input type="hidden" name="c" value="sanpham">
                <input type="hidden" name="a" value="suasanpham">
                <input type="hidden" name="idSpSua" value="{idSp}">
            <td><input type="submit" value="Cập Nhật"></td>
            </form>
            </tr>
           
            ';
          
        }else{
?>
     <tr>
     <td align="center">{idSp}</td>
     <td>{tenSp}</td>
     <td><strike>{gia}</strike></td>
     <td class="giasale">{giaSale}</td>
     <td align="center"><img src="public/upload/{urlHinh}" width="40px" height="40px"></td>
     <td align="center">{loaiHang}</td>
     <td><a href="index.php?admin=&c=sanpham&idSp={idSp}">Sữa</a>--
     <a onclick="return confirm('Bạn có chắc muốn xóa');" href="index.php?admin=&c=sanpham&a=xoasanpham&idSp={idSp}">Xóa</a></td>
     </tr>
<?php }
  $s=ob_get_clean();
  $s=str_replace("{idSp}",$row["idSp"],$s);
  $s=str_replace("{tenSp}",$row["tenSp"],$s);
  $s=str_replace("{gia}",$row["gia"],$s);
  $s=str_replace("{giaSale}",$row["giaSale"],$s);
  $s=str_replace("{urlHinh}",$row["urlHinh"],$s);
  $s=str_replace("{loaiHang}",$row["loaiHang"],$s);
  echo $s;
}
 ?>
</table>
</center>
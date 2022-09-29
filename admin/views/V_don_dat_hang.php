
<center><table class="table" border="1px" cellpadding="2px" cellspacing="0px">
<tr >
  <font color="#8d1d1d" size="6">Đơn đặt hàng</font>
</tr>
<tr class="row1">
    <td>Tên sản phẩm (Giá)</td>
    <td>Thành tiền</td>
    <td>Tên người mua</td>
    <td>id User</td>
    <td>Số điện thoại</td>
    <td>Địa chỉ</td>
    <td>Tỉnh / Thành phố</td>
    <td>Quận / Huyện</td>
    <td>Xã / Phường</td>
    <td>Chú thích</td>
</tr>
<?php  
    foreach($listDonHang as $row){
?>
     <tr>
     <td><?php 
       //tên các sản phẩm
        $listTenSp=explode(",", $row["listSp"]);
        $thanhtien=0;
        foreach($listTenSp as $value){ 
          $rowTenSp=$M_dondathang->GetSanPham($value);
          $thanhtien+=$rowTenSp["giaSale"];
          echo $rowTenSp["tenSp"].'(<font color="red">'. $rowTenSp["giaSale"].'</font>)'.'<br>';
        }
     ?></td>
     <td><font color="red"><?php echo $thanhtien  ?></font></td>
     <td><?php echo $row["tenNguoiNhan"]  ?></td>
     <td align="center"><?php echo $row["idUser"]  ?></td>
     <td><?php echo $row["sdt"]  ?></td>
     <td><?php echo $row["diaChi"]  ?></td>
     <td><?php echo $row["tinh"]  ?></td>
     <td><?php echo $row["huyen"]  ?></td>
     <td><?php echo $row["xa"]  ?></td>
     <td><?php echo $row["chuThich"]  ?></td>
     <td><a onclick="return confirm('Bạn có chắc muốn xóa');" href="index.php?admin=&c=dondathang&a=xoadondathang&idDH=<?php echo $row["idDonHang"]  ?>">Xóa</a></td>
     </tr>
<?php 
}
 ?>
</table>
</center>
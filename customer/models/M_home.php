<?php 
   require_once "lib/DB.php";
   class M_home extends DB{
       public function __construct(){
           parent::__construct();
           if(!isset($con)) $this->connect();
       }
       public function GetListNganhHang(){
           $sql=' select * from nganhhang ';
           return $this->get_list($sql);
       }
    
       public function GetListThongBao(){
        $sql=' select * from thongbao ';
        return $this->get_list($sql);
       }

       public function GetListSanPham(){
        $sql='select * from sanpham';
        return $this->get_list($sql);
       }
     
       public function GetListSlider(){
        $sql='select * from slider';
        $row=$this->get_list($sql);
        return $row;
       }
       public function CheckUser($tk,$mk){
        $qr="
          select * from user
          where tk='$tk'
          and mk='$mk'
       ";
        $rs= $this->qr($qr);
        if(mysqli_num_rows($rs)==1){
          $rowqr= mysqli_fetch_array($rs);
          $_SESSION["tk"]=$rowqr["tk"];
          $_SESSION["idUser"]=$rowqr["idUser"];
          $_SESSION["gr"]=$rowqr["gr"];
        }

       }
   }
?>